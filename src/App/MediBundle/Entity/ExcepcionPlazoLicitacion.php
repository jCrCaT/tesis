<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExcepcionPlazoProyecto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ExcepcionPlazoLicitacion
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
     * @ORM\Column(name="fechaTermino", type="datetime")
     */
    private $fechaTermino;

    /**
     * @var integer
     *
     * @ORM\Column(name="horas", type="integer")
     */
    private $horas;
    
    /**
     * @ORM\ManyToOne(targetEntity="Licitacion")
     * @ORM\JoinColumn(name="licitacion_id", referencedColumnName="id")
     */
    private $licitacion;
    
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
     * @ORM\Column(name="fechaAnterior", type="datetime")
     */
    private $fechaAnterior;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="User1")
     * @ORM\JoinColumn(name="profesional_id", referencedColumnName="id")
     */
    private $profesional;

    /**
     * @var string
     *
     * @ORM\Column(name="accion", type="string", length=255)
     */
    private $accion;
    


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
    
    public function setLicitacion($licitacion)
    {
        $this->licitacion = $licitacion;

        return $this;
    }
    
    public function getLicitacion()
    {
        return $this->licitacion;
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
