@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/blog/create.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/blog/create.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/blog/create.active') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card-header">
                        <h4 class="card-title mb-1">{{ __('admin/blog/create.title') }}</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputtitleEn1">{{ __('admin/blog/create.title_en_label') }}</label>
                                    <input type="text" value="{{ old('title_en') }}" name="title_en" class="form-control"
                                        id="exampleInputtitleEn1"
                                        placeholder="{{ __('admin/blog/create.title_en_place') }}">
                                </div>
                                @error('title_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputtitleAr1">{{ __('admin/blog/create.title_ar_label') }}</label>
                                    <input type="text" value="{{ old('title_ar') }}" name="title_ar" class="form-control"
                                        id="exampleInputtitleAr1"
                                        placeholder="{{ __('admin/blog/create.title_ar_place') }}">
                                </div>
                                @error('title_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputarticleEn1">{{ __('admin/blog/create.article_en_label') }}</label>
                                    <textarea class="ckeditor form-control" value="{{ old('article_ar') }}" id="article_en" name="article_en">
                                        {{ __('admin/blog/create.article_en_place') }}
                                    </textarea>
                                </div>
                                @error('article_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputarticleAr1">{{ __('admin/blog/create.article_ar_label') }}</label>
                                    <textarea class="ckeditor form-control" value="{{ old('article_ar') }}" id="article_ar" name="article_ar">
                                        {{ __('admin/blog/create.article_ar_place') }}
                                    </textarea>
                                </div>
                                @error('article_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputImage1">{{ __('admin/blog/create.image_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="image" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/blog/create.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-0">
                                {{ __('admin/blog/create.submit') }}
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
