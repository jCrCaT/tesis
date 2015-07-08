<?php

namespace Proxies\__CG__\App\DataWarehouseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DimTiempo extends \App\DataWarehouseBundle\Entity\DimTiempo implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'fecha', 'dia', 'mes', 'numeroDia', 'numeroDeDiaDelAno', 'nombreDia', 'nombreMes', 'anoMes', 'mesAno', 'inFinDeSemana', 'inFeriado', 'inDiaHabil', 'numAnoCalendario', 'inUltimoDiaMes', 'id', 'avancesProyecto');
        }

        return array('__isInitialized__', 'fecha', 'dia', 'mes', 'numeroDia', 'numeroDeDiaDelAno', 'nombreDia', 'nombreMes', 'anoMes', 'mesAno', 'inFinDeSemana', 'inFeriado', 'inDiaHabil', 'numAnoCalendario', 'inUltimoDiaMes', 'id', 'avancesProyecto');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DimTiempo $proxy) {
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
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setDia($dia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDia', array($dia));

        return parent::setDia($dia);
    }

    /**
     * {@inheritDoc}
     */
    public function getDia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDia', array());

        return parent::getDia();
    }

    /**
     * {@inheritDoc}
     */
    public function setMes($mes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMes', array($mes));

        return parent::setMes($mes);
    }

    /**
     * {@inheritDoc}
     */
    public function getMes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMes', array());

        return parent::getMes();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroDia($numeroDia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroDia', array($numeroDia));

        return parent::setNumeroDia($numeroDia);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroDia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroDia', array());

        return parent::getNumeroDia();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroDeDiaDelAno($numeroDeDiaDelAno)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroDeDiaDelAno', array($numeroDeDiaDelAno));

        return parent::setNumeroDeDiaDelAno($numeroDeDiaDelAno);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroDeDiaDelAno()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroDeDiaDelAno', array());

        return parent::getNumeroDeDiaDelAno();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreDia($nombreDia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreDia', array($nombreDia));

        return parent::setNombreDia($nombreDia);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreDia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreDia', array());

        return parent::getNombreDia();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreMes($nombreMes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreMes', array($nombreMes));

        return parent::setNombreMes($nombreMes);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreMes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreMes', array());

        return parent::getNombreMes();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnoMes($anoMes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnoMes', array($anoMes));

        return parent::setAnoMes($anoMes);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnoMes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnoMes', array());

        return parent::getAnoMes();
    }

    /**
     * {@inheritDoc}
     */
    public function setMesAno($mesAno)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMesAno', array($mesAno));

        return parent::setMesAno($mesAno);
    }

    /**
     * {@inheritDoc}
     */
    public function getMesAno()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMesAno', array());

        return parent::getMesAno();
    }

    /**
     * {@inheritDoc}
     */
    public function setInFinDeSemana($inFinDeSemana)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInFinDeSemana', array($inFinDeSemana));

        return parent::setInFinDeSemana($inFinDeSemana);
    }

    /**
     * {@inheritDoc}
     */
    public function getInFinDeSemana()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInFinDeSemana', array());

        return parent::getInFinDeSemana();
    }

    /**
     * {@inheritDoc}
     */
    public function setInFeriado($inFeriado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInFeriado', array($inFeriado));

        return parent::setInFeriado($inFeriado);
    }

    /**
     * {@inheritDoc}
     */
    public function getInFeriado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInFeriado', array());

        return parent::getInFeriado();
    }

    /**
     * {@inheritDoc}
     */
    public function setInDiaHabil($inDiaHabil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInDiaHabil', array($inDiaHabil));

        return parent::setInDiaHabil($inDiaHabil);
    }

    /**
     * {@inheritDoc}
     */
    public function getInDiaHabil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInDiaHabil', array());

        return parent::getInDiaHabil();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumAnoCalendario($numAnoCalendario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumAnoCalendario', array($numAnoCalendario));

        return parent::setNumAnoCalendario($numAnoCalendario);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumAnoCalendario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumAnoCalendario', array());

        return parent::getNumAnoCalendario();
    }

    /**
     * {@inheritDoc}
     */
    public function setInUltimoDiaMes($inUltimoDiaMes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInUltimoDiaMes', array($inUltimoDiaMes));

        return parent::setInUltimoDiaMes($inUltimoDiaMes);
    }

    /**
     * {@inheritDoc}
     */
    public function getInUltimoDiaMes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInUltimoDiaMes', array());

        return parent::getInUltimoDiaMes();
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
    public function getAvancesProyecto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvancesProyecto', array());

        return parent::getAvancesProyecto();
    }

}
