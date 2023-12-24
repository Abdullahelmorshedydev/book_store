<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Branch\CreateBranchRequest;
use App\Http\Requests\Admin\Branch\UpdateBranchRequest;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::paginate();
        return view('admin.branch.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.branch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBranchRequest $request)
    {
        Branch::create([
            'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
            'address' => ['ar' => $request->address_ar, 'en' => $request->address_en],
        ]);
        return back()->with('success', __('admin/branch/create.success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        return view('admin.branch.show', compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        $status = Branch::$status;
        return view('admin.branch.edit', compact('branch', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBranchRequest $request, Branch $branch)
    {
        $branch->update([$request->validated()]);
        return back()->with('success', __('admin/branch/edit.success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete($branch);
        return back()->with('success', __('admin/branch/index.success'));
    }
}
