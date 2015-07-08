<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Actividad;
use App\MediBundle\Form\ActividadType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\Documento;

class ComprobarController extends Controller
{

    public function ComprobarLicitacionFechaAction(Request $request)
    {
        $servicio1 = $this->get('comprobar');
        $licitacionesTerminadas = $servicio1->comprobarLicitacionesFecha();
        return $this->render('base.html.twig', array(
            'licTerm ' => $licitacionesTerminadas
        ));
    }
    
    public function etapaProyectoAction(Request $request){
        $request = $this->get('request');
        $name=$request->request->get('data1');
        $response = new Response(json_encode(array('name' => $name)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
        
    }
}

