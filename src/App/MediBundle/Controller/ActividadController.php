<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Actividad;
use App\MediBundle\Form\ActividadType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\Documento;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;

class ActividadController extends Controller
{

    public function admActividadAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        $informacion = array(
            'listado' => 'Actividades',
            'tabla' =>  'Actividad'
        );
        $tabla = 'Actividad';
        $actividad = new Actividad();
        $horasLicIndex = new HorasLic();
        $form = $this->createForm(new ActividadType(), $actividad);
        $servicio1 = $this->get('comprobar');
        $sendRequestList = $this->get('listar');
        $formHorasLic = $this->createForm(new HorasLicType($usuarioEmpresa), $horasLicIndex);
        $usuarioEmpresa = $this->getUser();
        $result = $sendRequestList->listarItems($tabla, $securityContext, $usuarioEmpresa);
        
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
        
            
       
            
                if (isset($_POST["salvarActividad"]) && $form->isValid())
                {
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'nombre' => $form->get('nombre')->getData(),
                        'descripcion' => $form->get('descripcion')->getData()
                    );
                    $service = $this->get('addLocation');       
                    $service->salvarActividad($parametros);
                    
                    
                    
                }
                
                
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'propietario' => $tabla                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio->eliminarItem($propiedades);
                    
                }
                
                if (isset($_POST["modificar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $parametros = array(
                        'tipo' => 'Actividad',
                        'id' => $id,
                    );
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarNombre($parametros);
                    return $this->render('AppMediBundle:Default:actividad.html.twig', array(
                        'form'=> $form->createView(), 
                        'listar' => $result, 
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
                        'tipo' => $tabla,
                        'superior' => null
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    
                }
                
                return $this->redirect($this->generateUrl('actividad'));
                
            
            
        }
        
        return $this->render('AppMediBundle:Default:actividad.html.twig', array(
            'form'=> $form->createView(), 
            'formHorasLic' => $formHorasLic->createView(),
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $actividad,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1,
           ));
    }
}

