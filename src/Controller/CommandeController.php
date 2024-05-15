<?php

namespace App\Controller;

use App\Service\PanierService;
use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    #[IsGranted("ROLE_USER")]

    public function commande(Request $request, PanierService $panierService, PlatRepository $platRepo): Response
    {
        $panier = $panierService->getPanier($platRepo, $request);

        dd($panier);
        return $this->render('commande/index.html.twig', []);
    }
}
