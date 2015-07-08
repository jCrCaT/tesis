<?php

namespace Proxies\__CG__\App\MediBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserProyecto extends \App\MediBundle\Entity\UserProyecto implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'horas', 'profesional', 'proyecto', 'valorHora', 'tipoAsignacion', 'fechaInicio', 'fechaTermino');
        }

        return array('__isInitialized__', 'id', 'horas', 'profesional', 'proyecto', 'valorHora', 'tipoAsignacion', 'fechaInicio', 'fechaTermino');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserProyecto $proxy) {
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
    public function setProyecto($proyecto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProyecto', array($proyecto));

        return parent::setProyecto($proyecto);
    }

    /**
     * {@inheritDoc}
     */
    public function getProyecto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProyecto', array());

        return parent::getProyecto();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorHora($valorHora)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorHora', array($valorHora));

        return parent::setValorHora($valorHora);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorHora()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorHora', array());

        return parent::getValorHora();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoAsignacion($tipoAsignacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoAsignacion', array($tipoAsignacion));

        return parent::setTipoAsignacion($tipoAsignacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoAsignacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoAsignacion', array());

        return parent::getTipoAsignacion();
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

}