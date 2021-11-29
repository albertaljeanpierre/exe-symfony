<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtcicleController extends AbstractController
{
    /**
     * @Route("/artcicle", name="artcicle")
     */
    public function index(): Response
    {
        return $this->render('artcicle/index.html.twig', [
            'controller_name' => 'ArtcicleController',
        ]);
    }
}
