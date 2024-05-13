<?php

namespace App\Controller;

use App\Service\PanierService;
use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PanierController extends AbstractController
{


    public function addPanier(Request $request, PanierService $panierService): Response
    {
        $user = $this->getUser();

        $id = $request->attributes->get('id');


        // Si 'panier' n'existe pas, on le crée...
        // $panier = $session->get('panier', array($id => 0));
        // // Si un plat se trouve déjà dans le panier, on incrémente la quantité...
        // if (array_key_exists($id, $panier)) {
        //     $panier[$id] += 1;
        //     // ... sinon, on affecte la quantité 1.
        // } else {
        //     $panier[$id] = 1;
        // }

        // $plats = $plat->find(['id' => $id]);

        // $session->set('panier', $panier);
        // dd($panier, $session);


        $panier = $panierService->addProduit($id);


        return $this->render('panier/index.html.twig', [
            'user' => $user,
            'pannier' => $panier,

        ]);
    }














    #[IsGranted("ROLE_USER")]
    public function listPanier(Request $request, PlatRepository $plat, SessionInterface $session): Response
    {

        $user = $this->getUser();


        return $this->render('panier/index.html.twig', [
            'user' => $user,

        ]);
    }
}
