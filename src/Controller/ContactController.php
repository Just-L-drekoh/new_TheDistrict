<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Service\MailService;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ContactController extends AbstractController
{
    #[IsGranted("ROLE_USER")]
    public function contact(Request $request, EntityManagerInterface $em, MailService $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact->setDate(new \DateTimeImmutable());

            $em->persist($contact);
            $em->flush();

            $mailer->sendMail($form->getData());
            $mailer->sendEmailConfirmation($form->getData());
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
