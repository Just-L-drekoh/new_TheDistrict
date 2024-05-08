<?php

namespace App\Controller;



use App\Service\MailService;
use App\Form\ContactFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;

class ContactController extends AbstractController
{

    private $EntityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->EntityManager = $entityManager;
    }

    public function contact(Request $request, MailService $ms): Response
    {
        $form = $this->createForm(ContactFormType::class);

        $ms->mailContact($request, $this->EntityManager);






        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView(),
        ]);
    }
}
