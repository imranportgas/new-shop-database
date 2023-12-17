<?php

namespace App\Services;


use App\Models\Product;
use App\Repositories\ProductRepository;
use Ramsey\Collection\Collection;

class ProductService
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function all(): Collection
    {
        return $this->productRepository->getAllProducts();
    }

    public function find($id): Product
    {
        return $this->productRepository->getProductById($id);
    }

    public function create(array $data): Product
    {
        return $this->productRepository->createProduct($data);
    }

    public function update(array $data, $id):Product
    {
        return $this->productRepository->updateProduct($data, $id);
    }

    public function delete($id): void
    {
        $this->productRepository->deleteProduct($id);
    }
}
