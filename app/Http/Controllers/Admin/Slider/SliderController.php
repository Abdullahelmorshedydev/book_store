<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\CreateSliderRequest;
use App\Models\Slider;
use App\Traits\UploadFile;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSliderRequest $request)
    {
        $data = $request->validated();
        $data['image'] = UploadFile::upload($request->file('image'), 'uploads/sliders');
        Slider::create($data);
        toastr()->addSuccess(__('admin/slider/create.success'));
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
