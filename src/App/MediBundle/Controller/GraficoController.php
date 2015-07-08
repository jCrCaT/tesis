<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType; 
use Symfony\Component\HttpFoundation\Response;


class GraficoController extends Controller
{
    public function admGraficoAction(Request $request)
    {

        $securityContext = $this->container->get('security.context');
        $usuarioEmpresa = $this->getUser();
        $service1 = $this->get('grafico');
        $sendRequestList = $this->get('listar');
        $proyecto = $service1->obtenerProyectoActivo();
        $buscar = 'Proyecto';
        $proyectos = $sendRequestList->listarItems($buscar, $securityContext, $usuarioEmpresa);

        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        
 

        
        if($request->isMethod('POST') && isset($_POST["generarReporte"])){            
            $this->get('knp_snappy.pdf')->generateFromHtml(
                $this->renderView(
                    'AppMediBundle:Default:prueba.html.twig',
                    array(
                        'informacion' => $proyecto,
                        'reuniones' => $reuniones,
                        'proyecto' => $proyecto
        ),true
    ),
    '/var/www/mediApp/web/documentos/fichero.pdf'
);
            
        }

        return $this->render('AppMediBundle:Default:grafico.html.twig', array(
            'informacion' => $proyecto,
            'formHoras' => $formHoras->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1,
            'proyectos' => $proyectos
        ));
    }
    
    public function pruebaAction($informacion )
    {
        return $this->render('AppMediBundle:Default:prueba.html.twig', array(
            'informacion' => $informacion
        ));
        
    }
}

