<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Matthieu PAYS <matthieu.pays@boosttic.com>
 */
class CreationController extends AbstractController
{

    /**
     * @var ProjectRepository
     */
    private ProjectRepository $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * @return Response
     */
    #[Route('/creations', 'creations_index')]
    public function index(): Response
    {
        $projects = $this->projectRepository->findOrderByDate();
        return $this->render('creations/index.html.twig', [
            'projects' => $projects
        ]);
    }

    /**
     * @param string $slug
     * @return Response
     */
    #[Route('/creations/{slug}', 'creations_view')]
    public function viewCreation(string $slug): Response
    {
        try {
            $project = $this->projectRepository->findBySlug($slug);
            if ($project != null) {
                return $this->render('creations/view.html.twig', [
                    'project' => $project
                ]);
            }else {
                throw $this->createNotFoundException();
            }
        } catch (NonUniqueResultException $e) {
            return new Response($e);
        }
    }

}