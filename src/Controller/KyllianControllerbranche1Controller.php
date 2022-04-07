<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KyllianControllerbranche1Controller extends AbstractController
{
    /**
     * @Route("/kyllian/controllerbranche1", name="app_kyllian_controllerbranche1")
     */
    public function index(): Response
    {
        return $this->render('kyllian_controllerbranche1/index.html.twig', [
            'controller_name' => 'KyllianControllerbranche1Controller',
        ]);
    }
}
