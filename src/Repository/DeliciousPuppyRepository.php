<?php

namespace App\Repository;

use App\Entity\DeliciousPuppy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DeliciousPuppy|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeliciousPuppy|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeliciousPuppy[]    findAll()
 * @method DeliciousPuppy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeliciousPuppyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeliciousPuppy::class);
    }

    // /**
    //  * @return DeliciousPuppy[] Returns an array of DeliciousPuppy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DeliciousPuppy
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
