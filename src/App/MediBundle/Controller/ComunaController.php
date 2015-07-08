<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Comuna;
use App\MediBundle\Form\ComunaType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;

class ComunaController extends Controller
{
    public function admComunaAction(Request $request)
    {
        $informacion = array(
            'listado' => 'Comunas',
            'tabla' =>  'Comuna',
            'inferior' => 'noone'
        );
        $comuna = new Comuna();
        $form = $this->createForm(new ComunaType(), $comuna);
        $formComuna = $this->createForm(new ComunaType(), $comuna);
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems($informacion['tabla'], $securityContext ,$usuarioEmpresa);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType(), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            $formComuna->handleRequest($request);
            
       
            
                if(isset($_POST["salvarComuna"]))
                {
                    $parametros = array(
                        'tipo' => $informacion['tabla'],
                        'nombre' => $form->get('nombre')->getData(),
                        'dependencia' => $form->get('superior')->getData()
                    );
                    $service = $this->get('addLocation');       
                    $service->salvarLocacion($parametros);
                    
                    
                    
                } 
                
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'inferior' => $informacion['inferior'],
                        'propietario' => $buscar                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio1 = $this->get('comprobar');
                    $servicio1->comprobarDependenciaUbicacion($propiedades);
                    $servicio->eliminarItem($propiedades);
                    
                    
                }
                
                if (isset($_POST["guardarCambios"]) && $formComuna->isValid()){
                    
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorIdentificador'),
                        'nombre' => $formComuna->get('nombre')->getData(),
                        'superior' => $formComuna->get('superior')->getData(),
                        'tipo' => 'Comuna'                       
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    
                    
            
                }

                return $this->redirect($this->generateUrl('comuna'));
            
            
        }
        
        return $this->render('AppMediBundle:Default:comuna.html.twig', array(
            'form'=> $form->createView(), 
            'formComuna' => $formComuna->createView(),
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $comuna,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1));
    }
}

