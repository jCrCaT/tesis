<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Educacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Educacion
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
     * @ORM\Column(name="institucion", type="string", length=255)
     */
    private $institucion;

    /**
     * @var string
     *
     * @ORM\Column(name="carrera", type="string", length=255)
     */
    private $carrera;

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
     * @return Educacion
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
     * @return Educacion
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
     * Set institucion
     *
     * @param string $institucion
     * @return Educacion
     */
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return string 
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set carrera
     *
     * @param string $carrera
     * @return Educacion
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return string 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Educacion
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
