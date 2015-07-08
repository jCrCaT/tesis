<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\UserProyectoRepository")
 */
class UserProyecto
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
     * @var integer
     *
     * @ORM\Column(name="horas", type="integer")
     */
    private $horas;
    
    /**
     * @ORM\ManyToOne(targetEntity="User1")
     * @ORM\JoinColumn(name="profesional_id", referencedColumnName="id")
     * 
     */
    private $profesional;
    
    /**
     * @ORM\ManyToOne(targetEntity="Proyecto", inversedBy="asignacion")
     * @ORM\JoinColumn(name="proyecto_id", referencedColumnName="id")
     */
    private $proyecto;
    
    /**
     * @var decimal
     *
     * @ORM\Column(name="valorHora", type="decimal", nullable=true, precision=3, scale=2)
     */
    private $valorHora;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="tipoAsignacion", type="string", nullable=true, length=1)
     */
    private $tipoAsignacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime", nullable=TRUE)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaTermino", type="datetime", nullable=TRUE)
     */
    private $fechaTermino;



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
     * Set horas
     *
     * @param integer $horas
     * @return UserProyecto
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
     * Set profesional
     *
     * @param integer $profesional
     * @return UserProyecto
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
     * Set proyecto
     *
     * @param integer $proyecto
     * @return UserProyecto
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
     * Set valorHora
     *
     * @param decimal $valorHora
     * @return UserProyecto
     */
    public function setValorHora($valorHora)
    {
        $this->valorHora = $valorHora;

        return $this;
    }

    /**
     * Get valorHora
     *
     * @return decimal 
     */
    public function getValorHora()
    {
        return $this->valorHora;
    } 
    
    /**
     * Set tipoAsignacion
     *
     * @param decimal $tipoAsignacion
     * @return UserProyecto
     */
    public function setTipoAsignacion($tipoAsignacion)
    {
        $this->tipoAsignacion = $tipoAsignacion;

        return $this;
    }

    /**
     * Get tipoAsignacion
     *
     * @return decimal 
     */
    public function getTipoAsignacion()
    {
        return $this->tipoAsignacion;
    }   


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
     * Set Licitacion
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
}
