<?php

namespace App\Repository;

use App\Entity\Entity2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Entity2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Entity2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Entity2[]    findAll()
 * @method Entity2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Entity2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entity2::class);
    }

    // /**
    //  * @return Entity2[] Returns an array of Entity2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Entity2
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
