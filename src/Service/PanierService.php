<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;

class PanierService

{

    private $session;


    public function __construct(SessionInterface $session)

    {

        $this->session = $session;
    }

    public function addProduit($id)
    {
        $panier = $this->session->get('panier', []);

        if (array_key_exists($id, $panier)) {
            $panier[$id] += 1;
        } else {
            $panier[$id] = 1;
        }

        $this->session->set('panier', $panier);

        return $panier;
    }
}
