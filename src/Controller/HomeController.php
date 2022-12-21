<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Matthieu PAYS <matthieu.pays@boosttic.com>
 */
class HomeController extends AbstractController
{

    /**
     * Returns the homepage view
     * @return Response
     */
    #[Route('/', 'home')]
    public function index(): Response
    {
        return $this->render('home.html.twig');
    }

}