<?php

namespace PadelSchedule\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Util\SecureRandom;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="user")

 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=40)
     * @Assert\NotBlank()
     */
    protected $nombre;
    
    /**
     * @ORM\Column(type="string", length=80)
     * @Assert\NotBlank()
     */
    protected $apellidos;
            
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    protected $telefono;
    
    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    protected $fechaNacimiento;
    
    
    /**
     * @Assert\File(maxSize="2048k")
     * @Assert\Image(mimeTypesMessage="Por favor, adjunte un tipo de fichero válido.")
     */
    protected $fotoPerfilFichero;

    // alojamiento temporal
    private $tempFotoPerfilRuta;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $fotoPerfilRuta;
    
    /**
     * @ORM\OneToMany(targetEntity="PadelSchedule\MainBundle\Entity\Competicion", mappedBy="creador")
     */
    protected $competicionesCreadas;
        
    /**
     * @ORM\OneToMany(targetEntity="PadelSchedule\MainBundle\Entity\Inscripcion", mappedBy="jugador")
     */
    protected $inscripciones;
    
//    /**
//     * @ORM\OneToMany(targetEntity="PadelSchedule\MainBundle\Entity\Mensaje", mappedBy="creadorMensaje")
//     */
//    protected $mensajesEnviados;
//    
    /**
     * @ORM\OneToMany(targetEntity="PadelSchedule\MainBundle\Entity\Mensaje", mappedBy="destinatarioMensaje")
     */
    protected $mensajesRecibidos;
    
    /**
     * @ORM\OneToMany(targetEntity="PadelSchedule\MainBundle\Entity\Notificacion", mappedBy="destinatario")
     */
    protected $notificacionesRecibidas;
    
    public function __construct()
    {
        parent::__construct();
        $this->competicionesCreadas = new ArrayCollection();
        $this->inscripciones = new ArrayCollection();
        $this->mensajesEnviados = new ArrayCollection();
        $this->mensajesRecibidos = new ArrayCollection();
    }
       
    
    /**
     * Get Id
     * 
     * @return int
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
     * @return User
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return User
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return User
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return User
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
        
    /**
     * Sets the file used for profile picture uploads
     * 
     * @param UploadedFile $file
     * @return object
     */
    public function setFotoPerfilFichero(UploadedFile $file = null) {
        // set the value of the holder
        $this->fotoPerfilFichero = $file;
         // check if we have an old image path
        if (isset($this->fotoPerfilRuta)) {
            // store the old name to delete after the update
            $this->tempFotoPerfilRuta = $this->fotoPerfilRuta;
            $this->fotoPerfilRuta = null;
        } else {
            $this->fotoPerfilRuta = 'initial';
        }
        return $this;
    }
    
    /**
     * Get the file used for profile picture uploads
     * 
     * @return UploadedFile
     */
    public function getFotoPerfilFichero() {

        return $this->fotoPerfilFichero;
    }

    /**
     * Set fotoPerfilRuta
     *
     * @param string $fotoPerfilRuta
     *
     * @return User
     */
    public function setFotoPerfilRuta($fotoPerfilRuta)
    {
        $this->fotoPerfilRuta = $fotoPerfilRuta;

        return $this;
    }

    /**
     * Get fotoPerfilRuta
     *
     * @return string
     */
    public function getFotoPerfilRuta()
    {
        return $this->fotoPerfilRuta;
    }
    
    /**
     * Get the absolute path of the profilePicturePath
     */
    public function getFotoPerfilAbsolutePath() {
        return null === $this->fotoPerfilRuta
            ? null
            : $this->getUploadRootDir().'/'.$this->fotoPerfilRuta;
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
        return 'uploads/user/profilepics';
    }

    /**
     * Get the web path for the user
     * 
     * @return string
     */
    public function getWebFotoPerfilRuta() {

        
        if ($this->getFotoPerfilRuta() == NULL){
            return '/bundles/padelschedulemain/images/perfilPorDefecto.png';
        } else {
            return '/'.$this->getUploadDir().'/'.$this->getFotoPerfilRuta(); 
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUploadFotoPerfil() {
        if (null !== $this->getFotoPerfilFichero()) {
            // a file was uploaded
            // generate a unique filename
            $filename = $this->generarNombreFotoPerfil();
            $this->setFotoPerfilRuta($filename.'.'.$this->getFotoPerfilFichero()->guessExtension());
        }
    }

    /**
     * Generates a 32 char long random filename
     * 
     * @return string
     */
    public function generarNombreFotoPerfil() {
        $count                  =   0;
        do {
            $generator = new SecureRandom();
            $random = $generator->nextBytes(16);
            $randomString = bin2hex($random);
            $count++;
        }
        while(file_exists($this->getUploadRootDir().'/'.$randomString.'.'.$this->getFotoPerfilFichero()->guessExtension()) && $count < 50);

        return $randomString;
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     * 
     * Upload the profile picture
     * 
     * @return mixed
     */
    public function uploadFotoPerfil() {
        // check there is a profile pic to upload
        if ($this->getFotoPerfilFichero() === null) {
            return;
        }
        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFotoPerfilFichero()->move($this->getUploadRootDir(), $this->getFotoPerfilRuta());

        // check if we have an old image
        if (isset($this->tempFotoPerfilRuta) && file_exists($this->getUploadRootDir().'/'.$this->tempFotoPerfilRuta)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->tempFotoPerfilRuta);
            // clear the temp image path
            $this->tempFotoPerfilRuta = null;
        }
        $this->fotoPerfilFichero = null;
    }

     /**
     * @ORM\PostRemove()
     */
    public function removeProfilePictureFile()
    {
        if ($file = $this->getFotoPerfilAbsolutePath() && file_exists($this->getFotoPerfilAbsolutePath())) {
            unlink($file);
        }
    }

    /**
     * Add competicionCreada
     *
     * @param \PadelSchedule\MainBundle\Entity\Competicion $competicionCreada
     *
     * @return User
     */
    public function addCompeticionCreada(\PadelSchedule\MainBundle\Entity\Competicion $competicionCreada)
    {
        $this->competicionesCreadas[] = $competicionCreada;

        return $this;
    }

    /**
     * Remove competicionCreada
     *
     * @param \PadelSchedule\MainBundle\Entity\Competicion $competicionCreada
     */
    public function removeCompeticionCreada(\PadelSchedule\MainBundle\Entity\Competicion $competicionCreada)
    {
        $this->competicionesCreadas->removeElement($competicionCreada);
    }

    /**
     * Get competicionesCreadas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompeticionesCreadas()
    {
        return $this->competicionesCreadas;
    }

      /**
     * Add inscripcion
     *
     * @param \PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion
     *
     * @return User
     */
    public function addInscripcion(\PadelSchedule\MainBundle\Entity\Inscripcion $inscripcion)
    {
        $this->inscripciones[] = $inscripcion;

        return $this;
    }

    /**
     * Remove inscripcione
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
     * Add mensajesRecibido
     *
     * @param \PadelSchedule\MainBundle\Entity\Mensaje $mensajeRecibido
     *
     * @return User
     */
    public function addMensajeRecibido(\PadelSchedule\MainBundle\Entity\Mensaje $mensajeRecibido)
    {
        $this->mensajesRecibidos[] = $mensajeRecibido;

        return $this;
    }

    /**
     * Remove mensajesRecibido
     *
     * @param \PadelSchedule\MainBundle\Entity\Mensaje $mensajeRecibido
     */
    public function removeMensajeRecibido(\PadelSchedule\MainBundle\Entity\Mensaje $mensajeRecibido)
    {
        $this->mensajesRecibidos->removeElement($mensajeRecibido);
    }

    /**
     * Get mensajesRecibidos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMensajesRecibidos()
    {
        return $this->mensajesRecibidos;
    }
    
    /**
     * Get mensajesNoLeidos
     *
     * @return integer
     */
    public function getMensajesNoLeidos()
    {
        $mensajes = $this->mensajesRecibidos;
        $count = 0;
        foreach ($mensajes as $mensaje) {
            if( !$mensaje->getLeido() ){ $count++; }       
        }
        return $count;
    }

    /**
     * Add competicionesCreada
     *
     * @param \PadelSchedule\MainBundle\Entity\Competicion $competicionesCreada
     *
     * @return User
     */
    public function addCompeticionesCreada(\PadelSchedule\MainBundle\Entity\Competicion $competicionesCreada)
    {
        $this->competicionesCreadas[] = $competicionesCreada;

        return $this;
    }

    /**
     * Remove competicionesCreada
     *
     * @param \PadelSchedule\MainBundle\Entity\Competicion $competicionesCreada
     */
    public function removeCompeticionesCreada(\PadelSchedule\MainBundle\Entity\Competicion $competicionesCreada)
    {
        $this->competicionesCreadas->removeElement($competicionesCreada);
    }

 
    /**
     * Add notificacionRecibida
     *
     * @param \PadelSchedule\MainBundle\Entity\Notificacion $notificacionRecibida
     *
     * @return User
     */
    public function addNotificacionRecibida(\PadelSchedule\MainBundle\Entity\Notificacion $notificacionRecibida)
    {
        $this->notificacionesRecibidas[] = $notificacionRecibida;

        return $this;
    }

    /**
     * Remove notificacionRecibida
     *
     * @param \PadelSchedule\MainBundle\Entity\Notificacion $notificacionRecibida
     */
    public function removeNotificacionRecibida(\PadelSchedule\MainBundle\Entity\Notificacion $notificacionRecibida)
    {
        $this->notificacionesRecibidas->removeElement($notificacionRecibida);
    }

    /**
     * Get notificacionesRecibidas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotificacionesRecibidas()
    {
        return $this->notificacionesRecibidas;
    }
    
    /**
     * Get notificacionesNoVistas
     *
     * @return integer
     */
    public function getNotificacionesNoVistas()
    {
        $notificaciones = $this->notificacionesRecibidas;        
        $count = 0;
        foreach ($notificaciones as $notificacion) {
            if( !$notificacion->getVista() ){ $count++; }       
        }
        return $count;
    }
}
