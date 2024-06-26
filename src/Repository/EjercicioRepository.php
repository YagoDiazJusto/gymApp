<?php

namespace App\Repository;

use App\Entity\Ejercicio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ejercicio>
 *
 * @method Ejercicio|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ejercicio|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ejercicio[]    findAll()
 * @method Ejercicio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EjercicioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ejercicio::class);
    }

    public function getEjercicioByName($name)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.nombreEjercicio = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function getEjercicioByGrupoMuscular($musculo)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.grupoMuscular = :musculo')
            ->setParameter('musculo', $musculo)
            ->orderBy('e.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }


    public function getEjercicioById($id): Ejercicio
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function add(Ejercicio $ejercicio): void
    {
        $this->getEntityManager()->persist($ejercicio);
        $this->getEntityManager()->flush();
    }





    //    /**
    //     * @return Ejercicio[] Returns an array of Ejercicio objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Ejercicio
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
