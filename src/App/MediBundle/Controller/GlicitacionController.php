<?php
namespace App\MediBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\ExcepcionPlazoLicitacion;
use App\MediBundle\Form\PlazoLicitacionType;
use App\MediBundle\Entity\Hito;
use App\MediBundle\Form\HitoType;
use App\MediBundle\Entity\ExcepcionPlazoRequerimiento;
use App\MediBundle\Form\PlazoRequerimientoType;
use App\MediBundle\Entity\EstadoLicitacion;
use App\MediBundle\Form\EstadoLicitacionType;
use App\MediBundle\Entity\UserLicitacion;
use App\MediBundle\Form\AsLicitacionType;
use App\MediBundle\Form\AsignacionEstadoType;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GlicitacionController extends Controller
{
    public function GlicitacionAction($id,Request $request)
    {

      //FORMULARIO PARA AÑADIR EXCEPCIÓN A LICITACIÓN
      $excepcionLicitacion = new ExcepcionPlazoLicitacion();
      $formExcepcionPlazo = $this->createForm(new PlazoLicitacionType(), $excepcionLicitacion);
      //FIN
      //FORMULARIO PARA AÑADIR EXCEPCIÓN A REQUERIMIENTO
      $excepcionRequerimiento = new ExcepcionPlazoRequerimiento();
      $formExcepcionReq = $this->createForm(new PlazoRequerimientoType($id), $excepcionRequerimiento);
      //FIN
      //FORMULARIO PARA HITO DE PROYECTO
      $hito = new Hito();
      $formHito = $this->createForm(new HitoType(), $hito);
      //FIN
      //MODIFICAR ESTADO DE LICITACIÓN
        $estadoLicitacion = new EstadoLicitacion();
        $formEstadoLicitacion = $this->createForm(new estadoLicitacionType(), $estadoLicitacion);
      //FIN
      //ASIGNAR PROFESIONAL A LICITACIÓN//
        $asignarlicitacion = new UserLicitacion();
        $formAsLicitacion = $this->createForm(new AsLicitacionType($this->getDoctrine()->getManager()), $asignarlicitacion);
        //FIN  
        //ESTADO DE HITOS Y salvarEtapaAsignacion
        $formEstado = $this->createForm(new AsignacionEstadoType());
        //FIN



        $informacion = array(
                        'id' => $id,
                        'columna' => 'id',
                        'propietario' => 'Licitacion' 
                    );
        $servicio = $this->get('listar');
        $licitacion = $servicio->obtenerInformacionAtomica($informacion);

        if($request->isMethod('POST')){
          $formExcepcionPlazo->handleRequest($request);
          $formExcepcionReq->handleRequest($request);
          $formHito->handleRequest($request);
          $formAsLicitacion->handleRequest($request);
          $formEstado->handleRequest($request);

          if(isset($_POST["agregarProfesional"])){
                 $solicitud = $this->getRequest();
                 $fechaInicio = new \DateTime($solicitud->request->get('fechaInicio').' 00:00:00');
                 $fechaTermino = new \DateTime($solicitud->request->get('fechaTermino').' 00:00:00');
                    $parametros = array(
                        'profesional' => $formAsLicitacion->get('profesional')->getData(),
                        'horas' => $formAsLicitacion->get('horas')->getData(),
                        'tipoAsignacion' => 'L',
                        'tipo' => 'UserLicitacion',
                        'columna' => 'licitacion',
                        'ambito' => 'GAP',
                        'valorHora' => $formAsLicitacion->get('valorHora')->getData(),
                        'area' => $licitacion,
                        'fechaInicio' => $fechaInicio,
                        'fechaTermino' => $fechaTermino,
                        'licitacion' => $licitacion
                    );
                    $service1 = $this->get('comprobar');
                    $comprobar = $service1->comprobarAsignar($parametros);
                    if($comprobar == 0){
                    $service = $this->get('addLocation');
                    $service->salvarAsignarLicitacion($parametros);
                    }
                 
             }

          if (isset($_POST["salvarExcepcionP"]))
                {
                    $solicitud = $this->getRequest();
                    $servicio = $this->get('listar');
                    $servicio1 = $this->get('addLocation');
                    $servicio2 = $this->get('modificar');
                    $parametrosProyecto = array(
                        'id' => $licitacion,
                        'columna' => 'id',
                        'propietario' => 'Licitacion'                                           
                    );
                    $proyectoEx = $servicio->obtenerInformacionAtomica($parametrosProyecto);
                    $fechaIngreso = new \DateTime();
                    $parametros = array(
                        'horas' => $formExcepcionPlazo->get('horas')->getData(),
                        'fechaNueva' => new \DateTime($solicitud->request->get('fechaExLic')." 00:00:00"),
                        'fechaIngreso' => $fechaIngreso,
                        'fechaAnterior' => $proyectoEx->getFechaTermino(),
                        'profesionalMod' => $this->getUser(),
                        'accion' => $formExcepcionPlazo->get('accion')->getData(),
                        'proyecto' => $proyectoEx,
                        'descripcion' => $formExcepcionPlazo->get('descripcion')->getData()
                    );
                    $servicio2->modificarPlazoLicitacion($parametrosProyecto, $parametros);
                    $servicio1->salvarExcepcionLicitacionPlazo($parametros);
                }

                if (isset($_POST["salvarExcepcionR"]))
                {
                     $solicitud = $this->getRequest();
                     $servicio = $this->get('listar');
                     $servicio1 = $this->get('addLocation');
                     $servicio2 = $this->get('modificar');
                     $parametrosEtapa = array(
                         'id' => $formExcepcionReq->get('requerimiento')->getData(),
                         'columna' => 'id',
                         'propietario' => 'Requerimiento'
                     );
                     $requerimientoEx = $servicio->obtenerInformacionAtomica($parametrosEtapa);
                     $fechaIngreso = new \DateTime();
                     $parametros = array(
                         'fechaNuevaInicio' => new \DateTime($solicitud->request->get('fechaInicioReq')." 00:00:00"),
                         'fechaNuevaTermino' => new \DateTime($solicitud->request->get('fechaTerminoReq')." 00:00:00"),
                         //'fechaNuevaInicio' => new \DateTime('2015-06-20 00:00:00'),
                         //'fechaNuevaTermino' => new \DateTime('2015-06-21 00:00:00'),
                         'fechaIngreso' => $fechaIngreso,
                         'profesional' => $this->getUser(),
                         'requerimiento' => $requerimientoEx,
                         'descripcion' => $formExcepcionReq->get('descripcion')->getData(),
                         'horas' => $formExcepcionReq->get('horas')->getData(),
                         'accion' => $formExcepcionReq->get('accion')->getData()
                     );
                     $servicio2->modificarPlazoRequerimiento($parametrosEtapa, $parametros);
                     $servicio1->salvarExcepcionRequerimientoPlazo($parametros);
                     
                 }

                 if(isset($_POST["salvarHito"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'nombre' => $formHito->get('nombre')->getData(),
                        'fecha' => new \DateTime($solicitud->request->get('fechaInicio')),
                        'descripcion' => $formHito->get('descripcion')->getData()                        
                    );
                    $servicio = $this->get('addLocation');
                    $informacion = array(
                        'id' => $solicitud->request->get('valorHito'),
                        'columna' => 'id',
                        'propietario' => 'Licitacion' 
                    );
                    $servicioBusqueda = $this->get('listar');
                    $licitacion = $servicioBusqueda->obtenerInformacionAtomica($informacion);
                    $parametros["licitacion"] = $licitacion;
                    $servicio->salvarHitoLic($parametros);
                    
                    
                }

                if(isset($_POST["salvarEstadoEtapa"])){
                  $solicitud = $this->getRequest();
                  $parametros = array(
                    'etapa' => $formEstado->get('estado')->getData(),
                    'columna' => 'id',
                    'id' => $solicitud->request->get('valorEtapa')
                    );
                  switch ($solicitud->request->get('aaa')) {
                    case 1:
                        $parametros["propietario"] = 'Requerimiento';
                      break;
                    case 2:
                        $parametros["propietario"] = 'HitoLic';
                        break;
                    default:
                      # code...
                      break;
                  }
                    $service = $this->get('modificar');
                    $service->modificarEstado($parametros);
                }

                return $this->redirect($this->generateUrl('glicitacion', array('id' => $licitacion->getId()))); 
        }
        

    
      return $this->render('AppMediBundle:Default:glicitacion.html.twig', array(
          'licitacion' => $licitacion,
          'formEstado' => $formEstado->createView(),
          'formExcepcionPlazo' => $formExcepcionPlazo->createView(),
          'formExcepcionReq' => $formExcepcionReq->createView(),
          'formHito' => $formHito->createView(),
          'formEstadoLic' => $formEstadoLicitacion->createView(),
          'formProfesional' => $formAsLicitacion->createView()
      )); 
    }
}

