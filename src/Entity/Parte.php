<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parte
 *
 * @ORM\Table(name="parte")
 * @ORM\Entity(repositoryClass="App\Repository\ParteRepository")
 */
class Parte
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
     * @var string
     *
     * @ORM\Column(name="localizacion", type="string", length=255)
     */
    private $localizacion;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="datetime")
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="datetime")
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @ORM\OneToOne(targetEntity="Solicitud")
     * @ORM\JoinColumn(name="solicitud_id", referencedColumnName="id")
     */
     private $solicitud;

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
     * Set localizacion
     *
     * @param string $localizacion
     *
     * @return Parte
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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     *
     * @return Parte
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     *
     * @return Parte
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Parte
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
   * Set solicitud
   *
   * @param \App\Entity\Solicitud $solicitud
   *
   * @return Parte
   */
  public function setSolicitud(\App\Entity\Solicitud $solicitud = null)
  {
      $this->solicitud = $solicitud;

      return $this;
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


}
