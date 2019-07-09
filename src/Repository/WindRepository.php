<?php

namespace App\Repository;

use App\Entity\Wind;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Wind|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wind|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wind[]    findAll()
 * @method Wind[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WindRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Wind::class);
    }

    // /**
    //  * @return Wind[] Returns an array of Wind objects
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
    public function findOneBySomeField($value): ?Wind
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
