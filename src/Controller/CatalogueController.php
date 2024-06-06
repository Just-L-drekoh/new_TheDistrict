<?php

namespace App\Controller;

use App\Form\SearchFormType;
use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CatalogueController extends AbstractController
{
    public function home(Request $request, CategorieRepository  $categorie, PlatRepository $platRepo): Response
    {
        $best_categorie = $categorie->bestCategories();
        $best_plat = $platRepo->bestPlats();
        $form = $this->createForm(SearchFormType::class);

        $form->handleRequest($request);

        $results = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $query = $data['query'];
            $results = $platRepo->findByQuery($query);
        }



        return $this->render('catalogue/index.html.twig', [
            'form' => $form->createView(),
            'results' => $results,
            'categories' => $best_categorie,
            'plats' => $best_plat,
        ]);
    }

    public function categories(CategorieRepository $categorie): Response
    {
        $allcategories = $categorie->findAll();
        return $this->render('catalogue/categorie.html.twig', [
            'categories' => $allcategories
        ]);
    }

    public function plats(PlatRepository $platRepository): Response
    {
        $allplats = $platRepository->findAll();
        return $this->render('catalogue/plat.html.twig', [
            'plats' => $allplats

        ]);
    }
    public function plats_cat(Request $request, PlatRepository $platRepo, CategorieRepository $categorieRepo): Response
    {
        $libelle = $request->attributes->get('libelle');


        $categorie = $categorieRepo->findOneBy(['libelle' => $libelle]);


        $plats = $categorie->getPlat();

        return $this->render('catalogue/plats_cat.html.twig', [
            'categorie' => $categorie,
            'plats' => $plats,

        ]);
    }

    public function politique(): Response
    {
        return $this->render('catalogue/politique.html.twig');
    }

    public function mentions(): Response
    {
        return $this->render('catalogue/mentions.html.twig');
    }
}
