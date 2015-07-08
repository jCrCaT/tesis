<?php

namespace App\MediBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Requerimiento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\RequerimientoRepository")
 */
class Requerimiento
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
     * @ORM\ManyToOne(targetEntity="User1")
     * @ORM\JoinColumn(name="profesional_id", referencedColumnName="id")
     * 
     */
    private $profesional;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;
    
    /**
     * @ORM\ManyToOne(targetEntity="Documento")
     * @ORM\JoinColumn(name="documento_id", referencedColumnName="id")
     * 
     */
    private $documento;
    
    /**
     * @ORM\ManyToOne(targetEntity="Licitacion", inversedBy="dependencia")
     * @ORM\JoinColumn(name="licitacion_id", referencedColumnName="id")
     */
    private $licitacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaTermino", type="datetime", nullable=true)
     */
    private $fechaTermino;
    
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="horas", type="integer", nullable=true)
     */
    private $horas;
    
    /**
     * @ORM\OneToMany(targetEntity="HorasLic", mappedBy="requerimiento")      
     */
    private $horasAvanzadas;

    /**
     *
     * @ORM\OneToMany(targetEntity="ExcepcionPlazoRequerimiento", mappedBy="requerimiento")
     */
    private $excepcionesRequerimiento;

    private $avanceHoras;

    /**
     * @ORM\ManyToOne(targetEntity="EstadoAcciones")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id", nullable=true)
     * 
     */
    private $estado;


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
     * Set profesional
     *
     * @param integer $profesional
     * @return Requerimiento
     */
    public function setProfesional($profesional)
    {
        $this->profesional = $profesional;
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
     * Set nombre
     *
     * @param string $nombre
     * @return Requerimiento
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
     * Set documento
     *
     * @param string $documento
     * @return Requerimiento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return int 
     */
    public function getDocumento()
    {
        return $this->documento;
    }
    
    public function getLicitacion(){
        return $this->licitacion;
    }
    
    public function setLicitacion($licitacion){
        $this->licitacion = $licitacion;
        return $this;
    }
    
    /**
     * Set horas
     *
     * @param horas $horas
     * @return Requerimiento
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return integer 
     */
    public function getHoras()
    {
        return $this->horas;
    }
    
    public function getRequeLicitacion(){
        
        return $this->nombre. " / " . $this->licitacion->getNombre();
    }
    
    public function setRequeLicitacion(){
        
        
        return $this->nombre. " / " . $this->licitacion->setNombre();
    }
    
    public function removeHorasAvanzadas($hora){
        $this->horasAvanzadas->removeElement($hora);
        
    }
    
    public function setHorasAvanzadas($hora)
    {
        $var = 0;
        foreach ($this->horasAvanzadas as $dependencia){
            if ($dependencia == $hora){
                $var = 1;
            }
        }
        if($var == 1){
            
        }else{
            $this->horasAvanzadas->add($hora);
        }
        
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return AsignacionEtapa
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
     * Set fechaTermino
     *
     * @param \DateTime $fechaTermino
     * @return AsignacionEtapa
     */
    public function setFechaTermino($fechaTermino)
    {
        $this->fechaTermino = $fechaTermino;

        return $this;
    }

    /**
     * Get fechaTermino
     *
     * @return \DateTime 
     */
    public function getFechaTermino()
    {
        return $this->fechaTermino;
    }

    public function getExcepcionesRequerimiento()
    {
        return $this->excepcionesRequerimiento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Requerimiento
     */
    public function setAvanceHoras($avanceHoras)
    {
        $this->avanceHoras = $avanceHoras;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getAvanceHoras()
    {
        return $this->avanceHoras;
    }

    /**
     * Set estado
     *
     * @param estado $estado
     * @return AsignacionEtapa
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \DateTime 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
