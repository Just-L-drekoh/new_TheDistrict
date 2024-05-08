<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class MailService
{

    public function __construct(private MailerInterface $mailer)
    {
    }

    public function sendMail($formdata)
    {
        $email = (new TemplatedEmail())
            ->from($formdata->getEmail())
            ->to('TheDistrict@gmail.com')
            ->subject('Demande de Contact')
            ->htmlTemplate('contact/mail.html.twig')
            ->context(['data_mail' => $formdata]);

        $this->mailer->send($email);
    }
}
