<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Rango;
use App\MediBundle\Form\RangoType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;

class RangoAdmController extends Controller
{
    public function admRangoAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $informacion = array(
            'listado' => 'Rangos',
            'tabla' =>  'Rango'
        );
        $rango = new Rango();
        $form = $this->createForm(new RangoType(), $rango);
        $formRango = $this->createForm(new RangoType(), $rango);
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems($informacion['tabla'], $securityContext ,$usuarioEmpresa);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request); 
            $formRango->handleRequest($request); 
            
                if (isset($_POST["salvarRango"]))
                {
                    $parametros = array(
                        'tipo' => $informacion['tabla'],
                        'nombre' => $form->get('name')->getData(),
                        'role' => $form->get('role')->getData(),
                        'dependencia' => 'noone'
                    );                     
                    $service = $this->get('addLocation');       
                    $sending = $service->salvarRango($parametros);
                    return $this->redirect($this->generateUrl('rango'));
                    
                }
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'propietario' => $informacion['tabla']                        
                    );
                    $servicio = $this->get('eliminar');
                    $eliminar = $servicio->eliminarItem($propiedades);
                    return $this->redirect($this->generateUrl('rango'));
                    
                }
                
                if (filter_input(INPUT_POST, 'guardarCambios')){
                    if($formRango->isValid()){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorIdentificador'),
                        'nombre' => $formRango->get('name')->getData(),
                        'role' => $formRango->get('role')->getData(),
                        'tipo' => 'Rango',
                        'superior' => null
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarRango($parametros);
                    return $this->redirect($this->generateUrl('rango'));
                    }
            
                }
            
            
        }
        
        return $this->render('AppMediBundle:Default:rango.html.twig', array(
            'form'=> $form->createView(), 
            'formRango'=> $formRango->createView(), 
            'listar' => $result, 
            'informacion' => $informacion,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1));
    }
}

