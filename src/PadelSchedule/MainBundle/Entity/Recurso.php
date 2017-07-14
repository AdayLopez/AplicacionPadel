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
class Recurso
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
     * @ORM\Column(name="club", type="string", length=255)
     */
    private $club;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cancha", type="string", length=10)
     */
    private $cancha;
    
    /**
     *
     * @var array
     * 
     * @ORM\Column(name="horarioLunes", type="array")
     */
    private $horarioLunes;
    /**
     *
     * @var array
     * 
     * @ORM\Column(name="horarioMartes", type="array")
     */
    private $horarioMartes;
    /**
     *
     * @var array
     * 
     * @ORM\Column(name="horarioMiercoles", type="array")
     */
    private $horarioMiercoles;
    /**
     *
     * @var array
     * 
     * @ORM\Column(name="horarioJueves", type="array")
     */
    private $horarioJueves;
    /**
     *
     * @var array
     * 
     * @ORM\Column(name="horarioViernes", type="array")
     */
    private $horarioViernes;
    /**
     *
     * @var array
     * 
     * @ORM\Column(name="horarioSabado", type="array")
     */
    private $horarioSabado;
    /**
     *
     * @var array
     * 
     * @ORM\Column(name="horarioDomingo", type="array")
     */
    private $horarioDomingo;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;    

    /**
     * Get id
     *
     * @return integer
     */
    
    /**
     * @ORM\ManyToOne(targetEntity="Competicion", inversedBy="recursos")
     * @ORM\JoinColumn(name="idCompeticion", referencedColumnName="id")
     */
    private $competicion;
    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set club
     *
     * @param string $club
     *
     * @return Recurso
     */
    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return string
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Set cancha
     *
     * @param string $cancha
     *
     * @return Recurso
     */
    public function setCancha($cancha)
    {
        $this->cancha = $cancha;

        return $this;
    }

    /**
     * Get cancha
     *
     * @return string
     */
    public function getCancha()
    {
        return $this->cancha;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Recurso
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
     * Set competicion
     *
     * @param \PadelSchedule\MainBundle\Entity\Competicion $competicion
     *
     * @return Recurso
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
     * Set horario
     *
     * @param array $horario
     *
     * @return Recurso
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return array
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set horarioLunes
     *
     * @param array $horarioLunes
     *
     * @return Recurso
     */
    public function setHorarioLunes($horarioLunes)
    {
        $this->horarioLunes = $horarioLunes;

        return $this;
    }

    /**
     * Get horarioLunes
     *
     * @return array
     */
    public function getHorarioLunes()
    {
        return $this->horarioLunes;
    }

    /**
     * Set horarioMartes
     *
     * @param array $horarioMartes
     *
     * @return Recurso
     */
    public function setHorarioMartes($horarioMartes)
    {
        $this->horarioMartes = $horarioMartes;

        return $this;
    }

    /**
     * Get horarioMartes
     *
     * @return array
     */
    public function getHorarioMartes()
    {
        return $this->horarioMartes;
    }

    /**
     * Set horarioMiercoles
     *
     * @param array $horarioMiercoles
     *
     * @return Recurso
     */
    public function setHorarioMiercoles($horarioMiercoles)
    {
        $this->horarioMiercoles = $horarioMiercoles;

        return $this;
    }

    /**
     * Get horarioMiercoles
     *
     * @return array
     */
    public function getHorarioMiercoles()
    {
        return $this->horarioMiercoles;
    }

    /**
     * Set horarioJueves
     *
     * @param array $horarioJueves
     *
     * @return Recurso
     */
    public function setHorarioJueves($horarioJueves)
    {
        $this->horarioJueves = $horarioJueves;

        return $this;
    }

    /**
     * Get horarioJueves
     *
     * @return array
     */
    public function getHorarioJueves()
    {
        return $this->horarioJueves;
    }

    /**
     * Set horarioViernes
     *
     * @param array $horarioViernes
     *
     * @return Recurso
     */
    public function setHorarioViernes($horarioViernes)
    {
        $this->horarioViernes = $horarioViernes;

        return $this;
    }

    /**
     * Get horarioViernes
     *
     * @return array
     */
    public function getHorarioViernes()
    {
        return $this->horarioViernes;
    }

    /**
     * Set horarioSabado
     *
     * @param array $horarioSabado
     *
     * @return Recurso
     */
    public function setHorarioSabado($horarioSabado)
    {
        $this->horarioSabado = $horarioSabado;

        return $this;
    }

    /**
     * Get horarioSabado
     *
     * @return array
     */
    public function getHorarioSabado()
    {
        return $this->horarioSabado;
    }

    /**
     * Set horarioDomingo
     *
     * @param array $horarioDomingo
     *
     * @return Recurso
     */
    public function setHorarioDomingo($horarioDomingo)
    {
        $this->horarioDomingo = $horarioDomingo;

        return $this;
    }

    /**
     * Get horarioDomingo
     *
     * @return array
     */
    public function getHorarioDomingo()
    {
        return $this->horarioDomingo;
    }
}
