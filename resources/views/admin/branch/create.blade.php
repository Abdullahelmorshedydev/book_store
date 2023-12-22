@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/branch/create.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/branch/create.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/branch/create.active') }}</span>
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
                        <h4 class="card-title mb-1">{{ __('admin/branch/create.title') }}</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('admin.branches.store') }}" method="POST">
                            @csrf
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputNameEn1">{{ __('admin/branch/create.name_en_label') }}</label>
                                    <input type="text" value="{{ old('name_en') }}" name="name_en" class="form-control"
                                        id="exampleInputNameEn1"
                                        placeholder="{{ __('admin/branch/create.name_en_place') }}">
                                </div>
                                @error('name_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputNameAr1">{{ __('admin/branch/create.name_ar_label') }}</label>
                                    <input type="text" value="{{ old('name_ar') }}" name="name_ar" class="form-control"
                                        id="exampleInputNameAr1"
                                        placeholder="{{ __('admin/branch/create.name_ar_place') }}">
                                </div>
                                @error('name_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputAddressEn1">{{ __('admin/branch/create.address_en_label') }}</label>
                                    <input type="text" value="{{ old('address_en') }}" name="address_en" class="form-control"
                                        id="exampleInputAddressEn1"
                                        placeholder="{{ __('admin/branch/create.address_en_place') }}">
                                </div>
                                @error('address_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputAddressAr1">{{ __('admin/branch/create.address_ar_label') }}</label>
                                    <input type="text" value="{{ old('address_ar') }}" name="address_ar" class="form-control"
                                        id="exampleInputAddressAr1"
                                        placeholder="{{ __('admin/branch/create.address_ar_place') }}">
                                </div>
                                @error('address_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-0">
                                {{ __('admin/branch/create.submit') }}
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
