<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\TipoEstudio;
use App\MediBundle\Form\TipoEstudioType;

class TipoEstudioController extends Controller
{
    public function admTipoEstudioAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $informacion = array(
            'listado' => 'Tipos de estudio',
            'tabla' =>  'TipoEstudio'
        );
        $tipoestudio = new TipoEstudio();
        $form = $this->createForm(new TipoEstudioType(), $tipoestudio);       
        $sendRequestList = $this->get('listar');
        $usuarioEmpresa = null;
        $result = $sendRequestList->listarItems($informacion['tabla'], $usuarioEmpresa);
        
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);       
            
                if(isset($_POST["salvarTipoEstudio"]))
                {
                    if($form->isValid())
                    {
                    $parametros = array(
                        'tipo' => $informacion['tabla'],
                        'nombre' => $form->get('nombre')->getData(),
                        'descripcion' => $form->get('descripcion')->getData()
                    );                     
                    $service = $this->get('addLocation');       
                    $sending = $service->salvarTipoEstudio($parametros);
                    return $this->redirect($this->generateUrl('tipoestudio'));
                    }
                    
                }
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'inferior' => "noone",
                        'propietario' => $informacion['tabla']                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarDependenciaUbicacion($propiedades);
                    $eliminar = $servicio->eliminarItem($propiedades);
                    return $this->redirect($this->generateUrl('tipoestudio'));
                    
                }
                
                if (isset($_POST["modificar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $parametros = array(
                        'tipo' => $informacion['tabla'],
                        'id' => $id,
                    );
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarNombre($parametros);
                    return $this->render('AppMediBundle:Default:tipoestudio.html.twig', array(
                        'form'=> $form->createView(), 'listar' => $result, 
                        'informacion' => $informacion, 
                        'tipo' => "modificar", 
                        'modificar' => $comprobar ));
                }
                
                if (isset($_POST["modificarPais"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorModificar'),
                        'nombre' => $form->get('nombre')->getData(),
                        'tipo' => 'TipoEstudio',
                        'superior' => null                        
                    );
                    $servicio = $this->get('modificar');
                    $modificar = $servicio->modificarItem($parametros);
                    return $this->redirect($this->generateUrl('tipoestudio'));
                    
                }
            
            
        }
        
        return $this->render('AppMediBundle:Default:tipoestudio.html.twig', array(
            'form'=> $form->createView(), 
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $tipoestudio));
    }
}

