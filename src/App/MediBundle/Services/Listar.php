<?php
namespace App\MediBundle\Services;

use Doctrine\ORM\EntityManager;
use App\MediBundle\Entity\Pais;
use App\MediBundle\Entity\Region;
use App\MediBundle\Entity\Ciudad;
use App\MediBundle\Entity\Comuna;
use App\MediBundle\Entity\User1;
use App\MediBundle\Entity\TipoExamen;

class Listar
{
    protected $em;
    
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }
    
    public function listarItems($buscar, $securityContext, $usuarioEmpresa)
    {
        if($securityContext->isGranted('ROLE_SUPER_ADMIN')){
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$buscar.' x WHERE x.id >= :id ORDER BY x.id ASC')->setParameter('id', 1);
            $result = $query->getResult();
            return $result;            
        }else{
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$buscar.' x WHERE x.empresa = :id ORDER BY x.id ASC')->setParameter('id', $usuarioEmpresa->getEmpresa());
            $result = $query->getResult(); 
            return $result;           
        }
        //}
    }
    
    public function obtenerInformacion($parametros){
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$parametros['propietario'].' x WHERE x.'. $parametros['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $parametros['id']);
            $result = $query->getResult(); 
            return $result;
        
    }
    
    public function obtenerInformacionFecha($parametros){
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$parametros['propietario'].' x WHERE x.'. $parametros['columna'].' = :id AND x.fechaInicio >= :date1 and x.fechaTermino <= :date2 ORDER BY x.id ASC')->setParameters(array(
                'id' => $parametros['id'],
                'date1' => $parametros['date1'],
                'date2' => $parametros['date2'],
            ));
            //$query = $this->em->createQuery('SELECT x FROM AppMediBundle:Horas x WHERE x.proyecto = 57 AND x.fechaInicio > 2014-09-18 08:00:00 and x.fechaTermino   ');
            $result = $query->getResult(); 
            return $result;
        
    }
    
    public function obtenerInformacionSoloFecha($parametros){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$parametros['propietario'].' x WHERE x.'. $parametros['columna'].' >= :date1 and x.'. $parametros['columna'].' <= :date2')->setParameters(array(
            'date1' => $parametros['date1'],
            'date2' => $parametros['date2']
        ));
        $result = $query->getResult();
        return $result;
    }
    
    public function obtenerInformacionAtomica($parametros){
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'. $parametros['propietario'] .' x WHERE x.'. $parametros['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $parametros['id']);
            $result = $query->getSingleResult(); 
            return $result;
        
    }
    
    //public function obtenerInformacionAtomica($parametros){
    //        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$parametros['propietario'].' x WHERE x.'. $parametros['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $parametros['id']);
    //        $result = $query->getSingleResult(); 
    //        return $result;
        
    //}
    
    public function obtenerFilaUnica($parametros){
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$parametros['propietario'].' x WHERE x.'. $parametros['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $parametros['id']);
            $result = $query->getSingleResult(); 
            return $result;
        
    }
    
    public function obtenerUsuariosGrafico($parametros){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$parametros['propietario'].' x WHERE x.'. $parametros['columna'].' = :id AND x.'.$parametros['segundacolumna'].' = :segundoid ORDER BY x.id ASC')->setParameters(
                array(
                    'id' => $parametros['id'],
                    'segundoid' => $parametros['proyecto']
                ));
            $result = $query->getResult(); 
            return $result;        
    }
    
    public function listarReuniones($usuarioEmpresa){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:Reunion x LEFT JOIN x.dependencia p WHERE p = :id')->setParameter('id', $usuarioEmpresa->getId());
        $result = $query->getResult();
        return $result;
    }
    
    public function obtenerPermiso($parametros)
    {
    $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$parametros['propietario'].' x WHERE x.id >= :id ORDER BY x.id ASC')->setParameter('id', $parametros['id']);
            $result = $query->getResult();
            return $result;            
    }

    public function obtenerUltimoAvance($parametros)
    {
        $query = $this->em->createQuery('SELECT x FROM DwBundle:'.$parametros['dw'].' x WHERE x.proyecto = :id AND x.fechaId = (select max(a.fechaId) from DwBundle:FtAvanceProyectoProfesional a)')->setParameter('id', $parametros['id']);
        $result = $query->getResult();
        return $result;
    }

    public function buscar($parametros){
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$parametros['propietario'].' x WHERE lower(x.'. $parametros['columna'].') LIKE lower(:id) ORDER BY x.id ASC')->setParameter('id', '%'.$parametros['id'].'%');
            $result = $query->getResult(); 
            return $result;
        
    }

    public function buscarProfesional($parametros){
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'.$parametros['propietario'].' x WHERE lower(CONCAT(x.pnombre,x.papellido)) LIKE lower(:id) ORDER BY x.id ASC')->setParameter('id', '%'.$parametros['id'].'%');
            $result = $query->getResult(); 
            return $result;
        
    }

    public function obtenerHitos($parametros){
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:Hito x INNER JOIN x.proyecto p INNER JOIN p.asignacion a WHERE a.profesional = :profesional')->setParameter('profesional', $parametros->getId());
            $result = $query->getResult(); 
            return $result;
        
    }
    public function obtenerHitosLic($parametros){
            $query = $this->em->createQuery('SELECT x FROM AppMediBundle:HitoLic x INNER JOIN x.licitacion p INNER JOIN p.asignacion a WHERE a.profesional = :profesional')->setParameter('profesional', $parametros->getId());
            $result = $query->getResult(); 
            return $result;
        
    }

    public function obtenerMisAvances($parametros){
            $query = $this->em->createQuery('
                SELECT p.nombreProyecto as nombre, SUM(h.duracion) as suma,p.horasProgramadas, x.horas FROM AppMediBundle:UserProyecto x
                JOIN x.profesional b 
                JOIN x.proyecto p
                JOIN p.horasAvanzadas h
                WHERE x.profesional = :profesional
                GROUP BY h.proyecto, p.id, x.horas ')->setParameter('profesional', $parametros->getId());
            $result = $query->getResult(); 
            return $result;
        
    }

    public function obtenerSuma($parametros){
        $q = $this->em->createQueryBuilder();
        $q->select(['p.proyecto as nombre'])
        ->addSelect('SUM(p.duracion) AS suma')
        ->from('AppMediBundle:Horas', 'p')
        ->where('p.profesional = :profesional')
        ->groupBy('p.proyecto')
        ->setParameter('profesional', $parametros->getId());
        $result = $q->getQuery(); 
        $result = $result->getResult();
        return $result;
    }

    public function obtenerAsignacion(){
        $query = $this->em->createQuery();
        $result = $query->getResult();
        return $result();
    }

    public function avanceActProf($proyecto){
            $query = $this->em->createQuery('SELECT SUM(x.duracion) as suma, CONCAT(p.pnombre,p.papellido) as nombre, a.nombre as actnom FROM AppMediBundle:Horas x INNER JOIN x.profesional p INNER JOIN x.actividad a WHERE x.proyecto = :proyecto GROUP BY p.id, a.id')->setParameter('proyecto', $proyecto->getId());
            $query1 = $query->getResult();
            $proyecto->setActProf($query1);
        return $proyecto;

    }
}
