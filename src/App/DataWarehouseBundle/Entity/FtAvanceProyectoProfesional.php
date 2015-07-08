<?php

namespace App\DataWarehouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FtAvanceProyecto
 */
/**
 * @ORM\Entity
 * @ORM\Table(name="ft_avance_proyecto")
 */
class FtAvanceProyectoProfesional
{
    
    /**
     * @var integer
     */
    private $fechaId;

    /**
     * @var integer
     */
    private $proyecto;
    
    /**
     * @ORM\ManyToOne(targetEntity="FtAvanceProyectoProfesional")
     * @ORM\JoinColumn(name="FtAvanceProyectoProfesional", referencedColumnName="idProfesional")
     * 
     */
    private $profesional;

    /**
     * @var string
     */
    private $horasAvanzadas;

    /**
     * @var integer
     */
    private $horasAsignadas;

    /**
     * @var string
     */
    private $porcentajeAvance;
    
    private $horasProgresadas;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    private $valorTotal;
    
    private $valorFecha;
    
    private $valorHora;
    
    private $proyectoOriginal;


    /**
     * Set fechaId
     *
     * @param integer $fechaId
     * @return FtAvanceProyecto
     */
    public function setFechaId($fechaId)
    {
        $this->fechaId = $fechaId;

        return $this;
    }

    /**
     * Get fechaId
     *
     * @return integer 
     */
    public function getFechaId()
    {
        return $this->fechaId;
    }

    /**
     * Set proyecto
     *
     * @param integer $proyecto
     * @return FtAvanceProyecto
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
     * @return FtAvanceProyecto
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
     * Set horasAvanzadas
     *
     * @param string $horasAvanzadas
     * @return FtAvanceProyecto
     */
    public function setHorasAvanzadas($horasAvanzadas)
    {
        $this->horasAvanzadas = $horasAvanzadas;

        return $this;
    }

    /**
     * Get horasAvanzadas
     *
     * @return string 
     */
    public function getHorasAvanzadas()
    {
        return $this->horasAvanzadas;
    }

    /**
     * Set horasAsignadas
     *
     * @param integer $horasAsignadas
     * @return FtAvanceProyecto
     */
    public function setHorasAsignadas($horasAsignadas)
    {
        $this->horasAsignadas = $horasAsignadas;

        return $this;
    }

    /**
     * Get horasAsignadas
     *
     * @return integer 
     */
    public function getHorasAsignadas()
    {
        return $this->horasAsignadas;
    }

    /**
     * Set porcentajeavance
     *
     * @param string $porcentajeavance
     * @return FtAvanceProyecto
     */
    public function setPorcentajeAvance($porcentajeAvance)
    {
        $this->porcentajeAvance = $porcentajeAvance;

        return $this;
    }

    /**
     * Get porcentajeavance
     *
     * @return string 
     */
    public function getPorcentajeAvance()
    {
        return $this->porcentajeAvance;
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
     * Set valorTotal
     *
     * @param string $valorTotal
     * @return FtAvanceProyecto
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get valorTotal
     *
     * @return integer 
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }
    
    /**
     * Set valorFecha
     *
     * @param string $valorFecha
     * @return FtAvanceProyecto
     */
    public function setValorFecha($valorFecha)
    {
        $this->valorFecha = $valorFecha;

        return $this;
    }

    /**
     * Get valorFecha
     *
     * @return integer 
     */
    public function getValorFecha()
    {
        return $this->valorFecha;
    }
    
    /**
     * Set valorHora
     *
     * @param string $valorHora
     * @return FtAvanceProyecto
     */
    public function setValorHora($valorHora)
    {
        $this->valorHora = $valorHora;

        return $this;
    }

    /**
     * Get valorHora
     *
     * @return integer 
     */
    public function getValorHora()
    {
        return $this->valorHora;
    }
    
    /**
     * Set horasProgresadas
     *
     * @param string $horasProgresadas
     * @return FtAvanceProyecto
     */
    public function setHorasProgresadas($horasProgresadas)
    {
        $this->horasProgresadas = $horasProgresadas;

        return $this;
    }

    /**
     * Get horasProgresadas
     *
     * @return integer 
     */
    public function getHorasProgresadas()
    {
        return $this->horasProgresadas;
    }
    
    public function setProyectoOriginal($proyectoOriginal)
    {
        $this->proyectoOriginal = $proyectoOriginal;

        return $this;
    }

    /**
     * Get proyectoOriginal
     *
     * @return integer 
     */
    public function getProyectoOriginal()
    {
        return $this->proyectoOriginal;
    }
    
}
