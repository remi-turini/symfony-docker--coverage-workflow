<?php

namespace App\Repository;

use App\Entity\Medication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Medication|null find($id, $lockMode = null, $lockVersion = null)
 * @method Medication|null findOneBy(array $criteria, array $orderBy = null)
 * @method Medication[]    findAll()
 * @method Medication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Medication::class);
    }

    /**
     * @return Medication|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOneRandom()
    {
        $query = $this->createQueryBuilder("m")
            ->setMaxResults(1)
            ->getQuery();

        return $query->getOneOrNullResult();
    }

    /**
     * @return Medication|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOneById($id)
    {
        $query = $this->createQueryBuilder("m")
            ->andWhere("m = :id")
            ->andWhere("COALESCE(m.obsolete, 0) = 0 AND COALESCE(m.isRequest, 0) = 0")
            ->setParameter("id", $id)
            ->getQuery();

        return $query->getOneOrNullResult();
    }

    /**
     * @return Medication[]|null
     */
    public function findByUser($userId, $page = null, $limit = null)
    {
        $query = $this->createQueryBuilder("m")
            ->innerJoin("m.medicationUsers", "um", "WITH", "um.user = :userId")
            ->andWhere("COALESCE(m.obsolete, 0) = 0 AND COALESCE(m.isRequest, 0) = 0")
            ->setParameter("userId", $userId)
        ;

            if (!empty($page) && !empty($limit))
            {
                $offset = ($page * $limit) - $limit;

                $query = $query->setFirstResult($offset)
                ->setMaxResults($limit)
                ;
            }

        $query = $query->getQuery();

        return $query->getArrayResult();
    }

    /**
     * @return Medication[]|null
     */
    public function findRequested($page = null, $limit = null)
    {
        $query = $this->createQueryBuilder("m")
            ->andWhere("COALESCE(m.obsolete, 0) = 0 AND COALESCE(m.isRequest, 0) = 1")
        ;

        if (!empty($page) && !empty($limit))
        {
            $offset = ($page * $limit) - $limit;

            $query = $query->setFirstResult($offset)
                ->setMaxResults($limit)
            ;
        }

        $query = $query->getQuery();

        return $query->getArrayResult();
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Medication $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Medication $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Medication[] Returns an array of Medication objects
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
    public function findOneBySomeField($value): ?Medication
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
