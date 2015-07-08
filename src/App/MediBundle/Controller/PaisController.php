<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Pais;
use App\MediBundle\Form\PaisType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;

class PaisController extends Controller
{
    public function admPaisAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        if (!$securityContext->isGranted('ROLE_SUPER_ADMIN')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $informacion = array(
            'listado' => 'Paises',
            'tabla' =>  'Pais',
            'inferior' => 'Region'
        );
        $pais = new Pais();
        $form = $this->createForm(new PaisType(), $pais);
        $formPais = $this->createForm(new PaisType(), $pais);
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
            $form->handleRequest($request);     
            $formPais->handleRequest($request); 
            
                if(isset($_POST["salvarPais"]) && $form->isValid())
                {
                    
                    $parametros = array(
                        'tipo' => $informacion['tabla'],
                        'nombre' => $form->get('nombre')->getData(),
                        'dependencia' => 'noone'
                    );                     
                    $service = $this->get('addLocation');       
                    $service->salvarLocacion($parametros);
                    
                    
                }
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorEliminar'),
                        'columna' => 'id',
                        'propietario' => 'Pais'                                           
                    );
                    $servicio = $this->get('listar');
                    $paisEliminar = $servicio->obtenerInformacionAtomica($parametros);
                    
                    $propiedades = array(
                        'id' => $paisEliminar,
                        'inferior' => $informacion['inferior'],
                        'propietario' => $informacion['tabla']                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio1 = $this->get('comprobar');
                    $servicio1->comprobarDependenciaUbicacion($propiedades);
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
                return $this->redirect($this->generateUrl('pais'));
    }
    
      return $this->render('AppMediBundle:Default:pais.html.twig', array(
            'form'=> $form->createView(), 
            'listar' => $result, 
            'informacion' => $informacion, 
            'formPais' => $formPais->createView(),
            'modificar' => $pais,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto));  
    }
}

