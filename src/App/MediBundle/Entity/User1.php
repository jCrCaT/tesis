<?php

namespace App\MediBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\MediBundle\Validator\Constraints as AcmeAssert;


/**
 * User
 *
 * @ORM\Table(name="user1")
 * @ORM\Entity(repositoryClass="App\MediBundle\Entity\User1Repository")
 */
class User1 implements UserInterface, \Serializable
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
     * @ORM\Column(name="username", type="string", length=255)
     * 
     */
    private $username;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime", nullable = true)
     */
    private $fechaNacimiento;
    
    /**
     * @var string
     *
     * @ORM\Column(name="snombre", type="string", length=255, nullable=true)
     */
    private $snombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="papellido", type="string", length=255, nullable=true)
     */
    private $papellido;
    
    /**
     * @var string
     *
     * @ORM\Column(name="sapellido", type="string", length=255, nullable=true)
     */
    private $sapellido;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pnombre", type="string", length=255, nullable=true)
     */
    private $pnombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    
    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;
    
    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=255)
     */
    private $correo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;
    
    /**
     * @ORM\ManyToMany(targetEntity="Rango")
     * @ORM\JoinTable(name="User1_Rango",
     *       joinColumns={@ORM\JoinColumn(name="User1_id", referencedColumnName="id")},
     *       inverseJoinColumns={@ORM\JoinColumn(name="Rango_id", referencedColumnName="id")})
     */
    private $roles;
    
    /**
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     * 
     */
    private $empresa;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255,nullable=true)
     */
    private $direccion; 
    
    /**
     * @ORM\ManyToOne(targetEntity="Comuna")
     * @ORM\JoinColumn(name="comuna_id", referencedColumnName="id")
     * 
     */
    private $comuna;
    
    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;
    
    /**
     * @Assert\Type(type="App\MediBundle\Entity\Documento")
     */
    private $imagen;
    
    /**
     * @ORM\ManyToOne(targetEntity="Documento")
     * @ORM\JoinColumn(name="imgperfil_id", referencedColumnName="id")
     * 
     */
    private $imagenPerfil;
    
    
    private $misAvances;

    private $ultimoAvance;

    /**
     * @ORM\OneToMany(targetEntity="Horas", mappedBy="profesional")      
     */
    private $horasP;
    
    private $actProf;
    
    
    
 
    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
        $this->roles = new ArrayCollection();
        $this->estudios = new ArrayCollection();
        $this->horasP = new ArrayCollection();
        
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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return User1
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
    
    /**
     * Set pnombre
     *
     * @param string $pnombre
     */
    public function setPnombre($pnombre)
    {
        $this->pnombre = $pnombre;
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
     */
    public function setSnombre($snombre)
    {
        $this->snombre = $snombre;
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
     */
    public function setPapellido($papellido)
    {
        $this->papellido = $papellido;
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
     */
    public function setSapellido($sapellido)
    {
        $this->sapellido = $sapellido;
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
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }
    
    /**
     * Set correo
     *
     * @param string $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    
    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt()
    {
        return '';
        //$this->salt = $salt;
    }
 
    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return '';
    }
    
    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }
    
    /**
     * Set roles
     *
     * @param string $roles
     */
    public function setRoles($role)
    {
        $this->roles->add($role);
    }
    
    public function removeRole($role){
        $this->roles->removeELement($role);
    }
   
    public function isEqualTo(UserInterface $user)
    {
    return $this->id === $user->getId();
    }
 
    /**
     * Erases the user credentials.
     */
    public function eraseCredentials() {
 
    }
    
    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }
    
    /**
     * Set empresa
     *
     * @param integer $empresa
     * @return User1
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return integer 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
    
    private $rango;
    /**
     * Set rango
     *
     * @param integer $rango
     * @return Rango
     */
    public function setRango($rango)
    {
        $this->rango = $rango;

        //return $this;
    }

    /**
     * Get rango
     *
     * @return rango 
     */
    public function getRango()
    {
        return $this->rango;
    }
    
    /**
     * Set direccion
     *
     * @param string $direccion
     * @return User1
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    
    /**
     * Set comuna
     *
     * @param integer $comuna
     * @return Comuna
     */
    public function setComuna($comuna)
    {
        $this->comuna = $comuna;

        return $this;
    }

    /**
     * Get comuna
     *
     * @return integer 
     */
    public function getComuna()
    {
        return $this->comuna;
    }
    
    /**
     * Set telefono
     *
     * @param string $telefono
     * @return User1
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    
    public function getImagen()
    {
        return $this->imagen;
    }
 
    public function setImagen($imagen = null)
    {
        $this->imagen = $imagen;
    }
    
    public function setPsNombre()
    {
        $this->psnombre = $this->pnombre .' '. $this->papellido;
        return $this;
        
    }
    
    public function getPsNombre()
    {
        return $this->pnombre .' '. $this->papellido;
        
    }
    
    /**
     * Set imagenPerfil
     *
     * @param integer $imagenPerfil
     * @return User1
     */
    public function setImagenPerfil($imagenPerfil)
    {
        $this->imagenPerfil = $imagenPerfil;

        return $this;
    }

    /**
     * Get imagenPerfil
     *
     * @return integer 
     */
    public function getImagenPerfil()
    {
        return $this->imagenPerfil;
    }
    
    public function setMisAvances($misAvances)
    {
        $this->misAvances = $misAvances;
        return $this;
        
    }
    
    public function getMisAvances()
    {
        return $this->misAvances;
        
    }

    public function setUltimoAvance($ultimoAvance)
    {
        $this->ultimoAvance = $ultimoAvance;
        return $this;
        
    }
    
    public function getUltimoAvance()
    {
        return $this->ultimoAvance;
        
    }

    public function getHorasP(){
        return $this->horasP;
    }
}
