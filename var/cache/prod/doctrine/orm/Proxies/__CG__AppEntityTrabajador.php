<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Trabajador extends \App\Entity\Trabajador implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'especialidad', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'activo', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'solicitudes', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'instrucciones'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'especialidad', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'activo', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'solicitudes', '' . "\0" . 'App\\Entity\\Trabajador' . "\0" . 'instrucciones'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Trabajador $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEspecialidad($especialidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEspecialidad', [$especialidad]);

        return parent::setEspecialidad($especialidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getEspecialidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEspecialidad', []);

        return parent::getEspecialidad();
    }

    /**
     * {@inheritDoc}
     */
    public function addSolicitud(\App\Entity\Solicitud $solicitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSolicitud', [$solicitud]);

        return parent::addSolicitud($solicitud);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSolicitud(\App\Entity\Solicitud $solicitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSolicitud', [$solicitud]);

        return parent::removeSolicitud($solicitud);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolicitudes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolicitudes', []);

        return parent::getSolicitudes();
    }

    /**
     * {@inheritDoc}
     */
    public function addInstruccion(\App\Entity\Instruccion $instruccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInstruccion', [$instruccion]);

        return parent::addInstruccion($instruccion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInstruccion(\App\Entity\Instruccion $instruccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInstruccion', [$instruccion]);

        return parent::removeInstruccion($instruccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstrucciones(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstrucciones', []);

        return parent::getInstrucciones();
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', []);

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo($activo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', [$activo]);

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
