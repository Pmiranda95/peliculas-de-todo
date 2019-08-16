<?php 

namespace AppBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation as Serializer;

/**
 * @ORM\Entity
 * @Serializer\ExclusionPolicy("all")
 */
class Genero {

  /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Serializer\Expose
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Serializer\Expose
     */
    protected $nombre;

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

}