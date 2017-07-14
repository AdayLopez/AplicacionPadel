<?php

namespace PadelSchedule\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Util\SecureRandom;


/**
 * Competicion
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Competicion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    protected $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="PadelSchedule\UserBundle\Entity\User", inversedBy="competicionesCreadas")
     * @ORM\JoinColumn(name="idCreador", referencedColumnName="id")
     */
    protected $creador;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    protected $fechaInicio;
    
    /**
     * @ORM\Column(type="integer")
     * 
     * @Assert\Range(
     *      min = 2,
     *      max = 180,
     *      minMessage = "El valor introducido debe ser mayor o igual a 2 participantes"
     * ) 
     */
    protected $maxInscripciones;
    
    /**
     * @Assert\File(maxSize="2048k")
     * @Assert\Image(mimeTypesMessage="Por favor, adjunte un tipo de fichero válido.")
     */
    protected $fotoCompeticionFichero;

    // alojamiento temporal
    private $tempFotoCompeticionRuta;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $fotoCompeticionRuta;
    
    /**
     * @ORM\OneToMany(targetEntity="Inscripcion", mappedBy="competicion")
     */
    protected $inscripciones;
    
    /**
     * @ORM\OneToMany(targetEntity="Partido", mappedBy="competicion")
     */
    protected $partidos;
          
    /**
     * @ORM\Column(type="text")
     */
    protected $descripcion;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $normas;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $estado = "Cerrada";
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $puntosPorGanar = 2;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $puntosPorPerder = 0;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $numJornadas = 0;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $jornadaActual = 0;
    
    /**
     * @ORM\OneToMany(targetEntity="Recurso", mappedBy="competicion")
     */
    protected $recursos;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $localizacion;
    
      
    public function __construct()
    {
        $this->inscripciones = new ArrayCollection();
        $this->partidos = new ArrayCollection();
        $this->recursos = new ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Competicion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set creador
     *
     * @param \PadelSchedule\UserBundle\Entity\User $creador
     *
     * @return Competicion
     */
    public function setCreador(\PadelSchedule\UserBundle\Entity\User $creador = null)
    {
        $this->creador = $creador;

        return $this;
    }

    /**
     * Get creador
     *
     * @return \PadelSchedule\UserBundle\Entity\User
     */
    public function getCreador()
    {
        return $this->creador;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Competicion
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set maxParticipantes
     *
     * @param integer $maxParticipantes
     *
     * @return Competicion
     */
    public function setMaxParticipantes($maxParticipantes)
    {
        $this->maxParticipantes = $maxParticipantes;

        return $this;
    }

    /**
     * Get maxParticipantes
     *
     * @return integer
     */
    public function getMaxParticipantes()
    {
        return $this->maxParticipantes;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Competicion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estadoCompeticion
     *
     * @param integer $estadoCompeticion
     *
     * @return Competicion
     */
    public function setEstadoCompeticion($estadoCompeticion)
    {
        $this->estadoCompeticion = $estadoCompeticion;

        return $this;
    }

    /**
     * Get estadoCompeticion
     *
     * @return integer
     */
    public function getEstadoCompeticion()
    {
        return $this->estadoCompeticion;
    }


    /**
     * Add inscripcion
     *
     * @param \PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion
     *
     * @return Competicion
     */
    public function addInscripcion(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion)
    {
        $this->inscripciones[] = $inscripcion;

        return $this;
    }

    /**
     * Remove inscripcion
     *
     * @param \PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion
     */
    public function removeInscripcion(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion)
    {
        $this->inscripciones->removeElement($inscripcion);
    }

    /**
     * Get inscripciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInscripciones()
    {
        return $this->inscripciones;
    }  
    
    /**
     * getUsuarioInscrito
     * 
     */
    public function getUsuarioInscrito(){
        
    }

    /**
     * Set maxInscripciones
     *
     * @param integer $maxInscripciones
     *
     * @return Competicion
     */
    public function setMaxInscripciones($maxInscripciones)
    {
        $this->maxInscripciones = $maxInscripciones;

        return $this;
    }

    /**
     * Get maxInscripciones
     *
     * @return integer
     */
    public function getMaxInscripciones()
    {
        return $this->maxInscripciones;
    }

    /**
     * Add partido
     *
     * @param \PadelSchedule\MainBundle\Entity\Partido $partido
     *
     * @return Competicion
     */
    public function addPartido(\PadelSchedule\MainBundle\Entity\Partido $partido)
    {
        $this->partidos[] = $partido;

        return $this;
    }

    /**
     * Remove partido
     *
     * @param \PadelSchedule\MainBundle\Entity\Partido $partido
     */
    public function removePartido(\PadelSchedule\MainBundle\Entity\Partido $partido)
    {
        $this->partidos->removeElement($partido);
    }

    /**
     * Get partidos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPartidos()
    {
        return $this->partidos;
    }

    /**
     * Set numJornadas
     *
     * @param integer $numJornadas
     *
     * @return Competicion
     */
    public function setNumJornadas($numJornadas)
    {
        $this->numJornadas = $numJornadas;

        return $this;
    }

    /**
     * Get numJornadas
     *
     * @return integer
     */
    public function getNumJornadas()
    {
        return $this->numJornadas;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Competicion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }


    /**
     * Set puntosPorGanar
     *
     * @param integer $puntosPorGanar
     *
     * @return Competicion
     */
    public function setPuntosPorGanar($puntosPorGanar)
    {
        $this->puntosPorGanar = $puntosPorGanar;

        return $this;
    }

    /**
     * Get puntosPorGanar
     *
     * @return integer
     */
    public function getPuntosPorGanar()
    {
        return $this->puntosPorGanar;
    }

    /**
     * Set puntosPorPerder
     *
     * @param integer $puntosPorPerder
     *
     * @return Competicion
     */
    public function setPuntosPorPerder($puntosPorPerder)
    {
        $this->puntosPorPerder = $puntosPorPerder;

        return $this;
    }

    /**
     * Get puntosPorPerder
     *
     * @return integer
     */
    public function getPuntosPorPerder()
    {
        return $this->puntosPorPerder;
    }
 
    /**
     * Add recurso
     *
     * @param \PadelSchedule\MainBundle\Entity\Recurso $recurso
     *
     * @return Competicion
     */
    public function addRecurso(\PadelSchedule\MainBundle\Entity\Recurso $recurso)
    {
        $this->recursos[] = $recurso;

        return $this;
    }

    /**
     * Remove recurso
     *
     * @param \PadelSchedule\MainBundle\Entity\Recurso $recurso
     */
    public function removeRecurso(\PadelSchedule\MainBundle\Entity\Recurso $recurso)
    {
        $this->recursos->removeElement($recurso);
    }

    /**
     * Get recursos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecursos()
    {
        return $this->recursos;
    }



    /**
     * Add inscripcione
     *
     * @param \PadelSchedule\MainBundle\Entity\Inscripcion $inscripcione
     *
     * @return Competicion
     */
    public function addInscripcione(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcione)
    {
        $this->inscripciones[] = $inscripcione;

        return $this;
    }

    /**
     * Remove inscripcione
     *
     * @param \PadelSchedule\MainBundle\Entity\Inscripcion $inscripcione
     */
    public function removeInscripcione(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcione)
    {
        $this->inscripciones->removeElement($inscripcione);
    }

    /**
     * Set jornadaActual
     *
     * @param integer $jornadaActual
     *
     * @return Competicion
     */
    public function setJornadaActual($jornadaActual)
    {
        $this->jornadaActual = $jornadaActual;

        return $this;
    }

    /**
     * Get jornadaActual
     *
     * @return integer
     */
    public function getJornadaActual()
    {
        return $this->jornadaActual;
    }

    /**
     * Set localizacion
     *
     * @param string $localizacion
     *
     * @return Competicion
     */
    public function setLocalizacion($localizacion)
    {
        $this->localizacion = $localizacion;

        return $this;
    }

    /**
     * Get localizacion
     *
     * @return string
     */
    public function getLocalizacion()
    {
        return $this->localizacion;
    }

    /**
     * Set normas
     *
     * @param string $normas
     *
     * @return Competicion
     */
    public function setNormas($normas)
    {
        $this->normas = $normas;

        return $this;
    }

    /**
     * Get normas
     *
     * @return string
     */
    public function getNormas()
    {
        return $this->normas;
    }
    
     /**     
     * Determina el directorio usado para subir los archivos de imagen
     * @param UploadedFile $file
     * @return object
     */
    public function setFotoCompeticionFichero(UploadedFile $file = null) {
        // set the value of the holder
        $this->fotoCompeticionFichero = $file;
         // check if we have an old image path
        if (isset($this->fotoCompeticionRuta)) {
            // store the old name to delete after the update
            $this->tempFotoCompeticionRuta = $this->fotoCompeticionRuta;
            $this->fotoCompeticionRuta = null;
        } else {
            $this->fotoCompeticionRuta = 'initial';
        }
        return $this;
    }
    
    /**
     * Devuelve el directorio usado para imagenes
     * 
     * @return UploadedFile
     */
    public function getFotoCompeticionFichero() {

        return $this->fotoCompeticionFichero;
    }

    /**
     * Set fotoCompeticionRuta
     *
     * @param string $fotoCompeticionRuta
     *
     * @return Competicion
     */
    public function setFotoCompeticionRuta($fotoCompeticionRuta)
    {
        $this->fotoCompeticionRuta = $fotoCompeticionRuta;

        return $this;
    }

    /**
     * Get fotoCompeticionRuta
     *
     * @return string
     */
    public function getFotoCompeticionRuta()
    {
        return $this->fotoCompeticionRuta;
    }
    
    /**
     * Get the absolute path of the profilePicturePath
     */
    public function getFotoCompeticionAbsolutePath() {
        return null === $this->fotoCompeticionRuta
            ? null
            : $this->getUploadRootDir().'/'.$this->fotoCompeticionRuta;
    }

    /**
     * Get root directory for file uploads
     * 
     * @return string
     */
    protected function getUploadRootDir() {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    /**
     * Specifies where in the /web directory profile pic uploads are stored
     * 
     * @return string
     */
    protected function getUploadDir() {
        
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/competiciones/fotosCompeticiones';
    }

    /**
     * Get the web path for the user
     * 
     * @return string
     */
    public function getWebFotoCompeticionRuta() {

        
        if ($this->getFotoCompeticionRuta() == NULL){
            return '/bundles/padelschedulemain/images/default.png';
        } else {
            return '/'.$this->getUploadDir().'/'.$this->getFotoCompeticionRuta(); 
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUploadFotoCompeticion() {
        if (null !== $this->getFotoCompeticionFichero()) {            
            // genera un nombre de archivo único
            $filename = $this->generarNombreFotoCompeticion();
            $this->setFotoCompeticionRuta($filename.'.'.$this->getFotoCompeticionFichero()->guessExtension());
        }
    }

    /**
     * Genera un nombre de archivo aleatorio
     * 
     * @return string
     */
    public function generarNombreFotoCompeticion() {
        $count = 0;
        do {
            $generator = new SecureRandom();
            $random = $generator->nextBytes(16);
            $randomString = bin2hex($random);
            $count++;
        }
        while(file_exists($this->getUploadRootDir().'/'.$randomString.'.'.$this->getFotoCompeticionFichero()->guessExtension()) && $count < 50);

        return $randomString;
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     * 
     * Sube la imagen
     * 
     * @return mixed
     */
    public function uploadFotoCompeticion() {
        // check there is a profile pic to upload
        if ($this->getFotoCompeticionFichero() === null) {
            return;
        }
        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFotoCompeticionFichero()->move($this->getUploadRootDir(), $this->getFotoCompeticionRuta());

        // check if we have an old image
        if (isset($this->tempFotoCompeticionRuta) && file_exists($this->getUploadRootDir().'/'.$this->tempFotoCompeticionRuta)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->tempFotoCompeticionRuta);
            // clear the temp image path
            $this->tempFotoCompeticionRuta = null;
        }
        $this->fotoCompeticionFichero = null;
    }

     /**
     * @ORM\PostRemove()
     */
    public function eliminarFicheroFotoCompeticion()
    {
        if ($file = $this->getFotoCompeticionAbsolutePath() && file_exists($this->getFotoCompeticionAbsolutePath())) {
            unlink($file);
        }
    }

    
}
