<?php

namespace App\DataWarehouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxAsignacionProyecto
 */
class AuxAsignacionProyecto
{
    /**
     * @var integer
     */
    private $profesionalId;

    /**
     * @var integer
     */
    private $horas;

    /**
     * @var integer
     */
    private $proyectoId;

    /**
     * @var string
     */
    private $valorHora;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set profesionalId
     *
     * @param integer $profesionalId
     * @return AuxAsignacionProyecto
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
     * Set horas
     *
     * @param integer $horas
     * @return AuxAsignacionProyecto
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
     * Set proyectoId
     *
     * @param integer $proyectoId
     * @return AuxAsignacionProyecto
     */
    public function setProyectoId($proyectoId)
    {
        $this->proyectoId = $proyectoId;

        return $this;
    }

    /**
     * Get proyectoId
     *
     * @return integer 
     */
    public function getProyectoId()
    {
        return $this->proyectoId;
    }

    /**
     * Set valorHora
     *
     * @param string $valorHora
     * @return AuxAsignacionProyecto
     */
    public function setValorHora($valorHora)
    {
        $this->valorHora = $valorHora;

        return $this;
    }

    /**
     * Get valorHora
     *
     * @return string 
     */
    public function getValorHora()
    {
        return $this->valorHora;
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
