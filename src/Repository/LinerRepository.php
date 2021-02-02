<?php

namespace App\Repository;

use App\Entity\Liner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Liner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Liner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Liner[]    findAll()
 * @method Liner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LinerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Liner::class);
    }

    // /**
    //  * @return Liner[] Returns an array of Liner objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Liner
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
