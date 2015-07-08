<?php
namespace App\MediBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\EntityManager;
use App\MediBundle\Entity\Proyecto as FtAvance;
use App\MediBundle\Entity\User1 as Profesional;
use App\MediBundle\Entity\Requerimiento as Requerimiento;
use App\MediBundle\Entity\Licitacion as Licitacion;
use App\MediBundle\Entity\AsignacionEtapa as AsignacionEtapa;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class BuscarDW
{
    private $cont;
    
    public function __construct(Container $container){
        $this->cont = $container;
    }


    public function postLoad(LifecycleEventArgs $args)
    {
            $entidad = $args->getEntity();
            if ($entidad instanceof FtAvance) {
                $obtenerDW = $this->cont->get('doctrine')->getManager('datawarehouse');
                $obtenerDW1 = $this->cont->get('doctrine')->getManager('default');
                $obtenerProyecto1 = $obtenerDW->createQuery('SELECT x FROM DwBundle:FtAvanceProyecto x WHERE x.proyecto = :proyecto')->setParameter('proyecto', $entidad->getId());
                $result1 = $obtenerProyecto1->getResult();
                $obtenerAvanceProf = $obtenerDW->createQuery('SELECT x FROM DwBundle:FtAvanceProyectoProfesional x WHERE x.proyecto = :proyecto')->setParameter('proyecto', $entidad->getId());
                $result2 = $obtenerAvanceProf->getResult();
                $obtenerAvanceProyecto = $obtenerDW1->createQuery('SELECT SUM(x.duracion) FROM AppMediBundle:Horas x WHERE x.proyecto = :id')->setParameter('id', $entidad->getId());
                $result3 = $obtenerAvanceProyecto->getSingleScalarResult();
                $entidad->setAvancesProfesionales($result2);
                $entidad->setAvance($result3);

                //ACTIVIDADES
                $obtenerDW = $this->cont->get('doctrine')->getManager('default');
                $obtenerActividad = $obtenerDW->createQuery('SELECT SUM(x.duracion) as suma, a.nombre FROM AppMediBundle:Horas x INNER JOIN x.actividad a WHERE x.proyecto = :proyecto GROUP BY a.id')->setParameter('proyecto', $entidad->getId());
                $result4 = $obtenerActividad->getResult();
                $entidad->setActividades($result4);

                //ACTXPROFESIONAL
                //$obtenerDW = $this->cont->get('doctrine')->getManager('default');
                //$obtenerActProf = $obtenerDW->createQuery('SELECT SUM(x.duracion) as suma, CONCAT(p.pnombre,' ',p.papellido) as nombre, a.nombre as actnom FROM AppMediBundle:Horas x INNER JOIN x.profesional p INNER JOIN x.actividad a WHERE x.proyecto = :proyecto GROUP BY p.id, a.id')->setParameter('proyecto', $entidad->getId());
                //$result5 = $obtenerActProf->getResult();
                //$entidad->setActProf($result5);

                //FINANZAS
                $obtenerFinanzas = $obtenerDW1->createQuery("SELECT SUM(x.horas * x.valorHora) FROM AppMediBundle:UserProyecto x WHERE x.proyecto = :proyecto")->setParameter('proyecto', $entidad->getId());
                $obtenerFinanzas = $obtenerFinanzas->getSingleScalarResult();
                $obtenerAvanceFinanza = $obtenerDW1->createQuery("SELECT SUM(x.duracion * a.valorHora) FROM AppMediBundle:Horas x INNER JOIN x.proyecto p INNER JOIN p.asignacion a WHERE a.fechaInicio <= x.fechaInicio AND a.fechaTermino >= x.fechaTermino AND a.proyecto = x.proyecto AND a.profesional = x.profesional AND x.proyecto = :proyecto")->setParameter('proyecto', $entidad->getId());
                $obtenerAvanceFinanza = $obtenerAvanceFinanza->getSingleScalarResult();
                $finanzas = array(
                    'valorPresupuestado' => $obtenerFinanzas,
                    'valorFecha' => $obtenerAvanceFinanza);
                $entidad->setFinanzas($finanzas);
            }
            
            if($entidad instanceof Profesional){
                $obtenerInfo = $this->cont->get('doctrine')->getManager('datawarehouse');
                $query = $obtenerInfo->createQuery('SELECT x FROM DwBundle:FtAvanceProyectoProfesional x WHERE x.profesional = :profesional AND x.fechaId = (select max(a.fechaId) from DwBundle:FtAvanceProyectoProfesional a)')->setParameter('profesional', $entidad->getId());
                $result1 = $query->getResult();
                $entidad->setMisAvances($result1);
                
            }
            
            if($entidad instanceof Licitacion){
                $obtenerInfo = $this->cont->get('doctrine')->getManager('datawarehouse');
                $obtenerInfo1 = $this->cont->get('doctrine')->getManager('default');
                $obtenerLicitacion = $obtenerInfo->createQuery('SELECT x FROM DwBundle:FtAvanceLicitacion x WHERE x.licitacion = :licitacion')->setParameter('licitacion', $entidad->getId());
                $obtenerAvance = $obtenerInfo1->createQuery('SELECT SUM(x.duracion) FROM AppMediBundle:HorasLic x INNER JOIN x.requerimiento r INNER JOIN r.licitacion l WHERE l.id = :id')->setParameter('id', $entidad->getId());
                $result = $obtenerLicitacion->getResult(); 
                $result1 = $obtenerAvance->getSingleScalarResult();     
                $entidad->setFactTable($result);
                $entidad->setAvance($result1);

                //FINANZAS
                $obtenerFinanzas = $obtenerInfo1->createQuery("SELECT SUM(x.horas * x.valorHora) FROM AppMediBundle:UserLicitacion x WHERE x.licitacion = :licitacion")->setParameter('licitacion', $entidad->getId());
                $obtenerFinanzas = $obtenerFinanzas->getSingleScalarResult();
                $obtenerAvanceFinanza = $obtenerInfo1->createQuery("SELECT SUM(x.duracion * a.valorHora) FROM AppMediBundle:HorasLic x INNER JOIN x.requerimiento r INNER JOIN r.licitacion l INNER JOIN l.asignacion a WHERE a.fechaInicio <= x.fechaInicio AND a.fechaTermino >= x.fechaTermino AND a.licitacion = r.licitacion AND a.profesional = x.profesional AND r.licitacion = :licitacion")->setParameter('licitacion', $entidad->getId());
                $obtenerAvanceFinanza = $obtenerAvanceFinanza->getSingleScalarResult();
                $finanzas = array(
                    'valorPresupuestado' => $obtenerFinanzas,
                    'valorFecha' => $obtenerAvanceFinanza);
                $entidad->setFinanzas($finanzas);
            }

           if($entidad instanceof Profesional){
                $obtenerInfo = $this->cont->get('doctrine')->getManager('default');
                $obtenerAvances = $obtenerInfo->createQuery('SELECT x.horas, SUM(h.duracion) as suma, p.nombreProyecto FROM AppMediBundle:UserProyecto x INNER JOIN x.proyecto p INNER JOIN p.horasAvanzadas h WHERE  x.profesional = :profesional AND h.profesional = :profesional GROUP BY p.id,x.horas')->setParameter('profesional', $entidad->getId());
                $result = $obtenerAvances->getResult();
                $entidad->setMisAvances($result);
            }

            if($entidad instanceof AsignacionEtapa){
                $obtenerInfo = $this->cont->get('doctrine')->getManager('default');
                //$obtenerAvances = $obtenerInfo->createQuery('SELECT SUM(h.duracion) as suma FROM AppMediBundle:Horas h INNER JOIN h.proyecto p INNER JOIN p.asignacionEtapa e WHERE e.fechaInicio <= h.fechaInicio AND e.fechaTermino >= h.fechaTermino and e.id = :id')->setParameter('id', $entidad->getId());
                //$obtenerAvances = $obtenerInfo->createQuery('SELECT SUM(x.duracion) as suma FROM AppMediBundle:Horas x');
                $obtenerAvances = $obtenerInfo->createQuery('SELECT SUM(h.duracion) FROM AppMediBundle:AsignacionEtapa x INNER JOIN x.proyecto p INNER JOIN p.horasAvanzadas h WHERE x.fechaInicio <= h.fechaInicio AND h.fechaTermino <= x.fechaTermino AND x.id = :id')->setParameter('id', $entidad->getId());
                $result = $obtenerAvances->getSingleScalarResult();
                $entidad->setSumaHoras($result);
            }

            if($entidad instanceof Requerimiento){
                $obtenerInfo = $this->cont->get('doctrine')->getManager('default');
                $obtenerAvances = $obtenerInfo->createQuery('SELECT SUM(x.duracion) FROM AppMediBundle:HorasLic x WHERE x.requerimiento = :requerimiento')->setParameter('requerimiento', $entidad->getId());
                $result = $obtenerAvances->getSingleScalarResult();
                $entidad->setAvanceHoras($result);
            }
        
    
}
}

