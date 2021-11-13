<?php

namespace App\Repository;

use App\Entity\Procedimento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Procedimento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Procedimento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Procedimento[]    findAll()
 * @method Procedimento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProcedimentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Procedimento::class);
    }

    // /**
    //  * @return Procedimento[] Returns an array of Procedimento objects
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
    public function findOneBySomeField($value): ?Procedimento
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
