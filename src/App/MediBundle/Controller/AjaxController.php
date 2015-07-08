<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{

    public function etapaProyectoAction(){
        $response = new Response(json_encode(array('name' => 'hola')));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
        
    }
}

