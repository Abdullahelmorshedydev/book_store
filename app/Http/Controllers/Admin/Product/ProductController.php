<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\CreateProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Traits\UploadFile;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        $data = $request->validated();
        $data['image'] = UploadFile::upload($request->file('image'), 'uploads/products');
        Product::create([
            'name' => ['ar' => $data['name_ar'], 'en' => $data['name_en']],
            'author' => $data['author'],
            'price' => $data['price'],
            'offer_price' => $data['offer_price'],
            'quantity' => $data['quantity'],
            'pages' => $data['pages'],
            'image' => $data['image'],
            'description' => $data['description'],
            'category_id' => $data['category_id'],
        ]);
        return back()->with('success', __('admin/product/create.success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $status = Product::$status;
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'status', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $data['image'] = UploadFile::update($request->file('image'), 'uploads/products/', $product->image, $request->image);
        dd($data);
        $product->update($data);
        return redirect()->route('admin.products.index')->with('success', __('admin/product/edit.success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        UploadFile::delete('uploads/products/', $product->image);
        $product->delete();
        return back()->with('success', __('admin/product/index.success'));
    }
}
