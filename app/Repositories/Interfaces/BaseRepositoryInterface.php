<?php

namespace App\Repositories\Interfaces;

interface BaseRepositoryInterface
{
    public function getAllProducts();

    public function getProductById($id);

    public function updateProduct($id, array $data);

}
