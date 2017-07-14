<?php

namespace PadelSchedule\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Inscripcion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Inscripcion
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
     * @ORM\ManyToOne(targetEntity="PadelSchedule\UserBundle\Entity\User", inversedBy="inscripciones")
     * @ORM\JoinColumn(name="idJugador", referencedColumnName="id")
     */
    private $jugador;
    
    /**
     * @ORM\ManyToOne(targetEntity="Competicion", inversedBy="inscripciones")
     * @ORM\JoinColumn(name="idCompeticion", referencedColumnName="id")
     */
    private $competicion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrePareja", type="string", length=255)
     */
    private $nombrePareja;
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="partidosGanados", type="integer")
     */
    private $partidosGanados = 0;
    /**
     * @var integer
     * 
     * @ORM\Column(name="partidosPerdidos", type="integer")
     */
    private $partidosPerdidos = 0;
    /**
     * @var integer
     * 
     * @ORM\Column(name="partidosEmpatados", type="integer")
     */
    private $partidosEmpatados = 0;
    
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set jugador
     *
     * @param \PadelSchedule\UserBundle\Entity\User $jugador
     *
     * @return Inscripcion
     */
    public function setJugador(\PadelSchedule\UserBundle\Entity\User $jugador = null)
    {
        $this->jugador = $jugador;

        return $this;
    }

    /**
     * Get jugador
     *
     * @return \PadelSchedule\UserBundle\Entity\User
     */
    public function getJugador()
    {
        return $this->jugador;
    }

    /**
     * Set competicion
     *
     * @param \PadelSchedule\MainBundle\Entity\Competicion $competicion
     *
     * @return Inscripcion
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
     * Set nombrePareja
     *
     * @param string $nombrePareja
     *
     * @return Inscripcion
     */
    public function setNombrePareja($nombrePareja)
    {
        $this->nombrePareja = $nombrePareja;

        return $this;
    }

    /**
     * Get nombrePareja
     *
     * @return string
     */
    public function getNombrePareja()
    {
        return $this->nombrePareja;
    }

    /**
     * Set puntos
     *
     * @param integer $puntos
     *
     * @return Inscripcion
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Get puntos
     *
     * @return integer
     */
    public function getPuntos()
    {
        return $this->puntos;
    }

    /**
     * Set preferenciaLunes
     *
     * @param array $preferenciaLunes
     *
     * @return Inscripcion
     */
    public function setPreferenciaLunes($preferenciaLunes)
    {
        $this->preferenciaLunes = $preferenciaLunes;

        return $this;
    }

    /**
     * Get preferenciaLunes
     *
     * @return array
     */
    public function getPreferenciaLunes()
    {
        return $this->preferenciaLunes;
    }

    /**
     * Set preferenciaMartes
     *
     * @param array $preferenciaMartes
     *
     * @return Inscripcion
     */
    public function setPreferenciaMartes($preferenciaMartes)
    {
        $this->preferenciaMartes = $preferenciaMartes;

        return $this;
    }

    /**
     * Get preferenciaMartes
     *
     * @return array
     */
    public function getPreferenciaMartes()
    {
        return $this->preferenciaMartes;
    }

    /**
     * Set preferenciaMiercoles
     *
     * @param array $preferenciaMiercoles
     *
     * @return Inscripcion
     */
    public function setPreferenciaMiercoles($preferenciaMiercoles)
    {
        $this->preferenciaMiercoles = $preferenciaMiercoles;

        return $this;
    }

    /**
     * Get preferenciaMiercoles
     *
     * @return array
     */
    public function getPreferenciaMiercoles()
    {
        return $this->preferenciaMiercoles;
    }

    /**
     * Set preferenciaJueves
     *
     * @param array $preferenciaJueves
     *
     * @return Inscripcion
     */
    public function setPreferenciaJueves($preferenciaJueves)
    {
        $this->preferenciaJueves = $preferenciaJueves;

        return $this;
    }

    /**
     * Get preferenciaJueves
     *
     * @return array
     */
    public function getPreferenciaJueves()
    {
        return $this->preferenciaJueves;
    }

    /**
     * Set preferenciaViernes
     *
     * @param array $preferenciaViernes
     *
     * @return Inscripcion
     */
    public function setPreferenciaViernes($preferenciaViernes)
    {
        $this->preferenciaViernes = $preferenciaViernes;

        return $this;
    }

    /**
     * Get preferenciaViernes
     *
     * @return array
     */
    public function getPreferenciaViernes()
    {
        return $this->preferenciaViernes;
    }

    /**
     * Set preferenciaSabado
     *
     * @param array $preferenciaSabado
     *
     * @return Inscripcion
     */
    public function setPreferenciaSabado($preferenciaSabado)
    {
        $this->preferenciaSabado = $preferenciaSabado;

        return $this;
    }

    /**
     * Get preferenciaSabado
     *
     * @return array
     */
    public function getPreferenciaSabado()
    {
        return $this->preferenciaSabado;
    }

    /**
     * Set preferenciaDomingo
     *
     * @param array $preferenciaDomingo
     *
     * @return Inscripcion
     */
    public function setPreferenciaDomingo($preferenciaDomingo)
    {
        $this->preferenciaDomingo = $preferenciaDomingo;

        return $this;
    }

    /**
     * Get preferenciaDomingo
     *
     * @return array
     */
    public function getPreferenciaDomingo()
    {
        return $this->preferenciaDomingo;
    }

    /**
     * Set horarioLunes
     *
     * @param array $horarioLunes
     *
     * @return Inscripcion
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
     * @return Inscripcion
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
     * @return Inscripcion
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
     * @return Inscripcion
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
     * @return Inscripcion
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
     * @return Inscripcion
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
     * @return Inscripcion
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

    /**
     * Set partidosGanados
     *
     * @param integer $partidosGanados
     *
     * @return Inscripcion
     */
    public function setPartidosGanados($partidosGanados)
    {
        $this->partidosGanados = $partidosGanados;

        return $this;
    }

    /**
     * Get partidosGanados
     *
     * @return integer
     */
    public function getPartidosGanados()
    {
        return $this->partidosGanados;
    }

    /**
     * Set partidosPerdidos
     *
     * @param integer $partidosPerdidos
     *
     * @return Inscripcion
     */
    public function setPartidosPerdidos($partidosPerdidos)
    {
        $this->partidosPerdidos = $partidosPerdidos;

        return $this;
    }

    /**
     * Get partidosPerdidos
     *
     * @return integer
     */
    public function getPartidosPerdidos()
    {
        return $this->partidosPerdidos;
    }

    /**
     * Set partidosEmpatados
     *
     * @param integer $partidosEmpatados
     *
     * @return Inscripcion
     */
    public function setPartidosEmpatados($partidosEmpatados)
    {
        $this->partidosEmpatados = $partidosEmpatados;

        return $this;
    }

    /**
     * Get partidosEmpatados
     *
     * @return integer
     */
    public function getPartidosEmpatados()
    {
        return $this->partidosEmpatados;
    }
}
