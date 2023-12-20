<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\BaseRepositoryInterface;


class ProductRepository implements BaseRepositoryInterface
{

    public function getAllProducts()
    {
        return Product::all();
    }

    public function getProductById($id)
    {
        return Product::query()->find($id);
    }

    public function updateProduct($id, array $data)
    {

    }
}
