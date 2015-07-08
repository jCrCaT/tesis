<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Reunion;
use App\MediBundle\Form\ReunionType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\User1;
use App\MediBundle\Form\ProfesionalType;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;

class ReunionController extends Controller
{
    public function admReunionAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $informacion = array(
            'listado' => 'Reuniones',
            'tabla' =>  'Reunion'
        );
        $usuarioEmpresa = $this->getUser();
        $reunion = new Reunion();
        $horasIndex = new Horas();
        $profesional = new User1();
        $horasLicIndex = new HorasLic();
        $usuarioEmpresa = $this->getUser();
        $formProfesional = $this->createForm(new ProfesionalType(), $profesional);
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $formHorasLic = $this->createForm(new HorasLicType($usuarioEmpresa), $horasLicIndex);
        $form = $this->createForm(new ReunionType(), $reunion);
        $sendRequestList = $this->get('listar');
        $service1 = $this->get('grafico');
        $proyecto = $service1->obtenerMisProyectos($usuarioEmpresa);
        $result = $sendRequestList->listarItems($informacion['tabla'], $securityContext ,$usuarioEmpresa);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            $formProfesional->handleRequest($request);
            
       
            
                if (isset($_POST["salvarReunion"]))
                {
                    if($form->isValid()){
                    $solicitud = $this->getRequest();
                    $fechaInicio = new \DateTime($solicitud->request->get('fechaInicio')." ".$solicitud->request->get('horaInicio').":00");
                    $parametros = array(
                        'fechaInicio' => $fechaInicio,
                        'fechaFin' => date('dd-mm-yyyy H:i:s'),
                        'cliente' => $form->get('cliente')->getData()
                    );
                    $comprobar = $this->get('comprobar');
                    $recibir = $comprobar->compararFecha($parametros);
    
                    if($recibir == -1){
                        $hola = 'hola';
                        $service = $this->get('addLocation');       
                        $sending = $service->salvarReunion($parametros);
                    return $this->redirect($this->generateUrl('reunion', array('status' => 'success')));
                        
                    }else{
                        $hola = 'hola1';
                        return $this->render('AppMediBundle:Default:reunion.html.twig', array(
            'form'=> $form->createView(), 
            'fechaInicio' => $parametros['fechaInicio'],
            'fechaFin' => $parametros['fechaFin'],
            'hola' => $hola,
            'formHoras' => $formHoras->createView(),
            'formProfesional' => $formProfesional->createView(),
            'listar' => $result, 
            'informacion' => $informacion, 
            'modificar' => $reunion,
            'reuniones' => $reuniones,
            'tipo' => "crear",
            'proyecto' => $proyecto
            ));                       
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
                    return $this->redirect($this->generateUrl('reunion'));
                    
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
                    return $this->redirect($this->generateUrl('horas'));
                    
                }
                
                
                if(isset($_POST['minuta'])){
                    $solicitud = $this->getRequest();
                    return $this->redirect($this->generateUrl('minuta', array(
                        'key' => $solicitud->request->get('valorEliminar')
                    )));
                }
                
                if(isset($_POST['agregarProfesional'])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'tipoInterno' => 'Reunion',
                        'valorInterno' => $solicitud->request->get('valorReunion'),
                        'dependencia' => $formProfesional->get('psnombre')->getData()
                        
                    );
                    
                    $servicio = $this->get('modificar');
                    $modificar = $servicio->modificarProfReunion($parametros);
                    return $this->redirect($this->generateUrl('reunion'));                   
                    
                }
                
                if(isset($_POST['remProfReu'])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'tipoExterno' => 'User1',
                        'tipoInterno' => 'Reunion',
                        'valorInterno' => $solicitud->request->get('valorEliminar'),
                        'valorExterno' => $solicitud->request->get('profReuRem')
                    );
                    $servicio = $this->get('eliminar');
                    $eliminar = $servicio->eliminarProfesionalReunion($parametros);
                    return $this->redirect($this->generateUrl('reunion')); 
                }
                
                
                
            
            
        }
        
        return $this->render('AppMediBundle:Default:reunion.html.twig', array(
            'form'=> $form->createView(), 
            'formHoras' => $formHoras->createView(),
            'formHorasLic' => $formHorasLic->createView(),
            'formProfesional' => $formProfesional->createView(),
            'listar' => $result, 
            'informacion' => $informacion, 
            'modificar' => $reunion,
            'reuniones' => $reuniones,
            'tipo' => "crear",
            'proyecto' => $proyecto
            ));
    }
}

