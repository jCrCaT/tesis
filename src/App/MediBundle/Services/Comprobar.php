<?php
namespace App\MediBundle\Services;

use Doctrine\ORM\EntityManager;
use App\MediBundle\Entity\Pais;
use App\MediBundle\Entity\Region;
use App\MediBundle\Entity\Ciudad;
use App\MediBundle\Entity\Comuna;
use App\MediBundle\Entity\User;
use App\MediBundle\Entity\TipoExamen;
use App\MediBundle\Entity\Horas;
use Symfony\Component\Validator\Constraints\DateTime;

class Comprobar
{
    protected $em;
    
    public function __construct(EntityManager $entityManager, Listar $listar, addLocation $addLocation)
    {
        $this->em = $entityManager;
        $this->listar = $listar;
        $this->addLocation = $addLocation;
    }
    
    public function comprobarRut($rut)
    {
        
    }
    
    public function comprobarDependenciaUbicacion($propiedades)
    { 
       if($propiedades['inferior'] == 'noone')
        {
            return (0);
        }
       $comprobar = $this->em->createQuery('SELECT COUNT(x.superior) FROM AppMediBundle:'.$propiedades['inferior'].' x WHERE x.superior = :idOld')
               ->setParameter('idOld', $propiedades['id']);
       $comprobar1 = $comprobar->getSingleScalarResult();
       if($comprobar1 == 0){
           return 'noone';           
       }else{
       $query = $this->em->getRepository('AppMediBundle:Pais')->find(0);
       $query1 = $this->em->createQuery('UPDATE AppMediBundle:'.$propiedades['inferior'].' x SET x.superior = :idNew WHERE x.superior = :idOld')
               ->setParameters(array(                   
                   'idNew' =>  $query->getId(),
                   'idOld' => $propiedades['id']
               ));
       $result = $query1->getResult();
       }         
    }
    
    public function comprobarRango($username)
    {
        
        $userRango = $this->em
            ->createQuery('SELECT u FROM AppMediBundle:User1 u INNER JOIN AppMediBundle:User1_rango r ON :id = r.user1_id')
                ->setParameter('id', $username);        
        return $userRango;
    }
    
    public function comprobarNombre($parametros)
    {
        
        $consulta = $this->em
            ->createQuery('SELECT u FROM AppMediBundle:'.$parametros['tipo'].' u WHERE u.id = :id')
                ->setParameter('id', $parametros['id']);
        $userRango = $consulta->getSingleResult();
        return $userRango;
    }
    
    public function comprobarId($parametros)
    {
        $consulta = $this->em
            ->createQuery('SELECT u FROM AppMediBundle:'.$parametros['tipo'].' u WHERE u.nombre = :nombre')
                ->setParameter('nombre', $parametros['nombre']);
        $userRango = $consulta->getSingleResult();
        return $userRango;
    }
    
    public function comprobarDependenciaUsuario($parametros)
    {
        $comprobar = $this->em->createQuery('SELECT COUNT(x.empresa) FROM AppMediBundle:User1 x WHERE x.empresa = :id')
               ->setParameter('id', $parametros['id']);
       $comprobar1 = $comprobar->getSingleScalarResult();
       if($comprobar1 == 0){
           return 'noone';           
       }else{
       $query = $this->em->getRepository('AppMediBundle:Empresa')->find(0);
       $query1 = $this->em->createQuery('UPDATE AppMediBundle:User1 x SET x.empresa = :idNew WHERE x.empresa = :idOld')
               ->setParameters(array(                   
                   'idNew' =>  $query->getId(),
                   'idOld' => $parametros['id']
               ));
       $result = $query1->getResult();
        
    }
    
       }
       
    public function comprobarAsignar($parametros)
    {
        //$consulta = $this->em
        //    ->createQuery('SELECT COUNT(u.id) FROM AppMediBundle:'.$parametros['tipo'].' u WHERE u.'.$parametros['columna'].' = :area AND u.profesional = :profesional')
        //        ->setParameters(array(
        //            'area' => $parametros['area'],
        //            'profesional' => $parametros['profesional']->getId()));
        //$consulta = $this->em
        //    ->createQuery('SELECT COUNT(u.id) FROM AppMediBundle:'.$parametros['tipo'].' u WHERE u.'.$parametros['columna'].' = :area AND u.profesional = :profesional AND (:fechaInicio <= u.fechaInicio AND u.fechaTermino >= :fechaTermino) OR (u.fechaInicio <= :fechaInicio AND :fechaTermino >= u.fechaInicio) OR (u.fechaInicio >= :fechaInicio AND :fechaTermino >= u.fechaTermino) OR (u.fechaInicio <= :fechaInicio AND u.fechaTermino >= :fechaTermino)')
        //        ->setParameters(array(
        //            'area' => $parametros['area'],
        //            'fechaInicio' => $parametros['fechaInicio'],
        //            'fechaTermino' => $parametros['fechaTermino'],
        //            'profesional' => $parametros['profesional']->getId()
        //            ));
        $consulta = $this->em
            ->createQuery('SELECT COUNT(u.id) FROM AppMediBundle:'.$parametros['tipo'].' u WHERE u.'.$parametros['columna'].' = :area AND u.profesional = :profesional AND (u.fechaInicio <= :fechaTermino AND u.fechaTermino >= :fechaInicio)')
                ->setParameters(array(
                    'area' => $parametros['area'],
                    'fechaInicio' => $parametros['fechaInicio'],
                    'fechaTermino' => $parametros['fechaTermino'],
                    'profesional' => $parametros['profesional']->getId()
                    ));
        $asignarvalor = $consulta->getSingleScalarResult();
        return $asignarvalor;
    }
    
    
    public function compararFecha($parametros)
    {
        //$fechaInicio = new \DateTime($parametros['fechaInicio']);
        //$fechaFin = new \DateTime($parametros['fechaFin']);
        //$fechaprimera = strtotime($fechaInicio);
        //$fechaultima = strtotime($fechaFin);
        
        if($parametros['fechaInicio'] < $parametros['fechaFin'])
        {
            return 1;
        }else{
            return -1;
        }
        
    }
    
    public function comprobarDuracionActividad($resultado){
        $sumahoras = 0;
        $sumaminutos = 0;
        $sumadias = 0;
        foreach ($resultado as $resultado){
            $diferenciaDate = date_diff($resultado->getFechaInicio(), $resultado->getFechaTermino()) ;
            $resultado->setDuracionActividad($diferenciaDate);
            $sumadias = $sumadias + $diferenciaDate->days;
            $sumahoras = $sumahoras + $diferenciaDate->h;
            $sumaminutos = $sumaminutos + $diferenciaDate->i;
        }
        $sumahoras = $sumahoras + ($sumaminutos/60)+ ($sumadias * 24);
        return $sumahoras;
        
        
    }

    public function comprobarDuracionActividadUno(){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:HorasLic x');
        $resultado = $query->getResult();
        $sumahoras = 0;
        $sumaminutos = 0;
        $sumadias = 0;
        foreach ($resultado as $resultado){
            $diferenciaDate = date_diff($resultado->getFechaInicio(), $resultado->getFechaTermino()) ;
            $sumadias = $sumadias + $diferenciaDate->days;
            $sumahoras = $sumahoras + $diferenciaDate->h;
            $sumaminutos = $sumaminutos + $diferenciaDate->i;
            $sumahoras = $sumahoras + ($sumaminutos/60)+ ($sumadias * 24);
            $resultado->setDuracion($sumahoras);
            $sumahoras = 0;
        $sumaminutos = 0;
        $sumadias = 0;
            $this->em->flush();
        }
        $sumahoras = $sumahoras + ($sumaminutos/60)+ ($sumadias * 24);
        return $sumahoras;
        
        
    }

    public function duracionHora($parametros){
        $sumahoras = 0;
        $sumaminutos = 0;
        $sumadias = 0;
        $diferenciaDate = date_diff($parametros["fechaInicio"], $parametros["fechaTermino"]) ;
        $sumadias = $sumadias + $diferenciaDate->days;
        $sumahoras = $sumahoras + $diferenciaDate->h;
        $sumaminutos = $sumaminutos + $diferenciaDate->i;
        $sumahoras = $sumahoras + ($sumaminutos/60)+ ($sumadias * 24);
        return $sumahoras;
        
        
    }
    
    public function comprobarUltimoId($informacion){
        $obtenerUltimo = $this->em->createQuery('SELECT x FROM AppMediBundle:'. $informacion['tabla'].' x ORDER BY x.id asc');
        $result = $obtenerUltimo->getResult();
        if(!$result){
            return 0;
        }else{
        $var = 0;
        if($var <= 1){
            foreach($result as $result){
                $result = $result->getId() + 1;
                $var = $var + 1;
            }
        return $result;   
        }
        
        }
        
    }

    public function ObtenerAvance($proyecto){
        $obtenerValor = $this->em->createQuery('SELECT x FROM AppMediBundle:Horas x WHERE x.proyecto = :proyecto')->setParameter('proyecto', $proyecto);
        $resultado = $obtenerValor->getResult();
        $sumahoras = 0;
        $sumaminutos = 0;
        $sumadias = 0;
        $valor = 0;
        foreach ($resultado as $resultado){
            $diferenciaDate = date_diff($resultado->getFechaInicio(), $resultado->getFechaTermino()) ;
            $sumadias = $sumadias + $diferenciaDate->days;
            $sumahoras = $sumahoras + $diferenciaDate->h;
            $sumaminutos = $sumaminutos + $diferenciaDate->i;
            $valor = $valor + 1;
        }
        $sumahoras = $sumahoras + ($sumaminutos/60)+ ($sumadias * 24);
        $proyecto->setAvanceHoras($sumahoras);
        return $proyecto;

    }

    public function avanceProfesionales($proyecto){
        $query = $this->em->createQuery("SELECT SUM(x.duracion) as suma, CONCAT(p.pnombre, p.snombre) as nombre FROM AppMediBundle:Horas x LEFT JOIN x.profesional p WHERE x.proyecto = :proyecto GROUP BY p.id")->setParameter('proyecto', $proyecto);
        $resultado = $query->getScalarResult();
        $proyecto->setAvanceProfesionales($resultado);
        return $proyecto;


    }
    
    public function indicadores(){
        
        $date = new \DateTime();
        $date2 = new \DateTime();        
        $date->setTime(00,00);
        
        $date2->setTime(23,59);
        $parametros = array(
            'propietario' => 'Uf',
            'columna' => 'fecha',
            'date1' => $date,
            'date2' => $date2
        );
        $valorUf = $this->listar->obtenerInformacionSoloFecha($parametros);
        if ($valorUf == null){
         $fuente = file_get_contents('http://www.bancoestado.cl/bancoestado/indiceseconomicos/indicadores.asp');
         if ($fuente == false){
             $uf = "NA";
             return uf;
             
        }
         
         $tipo = 'uf';
         $limite = 'UF</a></font></td>';
         $domain = strstr($fuente, $limite);
         $domain = $domain;
        
         switch ($tipo) {
         case "uf":
         $domain=strip_tags($domain);
         $domain=split('\n',$domain);
         $uf = (float)str_replace(array("\r\n", "\n", "\r", "\t","&","UF"," ","$","."),"",$domain[0]);
         $informacion = array(
             'valorUf' => $uf,
             'fecha' => new \DateTime()
         );
         $this->addLocation->salvarUf($informacion);
         return $uf;
         break;
         case "dolar":
         $domain=strip_tags($domain);
         $domain=explode('\n',$domain);
         return str_replace(array("\r\n", "\n", "\r", "\t","&","lar Observado"," ","$"),"",$domain[0]);
         break;
         case 2:
         echo "i equals 2";
         break;
}   
        }else{
            foreach($valorUf as $valorUf){
                $aux = $valorUf->getValorUf();
                
            }
            return $aux;
            
        }

}

    public function comprobarLicitacionesFecha(){
        $fecha = new \DateTime('now');
        $contarLicitacion = $this->em->createQuery('SELECT COUNT(x.nombre) FROM AppMediBundle:Licitacion x WHERE x.fechaTermino < :fecha AND x.estado IN (1,2)')->setParameter('fecha', $fecha->format('Y-m-d H:i:s'));
        $contarLicitacion = $contarLicitacion->getSingleScalarResult();
        return $contarLicitacion;
        
    }
    
    public function obtenerDuplicado($fechaInicio, $fechaTermino){
        $query = $this->em->createQuery('SELECT COUNT(x.id) FROM AppMediBundle:Horas x WHERE x.fechaInicio <= :fechaInicio AND x.fechaInicio >= :fechaInicio OR x.fechaInicio <= :fechaTermino AND x.fechaTermino >= :fechaTermino ')->setParameters(array(
            'fechaInicio' => $fechaInicio,
            'fechaTermino' => $fechaTermino
        ));
        $horas = $query->getSingleScalarResult();
        return $horas;
        
    }
}
