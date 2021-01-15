<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\PersistentCollection;


/**
 * Valoracion
 *
 * @ORM\Table(name="Valoracion")
 * @ORM\Entity(repositoryClass="App\Repository\ValoracionRepository")
 */
class Valoracion
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
     * @ORM\OneToOne(targetEntity="Solicitud", mappedBy="valoracion")
     */
     private $solicitud;

     /**
     * @var string
     *
     * @ORM\Column(name="satisfaccion", type="string", length=255)
     */
    private $satisfaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="rapidez", type="string", length=255,  nullable=true)
     */
    private $rapidez;


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
     * @return Valoracion
     */
    public function setSolicitud(\App\Entity\Solicitud $solicitud = null)
    {
        $this->solicitud = $solicitud;

        return $this;
    }


    /**
     * Set satisfaccion
     *
     * @param string $satisfaccion
     *
     * @return Valoracion
     */
    public function setSatisfaccion($satisfaccion)
    {
        $this->satisfaccion = $satisfaccion;

        return $this;
    }

    /**
     * Get satisfaccion
     *
     * @return string
     */
    public function getSatisfaccion()
    {
        return $this->satisfaccion;
    }

    /**
     * Set rapidez
     *
     * @param string $rapidez
     *
     * @return Valoracion
     */
    public function setRapidez($rapidez)
    {
        $this->rapidez = $rapidez;

        return $this;
    }

    /**
     * Get rapidez
     *
     * @return string
     */
    public function getRapidez()
    {
        return $this->rapidez;
    }

    /**
     * Set fecha
     *
     * @return Valoracion
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
