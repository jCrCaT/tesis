<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * AsignacionEtapa
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AsignacionEtapa
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
     * @ORM\ManyToOne(targetEntity="Proyecto")
     * @ORM\JoinColumn(name="proyecto_id", referencedColumnName="id")
     * 
     */
    private $proyecto;
    
    /**
     * @ORM\ManyToOne(targetEntity="EtapaProyecto")
     * @ORM\JoinColumn(name="etapaproyecto_id", referencedColumnName="id")
     * 
     */
    private $etapaProyecto;

    /**
     * @ORM\ManyToOne(targetEntity="EstadoAcciones")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id", nullable=true)
     * 
     */
    private $estado;
    
    
      /**
     *
     * @ORM\OneToMany(targetEntity="ExcepcionPlazoEtapa", mappedBy="etapaProyecto")
     */
    private $excepcionesEtapa;
    
    private $sumaHoras;

    public function __construct() {
        $this->excepcionesEtapa = new ArrayCollection();
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return AsignacionEtapa
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
     * @return AsignacionEtapa
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
     * Set proyecto
     *
     * @param proyecto $fechaTermino
     * @return AsignacionEtapa
     */
    public function setProyecto($proyecto)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \DateTime 
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }

    /**
     * Set estado
     *
     * @param estado $estado
     * @return AsignacionEtapa
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \DateTime 
     */
    public function getEstado()
    {
        return $this->estado;
    }
    
    /**
     * Set etapaProyecto
     *
     * @param proyecto $etapaProyecto
     * @return EtapaEtapa
     */
    public function setEtapaProyecto($etapaProyecto)
    {
        $this->etapaProyecto = $etapaProyecto;

        return $this;
    }

    /**
     * Get etapaProyecto
     *
     * @return \string
     */
    public function getEtapaProyecto()
    {
        return $this->etapaProyecto;
    }
    
    public function getExcepcionesEtapa()
    {
        return $this->excepcionesEtapa;
    }

    public function getNombreEtapaProyecto()
    {
        return $this->etapaProyecto->getNombre();
    }

    /**
     * Set sumaHoras
     *
     * @param proyecto $sumaHoras
     * @return AsignacionEtapa
     */
    public function setSumaHoras($sumaHoras)
    {
        $this->sumaHoras = $sumaHoras;

        return $this;
    }

    /**
     * Get sumaHoras
     *
     * @return \string
     */
    public function getSumaHoras()
    {
        return $this->sumaHoras;
    }
}
