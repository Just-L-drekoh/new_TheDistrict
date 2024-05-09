<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Repository\CommandeRepository;
use App\Repository\DetailRepository;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{

    public function index(): Response
    {
        return $this->render('profile/index.html.twig', []);
    }

    public function profileUser(CommandeRepository $comm, DetailRepository $dt, PlatRepository $plat): Response
    {
        $user = $this->getUser();

        $commande = $comm->findBy(['utilisateur' => $user]);

        $details = $dt->findBy(['commande' => $commande]);

        foreach ($details as $detail) {
            $plats[] = $plat->find($detail->getPlat());
        };




        return $this->render('profile/profile.html.twig', [
            'infos' => $user,
            'commandes' => $commande,
            'details' => $details,
            'plats' => $plats
        ]);
    }
}
