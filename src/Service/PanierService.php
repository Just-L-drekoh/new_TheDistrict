<?php

namespace App\Service;

use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;

class PanierService

{

    private $session;


    public function __construct(private RequestStack $requestStack)

    {
    }

    public function addProduit($id, PlatRepository $platRepo, Request $request)
    {
        $session = $this->requestStack->getSession();

        $plat = $platRepo->find(['id' => $id]);


        $panier = $session->get('panier', []);

        if (array_key_exists($id, $panier)) {
            $panier[$id] += 1;
        } else {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);

        return $panier;
    }

    public function getPanier(PlatRepository $platRepo, Request $request)
    {
        $session = $this->requestStack->getSession();

        $panier = $session->get('panier', []);

        $contenu = array();

        foreach ($panier as $id => $quantity) {
            $plat = $platRepo->find(['id' => $id]);
            $item = [$plat, $quantity];
            array_push($contenu, $item);
        }

        return $contenu;
    }
}
