<?php

namespace App\Repository;

use App\Entity\TimteTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TimteTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method TimteTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method TimteTable[]    findAll()
 * @method TimteTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimteTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TimteTable::class);
    }

    // /**
    //  * @return TimteTable[] Returns an array of TimteTable objects
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
    public function findOneBySomeField($value): ?TimteTable
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
