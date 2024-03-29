<?php

namespace Proxies\__CG__\App\MediBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Requerimiento extends \App\MediBundle\Entity\Requerimiento implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'profesional', 'nombre', 'documento', 'licitacion', 'fechaInicio', 'fechaTermino', 'horas', 'horasAvanzadas', 'excepcionesRequerimiento', 'avanceHoras', 'estado');
        }

        return array('__isInitialized__', 'id', 'profesional', 'nombre', 'documento', 'licitacion', 'fechaInicio', 'fechaTermino', 'horas', 'horasAvanzadas', 'excepcionesRequerimiento', 'avanceHoras', 'estado');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Requerimiento $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfesional($profesional)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfesional', array($profesional));

        return parent::setProfesional($profesional);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfesional()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfesional', array());

        return parent::getProfesional();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocumento($documento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocumento', array($documento));

        return parent::setDocumento($documento);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocumento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocumento', array());

        return parent::getDocumento();
    }

    /**
     * {@inheritDoc}
     */
    public function getLicitacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLicitacion', array());

        return parent::getLicitacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setLicitacion($licitacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLicitacion', array($licitacion));

        return parent::setLicitacion($licitacion);
    }

    /**
     * {@inheritDoc}
     */
    public function setHoras($horas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHoras', array($horas));

        return parent::setHoras($horas);
    }

    /**
     * {@inheritDoc}
     */
    public function getHoras()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHoras', array());

        return parent::getHoras();
    }

    /**
     * {@inheritDoc}
     */
    public function getRequeLicitacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequeLicitacion', array());

        return parent::getRequeLicitacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequeLicitacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequeLicitacion', array());

        return parent::setRequeLicitacion();
    }

    /**
     * {@inheritDoc}
     */
    public function removeHorasAvanzadas($hora)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHorasAvanzadas', array($hora));

        return parent::removeHorasAvanzadas($hora);
    }

    /**
     * {@inheritDoc}
     */
    public function setHorasAvanzadas($hora)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHorasAvanzadas', array($hora));

        return parent::setHorasAvanzadas($hora);
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInicio($fechaInicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInicio', array($fechaInicio));

        return parent::setFechaInicio($fechaInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInicio', array());

        return parent::getFechaInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaTermino($fechaTermino)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaTermino', array($fechaTermino));

        return parent::setFechaTermino($fechaTermino);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaTermino()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaTermino', array());

        return parent::getFechaTermino();
    }

    /**
     * {@inheritDoc}
     */
    public function getExcepcionesRequerimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExcepcionesRequerimiento', array());

        return parent::getExcepcionesRequerimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvanceHoras($avanceHoras)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvanceHoras', array($avanceHoras));

        return parent::setAvanceHoras($avanceHoras);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvanceHoras()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvanceHoras', array());

        return parent::getAvanceHoras();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

}
