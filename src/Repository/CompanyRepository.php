<?php

namespace App\Repository;

use App\Entity\Company;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Company>
 */
class CompanyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct(registry: $registry, entityClass: Company::class);
    }

    public function findAllPaginated(int $page, int $limit): array
    {
        return $this->findBy(criteria: [], orderBy: null, limit: $limit, offset: ($page - 1) * $limit);
    }
}
