<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExcepcionPlazoRequerimiento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ExcepcionPlazoRequerimiento
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
     * @ORM\ManyToOne(targetEntity="Requerimiento")
     * @ORM\JoinColumn(name="requerimiento_id", referencedColumnName="id")
     */
    private $requerimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="horas", type="integer")
     */
    private $horas;

    /**
     * @var string
     *
     * @ORM\Column(name="accion", type="string", length=255)
     */
    private $accion;

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
     * @return ExcepcionPlazoRequerimiento
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
     * @return ExcepcionPlazoRequerimiento
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return ExcepcionPlazoRequerimiento
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ExcepcionPlazoRequerimiento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
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
     * Set fechaInicioAnterior
     *
     * @param \DateTime $fechaInicioAnterior
     * @return ExcepcionPlazoRequerimiento
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
     * Set fechaTerminoAnterior
     *
     * @param \DateTime $fechaTerminoAnterior
     * @return ExcepcionPlazoRequerimiento
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
     * Get requerimiento
     *
     * @return integer 
     */
    public function getRequerimiento()
    {
        return $this->requerimiento;
    }
    
    /**
     * Set requerimiento
     *
     * @param string $requerimiento
     * @return ExcepcionPlazoRequerimiento
     */
    public function setRequerimiento($requerimiento)
    {
        $this->requerimiento = $requerimiento;

        return $this;
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
