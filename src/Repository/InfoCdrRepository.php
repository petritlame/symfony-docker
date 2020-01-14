<?php

namespace App\Repository;

use App\Entity\InfoCdr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InfoCdr|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfoCdr|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfoCdr[]    findAll()
 * @method InfoCdr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoCdrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfoCdr::class);
    }

    // /**
    //  * @return InfoCdr[] Returns an array of InfoCdr objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InfoCdr
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
