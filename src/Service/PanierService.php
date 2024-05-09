<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Plat;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierService
{
    public function __construct(private SessionInterface $session)
    {
    }

    public function addProduit()
    {
    }
}
