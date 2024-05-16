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

    public function getPanier(PlatRepository $platRepo)
    {
        $session = $this->requestStack->getSession();


        $panier = $session->get('panier', []);

        $contenu = array();

        $total = 0;

        foreach ($panier as $id => $quantity) {
            $plat = $platRepo->find(['id' => $id]);
            $total_partiel = $plat->getPrix() * $quantity;
            $total += $total_partiel;
            $item = [$plat, $quantity, $total_partiel];

            array_push($contenu, $item);
        }

        return array("panier" => $contenu, "total" => $total);
    }



    public function addProduit($id)
    {
        $session = $this->requestStack->getSession();




        $panier = $session->get('panier', []);

        if (array_key_exists($id, $panier)) {
            $panier[$id] += 1;
        } else {
            $panier[$id] = 1;
        }


        $session->set('panier', $panier);

        return $panier;
    }


    public function removeProduit($id, Request $request)
    {
        $session = $this->requestStack->getSession();

        $panier = $session->get('panier', []);

        if (array_key_exists($id, $panier)) {
            if ($panier[$id] > 1) {
                $panier[$id] -= 1;
            } else {
                unset($panier[$id]);
            }
        }
        $session->set('panier', $panier);

        return $panier;
    }
}
