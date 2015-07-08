<?php
namespace App\MediBundle\Services;

use Doctrine\ORM\EntityManager;

class Eliminar
{
    protected $em;
    
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }
    
    public function eliminarItem($propiedades)
    {
        //$query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$propiedades['propietario'].' x WHERE x.id >= :id')->setParameter('id', $propiedades['id']);
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$propiedades['propietario'].' x WHERE x.id = '.$propiedades['id']);
        $result = $query->getSingleResult();
        $this->em->remove($result);
        $this->em->flush();
        return "success";
    }
    
    public function eliminarProfesionalReunion($propiedades){
        //TIPO EXTERNO = TABLA QUE NO CORRESPONDE A TABLA PADRE
        //VALOR EXTERNO = VALOR QUE NO CORRESPONDE A TABLA PADRE
        //TIPO INTERNO = TABLA QUE CORRESPONDE A TABLA PADRE
        //VALOR EXTERNO = VALOR QUE NO CORRESPONDE A TABLA PADRE
        $select = $this->em->createQuery('SELECT x FROM AppMediBundle:'. $propiedades['tipoExterno'].' x WHERE x.id = :valorExterno')->setParameter('valorExterno', $propiedades['valorExterno']);
        $result = $select->getSingleResult();
        $query = $this->em->getRepository('AppMediBundle:'.$propiedades['tipoInterno'])->findOneById($propiedades['valorInterno']);
        switch($propiedades['tipoInterno']){
            case('Reunion'):
                $query->removeDependencia($result);
                break;
            case(''):
                $query->removeRole($result);
                break;
            case('Licitacion'):
                $query->removeDependencia($result);
            break; 
            case('User1'):
                $query->removeRole($result);     
        }
        $this->em->flush();
        return "success";
        
    }
}
