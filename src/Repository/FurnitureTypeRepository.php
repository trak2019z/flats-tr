<?php

namespace App\Repository;

use App\Entity\FurnitureType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FurnitureType|null find($id, $lockMode = null, $lockVersion = null)
 * @method FurnitureType|null findOneBy(array $criteria, array $orderBy = null)
 * @method FurnitureType[]    findAll()
 * @method FurnitureType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FurnitureTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FurnitureType::class);
    }

    // /**
    //  * @return FurnitureType[] Returns an array of FurnitureType objects
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
    public function findOneBySomeField($value): ?FurnitureType
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
