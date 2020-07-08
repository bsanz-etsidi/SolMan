<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\PersistentCollection;

/**
 * Trabajador
 *
 * @ORM\Table(name="Trabajador")
 * @ORM\Entity(repositoryClass="App\Repository\TrabajadorRepository")
 */
class Trabajador
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
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(name="email",type="string", length=254)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Especialidad", type="string", length=255)
     */
    private $especialidad;

    /**
     * Many trabajadores have Many solicitudes.
     * @ORM\ManyToMany(targetEntity="App\Entity\Solicitud", mappedBy="trabajadores")
     */
    private $solicitudes;

    public function __construct()
    {
        $this->solicitudes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Trabajador
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

    public function setEmail($email)
    {
        return $this->email=$email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set especialidad
     *
     * @param string $especialidad
     *
     * @return Trabajador
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Add Solicitud
     *
     * @param \App\Entity\Solicitud $solicitud
     *
     * @return Trabajador
     */
    public function addSolicitud(\App\Entity\Solicitud $solicitud)
      {
          $this->solicitudes[] = $solicitud;
      }

     /**
      * Remove Solicitud
      *
      * @param \App\Entity\Solicitud $solicitud
      */
      public function removeSolicitud(\App\Entity\Solicitud $solicitud)
        {
            $this->solicitudes->removeElement($solicitud);
        }

    /**
     * @return Collection|Solicitud[]
     */
    public function getSolicitudes(): Collection
    {
        return $this->solicitudes;
    }

}
