<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Matthieu PAYS <matthieu.pays@boosttic.com>
 */
class ContactController extends AbstractController
{

    /**
     * Returns the view to contact the company
     * @return Response
     */
    #[Route('/contact', 'nous-contactez')]
    public function index(): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        return $this->render('contact.html.twig', [
            'form' => $form->createView()
        ]);
    }

}