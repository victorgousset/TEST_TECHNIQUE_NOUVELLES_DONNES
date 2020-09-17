<?php

namespace App\Repository;

use App\Entity\ModeleVoiture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ModeleVoiture|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeleVoiture|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeleVoiture[]    findAll()
 * @method ModeleVoiture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeleVoitureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeleVoiture::class);
    }

    // /**
    //  * @return ModeleVoiture[] Returns an array of ModeleVoiture objects
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
    public function findOneBySomeField($value): ?ModeleVoiture
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
