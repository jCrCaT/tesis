<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\UserProyecto;
use App\MediBundle\Form\AsProyectoType;

class AsProyectoController extends Controller
{
    public function admAsProyectoAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        $informacion = array(
            'listado' => 'Asignación de proyectos',
            'tabla' =>  'UserProyecto',
        );
        $tabla = 'UserProyecto';
        $asignararea = new UserProyecto();
        $form = $this->createForm(new AsProyectoType($this->getDoctrine()->getManager()), $asignararea);
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems($tabla, $securityContext ,$usuarioEmpresa);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            
       
            
                if (isset($_POST["asignarProyecto"]))
                {
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'tipo' => $tabla,
                        'area' => $form->get('proyecto')->getData(),
                        'profesional' => $form->get('profesional')->getData(),
                        'horas' => $form->get('horas')->getData(),
                        'columna' => 'proyecto',
                        'tipoAsignacion' => 'P',
                        'valorHora' => $form->get('valorHora')->getData()
                    );
                    $service1 = $this->get('comprobar');
                    $comprobar = $service1->comprobarAsignar($parametros);
                    if($comprobar == 0){
                    $service = $this->get('addLocation');
                    $service->salvarAsignarProyecto($parametros);
                    }
                    
                    
                }
                
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'propietario' => $tabla,
                        'area' => $solicitud->request->get('area'),
                        'profesional' => $solicitud->request->get('profesional')
                        
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

                return $this->redirect($this->generateUrl('asignarproyecto'));
                
                
            
            
        }
        
        return $this->render('AppMediBundle:Default:userproyecto.html.twig', array(
            'form'=> $form->createView(), 
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear",
            'modificar' => "hola"));
    }
}

