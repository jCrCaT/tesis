<?php
namespace App\MediBundle\Services;

use Doctrine\ORM\EntityManager;
use App\MediBundle\Entity\Pais;
use App\MediBundle\Entity\Region;
use App\MediBundle\Entity\Ciudad;
use App\MediBundle\Entity\Comuna;
use App\MediBundle\Entity\User1;
use App\MediBundle\Entity\Empresa;
use App\MediBundle\Entity\Rango;
use App\MediBundle\Entity\Area;
use App\MediBundle\Entity\Proyecto;
use App\MediBundle\Entity\UserArea;
use App\MediBundle\Entity\Cliente;
use App\MediBundle\Entity\Estudio;
use App\MediBundle\Entity\Actividad;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Entity\UserProyecto;
use App\MediBundle\Entity\TipoEstudio;
use App\MediBundle\Entity\Reunion;
use App\MediBundle\Entity\Minuta;
use App\MediBundle\Entity\Uf;
use App\MediBundle\Entity\Documento;
use App\MediBundle\Entity\Licitacion;
use App\MediBundle\Entity\Requerimiento;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Permiso
{
    protected $em;
    
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }
    
    public function salvarLocacion($parametros)
    {        
        
        switch ($parametros['tipo']){
            case "Pais":
                $objeto = new Pais();
                break;
            case "Region":
                $objeto = new Region();
                
                break;
            case "Ciudad":
                $objeto = new Ciudad();
                
                break;
            case "Comuna":
                $objeto = new Comuna();
                
                break;
        }
        $objeto->setNombre($parametros['nombre']);
        if($parametros['dependencia'] == 'noone')
        {
            $this->em->persist($objeto);
            $this->em->flush();
        }
        else
        {
            $objeto->setSuperior($parametros['dependencia']);
            $this->em->persist($objeto);
            $this->em->flush();
            
        }
    }
    
    public function salvarUsuario($parametros)
    {   
                $objeto = new User1();
                $objeto->setPassword('prueba');
                $objeto->setEmpresa($parametros['empresa']);
                $objeto->setUsername($parametros['username']);
                $objeto->setPnombre($parametros['pnombre']);
                $objeto->setSnombre($parametros['snombre']);
                $objeto->setPapellido($parametros['papellido']);
                $objeto->setSapellido($parametros['sapellido']);
                $objeto->setCorreo($parametros['correo']);
                $objeto->setDireccion($parametros['direccion']);
                $objeto->setComuna($parametros['comuna']);
                $objeto->setRoles($parametros['role']);
                $this->em->persist($parametros['imagen']);
                $objeto->setImagenPerfil($parametros['imagen']);
                $this->em->persist($objeto);
                $this->em->flush();
                return "success";
                
     
    }
    
    public function salvarProducto($parametros)
    {
        $objeto = new Producto();
        $objeto->setNombre($parametros['nombre']);
        $objeto->setDescripcion($parametros['descripcion']);
        $this->em->persist($objeto);
        $this->em->flush();
    }
    
    public function salvarEmpresa($parametros)
    {
        $objeto = new Empresa();
        $objeto->setNombre($parametros['nombre']);
        $objeto->setGiro($parametros['giro']);
        $objeto->setDireccion($parametros['direccion']);
        $objeto->setComuna($parametros['comuna']);
        $objeto->setTelefono($parametros['telefono']);
        $objeto->setCorreo($parametros['correo']);
        $objeto->setRut($parametros['rut']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarRango($parametros)
    {
        $objeto = new Rango();
        $objeto->setName($parametros['nombre']);
        $objeto->setRole('ROLE_'.$parametros['role']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarArea($parametros)
    {
        $objeto = new Area();
        $objeto->setNombre($parametros['nombre']);
        $objeto->setEmpresa($parametros['userEmpresa']);
        $objeto->setDescripcion($parametros['descripcion']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarProyecto($parametros)
    {
        $objeto = new Proyecto();
        $objeto->setNombreProyecto($parametros['nombre']);
        $objeto->setDescripcion($parametros['descripcion']);
        $objeto->setFechaInicio($parametros['fechaInicio']);
        $objeto->setFechaFin($parametros['fechaFin']);
        $objeto->setHorasProgramadas($parametros['horasProgramadas']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarAsignarArea($parametros)
    {
        $objeto = new UserArea();
        $objeto->setArea($parametros['area']);
        $objeto->setEmpleado($parametros['empleado']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarAsignarProyecto($parametros)
    {
        $objeto = new UserProyecto();
        $objeto->setProyecto($parametros['area']);
        $objeto->setProfesional($parametros['profesional']);
        $objeto->setHoras($parametros['horas']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarCliente($parametros)
    {
        $objeto = new Cliente();
        $objeto->setRut($parametros['rut']);
        $objeto->setNombre($parametros['nombre']);
        $objeto->setComuna($parametros['comuna']);
        $objeto->setGiro($parametros['giro']);
        $objeto->setDireccion($parametros['direccion']);
        $objeto->setTelefono($parametros['telefono']);
        $objeto->setCorreoelectronico($parametros['correo']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarActividad($parametros)
    {
        $objeto = new Actividad();
        $objeto->setNombre($parametros['nombre']);
        $objeto->setDescripcion($parametros['descripcion']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarEstudio($parametros)
    {
        $objeto = new Estudio();
        $objeto->setDescripcion($parametros['descripcion']);
        $objeto->setAnoInicio($parametros['anoInicio']);
        $objeto->setAnoTermino($parametros['anoTermino']);
        $objeto->setProfesional($parametros['profesional']);
        $objeto->setInstitucion($parametros['institucion']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarHora($parametros)
    {
        $objeto = new Horas();
        $objeto->setId($parametros['id']);
        $objeto->setProyecto($parametros['proyecto']);
        $objeto->setProfesional($parametros['profesional']);
        $objeto->setActividad($parametros['actividad']);
        $objeto->setFechaInicio($parametros['fechaInicio']);
        $objeto->setFechaTermino($parametros['fechaTermino']);
        $this->em->persist($objeto);
        $metadata = $this->em->getClassMetaData(get_class($objeto));
        $metadata->setIdGenerator(new \Doctrine\ORM\Id\AssignedGenerator());
        $this->em->flush();
    }
    
    public function salvarTipoEstudio($parametros){
        $objeto = new TipoEstudio();
        $objeto->setNombre($parametros['nombre']);
        $objeto->setDescripcion($parametros['descripcion']);
        $this->em->persist($objeto);
        $this->em->flush();
    }
    
    public function salvarReunion($parametros)
    {
        $objeto = new Reunion();
        $objeto->setFechaInicio($parametros['fechaInicio']);
        $objeto->setCliente($parametros['cliente']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarMinuta($parametros)
    {
        $objeto = new Minuta();
        $objeto->setDescripcion($parametros['descripcion']);
        $objeto->setProfesional($parametros['profesional']);
        $objeto->setReunion($parametros['reunion']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarUf($parametros){
        $objeto = new Uf();
        $objeto->setValorUf($parametros['valorUf']);
        $objeto->setFecha($parametros['fecha']);
        $this->em->persist($objeto);
        $this->em->flush();
        return "success";
    }
    
    public function salvarDocumento($parametros, $objeto){
        $this->em->persist($parametros['documento']);
        $objeto->setDocumento($parametros['documento']);
        $this->em->flush();          
        return "success";
        
        
    }
    
    public function salvarLicitacion($parametros){
        $objeto = new Licitacion();
        $objeto->setNombre($parametros['nombre']);
        $objeto->setFechaInicio($parametros['fechaInicio']);
        $objeto->setFechaTermino($parametros['fechaTermino']);
        $this->em->persist($objeto);
        $this->em->flush();
    }
    
    public function salvarRequerimiento($parametros){
        $objeto = new Requerimiento();
        $objeto ->setNombre($parametros['nombre']);
        $objeto ->setProfesional($parametros['profesional']);
        //$this->em->persist($parametros['documento']);
        //$objeto ->setDocumento($parametros['documento']);
        $objeto ->setLicitacion($parametros['licitacion']);
        $this->em->persist($objeto);
        $this->em->flush();
    }
    
}
