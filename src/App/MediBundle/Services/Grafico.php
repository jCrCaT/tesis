<?php
namespace App\MediBundle\Services;

use Doctrine\ORM\EntityManager;
use App\MediBundle\Entity\Proyecto;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Grafico
{
    protected $em;
    private $cont;
    
    public function __construct(EntityManager $entityManager, Listar $listar, Comprobar $comprobar,Container $container)
    {
        $this->em = $entityManager;
        $this->listar = $listar;
        $this->comprobar = $comprobar;
        $this->cont = $container;
    }
    
    
    public function obtenerProyectoActivo()
    { 
       $obtenerDW = $this->cont->get('doctrine')->getManager('datawarehouse');
       $obtenerProyecto1 = $obtenerDW->createQuery('SELECT x FROM DwBundle:FtAvanceProyecto x');
       $result1 = $obtenerProyecto1->getResult();
       $obtenerProyecto = $this->em->createQuery('SELECT x FROM AppMediBundle:Proyecto x WHERE x.status = :status')
               ->setParameter('status', 1);          
       
       $result = $obtenerProyecto->getResult();
       if(!$obtenerProyecto){
           return null;
       }
       $informacion = array();
       $i = 0;
       $avanceFinal = 0;
       $duracionFinal = 0;
       $costoActual = 0;
       $division = 0;
       foreach($result as $result){
           $obtenerUsuario = $this->em->createQuery('SELECT x FROM AppMediBundle:UserProyecto x WHERE x.proyecto = :proyecto')
                   ->setParameter('proyecto', $result->getId());
           $result1 = $obtenerUsuario->getResult();
           $arrayUsuarios = array();
           $x = 0;
           foreach ($result1 as $result1){
               $parametros = array(
                   'propietario' => 'Horas',
                   'columna' => 'profesional',
                   'segundacolumna' => 'proyecto',
                   'id' => $result1->getProfesional(),
                   'proyecto' => $result->getId()
               );
               $horasUsuarios = $this->listar->obtenerUsuariosGrafico($parametros);
               if($horasUsuarios == null){
                   $arrayUsuarios[$x] = array(
                   "nombre" => $result1->getProfesional()->getPnombre()." ".$result1->getProfesional()->getPapellido(),
                   "porcentaje" => 0,
                   "horasprogresadas" => 0,
                   "horasasignadas" => $result1->getHoras(),
                   "valorHora" => $result1->getValorHora(),
                   "valorProgresado" => 0,
                   "valorEsperado" => $result1->getValorHora() * $result1->getHoras()    
               );         
               }else{
                   $duracionProyecto = $this->comprobar->comprobarDuracionActividad($horasUsuarios);
               $avance = ($duracionProyecto / $result1->getHoras())* 100;
               $arrayUsuarios[$x] = array(
                   "nombre" => $result1->getProfesional()->getPnombre()." ".$result1->getProfesional()->getPapellido(),
                   "porcentaje" => $avance,
                   "horasprogresadas" => $duracionProyecto,
                   "horasasignadas" => $result1->getHoras(),
                   "valorHora" => $result1->getValorHora(),
                   "valorProgresado" => $result1->getValorHora() * $duracionProyecto,
                   "valorEsperado" => $result1->getValorHora() * $result1->getHoras()
                       
               );
               $avanceFinal = ($duracionProyecto + $avanceFinal);
               $duracionFinal = $result1->getHoras() + $duracionFinal;
               $costoActual = $costoActual + ($duracionProyecto * $result1->getValorHora());
               $division = $division + ($result1->getValorHora() * $result1->getHoras() );
                   
               }
               $x = $x + 1;
               
           }
               $informacion[$i] = array(
                   "proyecto" => $result->getNombreProyecto(),
                   "usuarios" => $arrayUsuarios,
                   "avance" => ($avanceFinal / $duracionFinal) * 100,
                   "avanceDinero" => ($costoActual / $division) *100
                   );
               
           $i = $i + 1;
           $avanceFinal = 0;
           $costoActual = 0;
           
       }
       return $informacion;
    }
    
    public function obtenerMisProyectos($usuarioEmpresa){
        $parametros = array(
            'propietario' => 'UserProyecto',
            'columna' => 'profesional',
            'id' => $usuarioEmpresa->getId()
        );
        $misProyectos = $this->listar->obtenerInformacion($parametros);
        $informaciónProyecto = array();
        $x = 0;
        foreach($misProyectos as $misProyectos){
            $horas = array(
                   'propietario' => 'Horas',
                   'columna' => 'profesional',
                   'segundacolumna' => 'proyecto',
                   'id' => $misProyectos->getProfesional()->getId(),
                   'proyecto' => $misProyectos->getProyecto()->getId()
                
            );
            $horasTrabajadas = $this->listar->obtenerUsuariosGrafico($horas);
            $avanceProyecto = $this->comprobar->comprobarDuracionActividad($horasTrabajadas);
            $informaciónProyecto[$x] = array(
                'nombre' => $misProyectos->getProyecto()->getNombreProyecto(),
                'avance' => ($avanceProyecto / $misProyectos->getHoras()) *100,
            );
            $x = $x + 1;
        }
        
        return $informaciónProyecto;
        
    }
   
}
