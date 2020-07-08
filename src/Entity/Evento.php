<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\PersistentCollection;

/**
 * Evento
 *
 * @ORM\Table(name="Evento")
 * @ORM\Entity(repositoryClass="App\Repository\EventoRepository")
 */
class Evento
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
    * @ORM\ManyToOne(targetEntity="App\Entity\Solicitud", inversedBy="eventos")
    */
   private $solicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Causa", type="string", length=255,  nullable=true)
     */
    private $causa;


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
     * @return Evento
     */
    public function setSolicitud(\App\Entity\Solicitud $solicitud = null)
    {
        $this->solicitud = $solicitud;

        return $this;
    }


    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Evento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set causa
     *
     * @param string $causa
     *
     * @return Evento
     */
    public function setCausa($causa)
    {
        $this->causa = $causa;

        return $this;
    }

    /**
     * Get causa
     *
     * @return string
     */
    public function getCausa()
    {
        return $this->causa;
    }

    /**
     * Set fecha
     *
     * @return Evento
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


        public function __toString()
        {
          return $this->id;
        }

}
