<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\CreateSliderRequest;
use App\Http\Requests\Admin\Slider\UpdateSliderRequest;
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
        return back()->with('success', __('admin/slider/create.success'));
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
        $status = Slider::$status;
        return view('admin.slider.edit', compact('slider', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $data = $request->validated();
        $data['image'] = UploadFile::update($request->file('image'), 'uploads/sliders/', $slider->image, $request->image);
        $slider->update($data);
        return back()->with('success', __('admin/slider/edit.success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        UploadFile::delete('uploads/sliders/', $slider->image);
        $slider->delete();
        return back()->with('success', __('admin/slider/index.success'));
    }
}
