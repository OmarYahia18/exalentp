<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutPfeController extends AbstractController
{
    #[Route('/ajout/pfe', name: 'app_ajout_pfe')]
    public function index(): Response
    {
        return $this->render('ajout_pfe/index.html.twig', [
            'controller_name' => 'AjoutPfeController',
        ]);
    }
}
