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
class Mensaje
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
     * @ORM\ManyToOne(targetEntity="PadelSchedule\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="idCreador", referencedColumnName="id")
     */
    private $creadorMensaje;
    
     /**
     * @ORM\ManyToOne(targetEntity="PadelSchedule\UserBundle\Entity\User", inversedBy="mensajesRecibidos")
     * @ORM\JoinColumn(name="idDestinatario", referencedColumnName="id")
     */
    private $destinatarioMensaje;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="cabecera", type="string", length=50)
     */
    private $cabecera;
    
     /**
     * @ORM\Column(type="text")
     */
    private $cuerpo;
    
     /**
     * @ORM\Column(type="datetimetz")
     */
    private $fecha;
    
     /**
     * @ORM\Column(type="boolean")
     */
    private $leido;

    public function __construct()
    {
        $this->fecha = new \DateTime();
        $this->leido = false;        
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
     * @return Mensaje
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
     * Set cuerpo
     *
     * @param string $cuerpo
     *
     * @return Mensaje
     */
    public function setCuerpo($cuerpo)
    {
        $this->cuerpo = $cuerpo;

        return $this;
    }

    /**
     * Get cuerpo
     *
     * @return string
     */
    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Mensaje
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
     * Set leido
     *
     * @param boolean $leido
     *
     * @return Mensaje
     */
    public function setLeido($leido)
    {
        $this->leido = $leido;

        return $this;
    }

    /**
     * Get leido
     *
     * @return boolean
     */
    public function getLeido()
    {
        return $this->leido;
    }

    /**
     * Set creadorMensaje
     *
     * @param \PadelSchedule\UserBundle\Entity\User $creadorMensaje
     *
     * @return Mensaje
     */
    public function setCreadorMensaje(\PadelSchedule\UserBundle\Entity\User $creadorMensaje = null)
    {
        $this->creadorMensaje = $creadorMensaje;

        return $this;
    }

    /**
     * Get creadorMensaje
     *
     * @return \PadelSchedule\UserBundle\Entity\User
     */
    public function getCreadorMensaje()
    {
        return $this->creadorMensaje;
    }

    /**
     * Set destinatarioMensaje
     *
     * @param \PadelSchedule\UserBundle\Entity\User $destinatarioMensaje
     *
     * @return Mensaje
     */
    public function setDestinatarioMensaje(\PadelSchedule\UserBundle\Entity\User $destinatarioMensaje = null)
    {
        $this->destinatarioMensaje = $destinatarioMensaje;

        return $this;
    }

    /**
     * Get destinatarioMensaje
     *
     * @return \PadelSchedule\UserBundle\Entity\User
     */
    public function getDestinatarioMensaje()
    {
        return $this->destinatarioMensaje;
    }
}
