<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{

    public function admIndexAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $horasIndex = new horas();
        $form = $this->createForm(new horasType(), $horasIndex);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            
       
            
                if (isset($_POST["salvarHoraIndex"]) && $form->isValid())
                {
                    
                    $parametros = array(
                        'nombre' => $form->get('nombre')->getData(),
                        'descripcion' => $form->get('descripcion')->getData()
                    );
                    $service = $this->get('addLocation');       
                    $service->salvarActividad($parametros);
                    return $this->redirect($this->generateUrl('actividad'));
                    
                    
                }      
        }
        
       return $this->render('AppMediBundle:Default:IndexHoras.html.twig');
    } 
        
    }


