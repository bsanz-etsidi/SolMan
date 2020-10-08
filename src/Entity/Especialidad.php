<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\PersistentCollection;

/**
 * Especialidad
 *
 * @ORM\Table(name="Especialidad")
 * @ORM\Entity(repositoryClass="App\Repository\EspecialidadRepository")
 */
class Especialidad
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
    * @ORM\ManyToOne(targetEntity="App\Entity\Parte", inversedBy="especialidades")
    */
   private $parte;


    /**
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", length=255)
     */
    private $tipo;



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
     * Get parte
     *
     * @return \App\Entity\Parte
     */
    public function getParte()
    {
        return $this->parte;
    }

    /**
     * Set parte
     *
     * @param \App\Entity\Parte $parte
     *
     * @return Especialidad
     */
    public function setParte(\App\Entity\Parte $parte = null)
    {
        $this->parte = $parte;

        return $this;
    }


    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Especialidad
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

    public function __toString()
    {
      return $this->id;
    }


}
