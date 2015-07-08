<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\UserProyecto;
use App\MediBundle\Form\AsProyectoType;
use App\MediBundle\Form\EtapaIEProyectoType;
use App\MediBundle\Entity\EtapaProyecto;
use App\MediBundle\Entity\Hito;
use App\MediBundle\Form\HitoType;
use App\MediBundle\Entity\AsignacionEtapa;
use App\MediBundle\Form\EtapaProyectoType;
use App\MediBundle\Form\EtapaEProyectoType;
use App\MediBundle\Entity\ExcepcionPlazoProyecto;
use App\MediBundle\Form\PlazoProyectoType;
use App\MediBundle\Entity\EstadoAcciones;
use App\MediBundle\Form\AsignacionEstadoType;


class GproyectoController extends Controller
{
    public function GproyectoAction($id, Request $request)
    {
        $etapaProyecto = new AsignacionEtapa();
        $formEtapaProyecto = $this->createForm(new EtapaIEProyectoType($id), $etapaProyecto);
        //FORMULARIO PARA CREAR NUEVA ETAPA
        $etapaProyecto = new EtapaProyecto();
        $formNuevaEtapa = $this->createForm(new EtapaProyectoType(), $etapaProyecto);
        //FIN
        //FORMULARIO PARA ETAPA EXISTENTE
        $etapaEProyecto = new EtapaProyecto();
        $formEtapaE = $this->createForm(new EtapaEProyectoType(), $etapaEProyecto);
        //FIN
        //FORMULARIO PARA EXCEPCIÓN DE PROYECTO
        $excepcionProyecto = new ExcepcionPlazoProyecto();
        $formExcepcionPlazo = $this->createForm(new PlazoProyectoType(), $excepcionProyecto);
        //FIN
        //FORMULARIO PARA HITO DE PROYECTO
        $hito = new Hito();
        $formHito = $this->createForm(new HitoType(), $hito);
        //FIN
        //ASIGNAR PROFESIONAL A PROYECTO//
        $asignararea = new UserProyecto();
        $formAsProyecto = $this->createForm(new AsProyectoType($this->getDoctrine()->getManager()), $asignararea);
        $formAsProyecto->remove('proyecto');
        //FIN
        //ESTADO DE HITOS Y salvarEtapaAsignacion
        $formEstadoEtapa = $this->createForm(new AsignacionEstadoType());
        //FIN
        $informacion = array(
                        'id' => $id,
                        'columna' => 'id',
                        'propietario' => 'Proyecto',
                        'dw' => 'FtAvanceProyectoProfesional' 
                    );
        $servicio = $this->get('listar');
        $servicio1 = $this->get('comprobar');
        $proyecto = $servicio->obtenerInformacionAtomica($informacion);
        $proyecto = $servicio1->obtenerAvance($proyecto);
        $servicio1->avanceProfesionales($proyecto);
        $proyecto = $servicio->avanceActProf($proyecto);
        if($request->isMethod('POST'))
        {
            $formAsProyecto->handleRequest($request);
            $formExcepcionPlazo->handleRequest($request);
            $formNuevaEtapa->handleRequest($request);
            $formEtapaE->handleRequest($request);
            $formEtapaProyecto->handleRequest($request);
            $formHito->handleRequest($request);
            $formEstadoEtapa->handleRequest($request);
            
             if(isset($_POST["agregarProfesional"])){
                 $solicitud = $this->getRequest();
                 $fechaInicio = new \DateTime($solicitud->request->get('fechaInicio').' 00:00:00');
                 $fechaTermino = new \DateTime($solicitud->request->get('fechaTermino').' 00:00:00');
                    $parametros = array(
                        'profesional' => $formAsProyecto->get('profesional')->getData(),
                        'horas' => $formAsProyecto->get('horas')->getData(),
                        'tipoAsignacion' => 'P',
                        'tipo' => 'UserProyecto',
                        'columna' => 'proyecto',
                        'ambito' => 'GAP',
                        'valorHora' => $formAsProyecto->get('valorHora')->getData(),
                        'area' => $proyecto,
                        'fechaInicio' => $fechaInicio,
                        'fechaTermino' => $fechaTermino
                    );
                    $service1 = $this->get('comprobar');
                    $comprobar = $service1->comprobarAsignar($parametros);
                    if($comprobar == 0){
                    $service = $this->get('addLocation');
                    $service->salvarAsignarProyecto($parametros);
                    }
                 
             }
             
              if (isset($_POST["salvarExcepcionP"]))
                {
                    $solicitud = $this->getRequest();
                    $servicio = $this->get('listar');
                    $servicio1 = $this->get('addLocation');
                    $servicio2 = $this->get('modificar');
                    $parametrosProyecto = array(
                        'id' => $proyecto,
                        'columna' => 'id',
                        'propietario' => 'Proyecto'                                           
                    );
                    $proyectoEx = $servicio->obtenerInformacionAtomica($parametrosProyecto);
                    $fechaIngreso = new \DateTime();
                    $parametros = array(
                        'horas' => $formExcepcionPlazo->get('horas')->getData(),
                        'fechaNueva' => new \DateTime($solicitud->request->get('fechaExPro')." 00:00:00"),
                        'fechaIngreso' => $fechaIngreso,
                        'fechaAnterior' => $proyectoEx->getFechaFin(),
                        'profesionalMod' => $this->getUser(),
                        'accion' => $formExcepcionPlazo->get('accion')->getData(),
                        'proyecto' => $proyectoEx,
                        'descripcion' => $formExcepcionPlazo->get('descripcion')->getData()
                    );
                    $servicio2->modificarPlazoProyecto($parametrosProyecto, $parametros);
                    $servicio1->salvarExcepcionProyectoPlazo($parametros);
                }

                if(isset($_POST["salvarEtapa"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'nombre' => $formNuevaEtapa->get('nombre')->getData(),
                        'fechaInicio' => new \DateTime($solicitud->request->get('fechaInicio')),
                        'fechaTermino' => new \DateTime($solicitud->request->get('fechaterminoet'))
                    );
                    $servicio = $this->get('addLocation');
                    $etapa = $servicio->salvarEtapa($parametros);
                    $parametros["etapa"] = $etapa;
                    $informacion = array(
                        'id' => $solicitud->request->get('valorProyecto1'),
                        'columna' => 'id',
                        'propietario' => 'Proyecto' 
                    );
                    $servicioBusqueda = $this->get('listar');
                    $proyecto = $servicioBusqueda->obtenerInformacionAtomica($informacion);
                    $parametros["proyecto"] = $proyecto;
                    $servicio->salvarEtapaAsignacion($parametros);   
                }

                if(isset($_POST["salvarEtapaE"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'nombre' => $formEtapaE->get('nombre')->getData(),
                        'fechaInicio' => new \DateTime($solicitud->request->get('fechaInicio')),
                        'fechaTermino' => new \DateTime($solicitud->request->get('fechaterminoet')),
                        'etapa' => $formEtapaE->get('nombre')->getData()                        
                    );
                    $servicio = $this->get('addLocation');
                    $informacion = array(
                        'id' => $solicitud->request->get('valorProyecto2'),
                        'columna' => 'id',
                        'propietario' => 'Proyecto' 
                    );
                    $servicioBusqueda = $this->get('listar');
                    $proyecto = $servicioBusqueda->obtenerInformacionAtomica($informacion);
                    $parametros["proyecto"] = $proyecto;
                    $servicio->salvarEtapaAsignacion($parametros);
                    
                    
                }

                if (isset($_POST["salvarExcepcionE"]))
                {
                     $solicitud = $this->getRequest();
                     $servicio = $this->get('listar');
                     $servicio1 = $this->get('addLocation');
                     $servicio2 = $this->get('modificar');
                     $parametrosEtapa = array(
                         'id' => $formEtapaProyecto->get('etapaProyecto')->getData(),
                         'columna' => 'id',
                         'propietario' => 'AsignacionEtapa'
                     );
                     $etapaEx = $servicio->obtenerInformacionAtomica($parametrosEtapa);
                     $fechaIngreso = new \DateTime();
                     $parametros = array(
                         'fechaNuevaInicio' => new \DateTime($solicitud->request->get('fechaInicioEtapa')." 00:00:00"),
                         'fechaNuevaTermino' => new \DateTime($solicitud->request->get('fechaTerminoEtapa')." 00:00:00"),
                         'fechaIngreso' => $fechaIngreso,
                         'profesional' => $this->getUser(),
                         'etapa' => $etapaEx,
                         'descripcion' => $solicitud->request->get("descripcion")
                     );
                     $servicio2->modificarPlazoEtapa($parametrosEtapa, $parametros);
                     $servicio1->salvarExcepcionEtapaPlazo($parametros);
                     
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
                        'propietario' => 'Proyecto' 
                    );
                    $servicioBusqueda = $this->get('listar');
                    $proyecto = $servicioBusqueda->obtenerInformacionAtomica($informacion);
                    $parametros["proyecto"] = $proyecto;
                    $servicio->salvarHito($parametros);
                    
                    
                }

                if(isset($_POST["salvarEstadoEtapa"])){
                  $solicitud = $this->getRequest();
                  $parametros = array(
                    'etapa' => $formEstadoEtapa->get('estado')->getData(),
                    'columna' => 'id',
                    'id' => $solicitud->request->get('valorEtapa')
                    );
                  switch ($solicitud->request->get('aaa')) {
                    case 1:
                        $parametros["propietario"] = 'AsignacionEtapa';
                      break;
                    case 2:
                        $parametros["propietario"] = 'Hito';
                        break;
                    default:
                      # code...
                      break;
                  }
                    $service = $this->get('modificar');
                    $service->modificarEstado($parametros);
                }
                return $this->redirect($this->generateUrl('gproyecto', array('id' => $proyecto->getId())));
        }
        

    
      return $this->render('AppMediBundle:Default:gproyecto.html.twig', array(
          'proyecto' => $proyecto,
          'hello' => 'hello',
          'formEstadoEtapa' => $formEstadoEtapa->createView(),
          'formExcPlazoP' => $formExcepcionPlazo->createView(), 
          'formProfesional' => $formAsProyecto->createView(),
          'formEtapaProyecto' => $formEtapaProyecto->createView(),
          'formEtapaE' => $formEtapaE->createView(),
          'formNuevaEtapa' => $formNuevaEtapa->createView(),
          'formHito' => $formHito->createView()
      )); 
    }
}

