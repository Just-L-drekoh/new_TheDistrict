<?php

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

    public function MailContact(Request $request, EntityManagerInterface $em, Contact $data): void
    {
        $demande = new Contact();
        $form = $this->formFactory->create(ContactFormType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $demande->setDate(new \DateTimeImmutable());

            $email = (new TemplatedEmail())
                ->from($data->getEmail())
                ->to('TheDistrict@gmail.com')
                ->subject('Demande de Contact')
                ->htmlTemplate('contact/mail.html.twig')
                ->context(['data_mail' => $data]);

            $em->persist($demande);
            $em->flush();


            $this->mailer->send($email);
        }
    }
}
