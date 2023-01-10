<?php

namespace App\Service;

use App\Entity\Contact;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;

/**
 * @author Matthieu PAYS <matthieu.pays@boosttic.com>
 */
class Mailer
{

    /**
     * @var MailerInterface
     */
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Sends the summary email of the contact form to the sales team and the client
     * @param Contact $contact
     * @return void
     * @throws TransportExceptionInterface
     */
    public function sendContactMail(Contact $contact): void
    {
        $email = (new TemplatedEmail())
            ->from('noreply@laformuleagile.com')
            ->subject('[Boosttic] Demande de contact')
            ->htmlTemplate('emails/contact.html.twig')
            ->context([
                'contact' => $contact
            ]);
        $this->sendMail($email, 'matthieu.pays@boosttic.com', $contact->getMail());
        $this->sendMail($email, $contact->getMail());
    }

    /**
     * Sends an email with the base of the email, the receiver and the contact to answer
     * @param TemplatedEmail $email
     * @param string $receiver
     * @param string|null $sender
     * @return void
     * @throws TransportExceptionInterface
     */
    private function sendMail(TemplatedEmail $email, string $receiver, string $sender = null): void
    {
        $email->to($receiver);
        if ($sender !== null) {
            $email->replyTo($sender);
        }
        $this->mailer->send($email);
    }

}