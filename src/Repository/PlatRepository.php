<?php

namespace App\Repository;

use App\Entity\Plat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Plat>
 */
class PlatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Plat::class);
    }
    public function bestPlats(): array
    {

        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT p
            FROM App\Entity\Categorie c
            JOIN App\Entity\Plat p WITH p.categorie= c
            JOIN App\Entity\Detail d WITH d.plat = p
            GROUP BY c.libelle
            ORDER BY SUM(d.quantite) DESC'
        );
        $query->setMaxResults(3);
        return $query->getResult();
    }

    public function findByQuery(string $query)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.libelle LIKE :query OR p.description LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult();
    }
}
