<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LucasController extends AbstractController
{
    /**
     * @Route("/lucas", name="app_lucas")
     */
    public function index(): Response
    {
        return $this->render('lucas/index.html.twig', [
            'controller_name' => 'LucasController',
        ]);
    }
}
