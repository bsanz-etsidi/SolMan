<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\PersistentCollection;

/**
 * Instruccion
 *
 * @ORM\Table(name="instruccion")
 * @ORM\Entity(repositoryClass="App\Repository\InstruccionRepository")
 */
class Instruccion
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
     * Muchas instrucciones tiene una solicitud
     * @ORM\ManyToOne(targetEntity="App\Entity\Solicitud", inversedBy="instrucciones")
     */
   private $solicitud;



    /**
     * Muchas instrucciones tiene un trabajador
     * @ORM\ManyToOne(targetEntity="App\Entity\Trabajador", inversedBy="instrucciones")
     */
   private $trabajador;

   /**
    * @var \DateTime
    *
    * @ORM\Column(name="FechaFinalizacion", type="datetime", nullable=true)
    */
   private $fechaFinalizacion;


   /**
    * @var string
    *
    * @ORM\Column(name="DescripcionInstruccion", type="text")
    */
   private $descripcionInstruccion;

   /**
    * @var int
    *
    * @ORM\Column(name="Completada", type="integer", nullable=true)
    */
   private $completada;


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
     * Set descripcionInstruccion
     *
     * @param string $descripcionInstruccion
     *
     * @return Instruccion
     */
    public function setDescripcionInstruccion($descripcionInstruccion)
    {
        $this->descripcionInstruccion = $descripcionInstruccion;

        return $this;
    }

    /**
     * Get descripcionInstruccion
     *
     * @return string
     */
    public function getDescripcionInstruccion()
    {
        return $this->descripcionInstruccion;
    }

    /**
     * Set completada
     *
     * @param int $completada
     *
     * @return Instruccion
     */
    public function setCompletada($completada)
    {
        $this->completada = $completada;

        return $this;
    }

    /**
     * Get completada
     *
     * @return int
     */
    public function getCompletada()
    {
        return $this->completada;
    }

    /**
     * Get solicitud
     *
     * @return \App\Entity\Solicitud
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }


    /**
     * Set solicitud
     *
     * @param \App\Entity\Solicitud $solicitud
     *
     * @return Instruccion
     */
    public function setSolicitud(\App\Entity\Solicitud $solicitud = null)
    {
        $this->solicitud = $solicitud;

        return $this;
    }


    /**
     * Get trabajador
     *
     * @return \App\Entity\Trabajador
     */
    public function getTrabajador()
    {
        return $this->trabajador;
    }


    /**
     * Set trabajador
     *
     * @param \App\Entity\Trabajador $trabajador
     *
     * @return Instruccion
     */
    public function setTrabajador(\App\Entity\Trabajador $trabajador = null)
    {
        $this->trabajador = $trabajador;

        return $this;
    }

    /**
     * Set FechaFinalizacion
     *
     * @return Instruccion
     */
    public function setFechaFinalizacion()
    {
        $this->fechaFinalizacion = new \DateTime('now');
        $this->fechaFinalizacion->setTime(0, 0, 0);
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFechaFinalizacion()
    {
        return $this->fechaFinalizacion;
    }



    public function __toString()
    {
      return $this->id;
    }


}
