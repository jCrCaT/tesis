<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\Producto;
use App\MediBundle\Form\ProductoType;

class ProductoController extends Controller
{
    public function admProductoAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            return $this->redirect($this->generateUrl('login'));            
        };
        $informacion = array(
            'listado' => 'Productos',
            'tabla' =>  'Producto'
        );
        $producto = new Producto();
        $form = $this->createForm(new ProductoType(), $producto);
        $sendRequestList = $this->get('listar');
        $buscar = 'Producto';
        $result = $sendRequestList->listarItems($buscar);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            
       
            
                if($form->get('salvarProducto')->isClicked())
                {
                    $parametros = array(
                        'tipo' => 'Producto',
                        'nombre' => $form->get('nombre')->getData(),
                        'dependencia' => $form->get('descripcion')->getData()
                    );
                    $service = $this->get('addLocation');       
                    $sending = $service->salvarProducto($parametros);
                    
                    
                }    
            
            
        }
        
        return $this->render('AppMediBundle:Default:producto.html.twig', array('form'=> $form->createView(), 'listar' => $result, 'informacion' => $informacion));
    }
}

