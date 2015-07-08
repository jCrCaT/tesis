<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Region;
use App\MediBundle\Form\RegionType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;

class RegionController extends Controller
{
    public function admRegionAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $informacion = array(
            'listado' => 'Regiones',
            'tabla' =>  'Region',
            'inferior' => 'Ciudad'
        );
        $buscar = 'Region';
        $region = new Region();
        $form = $this->createForm(new RegionType(), $region);
        $formRegion = $this->createForm(new RegionType(), $region);
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
            $formRegion->handleRequest($request);
            
                if(isset($_POST["salvarRegion"]))
                {
                    $parametros = array(
                        'tipo' => $buscar,
                        'nombre' => $form->get('nombre')->getData(),
                        'dependencia' => $form->get('superior')->getData()
                    );
                    $service = $this->get('addLocation');       
                    $sending = $service->salvarLocacion($parametros);                 
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
                    $comprobar = $servicio1->comprobarDependenciaUbicacion($propiedades);
                    $eliminar = $servicio->eliminarItem($propiedades);
                    return $this->redirect($this->generateUrl('region'));
                    
                }
                
                if (isset($_POST["guardarCambios"])){
                    if($formRegion->isValid()){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorIdentificador'),
                        'nombre' => $formRegion->get('nombre')->getData(),
                        'superior' => $formRegion->get('superior')->getData(),
                        'tipo' => 'Region'                       
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    return $this->redirect($this->generateUrl('region'));
                    }
            
                }
                
            
            
        }
        
        return $this->render('AppMediBundle:Default:region.html.twig', array(
            'form'=> $form->createView(), 
            'formRegion'=> $formRegion->createView(), 
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $region,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1));
    }
}

