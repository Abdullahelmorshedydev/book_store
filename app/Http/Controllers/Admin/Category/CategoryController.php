<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CreateCategoryRequest;
use App\Http\Requests\Admin\Category\UpdateCategoryRequest;
use App\Models\Category;
use App\Traits\UploadFile;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        $data = $request->validated();
        $data['image'] = UploadFile::upload($request->file('image'), 'uploads/categories');
        Category::create([
            'name' => ['ar' => $data['name_ar'], 'en' => $data['name_en']],
            'image' => $data['image'],
        ]);
        toastr()->addSuccess(__('admin/category/create.success'));
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $data['image'] = UploadFile::update($request->file('image'), 'uploads/categories/', $category->image, $request->image);
        $category->update($data);
        toastr()->addSuccess(__('admin/category/edit.success'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        UploadFile::delete('uploads/categories/', $category->image);
        $category->delete();
        toastr()->addSuccess('Category Deleted Successfully');
        return back();
    }
}
