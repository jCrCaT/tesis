<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Minuta;
use App\MediBundle\Form\MinutaType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;

class MinutaController extends Controller
{
    public function admMinutaAction(Request $request, $key)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $informacion = array(
            'propietario' => 'Reunion',
            'columna' =>  'id',
            'id' =>  $key,
        );
        $minutas = array(
            'propietario' => 'Minuta',
            'columna' =>  'reunion',
            'id' =>  $key,
        );        
        $minuta = new Minuta();
        $horasIndex = new Horas();
        $horasLicIndex = new HorasLic();
        $usuarioEmpresa = $this->getUser();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex); 
        $formHorasLic = $this->createForm(new HorasLicType($usuarioEmpresa), $horasLicIndex);       
        $form = $this->createForm(new MinutaType(), $minuta);
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->obtenerFilaUnica($informacion);
        $result1 = $sendRequestList->obtenerInformacion($minutas);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            
       
            
                if (isset($_POST["salvarMinuta"]))
                {
                    
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'descripcion' => $form->get('descripcion')->getData(),
                        'reunion' => $result,
                        'profesional' => $form->get('profesional')->getData()
                    );
                    $service = $this->get('addLocation');       
                    $sending = $service->salvarMinuta($parametros);
                    return $this->redirect($this->generateUrl('minuta', array(
                        'key' => $key)));

                    
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
                    
                }
                
                if (isset($_POST["modificar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $parametros = array(
                        'tipo' => 'Reunion',
                        'id' => $id,
                    );
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarNombre($parametros);
                    return $this->render('AppMediBundle:Default:reunion.html.twig', array(
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
                    $modificar = $servicio->modificarItem($parametros);
                    
                    
                }

                return $this->redirect($this->generateUrl('minuta'));
                
                
            
            
        }
        
        return $this->render('AppMediBundle:Default:minuta.html.twig', array(
            'form'=> $form->createView(), 
            'formHorasLic' => $formHorasLic->createView(),
            'informacion' => $informacion, 
            'modificar' => $minuta,
            'tipo' => "crear",
            'listar' => $result,
            'minutas' => $result1,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1
            ));
    }
}

