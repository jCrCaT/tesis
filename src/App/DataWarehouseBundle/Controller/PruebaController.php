<?php

namespace App\DataWarehouseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PruebaController extends Controller
{
    public function DatawarehouseAction()
    {
        $em = $this->getDoctrine('doctrine')->getManager('datawarehouse');
        $query = $em->createQuery('SELECT x FROM DwBundle:FtAvanceProyecto x WHERE x.id >= :id ORDER BY x.id ASC')->setParameter('id', 1);
            $result = $query->getResult();
        return $this->render('DwBundle:Default:index.html.twig', array(
            'result' => $result));
    }
}
