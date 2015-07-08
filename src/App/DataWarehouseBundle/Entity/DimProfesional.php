<?php

namespace App\DataWarehouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DimProfesional
 */
class DimProfesional
{
    /**
     * @var string
     */
    private $empresa;

    /**
     * @var string
     */
    private $pnombre;

    /**
     * @var string
     */
    private $snombre;

    /**
     * @var string
     */
    private $papellido;

    /**
     * @var string
     */
    private $sapellido;

    /**
     * @var integer
     */
    private $idProfesional;
    
    /**
     * @ORM\OneToMany(targetEntity="FtAvanceProyectoProfesional", mappedBy="profesional")      
     */
    private $FtAvanceProyectoProfesional;


    /**
     * Set empresa
     *
     * @param string $empresa
     * @return DimProfesional
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
     * Set pnombre
     *
     * @param string $pnombre
     * @return DimProfesional
     */
    public function setPnombre($pnombre)
    {
        $this->pnombre = $pnombre;

        return $this;
    }

    /**
     * Get pnombre
     *
     * @return string 
     */
    public function getPnombre()
    {
        return $this->pnombre;
    }

    /**
     * Set snombre
     *
     * @param string $snombre
     * @return DimProfesional
     */
    public function setSnombre($snombre)
    {
        $this->snombre = $snombre;

        return $this;
    }

    /**
     * Get snombre
     *
     * @return string 
     */
    public function getSnombre()
    {
        return $this->snombre;
    }

    /**
     * Set papellido
     *
     * @param string $papellido
     * @return DimProfesional
     */
    public function setPapellido($papellido)
    {
        $this->papellido = $papellido;

        return $this;
    }

    /**
     * Get papellido
     *
     * @return string 
     */
    public function getPapellido()
    {
        return $this->papellido;
    }

    /**
     * Set sapellido
     *
     * @param string $sapellido
     * @return DimProfesional
     */
    public function setSapellido($sapellido)
    {
        $this->sapellido = $sapellido;

        return $this;
    }

    /**
     * Get sapellido
     *
     * @return string 
     */
    public function getSapellido()
    {
        return $this->sapellido;
    }

    /**
     * Get idProfesional
     *
     * @return integer 
     */
    public function getIdProfesional()
    {
        return $this->idProfesional;
    }
    
    /**
     * Get FtAvanceProyectoProfesional
     *
     * @return string 
     */
    public function setFtAvanceProyectoProfesional($FtAvanceProyectoProfesional)
    {
        $this->FtAvanceProyectoProfesional = $FtAvanceProyectoProfesional;
    }

    /**
     * Get FtAvanceProyectoProfesional
     *
     * @return integer 
     */
    public function getFtAvanceProyectoProfesional()
    {
        return $this->FtAvanceProyectoProfesional;
    }
}
