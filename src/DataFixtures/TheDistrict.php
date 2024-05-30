<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Entity\Detail;
use App\Entity\Commande;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TheDistrict extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // include base 
        include 'districtbase.php';

        foreach ($utilisateur as $user) {
            $userDB = new Utilisateur();
            $userDB
                ->setEmail($user['email'])
                ->setPassword($user['password'])
                ->setNom($user['nom'])
                ->setPrenom($user['prenom'])
                ->setTelephone($user['telephone'])
                ->setAdresse($user['adresse'])
                ->setCp($user['cp'])
                ->setVille($user['ville']);

            $manager->persist($userDB);
        }
        $manager->flush();

        $userRepo = $manager->getRepository(Utilisateur::class);

        foreach ($commande as $comm) {
            $commandeDB = new Commande();
            $dateCommande = new \DateTimeImmutable($comm['date_commande']);
            $commandeDB
                ->setDateCommande($dateCommande)
                ->setTotal($comm['total'])
                ->setEtat($comm['etat']);
            $user = $userRepo->find($comm['utilisateur_id']);
            $commandeDB->setUtilisateur($user);
            $manager->persist($commandeDB);
        }
        $manager->flush();

        foreach ($categorie as $categorie) {
            $categorieDB = new Categorie();
            $categorieDB
                ->setLibelle($categorie['libelle'])
                ->setImage($categorie['image'])
                ->setActive($categorie['active']);
            $manager->persist($categorieDB);
        }
        $manager->flush();
        $categorieRepo = $manager->getRepository(Categorie::class);

        foreach ($plat as $plat) {
            $platDB = new Plat();
            $platDB
                ->setLibelle($plat['libelle'])
                ->setImage($plat['image'])
                ->setActive($plat['active'])
                ->setDescription($plat['description'])
                ->setPrix($plat['prix']);
            $categorie = $categorieRepo->find($plat['categorie_id']);
            $platDB->setCategorie($categorie);
            $manager->persist($platDB);
        }
        $manager->flush();

        $platRepo = $manager->getRepository(Plat::class);
        $commandeRepo = $manager->getRepository(Commande::class);

        foreach ($detail as $detail) {
            $detailDB = new Detail();
            $detailDB
                ->setQuantite($detail['quantite']);
            $plat = $platRepo->find($detail['plat_id']);
            $detailDB->setPlat($plat);
            $commande = $commandeRepo->find($detail['commande_id']);
            $detailDB->setCommande($commande);
            $manager->persist($detailDB);
        }
        $manager->flush();
    }
}
