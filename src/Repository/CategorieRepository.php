<?php

namespace App\Repository;

use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categorie>
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }

    public function bestCategories(): array
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT c
                FROM App\Entity\Categorie c
                JOIN App\Entity\Plat p WITH p.categorie = c
                JOIN App\Entity\Detail d WITH d.plat = p
                GROUP BY c.libelle
                ORDER BY SUM(d.quantite) DESC'
        );
        $query->setMaxResults(3);
        return $query->getResult();

    }
}
