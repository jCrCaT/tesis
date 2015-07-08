<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Ciudad;
use App\MediBundle\Form\CiudadType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;

class CiudadController extends Controller
{
    public function admCiudadAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        $informacion = array(
            'listado' => 'Ciudades',
            'tabla' =>  'Ciudad',
            'inferior' => 'Comuna'
        );
        $tabla = 'Ciudad';
        $ciudad = new Ciudad();
        $ciudad1 = new Ciudad();
        $form = $this->createForm(new CiudadType(), $ciudad);
        $formCiudad = $this->createForm(new CiudadType(), $ciudad1);
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems($tabla, $securityContext ,$usuarioEmpresa);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);        
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            $formCiudad->handleRequest($request);
            
       
            
                if(isset($_POST["salvarCiudad"]))
                {
                    $parametros = array(
                        'tipo' => $tabla,
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
                        'propietario' => $tabla                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio1 = $this->get('comprobar');
                    $servicio1->comprobarDependenciaUbicacion($propiedades);
                    $servicio->eliminarItem($propiedades);
                    
                }
                
                
                if (isset($_POST["guardarCambios"]) && $formCiudad->isValid()){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorIdentificador'),
                        'nombre' => $formCiudad->get('nombre')->getData(),
                        'superior' => $formCiudad->get('superior')->getData(),
                        'tipo' => 'Ciudad'                       
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    
            
                }

                return $this->redirect($this->generateUrl('ciudad'));
            
            
        }
        
        return $this->render('AppMediBundle:Default:ciudad.html.twig', array(
            'form'=> $form->createView(), 
            'formCiudad' => $formCiudad->createView(),
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $ciudad,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1));
    }
}

