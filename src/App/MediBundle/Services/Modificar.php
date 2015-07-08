<?php
namespace App\MediBundle\Services;

use Doctrine\ORM\EntityManager;

class Modificar
{

    protected $em;
    
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }
    
    public function modificarItem($propiedades)
    {
        
        $query = $this->em->getRepository('AppMediBundle:'.$propiedades['tipo'])->findOneById($propiedades['id']);
        if($propiedades['tipo'] != 'User1' OR $propiedades['tipo'] != 'Rango' OR $propiedades['tipo'] != 'licitacion' ){
        $query->setNombre($propiedades['nombre']);
        }
        if($propiedades['superior'] != null){
            $query->setSuperior($propiedades['superior']);
            $this->em->flush();
            return "success";   
        }
        switch($propiedades['tipo']){
        case 'Empresa':
        
           $query->setRut($propiedades['rut']);
           $query->setGiro($propiedades['giro']);
           $query->setDireccion($propiedades['direccion']);
           $query->setCorreo($propiedades['correo']);
           $query->setTelefono($propiedades['telefono']);
           $query->setComuna($propiedades['comuna']);
           break;
        
        case 'Area':
            $query->setDescripcion($propiedades['descripcion']);
            break;
        case 'Actividad':
            $query->setDescripcion($propiedades['descripcion']); 
            break;
        case 'Ciudad':
            break;
        case 'Empresa':
            $query->setGiro($propiedades['giro']);
            $query->setRut($propiedades['rut']);
            $query->setComuna($propiedades['comuna']);
            $query->setCorreo($propiedades['correo']);
            $query->setTelefono($propiedades['telefono']);
            $query->setDireccion($propiedades['direccion']);
            break;
        case 'User1':
            $query->setUsername($propiedades['username']);
            $query->setPnombre($propiedades['pnombre']);
            $query->setSnombre($propiedades['snombre']);
            $query->setPapellido($propiedades['papellido']);
            $query->setSapellido($propiedades['sapellido']);
            $query->setPassword($propiedades['password']);
            $query->setCorreo($propiedades['correo']);
            $query->setEmpresa($propiedades['empresa']);
            $query->setDireccion($propiedades['direccion']);
            //$query->setComuna();
            break;
        case 'Rango':
            $query->setRole('ROLE_'.$propiedades['role']); 
            break;
        case 'Proyecto':
            $query->setDescripcion($propiedades['descripcion']);
            $query->setNombreProyecto($propiedades['nombreProyecto']);
            $query->setHorasProgramadas($propiedades['HorasProgramadas']);
            $query->setFechaInicio($propiedades['fechaInicio']);
            $query->setFechaFin($propiedades['fechaFin']);
        }
        $this->em->flush();
        return "success";
    }
    
    public function modificarProfReunion($propiedades){
        $query = $this->em->getRepository('AppMediBundle:'. $propiedades['tipoInterno'])->findOneById($propiedades['valorInterno']);
        if($propiedades['tipoInterno'] == 'Reunion'){
                        
        }else{             
        }
        switch($propiedades['tipoInterno']){
            case "Reunion":
                $query->setDependencia($propiedades['dependencia']);                
                break;
            case "User1":
                $query->setRoles($propiedades['id']);
                break;            
        }
        
        $this->em->flush();  
    }
    
    public function modificarRango($propiedades){
        $query = $this->em->getRepository('AppMediBundle:'.$propiedades['tipo'])->findOneById($propiedades['id']);
        $query->setRole('ROLE_'.$propiedades['role']);
        $query->setName($propiedades['nombre']);  
        $this->em->flush();
        
    }
    
    public function modificarProyecto($propiedades){
        $query = $this->em->getRepository('AppMediBundle:'.$propiedades['tipo'])->findOneById($propiedades['id']);
        $query->setDescripcion($propiedades['descripcion']);
        $query->setNombreProyecto($propiedades['nombreProyecto']);
        $query->setHorasProgramadas($propiedades['horasProgramadas']);
        $query->setFechaInicio($propiedades['fechaInicio']);
        $query->setFechaFin($propiedades['fechaFin']);
        $this->em->flush();
        
    }
    
    public function modificarLicitacion($propiedades){
        $query = $this->em->getRepository('AppMediBundle:'.$propiedades['tipo'])->findOneById($propiedades['id']);
        $query->setEstado($propiedades['valor']);
        $this->em->flush();
        
    }
    
    public function modificarProyectoLic($parametros){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'. $parametros['propietario'] .' x WHERE x.'. $parametros['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $parametros['id']);
        $query = $query->getSingleResult();
        $query->setStatus($parametros['valor']);
        $this->em->flush();        
    }
    
    public function modificarContrasena($parametros, $usuarioModPass){
        $usuarioModPass->setPassword($parametros["password"]);
        $this->em->flush();
    }
    
    public function modificarPlazoProyecto($proyecto, $parametros){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'. $proyecto['propietario'] .' x WHERE x.'. $proyecto['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $proyecto['id']);
        $query = $query->getSingleResult();
        $query->setFechaFin($parametros["fechaNueva"]);
        if($parametros["accion"] == "a"){
            $query->setHorasProgramadas($query->getHorasProgramadas() + $parametros["horas"]);            
        }
        if($parametros["accion"] == "d"){
            $query->setHorasProgramadas($query->getHorasProgramadas() - $parametros["horas"]); 
            
        }
        $this->em->flush();
        
    }

    public function modificarPlazoLicitacion($proyecto, $parametros){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'. $proyecto['propietario'] .' x WHERE x.'. $proyecto['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $proyecto['id']);
        $query = $query->getSingleResult();
        $query->setFechaTermino($parametros["fechaNueva"]);
        if($parametros["accion"] == "a"){
            $query->setHorasProgramadas($query->getHorasProgramadas() + $parametros["horas"]);            
        }
        if($parametros["accion"] == "d"){
            $query->setHorasProgramadas($query->getHorasProgramadas() - $parametros["horas"]); 
            
        }
        $this->em->flush();
        
    }
            
     public function modificarPlazoEtapa($proyecto, $parametros){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'. $proyecto['propietario'] .' x WHERE x.'. $proyecto['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $proyecto['id']);
        $query = $query->getSingleResult();
        $query->setFechaInicio($parametros["fechaNuevaInicio"]);
        $query->setFechaTermino($parametros["fechaNuevaTermino"]);
        $this->em->flush();
        
    }

    public function modificarPlazoRequerimiento($proyecto, $parametros){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'. $proyecto['propietario'] .' x WHERE x.'. $proyecto['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $proyecto['id']);
        $query = $query->getSingleResult();
        $query->setFechaInicio($parametros["fechaNuevaInicio"]);
        $query->setFechaTermino($parametros["fechaNuevaTermino"]);
        if($parametros["accion"] == "a"){
            $query->setHoras($query->getHoras() + $parametros["horas"]);            
        }
        if($parametros["accion"] == "d"){
            $query->setHoras($query->getHoras() - $parametros["horas"]); 
            
        }
        $this->em->flush();

    }

    public function modificarEstado($parametros){
        $query = $this->em->createQuery('SELECT x FROM AppMediBundle:'. $parametros['propietario'] .' x WHERE x.'. $parametros['columna'].' = :id ORDER BY x.id ASC')->setParameter('id', $parametros['id']);
        $query =$query->getSingleResult();
        $query->setEstado($parametros["etapa"]);
        $this->em->flush();
    }
    

}

