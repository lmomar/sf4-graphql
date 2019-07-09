<?php

namespace App\Repository;

use App\Entity\Astronomy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Astronomy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Astronomy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Astronomy[]    findAll()
 * @method Astronomy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AstronomyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Astronomy::class);
    }

    // /**
    //  * @return Astronomy[] Returns an array of Astronomy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Astronomy
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
