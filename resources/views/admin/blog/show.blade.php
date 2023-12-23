@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/blog/show.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/blog/show.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/blog/show.active') }}</span>
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
                        <h4 class="card-title mb-1">{{ __('admin/blog/show.title') }}</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form>
                            @csrf
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputtitle1">{{ __('admin/blog/show.title_label') }}</label>
                                    <input type="text" value="{{ $blog->title }}" name="title" class="form-control"
                                        id="exampleInputtitle1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputarticle1">{{ __('admin/blog/show.article_label') }}</label>
                                    <textarea class="ckeditor form-control" id="article" name="article" disabled>
                                        {{ $blog->article }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputStatus1">{{ __('admin/blog/show.status_label') }}</label>
                                    <input type="text" value="{{ $blog->status }}" name="status" class="form-control"
                                        id="exampleInputStatus1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputImage1">{{ __('admin/blog/show.image_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="image" id="customFile" type="file">
                                        <img height="50px" width="100px" src="{{ $blog->image }}" alt="blog_image">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
