<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PanierController extends AbstractController
{


    public function addPanier(Request $request, PlatRepository $plat, SessionInterface $session): Response
    {
        $user = $this->getUser();

        $id = $request->attributes->get('id');

        $plats = $plat->find(['id' => $id]);

        $session->set('addPanier', $plats);



        return $this->render('panier/index.html.twig', [
            'user' => $user,
            'sessions' => $session,
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
