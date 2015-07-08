<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExperienciaLaboral
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ExperienciaLaboral
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
     * @ORM\Column(name="anoInicio", type="datetime")
     */
    private $anoInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anoTermino", type="datetime")
     */
    private $anoTermino;

    /**
     * @var string
     *
     * @ORM\Column(name="empresa", type="string", length=255)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


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
     * Set anoInicio
     *
     * @param \DateTime $anoInicio
     * @return ExperienciaLaboral
     */
    public function setAnoInicio($anoInicio)
    {
        $this->anoInicio = $anoInicio;

        return $this;
    }

    /**
     * Get anoInicio
     *
     * @return \DateTime 
     */
    public function getAnoInicio()
    {
        return $this->anoInicio;
    }

    /**
     * Set anoTermino
     *
     * @param \DateTime $anoTermino
     * @return ExperienciaLaboral
     */
    public function setAnoTermino($anoTermino)
    {
        $this->anoTermino = $anoTermino;

        return $this;
    }

    /**
     * Get anoTermino
     *
     * @return \DateTime 
     */
    public function getAnoTermino()
    {
        return $this->anoTermino;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return ExperienciaLaboral
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return ExperienciaLaboral
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
