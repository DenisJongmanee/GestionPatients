<?php

namespace App\Repository;

use App\Entity\PersonnelSoignant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PersonnelSoignant|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonnelSoignant|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonnelSoignant[]    findAll()
 * @method PersonnelSoignant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonnelSoignantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonnelSoignant::class);
    }

    // /**
    //  * @return PersonnelSoignant[] Returns an array of PersonnelSoignant objects
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
    public function findOneBySomeField($value): ?PersonnelSoignant
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
