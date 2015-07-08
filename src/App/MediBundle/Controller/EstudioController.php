<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Estudio;
use App\MediBundle\Form\EstudioType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;

class EstudioController extends Controller
{
    public function admEstudioAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        $informacion = array(
            'listado' => 'Estudios',
            'tabla' =>  'Estudio'
        );
        $estudio = new Estudio();
        $form = $this->createForm(new EstudioType(), $estudio);
        $servicio1 = $this->get('comprobar');
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
            
       
            
                if (isset($_POST["salvarEstudio"]))
                {
                    
                    $solicitud = $this->getRequest();
                    $fechaInicio = new \DateTime($solicitud->request->get('anoInicio'));
                    $fechaFin = new \DateTime($solicitud->request->get('anoTermino'));    
                    $parametros = array(
                        'anoInicio' => $fechaInicio,
                        'anoTermino' => $fechaFin,
                        'profesional' => $form->get('profesional')->getData(),
                        'descripcion' => $form->get('descripcion')->getData(),
                        'institucion' => $form->get('institucion')->getData(),
                    );
                    $service = $this->get('addLocation');       
                    $service->salvarEstudio($parametros);
                    
                    
                    
                }
                
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'inferior' => $informacion['inferior'],
                        'propietario' => $informacion['tabla']                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio->eliminarItem($propiedades);
                    
                }
                
                if (isset($_POST["modificar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $parametros = array(
                        'tipo' => 'Area',
                        'id' => $id,
                    );
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarNombre($parametros);
                    return $this->render('AppMediBundle:Default:actividad.html.twig', array(
                        'form'=> $form->createView(), 'listar' => $result, 
                        'informacion' => $informacion, 
                        'tipo' => "modificar", 
                        'modificar' => $comprobar ));
                }
                
                if (isset($_POST["modificarActividad"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorModificar'),
                        'nombre' => $form->get('nombre')->getData(),
                        'descripcion' => $form->get('descripcion')->getData(),
                        'tipo' => $informacion['tabla'],
                        'superior' => null
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    
                }

                return $this->redirect($this->generateUrl('estudio'));
                
                
            
            
        }
        
        return $this->render('AppMediBundle:Default:estudio.html.twig', array(
            'form'=> $form->createView(), 
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $estudio,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1));
    }
}

