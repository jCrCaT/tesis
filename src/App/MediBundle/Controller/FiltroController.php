<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Proyecto;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\ProyectoFiltroType;
use App\MediBundle\Form\HorasType;

class FiltroController extends Controller
{
    public function admFiltroAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        $informacion = array(
            'listado' => 'Proyectos',
            'tabla' =>  'Proyecto'
        );
        $proyecto = new Proyecto();
        $proyecto1 = new Proyecto();
        $proyecto2 = new Proyecto();
        $proyecto3 = new Proyecto();
        $horas = new Horas();
        $form = $this->createForm(new ProyectoFiltroType(), $proyecto);
        $form1 = $this->createForm(new ProyectoFiltroType(), $proyecto1);
        $form2 = $this->createForm(new ProyectoFiltroType(), $proyecto2);
        $form3 = $this->createForm(new ProyectoFiltroType(), $proyecto3);
        $servicio1 = $this->get('comprobar');
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
            $form1->handleRequest($request);
            $form2->handleRequest($request);
            $form3->handleRequest($request);
            
       
            
                if (isset($_POST["filtrarProyecto"]))
                {
                    $solicitud = $this->getRequest();   
                    $parametros = array(
                        'propietario' => 'Proyecto',
                        'columna' => 'id',                        
                        'id' => $form->get('nombreProyecto')->getData()->getId(),
                    );
                    $service1 = $this->get('listar');
                    $proyecto = $service1->obtenerInformacionAtomica($parametros);
                    $parametros1 = array(
                        'propietario' => 'Horas',
                        'columna' => 'proyecto',
                        'id' => $proyecto->getId()
                    );
                    $sending = $service1->obtenerInformacion($parametros1);
                    return $this->render('AppMediBundle:Default:filtro.html.twig', array(
                        'form'=> $form->createView(),
                        'form1'=> $form1->createView(),
                        'form2'=> $form2->createView(),
                        'form3'=> $form3->createView(),
                        'listar' => $sending,
                        'informacion' => $informacion,
                        'tipo' => "crear"));
                    
                    
                }
                
                if(isset($_POST['filtrarProyectoTiempo'])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'propietario' => 'Proyecto',
                        'columna' => 'id',                        
                        'id' => $form1->get('nombreProyecto1')->getData()->getId(),
                    );
                    $service1 = $this->get('listar');
                    $proyecto = $service1->obtenerInformacionAtomica($parametros);
                    $fechaInicio = $solicitud->request->get('fechaInicio')." ".$solicitud->request->get('horaInicio').":00";
                    $fechaTermino = $solicitud->request->get('fechaTermino')." ".$solicitud->request->get('horaTermino').":00";
                    $parametros1 = array(
                        'propietario' => 'Horas',
                        'columna' => 'proyecto',
                        'id' => $proyecto->getId(),
                        'date1' => $fechaInicio,
                        'date2' => $fechaTermino
                    );
                    $sending = $service1->obtenerInformacionFecha($parametros1);
                    return $this->render('AppMediBundle:Default:filtro.html.twig', array(
                        'form'=> $form->createView(),
                        'form1'=> $form1->createView(),
                        'form2'=> $form2->createView(),
                        'form3'=> $form3->createView(),
                        'listar' => $sending,
                        'informacion' => $informacion,
                        'tipo' => "crear"));
                    
                }
                
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'inferior' => $informacion['inferior'],
                        'propietario' => $informacion['tabla']                        
                    );
                    $servicio = $this->get('eliminar');
                    $eliminar = $servicio->eliminarItem($propiedades);
                    
                }
                
                if (isset($_POST["modificar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $parametros = array(
                        'tipo' => 'Area',
                        'id' => $id,
                    );
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarNombre($parametros);
                    return $this->render('AppMediBundle:Default:actividad.html.twig', array(
                        'form'=> $form->createView(), 
                        'listar' => $result, 
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
                
                return $this->redirect($this->generateUrl('area'));
                
            
            
        }
        
        return $this->render('AppMediBundle:Default:filtro.html.twig', array(
            'form'=> $form->createView(),
            'form1'=> $form1->createView(),
            'form2'=> $form2->createView(),
            'form3'=> $form3->createView(),
            'listar' => $horas, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $proyecto,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1));
    }
}

