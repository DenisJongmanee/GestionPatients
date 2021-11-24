<?php

namespace App\Repository;

use App\Entity\PersonnelSoigant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PersonnelSoigant|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonnelSoigant|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonnelSoigant[]    findAll()
 * @method PersonnelSoigant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonnelSoigantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonnelSoigant::class);
    }

    // /**
    //  * @return PersonnelSoigant[] Returns an array of PersonnelSoigant objects
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
    public function findOneBySomeField($value): ?PersonnelSoigant
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
