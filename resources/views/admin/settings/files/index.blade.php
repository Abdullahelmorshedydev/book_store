@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/settings/files/index.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/settings/files/index.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/settings/files/index.active') }}</span>
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
                    {{ __('admin/settings/files/index.label') }}
                </div>
                <br>
                <form action="{{ route('admin.settings.files.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row row-sm">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="card-body pt-0">
                                <div class="form-group">
                                    <label for="customFile">{{ __('admin/settings/files/index.site_logo_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="site_logo" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/settings/files/index.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('site_logo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="customFile">{{ __('admin/settings/files/index.site_goals_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="site_goals" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/settings/files/index.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('site_goals')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                
                                <div class="form-group">
                                    <label for="customFile">{{ __('admin/settings/files/index.quality_assurance_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="quality_assurance" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/settings/files/index.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('quality_assurance')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="customFile">{{ __('admin/settings/files/index.shipping_slogan_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="shipping_slogan" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/settings/files/index.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('shipping_slogan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="customFile">{{ __('admin/settings/files/index.contact_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="contact" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/settings/files/index.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('contact')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="card-body pt-0">
                                <div class="form-group">
                                    <label for="customFile">{{ __('admin/settings/files/index.favicon_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="favicon" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/settings/files/index.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('favicon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="customFile">{{ __('admin/settings/files/index.technical_support_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="technical_support" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/settings/files/index.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('technical_support')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="customFile">{{ __('admin/settings/files/index.easy_exchange_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="easy_exchange" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/settings/files/index.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('easy_exchange')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="customFile">{{ __('admin/settings/files/index.header_banner_label') }}</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" name="header_banner" id="customFile" type="file">
                                        <label class="custom-file-label" for="customFile">
                                            {{ __('admin/settings/files/index.choose_file') }}
                                        </label>
                                    </div>
                                </div>
                                @error('header_banner')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-0">
                        {{ __('admin/settings/general/index.submit') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
