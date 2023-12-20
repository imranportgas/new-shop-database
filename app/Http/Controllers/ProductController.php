<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Services\ProductService;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    private $productRepository;
    private $productService;

    public function __construct(ProductRepository $productRepository, ProductService $productService)
    {
        $this->productRepository = $productRepository;
        $this->productService = $productService;
    }

    public function index()
    {
        $products = Product::all();

        return view('index', ['products' => $products]);
    }

    public function create(Request $request)
    {
        $products = $this->productService->create($request->all());
        return view('index', ['products' => $products]);
    }

    public function delete($id)
    {
        $this->productService->delete($id);

        return redirect()->route('index')->with('success', 'Продукт успешно удалён');
    }

}
