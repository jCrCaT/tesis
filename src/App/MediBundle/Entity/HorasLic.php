<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HorasLic
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\HorasLicRepository")
 */
class HorasLic
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
    
    private $horaInicio;
    
    private $horaTermino;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Requerimiento", inversedBy="horasAvanzadas")
     * @ORM\JoinColumn(name="horas_id", referencedColumnName="id")
     */
    private $requerimiento;
    
    /**
     * @ORM\ManyToOne(targetEntity="User1")
     * @ORM\JoinColumn(name="profesional_id", referencedColumnName="id")
     * 
     */
    private $profesional;

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
     * Set fechaInicio
     *
     * @param string $fechaInicio
     * @return HorasLic
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return string 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaTermino
     *
     * @param string $fechaTermino
     * @return HorasLic
     */
    public function setFechaTermino($fechaTermino)
    {
        $this->fechaTermino = $fechaTermino;

        return $this;
    }

    /**
     * Get fechaTermino
     *
     * @return string 
     */
    public function getFechaTermino()
    {
        return $this->fechaTermino;
    }


    /**
     * Set requerimiento
     *
     * @param string $requerimiento
     * @return HorasLic
     */
    public function setRequerimiento($requerimiento)
    {
        $this->requerimiento = $requerimiento;

        return $this;
    }

    /**
     * Get requerimiento
     *
     * @return string 
     */
    public function getRequerimiento()
    {
        return $this->requerimiento;
    }
    
    /**
     * Set profesional
     *
     * @param integer $profesional
     * @return HorasLic
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
