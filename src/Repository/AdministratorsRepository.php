<?php

namespace App\Repository;

use App\Entity\Administrators;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Administrators|null find($id, $lockMode = null, $lockVersion = null)
 * @method Administrators|null findOneBy(array $criteria, array $orderBy = null)
 * @method Administrators[]    findAll()
 * @method Administrators[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdministratorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Administrators::class);
    }
}
