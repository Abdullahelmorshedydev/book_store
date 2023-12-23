<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\CreateBlogRequest;
use App\Http\Requests\Admin\Blog\UpdateBlogRequest;
use App\Models\Blog;
use App\Traits\UploadFile;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::paginate();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBlogRequest $request)
    {
        $data = $request->validated();
        if ($request->file('image') != null) {
            $data['image'] = UploadFile::upload($request->file('image'), 'uploads/blogs');
        }
        Blog::create([
            'title' => ['ar' => $data['title_ar'], 'en' => $data['title_en']],
            'article' => ['ar' => $data['article_ar'], 'en' => $data['article_en']],
            'image' => $request->file('image') ? $data['image'] : null,
        ]);
        toastr()->addSuccess(__('admin/blog/create.success'));
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $status = Blog::$status;
        return view('admin.blog.edit', compact('blog', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $data = $request->validated();
        $data['image'] = UploadFile::update($request->file('image'), 'uploads/blogs/', $blog->image, $request->image);
        $blog->update($data);
        toastr()->addSuccess(__('admin/blog/edit.success'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        UploadFile::delete('uploads/blogs/', $blog->image);
        $blog->delete();
        toastr()->addSuccess('Blog Deleted Successfully');
        return back();
    }
}
