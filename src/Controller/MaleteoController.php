<?php

namespace App\Controller;

use App\Entity\Maleteo;
use App\Form\MaleteoForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MaleteoController extends AbstractController{
    
    /**
     *  
     * Función que recoge los comentarios de los guardianes de un documento json
     * y los muestra en una plantilla index.html.twig a la hora de cargar la pagina. 
     * También genera un formulario.
     * 
     * @Route("/", name="inicio")
     */
    public function maleteo(){

        $documento = "criticas.json";

        $formulario_creado = $this->createForm(MaleteoForm::class);

        //Cojo el contenido de un fichero json.
        $contenido = file_get_contents($documento);
        
        //Convierto el contenido json en array. Sin el true es posible que lo deje en objeto en vez de array.
        $contenido_array = json_decode($contenido, true);
        
        //Guardo en una variable lo que necesito para mostrar en el html
        $content = $contenido_array["criticas"];

        //$content = array_slice($contentio, 0,3);

        return $this->render("index.html.twig", 
        ["comentarios" => $content,
         "formulario" => $formulario_creado->createView()]);

    }

    /**
     * @Route("/pruebas/", name="prueba")
     */
    public function pruebas(){

        $documento = "criticas.json";

        $contenido = file_get_contents($documento);

        //Convierto el contenido json en array. Sin el true es posible que lo deje en objeto en vez de array.
        $contenido_array = json_decode($contenido, true);
        //dd($contenido_array);

        return new JsonResponse($contenido_array);

    }
    
    /**
     * @Route("/submited", name="insertar", methods={"POST"})
     */
    public function insertar_guardianes(Request $request, EntityManagerInterface $em){

        $formulario = $this->createForm(MaleteoForm::class);

        $formulario->handleRequest($request);

        if($formulario->isSubmitted() && $formulario->isValid()){
            //obtengo los datos del formulario y los paso al objeto Maleteo
            $maleteo = $formulario->getData();

            $em->persist($maleteo);
            $em->flush();

            return new JsonResponse("correcto");

        }

        return $this->redirectToRoute("inicio");

    }
    /**
     * @Route("/recuperacion/", name="listado")
     */
    public function recuperacion_guardianes(EntityManagerInterface $em){

        $repositorio =  $em->getRepository(Maleteo::class);

        $guardianes = $repositorio->findAll();
        
        return $this->render("listado.html.twig",["listado_guardianes" => $guardianes]);

    }

    /**
     * @Route("recuperacion/editar/{id}", name="listado_editar", methods={"GET", "POST"})
     */
    public function usuario_editar(Request $request, EntityManagerInterface $em, Maleteo $maleteo){

        $formulario = $this->createForm(MaleteoForm::class, $maleteo);

        $formulario->handleRequest($request);

        if($formulario->isSubmitted() && $formulario->isValid()){
            //obtengo los datos del formulario y los paso al objeto Maleteo
            $datos = $formulario->getData();

            $em->flush();

            return $this->redirectToRoute("listado");

        }

        return $this->render("editar.html.twig", 
        [
            "formulario" => $formulario->createView(),
            "datos" => $maleteo]);
    
    }


    /**
     * @Route("recuperacion/eliminar/{id}", name="eliminar")
     */
    public function remove(EntityManagerInterface $em, Maleteo $maleteo)
    {
        $em->remove($maleteo);

        $em->flush();

        return $this->redirectToRoute("listado");
       
    }

}