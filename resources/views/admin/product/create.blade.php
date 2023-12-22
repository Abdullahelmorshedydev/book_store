@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/product/create.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/product/create.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/product/create.active') }}</span>
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
                        <h4 class="card-title mb-1">{{ __('admin/product/create.title') }}</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputNameEn1">{{ __('admin/product/create.name_en_label') }}</label>
                                    <input type="text" value="{{ old('name_en') }}" name="name_en" class="form-control"
                                        id="exampleInputNameEn1"
                                        placeholder="{{ __('admin/product/create.name_en_place') }}">
                                </div>
                                @error('name_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputNameAr1">{{ __('admin/product/create.name_ar_label') }}</label>
                                    <input type="text" value="{{ old('name_ar') }}" name="name_ar" class="form-control"
                                        id="exampleInputNameAr1"
                                        placeholder="{{ __('admin/product/create.name_ar_place') }}">
                                </div>
                                @error('name_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputAuthor1">{{ __('admin/product/create.author_label') }}</label>
                                    <input type="text" value="{{ old('author') }}" name="author" class="form-control"
                                        id="exampleInputAuthor1"
                                        placeholder="{{ __('admin/product/create.author_place') }}">
                                </div>
                                @error('author')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputPrice1">{{ __('admin/product/create.price_label') }}</label>
                                    <input type="number" value="{{ old('price') }}" name="price" class="form-control"
                                        id="exampleInputPrice1"
                                        placeholder="{{ __('admin/product/create.price_place') }}">
                                </div>
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputOfferPrice1">{{ __('admin/product/create.offer_price_label') }}</label>
                                    <input type="number" value="{{ old('offer_price') }}" name="offer_price" class="form-control"
                                        id="exampleInputOfferPrice1"
                                        placeholder="{{ __('admin/product/create.offer_price_place') }}">
                                </div>
                                @error('offer_price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputQuantity1">{{ __('admin/product/create.quantity_label') }}</label>
                                    <input type="number" value="{{ old('quantity') }}" name="quantity" class="form-control"
                                        id="exampleInputQuantity1"
                                        placeholder="{{ __('admin/product/create.quantity_place') }}">
                                </div>
                                @error('quantity')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputPages1">{{ __('admin/product/create.pages_label') }}</label>
                                    <input type="number" value="{{ old('pages') }}" name="pages" class="form-control"
                                        id="exampleInputPages1"
                                        placeholder="{{ __('admin/product/create.pages_place') }}">
                                </div>
                                @error('pages')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputDescription1">
                                        {{ __('admin/product/create.description_label') }}
                                    </label>
                                    <textarea class="form-control" name="description" id="exampleInputDescription1" placeholder="{{ __('admin/product/create.description_place') }}">
                                        {{ old('description') }}
                                    </textarea>
                                </div>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputCategoryId1">{{ __('admin/product/create.category_id_label') }}</label>
                                    <select name="category_id" id="exampleInputCategoryId1" class="form-control">
                                        <option disabled selected>{{ __('admin/product/create.category_id_place') }}</option>
                                        @foreach ($categories as $category)
                                            <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                                                value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputImage1">{{ __('admin/product/create.image_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="image" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/product/create.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-0">
                                {{ __('admin/product/create.submit') }}
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
