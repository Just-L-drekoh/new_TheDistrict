<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{

    public function index(): Response
    {
        return $this->render('profile/index.html.twig', []);
    }

    public function profileUser(): Response
    {
        $user = $this->getUser();
        return $this->render('profile/profile.html.twig', [
            'infos' => $user,
        ]);
    }
}
