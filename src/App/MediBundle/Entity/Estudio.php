<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\EstudioRepository")
 */
class Estudio
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
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="institucion", type="string", length=255)
     */
    private $institucion;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", length=255, nullable=true)
     */
    private $tipo;



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
     * @ORM\ManyToOne(targetEntity="User1")
     * @ORM\JoinColumn(name="profesional_id", referencedColumnName="id")
     * 
     */
    private $profesional;

    /**
     * Set anoInicio
     *
     * @param \DateTime $anoInicio
     * @return Estudio
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
     * @return Estudio
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Estudio
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
    
    /**
     * Set institucion
     *
     * @param string $institucion
     * @return Estudio
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
     * Set tipo
     *
     * @param string $tipo
     * @return Estudio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->Tipo;
    }
}
