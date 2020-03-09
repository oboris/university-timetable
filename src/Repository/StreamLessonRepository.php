<?php

namespace App\Repository;

use App\Entity\StreamLesson;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StreamLesson|null find($id, $lockMode = null, $lockVersion = null)
 * @method StreamLesson|null findOneBy(array $criteria, array $orderBy = null)
 * @method StreamLesson[]    findAll()
 * @method StreamLesson[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StreamLessonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StreamLesson::class);
    }

    // /**
    //  * @return StreamLesson[] Returns an array of StreamLesson objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StreamLesson
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
