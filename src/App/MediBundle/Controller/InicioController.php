<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;

class InicioController extends Controller
{

    public function admInicioAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $horasIndex = new Horas();
        $horasLicIndex = new HorasLic();
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $formHorasLic = $this->createForm(new HorasLicType($usuarioEmpresa), $horasLicIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $misAvances = $sendRequestList->obtenerMisAvances($usuarioEmpresa);
        $hitosProyecto = $sendRequestList->obtenerHitos($usuarioEmpresa);
        $hitosLicitacion = $sendRequestList->obtenerHitosLic($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $service2 = $this->get('comprobar');    
        $uf = $service2->indicadores();
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        $request = $this->container->get('request');
        
       return $this->render('AppMediBundle:Default:inicio.html.twig', array(
            'formHoras' => $formHoras->createView(),
            'formHorasLic' => $formHorasLic->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1,
            'uf' => $uf,
            'hitos' => $hitosProyecto,
            'hitosLic' => $hitosLicitacion,
            'usuario' => $this->get('security.context')->getToken()->getUser(),
            'misAvances' => $misAvances
       ));
    } 
        
    }


