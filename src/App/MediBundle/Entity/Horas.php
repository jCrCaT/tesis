<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\HorasRepository")
 */
class Horas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
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
    
    private $horaInicio;
    
    private $horaTermino;
    
    /**
     * @ORM\ManyToOne(targetEntity="Actividad")
     * @ORM\JoinColumn(name="actividad_id", referencedColumnName="id")
     * 
     */
    private $actividad;
    
    /**
     * @ORM\ManyToOne(targetEntity="User1")
     * @ORM\JoinColumn(name="profesional_id", referencedColumnName="id")
     * 
     */
    private $profesional;
    
    /**
     * @ORM\ManyToOne(targetEntity="Proyecto", inversedBy="horasAvanzadas")
     * @ORM\JoinColumn(name="horas_id", referencedColumnName="id")
     */
    private $proyecto;
    
    private $duracionActividad;

    /**
     * @var decimal
     *
     * @ORM\Column(name="valorHora", type="decimal", nullable=true, precision=10, scale=2, nullable=true)
     */
    private $duracion;


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
     * Set id
     *
     * @param integer $id
     * @return Horas
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Horas
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
     * @return Horas
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
     * Set horaInicio
     *
     * @param integer $horaInicio
     * @return Horas
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return integer 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    public function setHoraTermino($horaTermino)
    {
        $this->horaTermino = $horaTermino;

        return $this;
    }

    public function getHoraTermino()
    {
        return $this->horaTermino;
    }
    
    /**
     * Set actividad
     *
     * @param integer $actividad
     * @return Horas
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return integer 
     */
    public function getActividad()
    {
        return $this->actividad;
    }
    
    /**
     * Set proyecto
     *
     * @param integer $proyecto
     * @return Horas
     */
    public function setProyecto($proyecto)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return integer 
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }
    
    /**
     * Set profesional
     *
     * @param integer $profesional
     * @return Horas
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
    
    
    public function setDuracionActividad($duracionActividad)
    {
        $this->duracionActividad = $duracionActividad;

        return $this;
    }

    
    public function getDuracionActividad()
    {
        return $this->duracionActividad;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    
    public function getDuracion()
    {
        return $this->duracion;
    }
}
