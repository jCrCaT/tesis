<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\UserArea;
use App\MediBundle\Form\AsAreaType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;

class AsAreaController extends Controller
{
    public function admAsAreaAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        $informacion = array(
            'listado' => 'Areas',
            'tabla' =>  'UserArea',
        );
        $tabla = 'UserArea';
        $asignararea = new UserArea();
        $form = $this->createForm(new AsAreaType($this->getDoctrine()->getManager()), $asignararea);
        $servicio1 = $this->get('comprobar');
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems($tabla, $securityContext, $usuarioEmpresa);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType(), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto = $service1->obtenerMisProyectos($usuarioEmpresa);        
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            
       
            
                if (isset($_POST["asignarArea"]))
                {
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'tipo' => $tabla,
                        'area' => $form->get('area')->getData(),
                        'profesional' => $form->get('profesional')->getData(),
                        'columna' => 'area'
                    );
                    $service1 = $this->get('comprobar');
                    $comprobar = $service1->comprobarAsignar($parametros);
                    if($comprobar == 0){
                    $service = $this->get('addLocation');
                    $service->salvarAsignarArea($parametros);
                    }
                    
                    
                }
                
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'propietario' => $tabla,
                        'area' => $solicitud->request->get('area'),
                        'empleado' => $solicitud->request->get('empleado')
                        
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
                    return $this->render('AppMediBundle:Default:area.html.twig', array(
                        'form'=> $form->createView(), 'listar' => $result, 
                        'informacion' => $informacion, 
                        'tipo' => "modificar", 
                        'modificar' => $comprobar ));
                }
                
                if (isset($_POST["modificarArea"])){
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
                
                return $this->redirect($this->generateUrl('asignararea'));
                
            
            
        }
        
        return $this->render('AppMediBundle:Default:userarea.html.twig', array(
            'form'=> $form->createView(), 
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear",
            'modificar' => "hola",
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto));
    }
}

