<?php 

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Pelicula;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Routing\ClassResourceInterface;


class PeliculaController  extends FOSRestController  implements ClassResourceInterface
{
    /**
     * @GET("")
     * @ApiDoc(
     *  resource=true,
     *  authentication=false,
     *  tags = {
     *      "estable" = "#228B22"
     *  },
     *  description="Obtener Generos",
     *  output={"name"="", "class"="AppBundle\Entity\Pelicula"},
     *  statusCodes = {
     *      200 = "Se obtienen uno o varios recursos de forma satisfactoria",
     *      400 = "El request no cumple las condiciones necesarias",
     *      404="El recurso solicitado no existe",
     *      500="Internal Server Error"
     *  },
     * )
     */
    public function cgetAction()
    {
        var_dump('entro al controlador de prueba');
        $em = $this->getDoctrine()->getManager();
        $peliculas= $em->getRepository('AppBundle:Pelicula')->findAll();
        return $this->handleView($this->view($peliculas, 200));
    }
}
