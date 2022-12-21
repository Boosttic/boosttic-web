<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Matthieu PAYS <matthieu.pays@boosttic.com>
 */
class CreationController extends AbstractController
{

    /**
     * @return Response
     */
    #[Route('/creations', 'creations_index')]
    public function index(): Response
    {
        return $this->render('creations/index.html.twig');
    }

}