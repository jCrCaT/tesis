<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Proyecto;
use App\MediBundle\Form\ProyectoType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\ExcepcionPlazoProyecto;
use App\MediBundle\Form\PlazoProyectoType;
use App\MediBundle\Entity\EtapaProyecto;
use App\MediBundle\Form\EtapaProyectoType;
use App\MediBundle\Form\EtapaEProyectoType;
use App\MediBundle\Entity\Documento;
use Symfony\Component\HttpFoundation\Response;

class ProyectoController extends Controller
{
    public function admProyectoAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $informacion = array(
            'listado' => 'Proyectos',
            'tabla' =>  'Proyecto'
        );
        $excepcionProyecto = new ExcepcionPlazoProyecto();
        $formExcepcionPlazo = $this->createForm(new PlazoProyectoType(), $excepcionProyecto);
        $etapaProyecto = new EtapaProyecto();
        $formEtapa = $this->createForm(new EtapaProyectoType(), $etapaProyecto);
        $etapaEProyecto = new EtapaProyecto();
        $formEtapaE = $this->createForm(new EtapaEProyectoType(), $etapaEProyecto);
        $proyecto = new Proyecto();
        $form = $this->createForm(new ProyectoType(), $proyecto);
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems($informacion['tabla'], $securityContext ,$usuarioEmpresa);
        
        $documento = new Documento();
        $formDocumento = $this->createFormBuilder($documento)
                ->add('nombre')
                ->add('file', 'file', array(
            'label' => 'Imagen de perfil',
            'required' => false
        ))
                ->getForm();
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            $formEtapa->handleRequest($request);
            $formEtapaE->handleRequest($request);
            $formExcepcionPlazo->handleRequest($request);
            
       
            
                if (isset($_POST["salvarProyecto"]))
                {
                    if($form->isValid()){
                    $solicitud = $this->getRequest();
                    $fechaInicio = new \DateTime($solicitud->request->get('fechaInicio')." 00:00:00");
                    $fechaFin = new \DateTime($solicitud->request->get('fechaFin')." 00:00:00");
                    //$fechaInicio = $solicitud->request->get('fechaInicio');
                    //$fechaFin = new \DateTime('2014-10-11 00:00:00');
                    $parametros = array(
                        'tipo' => $informacion['tabla'],
                        'nombre' => $form->get('nombreProyecto')->getData(),
                        'descripcion' => $form->get('descripcion')->getData(),
                        'fechaInicio' => $fechaInicio,
                        'fechaFin' => $fechaFin,
                        'horasProgramadas' => $form->get('horasProgramadas')->getData(),
                        'licitacion' => null
                        
                    );
                    $service1 = $this->get('comprobar');
                    $recibir = $service1->compararFecha($parametros);
                    $recibir = -1;
                    if($recibir = -1)
                    {
                    $session = $request->getSession();
                    $this->get('session')->getFlashBag()->add('notice', 'El registro que intenta realizar ya se encuentra registrado');
                    $service = $this->get('addLocation');       
                    $sending = $service->salvarProyecto($parametros);
                    return $this->redirect($this->generateUrl('proyecto'));
                    }else
                    {
                        $session = $request->getSession();
                    $this->get('session')->getFlashBag()->add('notice', 'El registro no fue ingresado');
                    return $this->redirect($this->generateUrl('proyecto'));    
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
                    return $this->redirect($this->generateUrl('proyecto'));
                    
                }
                
                if (isset($_POST["modificar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $parametros = array(
                        'tipo' => 'Proyecto',
                        'id' => $id,
                    );
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarNombre($parametros);
                    return $this->render('AppMediBundle:Default:proyecto.html.twig', array(
                        'form'=> $form->createView(), 'listar' => $result, 
                        'informacion' => $informacion, 
                        'tipo' => "modificar", 
                        'modificar' => $comprobar ));
                }
                
                if (isset($_POST["modificarArea"])){
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
                    return $this->redirect($this->generateUrl('area'));
                    
                }      
                
                if(isset($_POST["salvarEtapa"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'nombre' => $formEtapa->get('nombre')->getData(),
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
                    return $this->redirect($this->generateUrl('proyecto'));
                    
                    
                }
                
                if(isset($_POST["salvarEtapaE"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'nombre' => $formEtapa->get('nombre')->getData(),
                        'fechaInicio' => new \DateTime($solicitud->request->get('fechaInicio')),
                        'fechaTermino' => new \DateTime($solicitud->request->get('fechaterminoet')),
                        'etapa' => $formEtapaE->get('nombre')->getData()                        
                    );
                    $servicio = $this->get('addLocation');
                    $informacion = array(
                        'id' => $solicitud->request->get('valorProyecto1'),
                        'columna' => 'id',
                        'propietario' => 'Proyecto' 
                    );
                    $servicioBusqueda = $this->get('listar');
                    $proyecto = $servicioBusqueda->obtenerInformacionAtomica($informacion);
                    $parametros["proyecto"] = $proyecto;
                    $servicio->salvarEtapaAsignacion($parametros);
                    return $this->redirect($this->generateUrl('proyecto'));
                    
                    
                }
                
                if (isset($_POST["salvarExcepcionP"]))
                {
                    $solicitud = $this->getRequest();
                    $servicio = $this->get('listar');
                    $servicio1 = $this->get('addLocation');
                    $servicio2 = $this->get('modificar');
                    $parametrosProyecto = array(
                        'id' => $solicitud->request->get('valorProyectoEx'),
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
                    return $this->redirect($this->generateUrl('proyecto'));
                }
                
                 if (isset($_POST["salvarExcepcionE"]))
                {
                     $solicitud = $this->getRequest();
                     $servicio = $this->get('listar');
                     $servicio1 = $this->get('addLocation');
                     $servicio2 = $this->get('modificar');
                     $parametrosEtapa = array(
                         'id' => $solicitud->request->get('valorEtapaEx'),
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
                      return $this->redirect($this->generateUrl('proyecto'));
                     
                 }   
        }
        
            return $this->render('AppMediBundle:Default:proyecto.html.twig', array(
            'form'=> $form->createView(),   
            'formEtapa' => $formEtapa->createView(),
            'formEtapaE' => $formEtapaE->createView(),
            'formExcPlazoP' => $formExcepcionPlazo->createView(),    
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $proyecto,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'formDocumento' => $formDocumento->createView(),
            'proyecto' => $proyecto1));
    }
    
}

