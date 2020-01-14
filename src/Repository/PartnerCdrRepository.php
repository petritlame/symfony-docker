<?php

namespace App\Repository;

use App\Entity\PartnerCdr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PartnerCdr|null find($id, $lockMode = null, $lockVersion = null)
 * @method PartnerCdr|null findOneBy(array $criteria, array $orderBy = null)
 * @method PartnerCdr[]    findAll()
 * @method PartnerCdr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartnerCdrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartnerCdr::class);
    }

    // /**
    //  * @return PartnerCdr[] Returns an array of PartnerCdr objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PartnerCdr
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
