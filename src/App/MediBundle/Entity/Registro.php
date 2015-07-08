<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registro
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\RegistroRepository")
 */
class Registro
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
     * @ORM\Column(name="tipo", type="string", length=20)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="ipUsuario", type="string", length=128)
     */
    private $ipUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime")
     */
    private $datetime;


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
     * Set tipo
     *
     * @param string $tipo
     * @return Registro
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
        return $this->tipo;
    }

    /**
     * Set ipUsuario
     *
     * @param string $ipUsuario
     * @return Registro
     */
    public function setIpUsuario($ipUsuario)
    {
        $this->ipUsuario = $ipUsuario;

        return $this;
    }

    /**
     * Get ipUsuario
     *
     * @return string 
     */
    public function getIpUsuario()
    {
        return $this->ipUsuario;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     * @return Registro
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }
}
