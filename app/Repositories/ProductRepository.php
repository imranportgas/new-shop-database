<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Ramsey\Collection\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    private $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    public function getAllProducts(): Collection
    {
        return $this->products->getAllProducts();
    }

    public function getProductById($id)
    {
        return $this->products->find($id);
    }

    public function createProduct(array $data)
    {
        return $this->products->create($data);
    }

    public function updateProduct($id, array $data)
    {
        $product = $this->products->find($id); //Здесь я выбираю по id нужный мне продукт и помещаю его в переменную
        $product->update($data); //Здесь я обновляю данные выбранного мною продукта
        return $product; //Продукт я обновил, а значит мне нужно вернуть его через return
    }

    public function deleteProduct($id): void
    {
        $this->products->destroy($id);
    }
}
