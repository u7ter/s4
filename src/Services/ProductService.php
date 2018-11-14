<?php

namespace App\Services;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class ProductService
 * @package App\Services
 */
final class ProductService
{
    /** @var EntityManagerInterface */
    private $repository;

    /**
     * ProductService constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository(Product::class);
    }

    /**
     * @return mixed
     */
    public function getAllProducts()
    {
        return $this->repository->findAll();
    }
}