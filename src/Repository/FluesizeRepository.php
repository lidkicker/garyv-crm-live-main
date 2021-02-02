<?php

namespace App\Repository;

use App\Entity\Fluesize;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fluesize|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fluesize|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fluesize[]    findAll()
 * @method Fluesize[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FluesizeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fluesize::class);
    }

    // /**
    //  * @return Fluesize[] Returns an array of Fluesize objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fluesize
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
