<?php

namespace App\Repository;

use App\Entity\ConditionReport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConditionReport|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConditionReport|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConditionReport[]    findAll()
 * @method ConditionReport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConditionReportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConditionReport::class);
    }

    // /**
    //  * @return ConditionReport[] Returns an array of ConditionReport objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConditionReport
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
