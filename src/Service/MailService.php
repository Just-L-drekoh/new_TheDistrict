<?php

namespace App\Service;

use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class MailService
{

    public function __construct(private MailerInterface $mailer)
    {
    }

    public function sendMail($data)
    {
        $email = (new TemplatedEmail())
            ->from($data->getEmail())
            ->to('TheDistrict@gmail.com')
            ->subject('Demande de Contact')
            ->htmlTemplate('contact/mail.html.twig')
            ->context(['data_mail' => $data]);

        $this->mailer->send($email);
    }

    public function sendEmailConfirmation($data)
    {


        $emailConfirmation = (new Email())
            ->from('The_District@gmail.com')
            ->to($data->getEmail())
            ->subject('Confirmation de votre demande de contact')
            ->text('Merci pour votre demande de contact. Nous avons bien reçu vos informations.');

        $this->mailer->send($emailConfirmation);
    }


    public function SendMailCommande($formdata, $user, $panier)
    {




        $email = (new TemplatedEmail())
            ->from($user->getEmail())
            ->to('TheDistrict@gmail.com')
            ->subject("Commande d'un client")
            ->htmlTemplate('commande/commandeMail.html.twig')
            ->context([
                'user' => $user,
                'panier' => $panier,
                'formdata' => $formdata,
            ]);

        $this->mailer->send($email);
    }

    public function SendMailCommandeConfirmation($formdata, $user, $panier)
    {




        $email = (new TemplatedEmail())
            ->from('TheDistrict@gmail.com')
            ->to($user->getEmail())
            ->subject('Commande vien pris en compte')
            ->htmlTemplate('commande/commandeMailConfirmation.html.twig')
            ->context([
                'user' => $user,
                'panier' => $panier,
                'formdata' => $formdata,
            ]);

        $this->mailer->send($email);
    }
}
