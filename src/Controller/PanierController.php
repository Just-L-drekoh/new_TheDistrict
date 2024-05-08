<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{

    #[IsGranted("ROLE_USER")]
    public function listPanier(): Response
    {
        $user = $this->getUser();

        return $this->render('panier/index.html.twig', [
            'user' => $user,
        ]);
    }
}
