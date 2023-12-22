@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/branch/show.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/branch/show.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/branch/show.active') }}</span>
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
                        <h4 class="card-title mb-1">{{ __('admin/branch/show.title') }}</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form>
                            @csrf
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputName1">{{ __('admin/branch/show.name_label') }}</label>
                                    <input type="text" value="{{ $branch->name }}" name="name" class="form-control"
                                        id="exampleInputName1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAddress1">{{ __('admin/branch/show.address_label') }}</label>
                                    <input type="text" value="{{ $branch->address }}" name="address" class="form-control"
                                        id="exampleInputAddress1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputStatus1">{{ __('admin/branch/show.status_label') }}</label>
                                    <input type="text" value="{{ $branch->status }}" name="status"
                                        class="form-control" id="exampleInputStatus1" disabled>
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
