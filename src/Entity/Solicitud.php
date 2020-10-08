<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\PersistentCollection;


/**
 * Solicitud
 *
 * @ORM\Table(name="solicitud")
 * @ORM\Entity(repositoryClass="App\Repository\SolicitudRepository")
 */
class Solicitud
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="valorada", type="integer", nullable=true)
     */
    private $valorada;

    /**
     * @var string
     *
     * @ORM\Column(name="Solicitante", type="string", length=255)
     */
    private $solicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="Destino", type="string", length=255)
     */
    private $destino;

    /**
     * @var string
     *
     * @ORM\Column(name="CausaAnulacion", type="string", length=255, nullable=true)
     */
    private $causaAnulacion;

    /**
     * @var string
     *
     * @ORM\Column(name="CausaSuspension", type="string", length=255, nullable=true)
     */
    private $causaSuspension;

    /**
     * @var \Datetime
     *
     * @ORM\Column(name="fechaSuspension", type="datetime", length=255, nullable=true)
     */
    private $fechaSuspension;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Extension", type="string", length=255)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * Many solicitudes have Many trabajadores.
     * @ORM\ManyToMany(targetEntity="App\Entity\Trabajador", inversedBy="solicitudes")
     * @ORM\JoinTable(name="solicitudes_trabajadores")
     */
    private $trabajadores;

    /**
     * @ORM\OneToMany(targetEntity="Evento", mappedBy="solicitud")
     */
    private $eventos;

    /**
     * @ORM\OneToMany(targetEntity="Instruccion", mappedBy="solicitud")
     */
    private $instrucciones;

    /**
     * @var string
     *
     * @ORM\Column(name="estancia", type="string", length=255)
     */
    private $estancia;

    /**
     * @var string
     *
     * @ORM\Column(name="DescripcionIncidencia", type="text")
     */
    private $descripcionIncidencia;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer")
     */
    private $estado;

    /**
     * @var int
     *
     * @ORM\Column(name="tiempoSuspension", type="integer", nullable=true)
     */
    private $tiempoSuspension;

    /**
     * @var bool
     *
     * @ORM\Column(name="prioritaria", type="boolean")
     */
    private $prioritaria;


    public function __construct()
    {
        $this->trabajadores = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eventos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->instrucciones = new \Doctrine\Common\Collections\ArrayCollection();

    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
      * Get valorada
      *
      * @return int
      */
     public function getValorada()
     {
         return $this->valorada;
     }

     /**
      * Set valorada
      *
      * @param int $valorada
      *
      * @return Solicitud
      */
     public function setValorada($valorada)
     {
         $this->valorada = $valorada;
         return $this;
     }

    /**
     * Set solicitante
     *
     * @param string $solicitante
     *
     * @return Solicitud
     */
    public function setSolicitante($solicitante)
    {
        $this->solicitante = $solicitante;

        return $this;
    }

    /**
     * Get solicitante
     *
     * @return string
     */
    public function getSolicitante()
    {
        return $this->solicitante;
    }

    /**
     * Add Trabajador
     *
     * @param \App\Entity\Trabajador $trabajador
     *
     * @return Solicitud
     */
    public function addTrabajador(\App\Entity\Trabajador $trabajador)
      {
            $trabajador->addSolicitud($this);
            $this->trabajadores[] = $trabajador;
          }



     /**
      * Remove Trabajador
      *
      * @param \App\Entity\Trabajador $trabajador
      */
      public function removeTrabajador(\App\Entity\Trabajador $trabajador)
        {
            $this->trabajadores->removeElement($trabajador);
        }


    /**
     * @return Collection|Trabajador[]
     */
    public function getTrabajadores(): Collection
    {
        return $this->trabajadores;
    }


    /**
     * Set destino
     *
     * @param string $destino
     *
     * @return Solicitud
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set CausaAnulacion
     *
     * @param string $causaAnulacion
     *
     * @return Solicitud
     */
    public function setCausaAnulacion($causaAnulacion)
    {
        $this->causaAnulacion = $causaAnulacion;

        return $this;
    }

    /**
     * Get CausaAnulacion
     *
     * @return string
     */
    public function getCausaAnulacion()
    {
        return $this->causaAnulacion;
    }

    /**
     * Set CausaSuspension
     *
     * @param string $causaSuspension
     *
     * @return Solicitud
     */
    public function setCausaSuspension($causaSuspension)
    {
        $this->causaSuspension = $causaSuspension;

        return $this;
    }

    /**
     * Get CausaSuspension
     *
     * @return string
     */
    public function getCausaSuspension()
    {
        return $this->causaSuspension;
    }

    /**
     * Set prioritaria
     *
     * @param bool $prioritaria
     *
     * @return Solicitud
     */
    public function setPrioritaria($prioritaria)
    {
        $this->prioritaria = $prioritaria;

        return $this;
    }

    /**
     * Get prioritaria
     *
     * @return string
     */
    public function getPrioritaria()
    {
        return $this->prioritaria;
    }

    /**
     * Set fecha
     *
     * @return Solicitud
     */
    public function setFecha()
    {
        $this->fecha = new \DateTime('now');
        $this->fecha->setTime(0, 0, 0);
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
     * Set extension
     *
     * @param string $extension
     *
     * @return Solicitud
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Solicitud
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set estancia
     *
     * @param string $estancia
     *
     * @return Solicitud
     */
    public function setEstancia($estancia)
    {
        $this->estancia = $estancia;

        return $this;
    }

    /**
     * Get estancia
     *
     * @return string
     */
    public function getEstancia()
    {
        return $this->estancia;
    }

    /**
     * Set descripcionIncidencia
     *
     * @param string $descripcionIncidencia
     *
     * @return Solicitud
     */
    public function setDescripcionIncidencia($descripcionIncidencia)
    {
        $this->descripcionIncidencia = $descripcionIncidencia;

        return $this;
    }

    /**
     * Get descripcionIncidencia
     *
     * @return string
     */
    public function getDescripcionIncidencia()
    {
        return $this->descripcionIncidencia;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Solicitud
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set tiempoSuspension
     *
     * @param integer $tiempoSuspension
     *
     * @return Solicitud
     */
    public function setTiempoSuspension($tiempoSuspension)
    {
        $this->tiempoSuspension = $tiempoSuspension;

        return $this;
    }

    /**
     * Get tiempoSuspension
     *
     * @return integer
     */
    public function getTiempoSuspension()
    {
        return $this->tiempoSuspension;
    }

    /**
     * Set fechaSuspension
     *
     * @param DateTime $fechaSuspension
     *
     * @return Solicitud
     */
    public function setFechaSuspension()
    {
        $this->fechaSuspension = new \DateTime('now');
        $this->fecha->setTime(0, 0, 0);
        return $this;
    }

    /**
     * Get fechaSuspension
     *
     * @return DateTime
     */
    public function getFechaSuspension()
    {
        return $this->fechaSuspension;
    }



  /**
   * Add evento
   *
   * @param \App\Entity\Evento $evento
   *
   * @return Solicitud
   */
  public function addEvento(\App\Entity\Evento $evento)
  {
      $this->eventos[] = $evento;
      return $this;
  }

  /**
   * Remove evento
   *
   * @param \App\Entity\Evento $evento
   */
  public function removeEvento(\App\Entity\Evento $evento)
  {
      $this->eventos->removeElement($evento);
  }

  /**
   * Get eventos
   *
   * @return Collection|Evento[]
   */
  public function getEventos(): Collection
  {
      return $this->eventos;
    }

    /**
     * Add instruccion
     *
     * @param \App\Entity\Instruccion $instruccion
     *
     * @return Solicitud
     */
    public function addInstruccion(\App\Entity\Instruccion $instruccion)
    {
        $this->instrucciones[] = $instruccion;
        return $this;
    }

    /**
     * Remove instruccion
     *
     * @param \App\Entity\Instruccion $instruccion
     */
    public function removeInstruccion(\App\Entity\Instruccion $instruccion)
    {
        $this->instrucciones->removeElement($instruccion);
    }

    /**
     * Get instrucciones
     *
     * @return Collection|Instruccion[]
     */
    public function getInstrucciones(): Collection
    {
        return $this->instrucciones;
      }



    public function __toString()
    {
      return $this->id;
    }

}
