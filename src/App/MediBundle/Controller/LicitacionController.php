<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Requerimiento;
use App\MediBundle\Form\RequerimientoType;
use App\MediBundle\Entity\Licitacion;
use App\MediBundle\Form\LicitacionType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Entity\Proyecto;
use App\MediBundle\Form\ProyectoType;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\Documento;
use App\MediBundle\Form\DocumentoType;
use App\MediBundle\Entity\UserLicitacion;
use App\MediBundle\Form\AsLicitacionType;
use App\MediBundle\Entity\EstadoLicitacion;
use App\MediBundle\Form\EstadoLicitacionType;

class LicitacionController extends Controller
{

    public function admLicitacionAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $informacion = array(
            'listado' => 'Licitaciones',
            'tabla' =>  'Licitacion'
        );
        $documento = new Documento();
        $formDocumento = $this->createForm(new DocumentoType(), $documento);
        $usuarioEmpresa = $this->getUser();
        $licitacion = new Licitacion();
        $form = $this->createForm(new LicitacionType($usuarioEmpresa), $licitacion);
        $profesional = new UserLicitacion();
        $estadoLicitacion = new EstadoLicitacion();
        $formEstadoLicitacion = $this->createForm(new estadoLicitacionType(), $estadoLicitacion);
        $formProfesional = $this->createForm(new AsLicitacionType(), $profesional);
        $requerimiento = new Requerimiento();
        $formRequerimiento = $this->createForm(new RequerimientoType(), $requerimiento);
        $proyecto = new Proyecto();
        $formProyecto = $this->createForm(new ProyectoType(), $proyecto);
        $sendRequestList = $this->get('listar');
        $usuarioEmpresa = $this->getUser();
        $result = $sendRequestList->listarItems($informacion['tabla'], $securityContext, $usuarioEmpresa);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $servicio1 = $this->get('comprobar');
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        $licitacionesTerminadas = $servicio1->comprobarLicitacionesFecha();
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            $formRequerimiento->handleRequest($request);
            $formDocumento->handleRequest($request);
            $formProfesional->handleRequest($request);
            $formProyecto->handleRequest($request);
            $formEstadoLicitacion->handleRequest($request);
       
            
                if (isset($_POST["salvarLicitacion"]) && $form->isValid())
                {
                    
                    $solicitud = $this->getRequest();
                    $user = $this->get('security.context')->getToken()->getUser();
                    $fechaInicio = new \DateTime($solicitud->request->get('fechaInicio'));
                    $fechaTermino = new \DateTime($solicitud->request->get('fechaTermino')." ".$solicitud->request->get('horaTermino').":00");
                    $parametrosEstado = array(
                        'propietario' => 'EstadoLicitacion',
                        'columna' => 'id',
                        'id' => 1
                    );
                    $service = $this->get('listar');
                    $estadoLicitacion = $service->obtenerInformacionAtomica($parametrosEstado);
                    $parametros = array(
                        'nombre' => $form->get('nombre')->getData(),
                        'horasProgramadas' => $form->get('horasProgramadas')->getData(),
                        'fechaInicio' => $fechaInicio,
                        'fechaTermino' => $fechaTermino,
                        'cliente' => $form->get('cliente')->getData(),
                        'status' => $estadoLicitacion
                    );
                    $service = $this->get('addLocation');       
                    $sending = $service->salvarLicitacion($parametros);
                    $parametrosProyecto = array(
                        'nombre' => $form->get('nombre')->getData(),
                        'fechaInicio' => null,
                        'fechaFin' => null,
                        'horasProgramadas' => null,
                        'descripcion' => null,
                        'licitacion' => $sending
                    );
                    $service = $service->salvarProyecto($parametrosProyecto);
                    
                    
                    
                }
                
                if(isset($_POST["salvarRequerimiento"]) && $formRequerimiento->isValid()){
                        $solicitud =$this->getRequest();
                        
                            $parametros = array(
                            'nombre' => $formRequerimiento->get('nombre')->getData(),
                            //'documento' => null,
                            'profesional' => $formRequerimiento->get('profesional')->getData(),
                            'tipoInterno' => 'Licitacion',
                            'tipo' => 'Licitacion',
                            'valorInterno' => $solicitud->request->get('valorRequerimiento')
                        );
                        $dependenciaRequerimiento = array(
                            'propietario' => 'Licitacion',
                            'columna' => 'id',
                            'id' => $solicitud->request->get('valorReunion')
                        );
                        $licitacionRequerimiento = $sendRequestList->obtenerInformacionAtomica($dependenciaRequerimiento);
                        $parametros['licitacion'] = $licitacionRequerimiento;
                        $service = $this->get('addLocation');                         
                        $service->salvarRequerimiento($parametros);
                                               
                    
                    
    
                }
                
                if(isset($_POST['subirDocumento']) && $formDocumento->isValid()){
                    $solicitud =$this->getRequest();
                    $parametros = array(
                        'documento' => $documento,
                        'propietario' => 'Requerimiento',
                        'columna' => 'id',
                        'id' => $solicitud->request->get('valorDocumento')
                        
                    );
                    $objeto = $sendRequestList->obtenerInformacionAtomica($parametros);
                    $service = $this->get('addLocation');
                    $service->salvarDocumento($parametros, $objeto);
                    
                }
                
                if (isset($_POST["eliminarReq"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $parametros = array(
                        'propietario' => 'Requerimiento',
                        'id' => $solicitud->request->get('valorReqEliminar')
                    );
                    $servicio = $this->get('eliminar');
                    $eliminar = $servicio->eliminarItem($parametros);
                    
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
                        'form'=> $form->createView(), 'listar' => $result, 
                        'informacion' => $informacion, 
                        'tipo' => "modificar", 
                        'modificar' => $comprobar ));
                }
                
                if(isset($_POST['modDatosProy']) && $formProyecto->isValid()){
                    
                        $solicitud = $this->getRequest();
                        $parametros = array(
                            'id' => $solicitud->request->get('valorProyecto'),
                            'propietario' => 'Proyecto',
                            'columna' => 'id'
                        );
                        $servicio = $this->get('listar');
                        $Proyecto = $servicio->obtenerInformacionAtomica($parametros);
                        $parametros = array(
                            'id' => $Proyecto,
                            'tipo' => 'proyecto',
                            'superior' => null,
                            'fechaInicio' => new \DateTime($solicitud->request->get('fechaInicio1')),
                            'fechaFin' => new \DateTime($solicitud->request->get('fechaFin1')),
                            'descripcion' => $formProyecto->get('descripcion')->getData(),
                            'horasProgramadas' => $formProyecto->get('horasProgramadas')->getData(),
                            'nombreProyecto' => $formProyecto->get('nombreProyecto')->getData()
                                
                        );
                        $servicio = $this->get('modificar');
                        $servicio->modificarProyecto($parametros);
                    
                }
                
                if (isset($_POST["modificarLicitacion"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorModificar'),
                        'nombre' => $form->get('nombre')->getData(),
                        'descripcion' => $form->get('descripcion')->getData(),
                        'tipo' => $informacion['tabla'],
                        'superior' => null
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    
                    
                }
                
                if (isset($_POST["agregarProfesional"])){
                    $solicitud = $this->getRequest();
                    if($solicitud->request->get('valorTipo') === 'licitacion'){
                    $licitacion = $this->get('listar');
                    $licitacionObjeto = array(
                        'propietario' => 'Licitacion',
                        'columna' => 'id',
                        'id' => $solicitud->request->get('valorLicitacion')
                    );
                    $licitacion1 = $licitacion->obtenerInformacionAtomica($licitacionObjeto);
                    $parametros = array(
                        'tipo' => 'UserLicitacion',
                        'columna' => 'licitacion',
                        'licitacion' => $licitacion1,
                        'area' => $licitacion1->getId(),
                        'profesional' => $formProfesional->get('profesional')->getData(),
                        'horas' => $formProfesional->get('horas')->getData(),
                        'valorHora' => $formProfesional->get('valorHora')->getData()
                    );
                    
                    
                    $servicioComprobar = $this->get('comprobar');
                    $servicioComprobar = $servicioComprobar->ComprobarAsignar($parametros);
                    if($servicioComprobar = 0){
                        $servicio = $this->get('addLocation');
                        $servicio->salvarAsignarLicitacion($parametros);
                                               
                    }
                    }
                    if($solicitud->request->get('valorTipo') === 'proyecto'){
                    $proyecto = $this->get('listar');
                    $proyectoObjeto = array(
                        'propietario' => 'Proyecto',
                        'columna' => 'id',
                        'id' => $solicitud->request->get('valorLicitacion')
                    );
                    $proyecto1 = $proyecto->obtenerInformacionAtomica($proyectoObjeto);
                    $parametros = array(
                        'tipo' => 'UserProyecto',
                        'columna' => 'proyecto',
                        'licitacion' => $proyecto1,
                        'area' => $proyecto1->getId(),
                        'profesional' => $formProfesional->get('profesional')->getData(),
                        'horas' => $formProfesional->get('horas')->getData(),
                        'valorHora' => $formProfesional->get('valorHora')->getData()
                    );
                    
                    
                    $servicioComprobar = $this->get('comprobar');
                    $servicioComprobar = $servicioComprobar->ComprobarAsignar($parametros);
                    $parametros['area'] = $proyecto1;
                    if($servicioComprobar == 0){
                        $servicio = $this->get('addLocation');
                        $servicio->salvarAsignarProyecto($parametros);
                                               
                    }
                                                 
                    }
                }
                
                
            
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();                    
                    $propiedades = array(
                        'id' => $solicitud->request->get('valorEliminarLic'),
                        'propietario' => 'Licitacion'                       
                    );
                    $servicio = $this->get('eliminar');
                    $eliminar = $servicio->eliminarItem($propiedades);
                    
                    
                }
                
                if(isset($_POST["btnRemProf"])){
                    $solicitud = $this->getRequest();
                    if($solicitud->request->get('removerProLic') == 'licitacion'){
                    $propiedades = array(
                        'id' => $solicitud->request->get('eliminarProfLic'),
                        'propietario' => 'UserLicitacion'
                    );
                    $servicio = $this->get('eliminar');
                    $eliminar = $servicio->eliminarItem($propiedades);
                   
                    }
                    if($solicitud->request->get('removerProLic') == 'proyecto'){
                        $propiedades = array(
                        'id' => $solicitud->request->get('eliminarProfLic'),
                        'propietario' => 'UserProyecto'
                    );
                    $servicio = $this->get('eliminar');
                    $eliminar = $servicio->eliminarItem($propiedades);
                                            
                    }
                    
                }
                
                if(isset($_POST["actLicEstado"])){
                    $solicitud = $this->getRequest();
                    switch($formEstadoLicitacion->get('estado')->getData()->getId()){
                        case 1://EN CURSO
                            $parametros = array(
                                'tipo' => 'Licitacion',
                                'columna' => 'id',
                                'id' => $solicitud->request->get('valorLicFin'),
                                'valor' => $formEstadoLicitacion->get('estado')->getData()
                            );   
                            $servicio = $this->get('modificar');
                            $servicio->modificarLicitacion($parametros);
                            break;
                        case 2://EN ESPERA
                            $parametros = array(
                                'tipo' => 'Licitacion',
                                'columna' => 'id',
                                'id' => $solicitud->request->get('valorLicFin'),
                                'valor' => $formEstadoLicitacion->get('estado')->getData()
                            );   
                            $servicio = $this->get('modificar');
                            $servicio->modificarLicitacion($parametros);
                        case 3://APROBADA
                            $parametros = array(
                                'tipo' => 'Licitacion',
                                'columna' => 'id',
                                'id' => $solicitud->request->get('valorLicFin'),
                                'valor' => $formEstadoLicitacion->get('estado')->getData()
                            );   
                            $servicio = $this->get('modificar');
                            $servicio->modificarLicitacion($parametros);
                            $servicio1 = $this->get('listar');
                            $parametrosEstado = array(
                                'propietario' => 'EstadoLicitacion',
                                'columna' => 'id',
                                'id' => 3
                            );
                            $estado = $servicio1->obtenerInformacionAtomica($parametrosEstado);
                            $parametros = array(
                                'propietario' => 'Proyecto',
                                'columna' => 'licitacion',
                                'id' => $solicitud->request->get('valorLicFin'),
                                'valor' => $estado
                            );
                            $servicio->modificarProyectoLic($parametros);
                            return $this->redirect($this->generateUrl('licitacion'));
                        case 4://RECHAZADA
                            $parametros = array(
                                'tipo' => 'Licitacion',
                                'columna' => 'id',
                                'id' => $solicitud->request->get('valorLicFin'),
                                'valor' => $formEstadoLicitacion->get('estado')->getData()
                            );   
                            $servicio = $this->get('modificar');
                            $servicio->modificarLicitacion($parametros);
                            break;
                        case 5://CANCELADA INTERNAMENTE
                            $parametros = array(
                                'tipo' => 'Licitacion',
                                'columna' => 'id',
                                'id' => $solicitud->request->get('valorLicFin'),
                                'valor' => $formEstadoLicitacion->get('estado')->getData()
                            );   
                            $servicio = $this->get('modificar');
                            $servicio->modificarLicitacion($parametros);
                            break;
                        default:
                        break;

                            
                            
                    }
                    
                    
                }
                
            return $this->redirect($this->generateUrl('licitacion'));
        }
        
        return $this->render('AppMediBundle:Default:licitacion1.html.twig', array(
            'licTerm' => $licitacionesTerminadas,
            'form'=> $form->createView(), 
            'listar' => $result, 
            'informacion' => $informacion, 
            'modificar' => $licitacion,
            'formHoras' => $formHoras->createView(),
            'formEstadoLic' => $formEstadoLicitacion->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1,
            'formDocumento' => $formDocumento->createView(),
            'formProfesional' => $formProfesional->createView(),
            'formProyecto' => $formProyecto->createView(),
            'formRequerimiento' => $formRequerimiento->createView()));
        
    }
}

