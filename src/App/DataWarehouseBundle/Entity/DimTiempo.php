<?php

namespace App\DataWarehouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * DimTiempo
 */
class DimTiempo
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var integer
     */
    private $dia;

    /**
     * @var integer
     */
    private $mes;

    /**
     * @var integer
     */
    private $numeroDia;

    /**
     * @var integer
     */
    private $numeroDeDiaDelAno;

    /**
     * @var string
     */
    private $nombreDia;

    /**
     * @var string
     */
    private $nombreMes;

    /**
     * @var string
     */
    private $anoMes;

    /**
     * @var string
     */
    private $mesAno;

    /**
     * @var integer
     */
    private $inFinDeSemana;

    /**
     * @var integer
     */
    private $inFeriado;

    /**
     * @var integer
     */
    private $inDiaHabil;

    /**
     * @var integer
     */
    private $numAnoCalendario;

    /**
     * @var integer
     */
    private $inUltimoDiaMes;

    /**
     * @var integer
     */
    private $id;
    
    private $avancesProyecto;
    
    public function __construct(){
        $this->avancesProyecto = new ArrayCollection();
    }


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return DimTiempo
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set dia
     *
     * @param integer $dia
     * @return DimTiempo
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return integer 
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return DimTiempo
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set numeroDia
     *
     * @param integer $numeroDia
     * @return DimTiempo
     */
    public function setNumeroDia($numeroDia)
    {
        $this->numeroDia = $numeroDia;

        return $this;
    }

    /**
     * Get numeroDia
     *
     * @return integer 
     */
    public function getNumeroDia()
    {
        return $this->numeroDia;
    }

    /**
     * Set numeroDeDiaDelAno
     *
     * @param integer $numeroDeDiaDelAno
     * @return DimTiempo
     */
    public function setNumeroDeDiaDelAno($numeroDeDiaDelAno)
    {
        $this->numeroDeDiaDelAno = $numeroDeDiaDelAno;

        return $this;
    }

    /**
     * Get numeroDeDiaDelAno
     *
     * @return integer 
     */
    public function getNumeroDeDiaDelAno()
    {
        return $this->numeroDeDiaDelAno;
    }

    /**
     * Set nombreDia
     *
     * @param string $nombreDia
     * @return DimTiempo
     */
    public function setNombreDia($nombreDia)
    {
        $this->nombreDia = $nombreDia;

        return $this;
    }

    /**
     * Get nombreDia
     *
     * @return string 
     */
    public function getNombreDia()
    {
        return $this->nombreDia;
    }

    /**
     * Set nombreMes
     *
     * @param string $nombreMes
     * @return DimTiempo
     */
    public function setNombreMes($nombreMes)
    {
        $this->nombreMes = $nombreMes;

        return $this;
    }

    /**
     * Get nombreMes
     *
     * @return string 
     */
    public function getNombreMes()
    {
        return $this->nombreMes;
    }

    /**
     * Set anoMes
     *
     * @param string $anoMes
     * @return DimTiempo
     */
    public function setAnoMes($anoMes)
    {
        $this->anoMes = $anoMes;

        return $this;
    }

    /**
     * Get anoMes
     *
     * @return string 
     */
    public function getAnoMes()
    {
        return $this->anoMes;
    }

    /**
     * Set mesAno
     *
     * @param string $mesAno
     * @return DimTiempo
     */
    public function setMesAno($mesAno)
    {
        $this->mesAno = $mesAno;

        return $this;
    }

    /**
     * Get mesAno
     *
     * @return string 
     */
    public function getMesAno()
    {
        return $this->mesAno;
    }

    /**
     * Set inFinDeSemana
     *
     * @param integer $inFinDeSemana
     * @return DimTiempo
     */
    public function setInFinDeSemana($inFinDeSemana)
    {
        $this->inFinDeSemana = $inFinDeSemana;

        return $this;
    }

    /**
     * Get inFinDeSemana
     *
     * @return integer 
     */
    public function getInFinDeSemana()
    {
        return $this->inFinDeSemana;
    }

    /**
     * Set inFeriado
     *
     * @param integer $inFeriado
     * @return DimTiempo
     */
    public function setInFeriado($inFeriado)
    {
        $this->inFeriado = $inFeriado;

        return $this;
    }

    /**
     * Get inFeriado
     *
     * @return integer 
     */
    public function getInFeriado()
    {
        return $this->inFeriado;
    }

    /**
     * Set inDiaHabil
     *
     * @param integer $inDiaHabil
     * @return DimTiempo
     */
    public function setInDiaHabil($inDiaHabil)
    {
        $this->inDiaHabil = $inDiaHabil;

        return $this;
    }

    /**
     * Get inDiaHabil
     *
     * @return integer 
     */
    public function getInDiaHabil()
    {
        return $this->inDiaHabil;
    }

    /**
     * Set numAnoCalendario
     *
     * @param integer $numAnoCalendario
     * @return DimTiempo
     */
    public function setNumAnoCalendario($numAnoCalendario)
    {
        $this->numAnoCalendario = $numAnoCalendario;

        return $this;
    }

    /**
     * Get numAnoCalendario
     *
     * @return integer 
     */
    public function getNumAnoCalendario()
    {
        return $this->numAnoCalendario;
    }

    /**
     * Set inUltimoDiaMes
     *
     * @param integer $inUltimoDiaMes
     * @return DimTiempo
     */
    public function setInUltimoDiaMes($inUltimoDiaMes)
    {
        $this->inUltimoDiaMes = $inUltimoDiaMes;

        return $this;
    }

    /**
     * Get inUltimoDiaMes
     *
     * @return integer 
     */
    public function getInUltimoDiaMes()
    {
        return $this->inUltimoDiaMes;
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
    
    public function getAvancesProyecto()
    {
        return $this->avancesProyecto;
    }
}
