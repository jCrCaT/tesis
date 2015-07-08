<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uf
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\UfRepository")
 */
class Uf
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
     * @var integer
     *
     * @ORM\Column(name="valorUf", type="decimal", precision=7, scale=2)
     */
    private $valorUf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;


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
     * Set valorUf
     *
     * @param integer $valorUf
     * @return Uf
     */
    public function setValorUf($valorUf)
    {
        $this->valorUf = $valorUf;

        return $this;
    }

    /**
     * Get valorUf
     *
     * @return integer 
     */
    public function getValorUf()
    {
        return $this->valorUf;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Uf
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
}
