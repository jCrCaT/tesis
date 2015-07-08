<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;
use Symfony\Component\HttpFoundation\Session\Session;

class HorasController extends Controller
{
    public function admHorasAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        $informacion = array(
            'listado' => 'Horas',
            'tabla' =>  'Horas'
        );
        $horas = new Horas();
        $horasLic = new HorasLic();
        $usuarioEmpresa = $this->getUser();
        $formHorasLic = $this->createForm(new HorasLicType(), $horasLic);
        $form = $this->createForm(new HorasType($usuarioEmpresa), $horas);
        $sendRequestList = $this->get('listar');
        $duracionHoras = $this->get('comprobar');
        $result = $sendRequestList->listarItems($informacion['tabla'], $securityContext ,$usuarioEmpresa);
        $sumaHoras = $duracionHoras->comprobarDuracionActividad($result);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto = $service1->obtenerMisProyectos($usuarioEmpresa);
        
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            $formHorasLic->handleRequest($request);
            
       
            
                if (isset($_POST["salvarHora"]))
                {
                    if($form->isValid()){
                    $solicitud = $this->getRequest();
                    $fechaInicio = new \DateTime($solicitud->request->get('fechaInicio')." ".$solicitud->request->get('horaInicio').":00");
                    $fechaTermino = new \DateTime($solicitud->request->get('fechaTermino')." ".$solicitud->request->get('horaTermino').":00");
                    $id = $duracionHoras->comprobarUltimoId($informacion);
                    $servicio = $this->get('comprobar');
                    $comprobarFecha = $servicio->obtenerDuplicado($fechaInicio, $fechaTermino);
                    if($comprobarFecha > 0){
                        $session = $request->getSession();
                        $this->get('session')->getFlashBag()->add('notice', 'El registro que intenta realizar ya se encuentra registrado');
                        return $this->render('AppMediBundle:Default:horas.html.twig', array(
                        'form'=> $form->createView(),
                        'comprobar' => $comprobarFecha,
                        'formLic' => $formHorasLic->createView(),
                        'listar' => $result, 
                        'informacion' => $informacion, 
                        'modificar' => $horas,
                        'sumahoras' => $sumaHoras,
                        'formHoras' => $formHoras->createView(),
                        'reuniones' => $reuniones,
                        'proyecto' => $proyecto
                    ));
                        
                    }else{
                        $this->get('session')->getFlashBag()->add('notice', 'El registro ha sido guardado correctamente');
                    $parametros = array(
                        'id' => $id,
                        'fechaInicio' => $fechaInicio,
                        'fechaTermino' => $fechaTermino,
                        'actividad' => $form->get('actividad')->getData(),
                        'proyecto' => $form->get('proyecto')->getData(),
                        'profesional' => $this->getUser()
                    );
                    $service = $this->get('addLocation');
                    $service1 = $this->get('comprobar');  
                    $parametros["duracionHora"] = $service1->duracionHora($parametros);  
                    $sending = $service->salvarHora($parametros);
                    
                    }
                }
                    
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
                    return $this->redirect($this->generateUrl('actividad'));
                    
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
                    return $this->render('AppMediBundle:Default:horas.html.twig', array(
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
                
                if (isset($_POST['salvarLicHora'])){
                    $solicitud = $this->getRequest();
                    $fechaInicio = new \DateTime($solicitud->request->get('fechaInicio')." ".$solicitud->request->get('horaLicInicio').":00");
                    $fechaTermino = new \DateTime($solicitud->request->get('fechaTermino')." ".$solicitud->request->get('horaLicTermino').":00");
                    $servicio = $this->get('comprobar');
                    $comprobarFecha = $servicio->obtenerDuplicado($fechaInicio, $fechaTermino);
                    if($comprobarFecha > 0){
                        $session = $request->getSession();
                        $this->get('session')->getFlashBag()->add('notice', 'El registro que intenta realizar ya se encuentra registrado');
                        return $this->render('AppMediBundle:Default:horas.html.twig', array(
                        'form'=> $form->createView(),
                        'comprobar' => $comprobarFecha,
                        'formHorasLic' => $formHorasLic->createView(),
                        'listar' => $result, 
                        'informacion' => $informacion, 
                        'modificar' => $horas,
                        'sumahoras' => $sumaHoras,
                        'formHoras' => $formHoras->createView(),
                        'reuniones' => $reuniones,
                        'proyecto' => $proyecto
                    ));
                        
                    }else{
                    $parametros = array(
                        'requerimiento' => $formHorasLic->get('requerimiento')->getData(),
                        'fechaInicio' => $fechaInicio,
                        'fechaTermino' => $fechaTermino,
                        'profesional' => $this->getUser()
                    );
                    $service1 = $this->get('comprobar');  
                    $parametros["duracionHora"] = $service1->duracionHora($parametros);
                    $service = $this->get('addLocation');       
                    $sending = $service->salvarHoraLic($parametros); 
                    
                    
                    
                }

            }
                
                
           return $this->redirect($this->generateUrl('horas')); 
            
        }
        
        return $this->render('AppMediBundle:Default:horas.html.twig', array(
            'form'=> $form->createView(), 
            'formLic' => $formHorasLic->createView(),
            'listar' => $result, 
            'informacion' => $informacion, 
            'modificar' => $horas,
            'sumahoras' => $sumaHoras,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto
            ));
    }
    

    public function etapaProyectoAction(Request $request){
        $request = $this->get('request');
        $name=$request->request->get('data1');
        $saludos = 'Hola '. $name;
        $array= array("responseCode"=>200,  "greeting"=>$saludos);
        $array=json_encode($array);//jscon encode the array
         return new Response($array,200,array('Content-Type'=>'application/json'));
        
    }
}

