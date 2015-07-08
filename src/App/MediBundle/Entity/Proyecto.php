<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use App\DataWarehouseBundle\Entity;


/**
 * Proyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\ProyectoRepository")
 */
class Proyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreProyecto", type="string", length=255)
     * @Assert\NotNull(message = "Este campo no puede estar vacio")
     */
    private $nombreProyecto;
    
    private $nombreProyecto1;
    
    private $nombreProyecto2;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, nullable=true)
     * @Assert\NotNull(message = "Este campo no puede estar vacio")
     */
    private $codigo;
    
    private $username;
    
    private $username1;
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime", nullable=true)
     */
    private $fechaInicio;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFin", type="datetime", nullable=true)
     */
    private $fechaFin;
    
    /**
     * @ORM\ManyToOne(targetEntity="EstadoLicitacion")
     * @ORM\JoinColumn(name="status", referencedColumnName="id")
     * 
     */
    private $status;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="horasProgramadas", type="decimal", nullable=true)
     */
    private $horasProgramadas;
    

    /**
     * @ORM\OneToMany(targetEntity="Horas", mappedBy="proyecto")      
     */
    private $horasAvanzadas;
    
    /**
     * @ORM\OneToMany(targetEntity="UserProyecto", mappedBy="proyecto")      
     */
    private $asignacion;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="proyectos")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $clientes;
    
    
    private $factTable;
    
    private $avancesProfesionales;
    
    /**
     * @ORM\OneToMany(targetEntity="ExcepcionPlazoProyecto", mappedBy="proyecto")      
     */
    private $excepcionesPlazo;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="AsignacionEtapa", mappedBy="proyecto")
     */
    private $asignacionEtapa;


    /**
     *
     * @ORM\OneToMany(targetEntity="Hito", mappedBy="proyecto")
     */
    private $hito;

    private $avanceHoras;

    private $avance;

    private $avanceProfesionales;

    private $avanceProfesionalesLittle;

    private $finanzas;

    private $actividades;

    private $actProf;

    public function __construct(){
        $this->asignacion = new ArrayCollection();
        $this->asignacionEtapa = new ArrayCollection();
        $this->excepcionesPlazo = new ArrayCollection();
        $this->hito = new ArrayCollection();
        $this->horasAvanzadas = new ArrayCollection();
        
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Licitacion", inversedBy="proyecto")
     * @ORM\JoinColumn(name="licitacion_id", referencedColumnName="id")
     */
    protected $licitacion;

    /**
     * Set nombre
     *
     * @param string $nombreProyecto
     * @return Proyecto
     */
    public function setNombreProyecto($nombreProyecto)
    {
        $this->nombreProyecto = $nombreProyecto;

        return $this;
    }
    
    public function getAsignacion()
    {
        return $this->asignacion;
    }
    
    public function getAsignacionEtapa()
    {
        return $this->asignacionEtapa;
    }

    /**
     * Get nombreProyecto
     *
     * @return string 
     */
    public function getNombreProyecto()
    {
        return $this->nombreProyecto;
    }

    /**
     * Get nombreProyecto
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }
    
    public function setNombreProyecto1($nombreProyecto1)
    {
        $this->nombreProyecto1 = $nombreProyecto1;

        return $this;
    }
    
    public function getNombreProyecto1()
    {
        return $this->nombreProyecto;
    }
    
    public function setNombreProyecto2($nombreProyecto2)
    {
        $this->nombreProyecto2 = $nombreProyecto2;

        return $this;
    }
    
    public function setNombreProyecto3($nombreProyecto3)
    {
        $this->nombreProyecto3 = $nombreProyecto3;

        return $this;
    }
    
    public function getNombreProyecto2()
    {
        return $this->nombreProyecto;
    }
    
    public function getUsername()
    {
        return $this->username;
    }
    
    public function getUsername1()
    {
        return $this->username;
    }
    
    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    
    /**
     * Set descripcionProyecto
     *
     * @param string $descripcionProyecto
     * @return Proyecto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }    

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Proyecto
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }
    
    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Proyecto
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }
    
    /**
     * Set horasPlanificadas
     *
     * @param integer $horasPlanificadas
     * @return integer
     */
    public function setHorasPlanificadas($horasPlanificadas)
    {
        $this->horasPlanificadas = $horasPlanificadas;

        return $this;
    }

    /**
     * Get horasPlanificadas
     *
     * @return integer
     */
    public function getHorasPlanificadas()
    {
        return $this->horasPlanificadas;
    }
    
    /**
     * Set profesional
     *
     * @param integer $empresa
     * @return Proyecto
     */
    public function setProfesional($profesional)
    {
        $this->profesional = $profesional;

        return $this;
    }

    /**
     * Get profesional
     *
     * @return integer 
     */
    public function getProfesional()
    {
        return $this->profesional;
    }
    
    /**
     * Set status
     *
     * @param integer $status
     * @return Proyecto
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get horasProgramadas
     *
     * @return integer 
     */
    public function getHorasProgramadas()
    {
        return $this->horasProgramadas;
    }
    
    /**
     * Set horasProgramadas
     *
     * @param decimal $horasProgramadas
     * @return Proyecto
     */
    public function setHorasProgramadas($horasProgramadas)
    {
        $this->horasProgramadas = $horasProgramadas;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    public function getHorasAvanzadas()
    {
        return $this->horasAvanzadas;
    }
    
    public function removeHorasAvanzadas($hora){
        $this->horasAvanzadas->removeElement($hora);
        
    }
    
    public function setHorasAvanzadas($hora)
    {
        $var = 0;
        foreach ($this->horasAvanzadas as $dependencia){
            if ($dependencia == $hora){
                $var = 1;
            }
        }
        if($var == 1){
            
        }else{
            $this->horasAvanzadas->add($hora);
        }
        
    }
    
    /**
     * Set licitacion
     *
     * @param string $licitacion
     * @return Proyecto
     */
    public function setLicitacion($licitacion)
    {
        $this->licitacion = $licitacion;

        return $this;
    }

    /**
     * Get licitacion
     *
     * @return string 
     */
    public function getLicitacion()
    {
        return $this->licitacion;
    }

    /**
     * Set licitacion
     *
     * @param string $licitacion
     * @return Proyecto
     */
    public function setFinanzas($finanzas)
    {
        $this->finanzas = $finanzas;

        return $this;
    }

    /**
     * Get licitacion
     *
     * @return string 
     */
    public function getFinanzas()
    {
        return $this->finanzas;
    }
    
    
    /**
     * Set clientes
     *
     * @param string $clientes
     * @return Proyecto
     */
    public function setClientes($clientes)
    {
        $this->clientes = $clientes;

        return $this;
    }

    /**
     * Get clientes
     *
     * @return string 
     */
    public function getClientes()
    {
        return $this->clientes;
    }
    
    public function getFactTable()
    {
        return $this->factTable;
    }
    
    public function setFactTable($arrayObjetos)
    {
        $this->factTable = $arrayObjetos;
    }
    
    public function getAvancesProfesionales()
    {
        return $this->avancesProfesionales;
    }
    
    public function setAvancesProfesionales($avancesProfesionales)
    {
        $this->avancesProfesionales = $avancesProfesionales;
        return $this->avancesProfesionales;
    }

    public function getAvancesProfesionalesLittle()
    {
        return $this->avancesProfesionalesLittle;
    }
    
    public function setAvancesProfesionalesLittle($avancesProfesionalesLittle)
    {
        $this->avancesProfesionalesLittle = $avancesProfesionalesLittle;
        return $this->avancesProfesionalesLittle;
    }
    
    public function getExcepcionesPlazo(){
        return $this->excepcionesPlazo;
    }
    
    public function getHito()
    {
        return $this->hito;
    }

    public function getAvanceHoras(){
        return $this->avanceHoras;
    }

    public function setAvanceHoras($avanceHoras){
        $this->avanceHoras = $avanceHoras;
        return $this->avanceHoras;
    }

    public function getAvance(){
        return $this->avance;
    }

    public function setAvance($avance){
        $this->avance = $avance;
        return $this->avance;
    }

    public function getAvancePRofesionales()
    {
        return $this->avanceProfesionales;
    }
    
    /**
     * Set descripcionProyecto
     *
     * @param string $descripcionProyecto
     * @return Proyecto
     */
    public function setAvanceProfesionales($avanceProfesionales)
    {
        $this->avanceProfesionales = $avanceProfesionales;

        return $this;
    }

    public function getActividades()
    {
        return $this->actividades;
    }
    
    /**
     * Set descripcionProyecto
     *
     * @param string $descripcionProyecto
     * @return Proyecto
     */
    public function setActividades($actividades)
    {
        $this->actividades = $actividades;

        return $this;
    }

    public function getActProf()
    {
        return $this->actProf;
    }
    
    /**
     * Set descripcionProyecto
     *
     * @param string $descripcionProyecto
     * @return Proyecto
     */
    public function setActProf($actProf)
    {
        $this->actProf = $actProf;

        return $this;
    }

    
}
