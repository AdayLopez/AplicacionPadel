<?php

namespace PadelSchedule\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Mensaje
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Notificacion
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
      * @ORM\Column(name="tipo", type="integer")
      * 
      */
    private $tipo;
    
    /**
     * @var integer
     * 
     * @ORM\OneToOne(targetEntity="Competicion")
     * @ORM\JoinColumn(name="competicionAsociada", referencedColumnName="id")     
     */
    private $competicionAsociada;
    
    /**
     * @var integer
     * 
     * @ORM\OneToOne(targetEntity="Partido")
     * @ORM\JoinColumn(name="partidoAsociado", referencedColumnName="id")     
     */
    private $partidoAsociado;
    
     /**
     * @ORM\ManyToOne(targetEntity="PadelSchedule\UserBundle\Entity\User", inversedBy="notificacionesRecibidas")
     * @ORM\JoinColumn(name="idDestinatario", referencedColumnName="id")
     */
    private $destinatario;
    
     /**
     * @var string
     *
     * @ORM\Column(name="cabecera", type="string", length=50)
     */
    private $cabecera;
    
     /**
     * @ORM\Column(type="text")
     */
    private $mensaje;
    
     /**
     * @ORM\Column(type="datetimetz")
     */
    private $fecha;
    
     /**
     * @ORM\Column(type="boolean")
     */
    private $vista;
    
    public function __construct()
    {
        $this->fecha = new \DateTime();
        $this->vista = false;        
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
     * Set cabecera
     *
     * @param string $cabecera
     *
     * @return Notificacion
     */
    public function setCabecera($cabecera)
    {
        $this->cabecera = $cabecera;

        return $this;
    }

    /**
     * Get cabecera
     *
     * @return string
     */
    public function getCabecera()
    {
        return $this->cabecera;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Notificacion
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Notificacion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set vista
     *
     * @param boolean $vista
     *
     * @return Notificacion
     */
    public function setVista($vista)
    {
        $this->vista = $vista;

        return $this;
    }

    /**
     * Get vista
     *
     * @return boolean
     */
    public function getVista()
    {
        return $this->vista;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Notificacion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set competicionAsociada
     *
     * @param integer $competicionAsociada
     *
     * @return Notificacion
     */
    public function setCompeticionAsociada($competicionAsociada)
    {
        $this->competicionAsociada = $competicionAsociada;

        return $this;
    }

    /**
     * Get competicionAsociada
     *
     * @return integer
     */
    public function getCompeticionAsociada()
    {
        return $this->competicionAsociada;
    }

    /**
     * Set partidoAsociado
     *
     * @param integer $partidoAsociado
     *
     * @return Notificacion
     */
    public function setPartidoAsociado($partidoAsociado)
    {
        $this->partidoAsociado = $partidoAsociado;

        return $this;
    }

    /**
     * Get partidoAsociado
     *
     * @return integer
     */
    public function getPartidoAsociado()
    {
        return $this->partidoAsociado;
    }

    /**
     * Set destinatario
     *
     * @param \PadelSchedule\UserBundle\Entity\User $destinatario
     *
     * @return Notificacion
     */
    public function setDestinatario(\PadelSchedule\UserBundle\Entity\User $destinatario = null)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return \PadelSchedule\UserBundle\Entity\User
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }
}
