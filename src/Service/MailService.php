<?php

namespace App\Service;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormFactoryInterface;

class MailService
{
    private $formFactory;
    private $mailer;

    public function __construct(FormFactoryInterface $formFactory, MailerInterface $mailer)
    {
        $this->formFactory = $formFactory;
        $this->mailer = $mailer;
    }

    public function mailContact(Request $request, EntityManagerInterface $entityManager): void
    {

        $form = $this->formFactory->create(ContactFormType::class);


        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $contact = $form->getData();


            $contact->setDate(new \DateTimeImmutable());


            $entityManager->persist($contact);
            $entityManager->flush();


            $email = (new TemplatedEmail())
                ->from($contact->getEmail())
                ->to('TheDistrict@gmail.com')
                ->subject('Demande de Contact')
                ->htmlTemplate('contact/mail.html.twig')
                ->context(['data_mail' => $contact]);
            $this->mailer->send($email);
        }
    }
}
