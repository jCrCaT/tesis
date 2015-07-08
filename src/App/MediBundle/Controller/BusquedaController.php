<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;

class BusquedaController extends Controller
{

    public function admBusquedaAction(Request $request)
    {
        $request = $this->container->get('request');

        if($request->isMethod('POST') && isset($_POST["buscarContenido"])){
                $solicitud = $this->getRequest();
                $var = $solicitud->request->get('tipoBuscar');
                $servicio = $this->get('listar');
                switch ($var) {
                    case "0":
                        $parametros = array(
                            'propietario' => 'Proyecto',
                            'columna' => 'nombreProyecto',
                            'id' => $solicitud->request->get('txtBuscar')
                            );
                        $itemBusqueda = $servicio->buscar($parametros);
                        return $this->render('AppMediBundle:Default:busquedaProyecto.html.twig', array(
                            'proyecto' => $itemBusqueda
                        )); 
                    case "1":
                        $parametros = array(
                            'propietario' => 'Licitacion',
                            'columna' => 'nombre',
                            'id' => $solicitud->request->get('txtBuscar')
                            );
                        $itemBusqueda = $servicio->buscar($parametros);
                        return $this->render('AppMediBundle:Default:busquedaLicitacion.html.twig', array(
                            'licitacion' => $itemBusqueda
                        ));
                    case "2":
                        $parametros = array(
                            'propietario' => 'User1',
                            'id' => $solicitud->request->get('txtBuscar')
                            );
                        $itemBusqueda = $servicio->buscarProfesional($parametros);
                        return $this->render('AppMediBundle:Default:busquedaProfesional.html.twig', array(
                            'licitacion' => $itemBusqueda
                        ));
                        return $this->redirect($this->generateUrl('licitacion'));  
                    case null:
                        return $this->redirect($this->generateUrl('asignarproyecto'));
                    default:
                        return $this->redirect($this->generateUrl('area'));
                }
    }
        
    } 
        
    }


