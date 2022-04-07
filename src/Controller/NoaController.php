<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoaController extends AbstractController
{
    /**
     * @Route("/noa", name="app_noa")
     */
    public function index(): Response
    {
        return $this->render('noa/index.html.twig', [
            'controller_name' => 'NoaController',
        ]);
    }
}
