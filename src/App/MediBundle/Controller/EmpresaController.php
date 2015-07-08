<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Empresa;
use App\MediBundle\Form\EmpresaType;
use \DateTime;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;

class EmpresaController extends Controller
{
    public function admEmpresaAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        $horasIndex = new Horas();
        $horasLicIndex = new HorasLic();
        $usuarioEmpresa = $this->getUser();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $formHorasLic = $this->createForm(new HorasLicType($usuarioEmpresa), $horasLicIndex);
        $informacion = array(
            'listado' => 'Empresas',
            'tabla' =>  'Empresa',
        );
        $Empresa = new Empresa();
        $form = $this->createForm(new EmpresaType(), $Empresa);
        $formEmpresa = $this->createForm(new EmpresaType(), $Empresa);
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
            $formEmpresa->handleRequest($request);
            
       
            
                if(isset($_POST["salvarEmpresa"]))
                {
                    $parametros = array(
                        'rut' => $form->get('rut')->getData(),
                        'nombre' => $form->get('nombre')->getData(),
                        'giro' => $form->get('giro')->getData(),
                        'comuna' => $form->get('comuna')->getData(),
                        'correo' => $form->get('correo')->getData(),
                        'telefono' => $form->get('telefono')->getData(),                        
                        'direccion' => $form->get('direccion')->getData(),
                    );
                    $service = $this->get('addLocation');       
                    $service->salvarEmpresa($parametros);
                     
                    }                    
                    
                
                
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'propietario' => $informacion['tabla']                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio1 = $this->get('comprobar');
                    $servicio1->comprobarDependenciaUsuario($propiedades);
                    $servicio->eliminarItem($propiedades);
                    
                    
                }
                
                if (isset($_POST["guardarCambios"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorIdentificador'),
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

                return $this->redirect($this->generateUrl('empresa'));
            
            
        }
        
        return $this->render('AppMediBundle:Default:empresa.html.twig', array(
            'form'=> $form->createView(), 
            'formEmpresa'=> $formEmpresa->createView(), 
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $Empresa,
            'formHoras' => $formHoras->createView(),
            'formHorasLic' => $formHorasLic->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1));
    }
}

