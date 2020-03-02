<?php

namespace App\Repository;

use App\Entity\WorkWeek;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method WorkWeek|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkWeek|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkWeek[]    findAll()
 * @method WorkWeek[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkWeekRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkWeek::class);
    }

    // /**
    //  * @return WorkWeek[] Returns an array of WorkWeek objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WorkWeek
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
