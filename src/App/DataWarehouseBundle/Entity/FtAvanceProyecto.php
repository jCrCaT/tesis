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
class FtAvanceProyecto
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
    private $porcentajeavance;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    private $valorTotal;
    
    private $valorFecha;


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
    public function setPorcentajeavance($porcentajeavance)
    {
        $this->porcentajeavance = $porcentajeavance;

        return $this;
    }

    /**
     * Get porcentajeavance
     *
     * @return string 
     */
    public function getPorcentajeavance()
    {
        return $this->porcentajeavance;
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
}
