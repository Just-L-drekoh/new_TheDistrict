<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CatalogueController extends AbstractController
{
    public function home(CategorieRepository  $categorie,PlatRepository $plat ): Response
    {
        $best_categorie = $categorie->bestCategories();
        $best_plat = $plat->bestPlats();
        return $this->render('catalogue/index.html.twig', [
            'categories' => $best_categorie,
            'plats' => $best_plat,
        ]);
    }

    public function categories(CategorieRepository $categorie): Response
    {
        $allcategories = $categorie->findAll();
        return $this->render('catalogue/categorie.html.twig', [
            'categories'=> $allcategories
        ]);
    }

    public function plats(PlatRepository $platRepository): Response
    {
        $allplats = $platRepository->findAll();
        return $this->render('catalogue/plat.html.twig', [
            'plats' => $allplats

        ]);
    }
    public function plats_cat(Request $request,PlatRepository $platRepo,CategorieRepository $categorieRepo): Response
    {
        $libelle = $request->attributes->get('libelle');


        $categorie = $categorieRepo->findOneBy(['libelle' => $libelle]);


        $plats = $categorie->getPlat();

        return $this->render('catalogue/plats_cat.html.twig', [
            'controller_name' => 'CatalogueController',
            'categorie' => $categorie,
            'plats' => $plats,

        ]);
    }
}
