<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $product = $this->productService->all();
    }

    public function create()
    {
        return redirect()->route('prod');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $product = $this->productService->create($data);
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = $this->productService->find($id);
        return view('products.edit', ['products' => $product]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = $this->productService->update($data, $id);
        return redirect()->route('products.update');
    }

    public function destroy($id): RedirectResponse
    {
        $this->productService->delete($id);
        return redirect()->route('products.index');
    }

}
