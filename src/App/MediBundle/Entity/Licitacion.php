<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Licitacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\LicitacionRepository")
 */
class Licitacion
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaTermino", type="datetime")
     */
    private $fechaTermino;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     * 
     */
    
    private $cliente;
    
    /**
     * @ORM\OneToMany(targetEntity="Requerimiento", mappedBy="licitacion")      
     */
    private $dependencia;
    
    /**
     * @ORM\OneToMany(targetEntity="UserLicitacion", mappedBy="licitacion")      
     */
    private $asignacion;
    
    /**
     * @ORM\ManyToOne(targetEntity="EstadoLicitacion")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id")
     * 
     */
    private $estado;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="horasProgramadas", type="decimal", nullable=true)
     */
    private $horasProgramadas;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Proyecto", mappedBy="licitacion")
     */
    private $proyecto;

    /**
     * @ORM\OneToMany(targetEntity="ExcepcionPlazoLicitacion", mappedBy="licitacion")      
     */
    private $excepcionesPlazo;
    
    private $estadoFinal;
    
    private $factTable;
    
    private $ultimoAvance;

    private $informacionAsignada;

    private $avance;

    private $finanzas;

    /**
     *
     * @ORM\OneToMany(targetEntity="HitoLic", mappedBy="licitacion")
     */
    private $hito;
    
    
    
    public function __construct()
    {
        $this->dependencia = new ArrayCollection();
        $this->asignacion = new ArrayCollection();
        $this->proyecto = new ArrayCollection();
        $this->hito = new ArrayCollection();
    }
    
    public function getProyecto()
    {
        return $this->proyecto;
    }
    
    public function getDependencia()
    {
        return $this->dependencia;
    }
    
    public function getAsignacion()
    {
        return $this->asignacion;
    }
    
    
    public function removeDependencia($requerimiento){
        $this->dependencia->removeElement($requerimiento);
        
    }
    
    public function removeAsignacion($asignacion){
        $this->asignacion->removeElement($asignacion);
        
    }
    
    
    public function setDependencia($profesionales)
    {
        $var = 0;
        foreach ($this->dependencia as $dependencia){
            if ($dependencia == $profesionales){
                $var = 1;
            }
        }
        if($var == 1){
            
        }else{
            $this->dependencia->add($profesionales);
        }
        
    }
    
    public function setAsignacion($profesionales)
    {
        $var = 0;
        foreach ($this->asignacion->getProfesional->getId() as $asignacion){
            if ($asignacion == $profesionales->getId()){
                $var = 1;
            }
        }
        if($var == 1){
            
        }else{
            $this->asignacion->add($profesionales);
        }
        
    }
    
    public function setProyecto($proyectos)
    {
        $var = 0;
        foreach ($this->asignacion as $asignacion){
            if ($asignacion == $proyectos){
                $var = 1;
            }
        }
        if($var == 1){
            
        }else{
            $this->asignacion->add($proyectos);
        }
        
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
     * Set nombre
     *
     * @param string $nombre
     * @return Licitacion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Licitacion
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
     * Set fechaTermino
     *
     * @param \DateTime $fechaTermino
     * @return Licitacion
     */
    public function setFechaTermino($fechaTermino)
    {
        $this->fechaTermino = $fechaTermino;

        return $this;
    }

    /**
     * Get fechaTermino
     *
     * @return \DateTime 
     */
    public function getFechaTermino()
    {
        return $this->fechaTermino;
    }
    
    /**
     * Set cliente
     *
     * @param integer $cliente
     * @return Licitacion
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
    
    /**
     * Set estado
     *
     * @param string $estado
     * @return Licitacion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
    
    public function getEstadoFinal()
    {
        if (new \DateTime('now') > $this->fechaTermino && $this->estado->getId() == 1){
            $this->estadoFinal = 1;
            return $this->estadoFinal;
            
        }else{
            $this->estadoFinal = 0;
            return $this->estadoFinal;
        }
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
     * @return Licitacion
     */
    public function setHorasProgramadas($horasProgramadas)
    {
        $this->horasProgramadas = $horasProgramadas;

        return $this;
    }
    
    public function getFactTable()
    {
        return $this->factTable;
    }
    
    public function setFactTable($arrayObjetos)
    {
        $this->factTable = $arrayObjetos;
    }

    public function getExcepcionesPlazo(){
        return $this->excepcionesPlazo;
    }

    public function getHito()
    {
        return $this->hito;
    }

    public function getAvanceTotal()
    {
        $suma = 0;
        foreach ($this->getDependencia() as $dependencia) {
            foreach ($dependencia as $horaLic)
            {
                $suma = $suma + $horaLic->getDuracion();
            }
            
        }
        return $suma;

    }

    /**
     * Set avance
     *
     * @param string $avance
     * @return Licitacion
     */
    public function setAvance($avance)
    {
        $this->avance = $avance;

        return $this;
    }

    /**
     * Get avance
     *
     * @return string 
     */
    public function getAvance()
    {
        return $this->avance;
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
    
    
    }
