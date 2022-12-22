<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
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
        $projectsNotSorted = $this->projectRepository->findOrderByDate();
        $projects = [];
        $projectByYear = [];
        $date = new \DateTime('now');
        foreach ($projectsNotSorted as $project) {
            if ($project->getCreatedAt()->format('Y') === $date->format('Y')) {
                $projectByYear[] = $project;
            }else {
                $projects[$date->format('Y')] = $projectByYear;
                $projectByYear = [];
                $date = $project->getCreatedAt();
                $projectByYear[] = $project;
            }
        }
        $projects[$date->format('Y')] = $projectByYear;
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
        return $this->render('creations/view.html.twig');
    }

}