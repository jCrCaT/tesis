<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comuna
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\ComunaRepository")
 */
class Comuna
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumn(name="ciudad_id", referencedColumnName="id")
     * 
     */
    private $superior;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Comuna
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
     * Set superior
     *
     * @param integer $superior
     * @return Comuna
     */
    public function setSuperior($superior)
    {
        $this->superior = $superior;

        return $this;
    }

    /**
     * Get superior
     *
     * @return integer 
     */
    public function getSuperior()
    {
        return $this->superior;
    }
}
