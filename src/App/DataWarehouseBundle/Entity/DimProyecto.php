<?php

namespace App\DataWarehouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DimProyecto
 */
class DimProyecto
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $empresa;

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
    private $horasprogramadas;

    /**
     * @var string
     */
    private $cliente;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var integer
     */
    private $idProyecto;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return DimProyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return DimProyecto
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return DimProyecto
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
     * @return DimProyecto
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
     * Set horasprogramadas
     *
     * @param integer $horasprogramadas
     * @return DimProyecto
     */
    public function setHorasprogramadas($horasprogramadas)
    {
        $this->horasprogramadas = $horasprogramadas;

        return $this;
    }

    /**
     * Get horasprogramadas
     *
     * @return integer 
     */
    public function getHorasprogramadas()
    {
        return $this->horasprogramadas;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return DimProyecto
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return DimProyecto
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get idProyecto
     *
     * @return integer 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }
}
