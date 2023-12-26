@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/product/show.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/product/show.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/product/show.active') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card-header">
                        <h4 class="card-title mb-1">{{ __('admin/product/show.title') }}</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form>
                            @csrf
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputName1">{{ __('admin/product/show.name_label') }}</label>
                                    <input type="text" value="{{ $product->name }}" name="name" class="form-control"
                                        id="exampleInputName1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAuthor1">{{ __('admin/product/show.author_label') }}</label>
                                    <input type="text" value="{{ $product->author }}" name="author" class="form-control"
                                        id="exampleInputAuthor1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPrice1">{{ __('admin/product/show.price_label') }}</label>
                                    <input type="number" value="{{ $product->price }}" name="price" class="form-control"
                                        id="exampleInputPrice1" disabled>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="exampleInputOfferPrice1">{{ __('admin/product/show.offer_price_label') }}</label>
                                    <input type="number" value="{{ $product->offer_price }}" name="offer_price"
                                        class="form-control" id="exampleInputOfferPrice1" disabled>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="exampleInputQuantity1">{{ __('admin/product/show.quantity_label') }}</label>
                                    <input type="number" value="{{ $product->quantity }}" name="quantity"
                                        class="form-control" id="exampleInputQuantity1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPages1">{{ __('admin/product/show.pages_label') }}</label>
                                    <input type="number" value="{{ $product->pages }}" name="pages" class="form-control"
                                        id="exampleInputPages1" disabled>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="exampleInputSalesCount1">{{ __('admin/product/show.sales_count_label') }}</label>
                                    <input type="number" value="{{ $product->sales_count }}" name="sales_count"
                                        class="form-control" id="exampleInputSalesCount1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputStatus1">{{ __('admin/product/show.status_label') }}</label>
                                    <input type="text" value="{{ $product->status }}" name="status"
                                        class="form-control" id="exampleInputStatus1" disabled>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="exampleInputCategoryId1">{{ __('admin/product/show.category_id_label') }}</label>
                                    <input type="text" value="{{ $product->category->name }}" name="category_id"
                                        class="form-control" id="exampleInputCategoryId1" disabled>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="exampleInputDescription1">{{ __('admin/product/show.description_label') }}</label>
                                    <textarea class="form-control" name="description" id="exampleInputDescription1" disabled>{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputImage1">{{ __('admin/product/show.image_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="image" id="customFile" type="file">
                                        <img height="50px" width="100px"
                                            src="{{ asset('uploads/products/' . $product->image) }}" alt="product_image">
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
