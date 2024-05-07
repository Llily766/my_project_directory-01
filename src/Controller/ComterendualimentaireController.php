<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ComterendualimentaireController extends AbstractController
{
    #[Route('/comterendualimentaire', name: 'app_comterendualimentaire')]
    public function index(): Response
    {
        return $this->render('comterendualimentaire/index.html.twig', [
            'controller_name' => 'ComterendualimentaireController',
        ]);
    }
}
