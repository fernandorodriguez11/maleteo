<?php

namespace App\Repository;

use App\Entity\Maleteo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Maleteo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maleteo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maleteo[]    findAll()
 * @method Maleteo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaleteoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maleteo::class);
    }

    // /**
    //  * @return Maleteo[] Returns an array of Maleteo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Maleteo
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
