<?php

namespace App\Controller;

use App\Entity\Detail;
use App\Entity\Commande;
use App\Service\MailService;
use App\Form\CommandeFormType;
use App\Service\PanierService;
use App\Repository\PlatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    #[IsGranted("ROLE_USER")]

    public function commande(Request $request, PanierService $panierService, MailService $mailer, PlatRepository $platRepo, EntityManagerInterface $em): Response
    {

        $commande = new Commande();


        $user = $this->getUser();

        $panier = $panierService->getPanier($platRepo, $request);

        $form = $this->createForm(CommandeFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            $mailer->SendMailCommande($form->getData(), $user, $panier);
            $mailer->SendMailCommandeConfirmation($form->getData(), $user, $panier);
            $commande->setDateCommande(new \DateTimeImmutable());
            $commande->setUtilisateur($user);
            $commande->setTotal($panier["total"]);
            $commande->setEtat(0);

            $em->persist($commande);
            $em->flush();


            foreach ($panier['panier'] as $item) {
                $detail = new Detail();
                $detail->setCommande($commande);
                $detail->setPlat($item[0]);
                $detail->setQuantite($item[1]);

                $em->persist($detail);
            }


            $em->flush();

            $panierService->clearPanier();
            return  $this->redirectToRoute('home');
        }
        return $this->render('commande/index.html.twig', [
            'user' => $user,
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }
}
