@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/slider/create.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/slider/create.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/slider/create.active') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    {{ __('admin/slider/create.add_new') }}
                </div>
                <br>
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="custom-file">
                                <input class="custom-file-input" name="image" id="customFile" type="file">
                                <label class="custom-file-label" for="customFile">
                                    {{ __('admin/slider/create.choose_file') }}
                                </label>
                            </div>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary mt-3 mb-0">
                                {{ __('admin/slider/create.submit') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
