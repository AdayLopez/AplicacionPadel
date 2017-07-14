<?php

namespace PadelSchedule\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Partido
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Partido
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
     * @var integer
     * 
     * @ORM\Column(name="jornada", type="integer")
     */
    private $jornada;
    
    /**
     * @ORM\ManyToOne(targetEntity="Inscripcion")
     * @ORM\JoinColumn(name="inscripcion1_id", referencedColumnName="id")
     */
    private $inscripcion1;
    
    /**
     * @ORM\ManyToOne(targetEntity="Inscripcion")
     * @ORM\JoinColumn(name="inscripcion2_id", referencedColumnName="id")
     */
    private $inscripcion2;
    
    /**
     * @ORM\ManyToOne(targetEntity="Competicion", inversedBy="partidos")
     * @ORM\JoinColumn(name="competicion_id", referencedColumnName="id")
     */
    private $competicion;
    
    /**
     * @ORM\Column(name="fechaHora", type="datetime", nullable=true)
     */    
    private $fechaHora;
    
    
//    ¿¿Poner onetoone??    
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="recursoAsignado", type="integer", nullable=true)
     */
    private $recursoAsignado;
    
    /**
     * @var array
     *      
     * @ORM\Column(name="resultadoPropuesto1", type="simple_array", nullable=true)
     */ 
    private $resultadoPropuesto1;
    
    /**
     * @var array
     *      
     * @ORM\Column(name="resultadoPropuesto2", type="simple_array", nullable=true)
     */ 
    private $resultadoPropuesto2;
    
    /**
     * @var array
     *      
     * @ORM\Column(name="resultadoFinal", type="simple_array", nullable=true)
     */ 
    private $resultadoFinal;
    
    /**
     * @var boolean
     *  
     * @ORM\Column(type="boolean")
     */
    private $resultadoConfirmado;
        
    
    public function __construct()
    {
        $this->resultadoConfirmado = false;        
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
     * Set jornada
     *
     * @param integer $jornada
     *
     * @return Partido
     */
    public function setJornada($jornada)
    {
        $this->jornada = $jornada;

        return $this;
    }

    /**
     * Get jornada
     *
     * @return integer
     */
    public function getJornada()
    {
        return $this->jornada;
    }

    /**
     * Set inscripcion1
     *
     * @param \PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion1
     *
     * @return Partido
     */
    public function setInscripcion1(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion1 = null)
    {
        $this->inscripcion1 = $inscripcion1;

        return $this;
    }

    /**
     * Get inscripcion1
     *
     * @return \PadelSchedule\MainBundle\Entity\Inscripcion
     */
    public function getInscripcion1()
    {
        return $this->inscripcion1;
    }

    /**
     * Set inscripcion2
     *
     * @param \PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion2
     *
     * @return Partido
     */
    public function setInscripcion2(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion2 = null)
    {
        $this->inscripcion2 = $inscripcion2;

        return $this;
    }

    /**
     * Get inscripcion2
     *
     * @return \PadelSchedule\MainBundle\Entity\Inscripcion
     */
    public function getInscripcion2()
    {
        return $this->inscripcion2;
    }

    /**
     * Set competicion
     *
     * @param \PadelSchedule\MainBundle\Entity\Competicion $competicion
     *
     * @return Partido
     */
    public function setCompeticion(\PadelSchedule\MainBundle\Entity\Competicion $competicion = null)
    {
        $this->competicion = $competicion;

        return $this;
    }

    /**
     * Get competicion
     *
     * @return \PadelSchedule\MainBundle\Entity\Competicion
     */
    public function getCompeticion()
    {
        return $this->competicion;
    }

    /**
     * Set fechaHora
     *
     * @param \DateTime $fechaHora
     *
     * @return Partido
     */
    public function setFechaHora($fechaHora)
    {
        $this->fechaHora = $fechaHora;

        return $this;
    }

    /**
     * Get fechaHora
     *
     * @return \DateTime
     */
    public function getFechaHora()
    {
        return $this->fechaHora;
    }

    /**
     * Set recursoAsignado
     *
     * @param integer $recursoAsignado
     *
     * @return Partido
     */
    public function setRecursoAsignado($recursoAsignado)
    {
        $this->recursoAsignado = $recursoAsignado;

        return $this;
    }

    /**
     * Get recursoAsignado
     *
     * @return integer
     */
    public function getRecursoAsignado()
    {
        return $this->recursoAsignado;
    }

    /**
     * Set resultados
     *
     * @param array $resultados
     *
     * @return Partido
     */
    public function setResultados($resultados)
    {
        $this->resultados = $resultados;

        return $this;
    }

    /**
     * Get resultados
     *
     * @return array
     */
    public function getResultados()
    {
        return $this->resultados;
    }

    /**
     * Set resultadoConfirmado
     *
     * @param boolean $resultadoConfirmado
     *
     * @return Partido
     */
    public function setResultadoConfirmado($resultadoConfirmado)
    {
        $this->resultadoConfirmado = $resultadoConfirmado;

        return $this;
    }

    /**
     * Get resultadoConfirmado
     *
     * @return boolean
     */
    public function getResultadoConfirmado()
    {
        return $this->resultadoConfirmado;
    }

    /**
     * Set resultadoPropuesto1
     *
     * @param array $resultadoPropuesto1
     *
     * @return Partido
     */
    public function setResultadoPropuesto1($resultadoPropuesto1)
    {
        $this->resultadoPropuesto1 = $resultadoPropuesto1;

        return $this;
    }

    /**
     * Get resultadoPropuesto1
     *
     * @return array
     */
    public function getResultadoPropuesto1()
    {
        return $this->resultadoPropuesto1;
    }

    /**
     * Set resultadoPropuesto2
     *
     * @param array $resultadoPropuesto2
     *
     * @return Partido
     */
    public function setResultadoPropuesto2($resultadoPropuesto2)
    {
        $this->resultadoPropuesto2 = $resultadoPropuesto2;

        return $this;
    }

    /**
     * Get resultadoPropuesto2
     *
     * @return array
     */
    public function getResultadoPropuesto2()
    {
        return $this->resultadoPropuesto2;
    }

    /**
     * Set resultadoFinal
     *
     * @param array $resultadoFinal
     *
     * @return Partido
     */
    public function setResultadoFinal($resultadoFinal)
    {
        $this->resultadoFinal = $resultadoFinal;

        return $this;
    }

    /**
     * Get resultadoFinal
     *
     * @return array
     */
    public function getResultadoFinal()
    {
        return $this->resultadoFinal;
    }
}
