<?php

namespace App\Controller;

use App\Service\PanierService;
use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierController extends AbstractController
{



    public function addPanier(Request $request, PlatRepository $plat, PanierService $panierService): Response
    {


        $id = $request->attributes->get('id');
        $panier = $panierService->addProduit($id, $plat, $request);

        //dd($panier);

        return $this->redirectToRoute('listPanier');
    }

    public function removePanier(Request $request, PanierService $panierService): Response
    {

        $id = $request->attributes->get('id');

        $panier = $panierService->removeProduit($id, $request);




        return $this->redirectToRoute('listPanier');
    }








    #[IsGranted("ROLE_USER")]
    public function listPanier(Request $request, PlatRepository $platRepo, PanierService $panierService, SessionInterface $session): Response
    {

        $user = $this->getUser();

        $panier = $panierService->getPanier($platRepo, $request);

        return $this->render('panier/index.html.twig', [
            'user' => $user,
            'panier' => $panier,

        ]);
    }
}
