<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Cliente;
use App\MediBundle\Form\ClienteType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;

class ClienteController extends Controller
{


    public function admClienteAction(Request $request)
    {
        $horasIndex = new Horas();
        $horasLicIndex = new HorasLic();
        $usuarioEmpresa = $this->getUser();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $formHorasLic = $this->createForm(new HorasLicType($usuarioEmpresa), $horasLicIndex);
        $informacion = array(
            'listado' => 'Clientes',
            'tabla' =>  'Cliente',
        );
        $Cliente = new Cliente();
        $form = $this->createForm(new ClienteType(), $Cliente);
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems($informacion['tabla'], $securityContext ,$usuarioEmpresa);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            
       
            
                if(isset($_POST["salvarCliente"]) && $form->isValid())
                { 
                    $parametros = array(
                        'nombre' => $form->get('nombre')->getData(),
                        'rut' => $form->get('rut')->getData(),
                        'giro' => $form->get('giro')->getData(),
                        'comuna' => $form->get('comuna')->getData(),
                        'correo' => $form->get('correoelectronico')->getData(),
                        'telefono' => $form->get('telefono')->getData(),
                        'direccion' => $form->get('direccion')->getData()
                    );
                    $service = $this->get('addLocation');       
                    $service->salvarCliente($parametros);
                    
                   
                    
                }
                
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'propietario' => 'Cliente'                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarDependenciaUsuario($propiedades);
                    $servicio->eliminarItem($propiedades);
                    
                    
                }
                
                if (isset($_POST["modificar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $parametros = array(
                        'tipo' => $informacion['tabla'],
                        'id' => $id,
                    );
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarNombre($parametros);
                    return $this->render('AppMediBundle:Default:cliente.html.twig', array(
                        'form'=> $form->createView(), 'listar' => $result, 
                        'informacion' => $informacion, 
                        'tipo' => "modificar", 
                        'modificar' => $comprobar ));
                }
                
                if (isset($_POST["modificarCliente"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorModificar'),
                        'nombre' => $form->get('nombre')->getData(),
                        'tipo' => 'Empresa',
                        'rut' => $form->get('rut')->getData(),
                        'giro' => $form->get('giro')->getData(),
                        'comuna' => $form->get('comuna')->getData(),
                        'correo' => $form->get('correo')->getData(),
                        'telefono' => $form->get('telefono')->getData(),                        
                        'direccion' => $form->get('direccion')->getData(),
                        'superior' => null
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    
                    
                }

                return $this->redirect($this->generateUrl('cliente'));
            
            
        }
        
        return $this->render('AppMediBundle:Default:cliente.html.twig', array(
            'form'=> $form->createView(), 
            'formHorasLic' => $formHorasLic->createView(),
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $Cliente,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1));
    }
}

