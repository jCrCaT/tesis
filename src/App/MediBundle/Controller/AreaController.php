<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Area;
use App\MediBundle\Form\AreaType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;

class AreaController extends Controller
{
    public function admAreaAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        $informacion = array(
            'listado' => 'Areas',
            'tabla' =>  'Area',
            'inferior' => 'Comuna'
        );
        $tabla = 'Area';
        $servicio1 = $this->get('comprobar');
        $area = new Area();
        $form = $this->createForm(new AreaType(), $area);
        $formArea = $this->createForm(new AreaType(), $area);
        $horasLicIndex = new HorasLic();
        $formHorasLic = $this->createForm(new HorasLicType($usuarioEmpresa), $horasLicIndex);
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems($tabla, $securityContext, $usuarioEmpresa);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto = $service1->obtenerMisProyectos($usuarioEmpresa);
        
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            $formArea->handleRequest($request);
            
       
            
                if (isset($_POST["salvarArea"]) && $form->isValid())
                {
                    $user = $this->get('security.context')->getToken()->getUser();
                    $userEmpresa = $user->getEmpresa();
                    $parametros = array(
                        'tipo' => $tabla,
                        'nombre' => $form->get('nombre')->getData(),
                        'descripcion' => $form->get('descripcion')->getData(),
                        'userEmpresa' => $userEmpresa
                    );
                    $service = $this->get('addLocation');       
                    $service->salvarArea($parametros);
                    
                    
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
                
                if (isset($_POST["guardarCambios"]) && $formArea->isValid()){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorIdentificador'),
                        'columna' => 'id',
                        'propietario' => 'Area'                                           
                    );
                    $servicio = $this->get('listar');
                    $areaEliminar = $servicio->obtenerInformacionAtomica($parametros);
                    
                    $parametros = array(
                        'id' => $areaEliminar,
                        'nombre' => $formArea->get('nombre')->getData(),
                        'descripcion' => $formArea->get('descripcion')->getData(),
                        'tipo' => 'Area',
                        'superior' => null                        
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    
                
                    }

                    return $this->redirect($this->generateUrl('area'));
                
                
            
            
        }
        
        return $this->render('AppMediBundle:Default:area.html.twig', array(
            'form'=> $form->createView(), 
            'formHorasLic' => $formHorasLic->createView(),
            'formArea' => $formArea->createView(),
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $area,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto));
    }
}

