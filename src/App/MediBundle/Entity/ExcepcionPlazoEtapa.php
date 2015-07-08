<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExcepcionPlazoProyecto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ExcepcionPlazoEtapa
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
     * @ORM\ManyToOne(targetEntity="AsignacionEtapa")
     * @ORM\JoinColumn(name="etapaproyecto_id", referencedColumnName="id")
     */
    private $etapaProyecto;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIngreso", type="datetime")
     */
    private $fechaIngreso;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicioAnterior", type="datetime")
     */
    private $fechaInicioAnterior;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaTerminoAnterior", type="datetime")
     */
    private $fechaTerminoAnterior;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="User1")
     * @ORM\JoinColumn(name="profesional_id", referencedColumnName="id")
     */
    private $profesional;
    


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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return ExcepcionPlazoEtapa
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
        return $this->fechaTermino;
    }
    
        /**
     * Set fechaInicioAnterior
     *
     * @param \DateTime $fechaInicioAnterior
     * @return ExcepcionPlazoEtapa
     */
    public function setFechaInicioAnterior($fechaInicioAnterior)
    {
        $this->fechaInicioAnterior = $fechaInicioAnterior;

        return $this;
    }

    /**
     * Get fechaInicioAnterior
     *
     * @return \DateTime 
     */
    public function getFechaInicioAnterior()
    {
        return $this->fechaInicioAnterior;
    }

    /**
     * Set fechaTermino
     *
     * @param \DateTime $fechaTermino
     * @return ExcepcionPlazoProyecto
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
     * Set fechaTerminoAnterior
     *
     * @param \DateTime $fechaTerminoAnterior
     * @return ExcepcionPlazoEtapa
     */
    public function setFechaTerminoAnterior($fechaTerminoAnterior)
    {
        $this->fechaTerminoAnterior = $fechaTerminoAnterior;

        return $this;
    }

    /**
     * Get fechaTerminoAnterior
     *
     * @return \DateTime 
     */
    public function getFechaTerminoAnterior()
    {
        return $this->fechaTerminoAnterior;
    }

    /**
     * Set horas
     *
     * @param integer $horas
     * @return ExcepcionPlazoProyecto
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return integer 
     */
    public function getHoras()
    {
        return $this->horas;
    }
    
    /**
     * Set accion
     *
     * @param string $accion
     * @return ExcepcionPlazoProyecto
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }
    
    public function getAccion()
    {
        return $this->accion;
    }
    
    public function setEtapaProyecto($etapaProyecto)
    {
        $this->etapaProyecto = $etapaProyecto;

        return $this;
    }
    
    public function getEtapaProyecto()
    {
        return $this->etapaProyecto;
    }
    
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
    
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    
    public function setFechaAnterior($fechaAnterior)
    {
        $this->fechaAnterior = $fechaAnterior;

        return $this;
    }
    
    public function getFechaAnterior()
    {
        return $this->fechaAnterior;
    }
    
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }
    
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }
    
    public function setProfesional($profesional)
    {
        $this->profesional = $profesional;

        return $this;
    }
    
    public function getProfesional()
    {
        return $this->profesional;
    }
}
