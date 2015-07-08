<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PermisoController extends Controller
{
    public function admPermisoAction()
    {
        
        $informacion = array(
                        'propietario' => 'PermisosArea',
                        'id' => 1
                    );
        $servicio = $this->get('listar');
        $permisos = $servicio->obtenerPermiso($informacion);
        
        if($permisos == null){
            return $this->render('AppMediBundle:Default:permisos.html.twig', array(
                'accion' => 1
            )
      );                       
        }else{
    
      return $this->render('AppMediBundle:Default:permisos.html.twig'
        ); }
    }
}

