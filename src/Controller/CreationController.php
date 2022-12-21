<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationController extends AbstractController
{

    #[Route('/creations', 'creations_index')]
    public function index(): Response
    {
        return $this->render('creations/index.html.twig');
    }

}