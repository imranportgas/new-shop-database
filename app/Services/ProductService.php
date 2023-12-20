<?php

namespace App\Services;


use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Validator;


class ProductService
{
    private $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function validateModel($data)
    {
        return Validator::make($data, [
           'name' => 'required|string',
           'price' => 'required|numeric',
           'description' => 'required|string'
        ]);
    }
    public function create($data)
    {
        $validator = $this->validateModel($data);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()], 422);
        }

        $product = Product::create($data);
        return $product;
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('index')->with('Продукт успешно удалён');
    }
}
