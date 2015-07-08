<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\EstadoAcciones;
use App\MediBundle\Form\EstadoType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;

class EstadoAccionesController extends Controller
{
    public function admEstadoAccionesAction(Request $request)
    {
        $usuarioEmpresa = $this->getUser();
        $informacion = array(
            'listado' => 'Eventos Importantes',
            'tabla' =>  'EstadoAcciones'
        );
        $estadoAcciones = new EstadoAcciones();
        $horasLicIndex = new HorasLic();
        $formEstadoAcciones = $this->createForm(new EstadoType(), $estadoAcciones);
        $formHorasLic = $this->createForm(new HorasLicType($usuarioEmpresa), $horasLicIndex); 
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems($informacion['tabla'], $securityContext ,$usuarioEmpresa);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto= $service1->obtenerMisProyectos($usuarioEmpresa);
        
        if($request->isMethod('POST'))
        {
            $formEstadoAcciones->handleRequest($request);     
            
                if(isset($_POST["salvarEstadoE"]) && $formEstadoAcciones->isValid())
                {
                    $parametros = array(
                        'nombre' => $formEstadoAcciones->get('estado')->getData(),
                        'descripcion' => $formEstadoAcciones->get('descripcion')->getData()
                    );                     
                    $service = $this->get('addLocation');       
                    $service->salvarEstadoEvento($parametros);
                    
                    
                    
                }
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'propietario' => $informacion['tabla']                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio->eliminarItem($propiedades);
                    
                    
                }
                
                if (isset($_POST["guardarCambios"]) && $formPais->isValid()){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorIdentificador'),
                        'columna' => 'id',
                        'propietario' => 'Pais'                                           
                    );
                    $servicio = $this->get('listar');
                    $paisEliminar = $servicio->obtenerInformacionAtomica($parametros);
                    
                    $parametros = array(
                        'id' => $paisEliminar,
                        'nombre' => $formPais->get('nombre')->getData(),
                        'tipo' => 'Pais',
                        'superior' => null                        
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    
                    
            
                }

                return $this->redirect($this->generateUrl('estadoevento'));
    }
    
      return $this->render('AppMediBundle:Default:estadoAcciones.html.twig', array(
            'formEstadoAcciones'=> $formEstadoAcciones->createView(), 
            'formHorasLic' => $formHorasLic->createView(),
            'listar' => $result, 
            'informacion' => $informacion,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto));  
    }
}

