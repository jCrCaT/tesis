<?php

namespace App\DataWarehouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DimHoras
 */
class DimHoras
{
    /**
     * @var integer
     */
    private $actividadId;

    /**
     * @var integer
     */
    private $horasId;

    /**
     * @var \DateTime
     */
    private $fechainicio;

    /**
     * @var \DateTime
     */
    private $fechatermino;

    /**
     * @var integer
     */
    private $profesionalId;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set actividadId
     *
     * @param integer $actividadId
     * @return DimHoras
     */
    public function setActividadId($actividadId)
    {
        $this->actividadId = $actividadId;

        return $this;
    }

    /**
     * Get actividadId
     *
     * @return integer 
     */
    public function getActividadId()
    {
        return $this->actividadId;
    }

    /**
     * Set horasId
     *
     * @param integer $horasId
     * @return DimHoras
     */
    public function setHorasId($horasId)
    {
        $this->horasId = $horasId;

        return $this;
    }

    /**
     * Get horasId
     *
     * @return integer 
     */
    public function getHorasId()
    {
        return $this->horasId;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return DimHoras
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechatermino
     *
     * @param \DateTime $fechatermino
     * @return DimHoras
     */
    public function setFechatermino($fechatermino)
    {
        $this->fechatermino = $fechatermino;

        return $this;
    }

    /**
     * Get fechatermino
     *
     * @return \DateTime 
     */
    public function getFechatermino()
    {
        return $this->fechatermino;
    }

    /**
     * Set profesionalId
     *
     * @param integer $profesionalId
     * @return DimHoras
     */
    public function setProfesionalId($profesionalId)
    {
        $this->profesionalId = $profesionalId;

        return $this;
    }

    /**
     * Get profesionalId
     *
     * @return integer 
     */
    public function getProfesionalId()
    {
        return $this->profesionalId;
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
}
