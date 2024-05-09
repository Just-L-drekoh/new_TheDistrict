<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PanierController extends AbstractController
{

    #[IsGranted("ROLE_USER")]
    public function listPanier(Request $request, PlatRepository $plat): Response
    {

        $user = $this->getUser();
        $libelle = $request->query->get('libelle');

        $plats = $plat->findOneBy(['libelle' => $libelle]);

        return $this->render('panier/index.html.twig', [
            'user' => $user,

        ]);
    }
}
