<?php

namespace App\Controller\Api\V1;

use App\Repository\CompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class CompaniesController extends AbstractController
{
    #[Route(path: '/api/v1/companies', name: 'api_v1_companies_index', methods: ['GET'])]
    public function index(CompanyRepository $companyRepository, Request $request): JsonResponse
    {
        $page = $request->query->get(key: 'page', default: 1);
        $limit = $request->query->get(key: 'limit', default: 10);

        $companies = $companyRepository->findAllPaginated(page: $page, limit: $limit);

        return $this->json(data: $companies);
    }
}
