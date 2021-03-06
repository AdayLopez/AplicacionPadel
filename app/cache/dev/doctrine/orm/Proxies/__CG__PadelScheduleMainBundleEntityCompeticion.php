<?php

namespace Proxies\__CG__\PadelSchedule\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Competicion extends \PadelSchedule\MainBundle\Entity\Competicion implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', 'id', 'nombre', 'creador', 'fechaInicio', 'maxInscripciones', 'fotoCompeticionFichero', '' . "\0" . 'PadelSchedule\\MainBundle\\Entity\\Competicion' . "\0" . 'tempFotoCompeticionRuta', 'fotoCompeticionRuta', 'inscripciones', 'partidos', 'descripcion', 'normas', 'estado', 'puntosPorGanar', 'puntosPorPerder', 'numJornadas', 'jornadaActual', 'recursos', 'localizacion'];
        }

        return ['__isInitialized__', 'id', 'nombre', 'creador', 'fechaInicio', 'maxInscripciones', 'fotoCompeticionFichero', '' . "\0" . 'PadelSchedule\\MainBundle\\Entity\\Competicion' . "\0" . 'tempFotoCompeticionRuta', 'fotoCompeticionRuta', 'inscripciones', 'partidos', 'descripcion', 'normas', 'estado', 'puntosPorGanar', 'puntosPorPerder', 'numJornadas', 'jornadaActual', 'recursos', 'localizacion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Competicion $proxy) {
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
    public function setCreador(\PadelSchedule\UserBundle\Entity\User $creador = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreador', [$creador]);

        return parent::setCreador($creador);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreador', []);

        return parent::getCreador();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInicio($fechaInicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInicio', [$fechaInicio]);

        return parent::setFechaInicio($fechaInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInicio', []);

        return parent::getFechaInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxParticipantes($maxParticipantes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxParticipantes', [$maxParticipantes]);

        return parent::setMaxParticipantes($maxParticipantes);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxParticipantes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxParticipantes', []);

        return parent::getMaxParticipantes();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstadoCompeticion($estadoCompeticion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstadoCompeticion', [$estadoCompeticion]);

        return parent::setEstadoCompeticion($estadoCompeticion);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadoCompeticion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadoCompeticion', []);

        return parent::getEstadoCompeticion();
    }

    /**
     * {@inheritDoc}
     */
    public function addInscripcion(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInscripcion', [$inscripcion]);

        return parent::addInscripcion($inscripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInscripcion(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInscripcion', [$inscripcion]);

        return parent::removeInscripcion($inscripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getInscripciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInscripciones', []);

        return parent::getInscripciones();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioInscrito()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioInscrito', []);

        return parent::getUsuarioInscrito();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxInscripciones($maxInscripciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxInscripciones', [$maxInscripciones]);

        return parent::setMaxInscripciones($maxInscripciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxInscripciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxInscripciones', []);

        return parent::getMaxInscripciones();
    }

    /**
     * {@inheritDoc}
     */
    public function addPartido(\PadelSchedule\MainBundle\Entity\Partido $partido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPartido', [$partido]);

        return parent::addPartido($partido);
    }

    /**
     * {@inheritDoc}
     */
    public function removePartido(\PadelSchedule\MainBundle\Entity\Partido $partido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePartido', [$partido]);

        return parent::removePartido($partido);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPartidos', []);

        return parent::getPartidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumJornadas($numJornadas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumJornadas', [$numJornadas]);

        return parent::setNumJornadas($numJornadas);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumJornadas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumJornadas', []);

        return parent::getNumJornadas();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuntosPorGanar($puntosPorGanar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuntosPorGanar', [$puntosPorGanar]);

        return parent::setPuntosPorGanar($puntosPorGanar);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuntosPorGanar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuntosPorGanar', []);

        return parent::getPuntosPorGanar();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuntosPorPerder($puntosPorPerder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuntosPorPerder', [$puntosPorPerder]);

        return parent::setPuntosPorPerder($puntosPorPerder);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuntosPorPerder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuntosPorPerder', []);

        return parent::getPuntosPorPerder();
    }

    /**
     * {@inheritDoc}
     */
    public function addRecurso(\PadelSchedule\MainBundle\Entity\Recurso $recurso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRecurso', [$recurso]);

        return parent::addRecurso($recurso);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRecurso(\PadelSchedule\MainBundle\Entity\Recurso $recurso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRecurso', [$recurso]);

        return parent::removeRecurso($recurso);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecursos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecursos', []);

        return parent::getRecursos();
    }

    /**
     * {@inheritDoc}
     */
    public function addInscripcione(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcione)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInscripcione', [$inscripcione]);

        return parent::addInscripcione($inscripcione);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInscripcione(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcione)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInscripcione', [$inscripcione]);

        return parent::removeInscripcione($inscripcione);
    }

    /**
     * {@inheritDoc}
     */
    public function setJornadaActual($jornadaActual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJornadaActual', [$jornadaActual]);

        return parent::setJornadaActual($jornadaActual);
    }

    /**
     * {@inheritDoc}
     */
    public function getJornadaActual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJornadaActual', []);

        return parent::getJornadaActual();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalizacion($localizacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalizacion', [$localizacion]);

        return parent::setLocalizacion($localizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalizacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalizacion', []);

        return parent::getLocalizacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setNormas($normas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNormas', [$normas]);

        return parent::setNormas($normas);
    }

    /**
     * {@inheritDoc}
     */
    public function getNormas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNormas', []);

        return parent::getNormas();
    }

    /**
     * {@inheritDoc}
     */
    public function setFotoCompeticionFichero(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFotoCompeticionFichero', [$file]);

        return parent::setFotoCompeticionFichero($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFotoCompeticionFichero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFotoCompeticionFichero', []);

        return parent::getFotoCompeticionFichero();
    }

    /**
     * {@inheritDoc}
     */
    public function setFotoCompeticionRuta($fotoCompeticionRuta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFotoCompeticionRuta', [$fotoCompeticionRuta]);

        return parent::setFotoCompeticionRuta($fotoCompeticionRuta);
    }

    /**
     * {@inheritDoc}
     */
    public function getFotoCompeticionRuta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFotoCompeticionRuta', []);

        return parent::getFotoCompeticionRuta();
    }

    /**
     * {@inheritDoc}
     */
    public function getFotoCompeticionAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFotoCompeticionAbsolutePath', []);

        return parent::getFotoCompeticionAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebFotoCompeticionRuta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebFotoCompeticionRuta', []);

        return parent::getWebFotoCompeticionRuta();
    }

    /**
     * {@inheritDoc}
     */
    public function preUploadFotoCompeticion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUploadFotoCompeticion', []);

        return parent::preUploadFotoCompeticion();
    }

    /**
     * {@inheritDoc}
     */
    public function generarNombreFotoCompeticion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generarNombreFotoCompeticion', []);

        return parent::generarNombreFotoCompeticion();
    }

    /**
     * {@inheritDoc}
     */
    public function uploadFotoCompeticion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'uploadFotoCompeticion', []);

        return parent::uploadFotoCompeticion();
    }

    /**
     * {@inheritDoc}
     */
    public function eliminarFicheroFotoCompeticion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eliminarFicheroFotoCompeticion', []);

        return parent::eliminarFicheroFotoCompeticion();
    }

}
