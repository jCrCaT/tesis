<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Reunion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\ReunionRepository")
 */
class Reunion
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
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;
    

    
    /**
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     * 
     */
    private $cliente;

    
    /**
     * @ORM\ManyToMany(targetEntity="User1")
     * @ORM\JoinTable(name="User1_Reunion",
     *       joinColumns={@ORM\JoinColumn(name="Reunion_id", referencedColumnName="id")},
     *       inverseJoinColumns={@ORM\JoinColumn(name="User1_id", referencedColumnName="id")})
     */
    private $dependencia;
    
    public function __construct()
    {
        $this->dependencia = new ArrayCollection();
    }
    
    public function getDependencia()
    {
        return $this->dependencia;
    }
    
    public function removeDependencia($profesional){
        $this->dependencia->removeElement($profesional);
        
    }
    
    public function setDependencia($profesionales)
    {
        $var = 0;
        foreach ($this->dependencia as $dependencia){
            if ($dependencia == $profesionales){
                $var = 1;
            }
        }
        if($var == 1){
            
        }else{
            $this->dependencia->add($profesionales);
        }
        
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

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Reunion
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }
    
    /**
     * Set cliente
     *
     * @param integer $cliente
     * @return Reunion
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return integer 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
