<?php
namespace App\MediBundle\Services;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\MediBundle\Entity\Registro;

class registro extends Controller
{
    
    public function registroLocacion($tipo)
    {     
        $registro = new Registro();
        $ipUser = $this->container->get('request')->getClientIp();
        $fecha = getdate();
        $registro->setTipo($tipo);
        $registro->setIpUsuario($ipUser);
        $registro->setFecha($fecha);
        
    }  
}
