<?php

namespace App\Repository;

use App\Entity\Tity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tity[]    findAll()
 * @method Tity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tity::class);
    }

    // /**
    //  * @return Tity[] Returns an array of Tity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tity
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
