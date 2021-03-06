<?php

namespace App\Repository;

use App\Entity\Reservations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservations[]    findAll()
 * @method Reservations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservations::class);
    }

    /**
     * this code wil be used in a future cron jobs implementation
     *
     * @return int
     */
    public function countOldReservations(): int
    {
        return $this->getDelayedReservations()->select('COUNT(r.id)')->getQuery()->getSingleScalarResult();
    }

    public function deleteOldReservations(): int
    {
            return $this->getDelayedReservations()->delete()->getQuery()->execute();
    }

    public function getDelayedReservations(): QueryBuilder
    {
            return $this->createQueryBuilder('r')
                ->andWhere('r.endDate <= :date')
                ->andWhere('r.status = :status')
                ->setParameters([
                    'date' => new \DateTime('now'),
                    'status' => 'reserved'])
            ;
    }

}
