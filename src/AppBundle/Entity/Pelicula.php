<?php 

namespace AppBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation as Serializer;
use AppBundle\Entity\Genero;


/**
 * @ORM\Entity
 * @Serializer\ExclusionPolicy("all")
 */
class Pelicula {
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
    protected $titulo;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Serializer\Expose
     */
    protected $votos;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Genero")
     * @ORM\JoinTable(name="pelicula_genero",
     *      joinColumns={@ORM\JoinColumn(name="pelicula_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="genero_id", referencedColumnName="id")}
     *  )
     * @Serializer\Expose
     **/
    protected $generos;



    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getVotos(){
        return $this->votos;
    }
    public function getGenero(){
        return $this->generos;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
        return $this;
    }
    public function addGeneros(Genero $genero) {
        $this->generos[] = $genero;
        return $this;
    }

    public function removeGenero(Pregunta $genero) {
        $this->preguntas->removeElement($genero);
    }

}