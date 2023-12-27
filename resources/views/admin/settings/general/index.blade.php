@extends('admin.layouts.app')

@section('style')
    <script src="{{ asset('admin/assets/ckeditor/build/ckeditor.js') }}"></script>
@endsection

@section('title', __('admin/settings/general/index.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/settings/general/index.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/settings/general/index.active') }}</span>
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
                    {{ __('admin/settings/general/index.label') }}
                </div>
                <br>
                <form action="{{ route('admin.settings.general.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row row-sm">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card-body pt-0">
                                <div class="form-group">
                                    <label for="site_name_en">
                                        {{ __('admin/settings/general/index.site_name_en_label') }}
                                    </label>
                                    <input type="text" value="{{ old('site_name_en', settings()->get('site_name_en')) }}"
                                        name="site_name_en" class="form-control" id="site_name_en">
                                </div>
                                @error('site_name_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="site_name_ar">
                                        {{ __('admin/settings/general/index.site_name_ar_label') }}
                                    </label>
                                    <input type="text" value="{{ old('site_name_ar', settings()->get('site_name_ar')) }}"
                                        name="site_name_ar" class="form-control" id="site_name_ar">
                                </div>
                                @error('site_name_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="slogan_en">
                                        {{ __('admin/settings/general/index.slogan_en_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('slogan_en', settings()->get('slogan_en')) }}"
                                        name="slogan_en" class="form-control" id="slogan_en">
                                </div>
                                @error('slogan_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="slogan_ar">
                                        {{ __('admin/settings/general/index.slogan_ar_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('slogan_ar', settings()->get('slogan_ar')) }}"
                                        name="slogan_ar" class="form-control" id="slogan_ar">
                                </div>
                                @error('slogan_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="site_goals_en">
                                        {{ __('admin/settings/general/index.site_goals_en_label') }}
                                    </label>
                                    <textarea class="form-control" name="site_goals_en" id="editor11">
                                        {!! old('site_goals_en', settings()->get('site_goals_en')) !!}
                                    </textarea>
                                </div>
                                @error('site_goals_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="site_goals_ar">
                                        {{ __('admin/settings/general/index.site_goals_ar_label') }}
                                    </label>
                                    <textarea class="form-control" name="site_goals_ar" id="editor12">
                                        {!! old('site_goals_ar', settings()->get('site_goals_ar')) !!}
                                    </textarea>
                                </div>
                                @error('site_goals_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="site_view_en">
                                        {{ __('admin/settings/general/index.site_view_en_label') }}
                                    </label>
                                    <textarea class="form-control" name="site_view_en" id="editor13">
                                        {!! old('site_view_en', settings()->get('site_view_en')) !!}
                                    </textarea>
                                </div>
                                @error('site_view_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="site_view_ar">
                                        {{ __('admin/settings/general/index.site_view_ar_label') }}
                                    </label>
                                    <textarea class="form-control" name="site_view_ar" id="editor14">
                                        {!! old('site_view_ar', settings()->get('site_view_ar')) !!}
                                    </textarea>
                                </div>
                                @error('site_view_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="shipping_slogan_en">
                                        {{ __('admin/settings/general/index.shipping_slogan_en_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('shipping_slogan_en', settings()->get('shipping_slogan_en')) }}"
                                        name="shipping_slogan_en" class="form-control" id="shipping_slogan_en">
                                </div>
                                @error('shipping_slogan_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="shipping_slogan_ar">
                                        {{ __('admin/settings/general/index.shipping_slogan_ar_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('shipping_slogan_ar', settings()->get('shipping_slogan_ar')) }}"
                                        name="shipping_slogan_ar" class="form-control" id="shipping_slogan_ar">
                                </div>
                                @error('shipping_slogan_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="quality_assurance_en">
                                        {{ __('admin/settings/general/index.quality_assurance_en_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('quality_assurance_en', settings()->get('quality_assurance_en')) }}"
                                        name="quality_assurance_en" class="form-control" id="quality_assurance_en">
                                </div>
                                @error('quality_assurance_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="quality_assurance_ar">
                                        {{ __('admin/settings/general/index.quality_assurance_ar_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('quality_assurance_ar', settings()->get('quality_assurance_ar')) }}"
                                        name="quality_assurance_ar" class="form-control" id="quality_assurance_ar">
                                </div>
                                @error('quality_assurance_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="technical_support_en">
                                        {{ __('admin/settings/general/index.technical_support_en_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('technical_support_en', settings()->get('technical_support_en')) }}"
                                        name="technical_support_en" class="form-control" id="technical_support_en">
                                </div>
                                @error('technical_support_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="technical_support_ar">
                                        {{ __('admin/settings/general/index.technical_support_ar_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('technical_support_ar', settings()->get('technical_support_ar')) }}"
                                        name="technical_support_ar" class="form-control" id="technical_support_ar">
                                </div>
                                @error('technical_support_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="easy_exchange_en">
                                        {{ __('admin/settings/general/index.easy_exchange_en_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('easy_exchange_en', settings()->get('easy_exchange_en')) }}"
                                        name="easy_exchange_en" class="form-control" id="easy_exchange_en">
                                </div>
                                @error('easy_exchange_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="easy_exchange_ar">
                                        {{ __('admin/settings/general/index.easy_exchange_ar_label') }}
                                    </label>
                                    <input type="text"
                                        value="{{ old('easy_exchange_ar', settings()->get('easy_exchange_ar')) }}"
                                        name="easy_exchange_ar" class="form-control" id="easy_exchange_ar">
                                </div>
                                @error('easy_exchange_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="who_we_are_en">
                                        {{ __('admin/settings/general/index.who_we_are_en_label') }}
                                    </label>
                                    <textarea class="form-control" name="who_we_are_en" id="editor1">
                                        {!! old('who_we_are_en', settings()->get('who_we_are_en')) !!}
                                    </textarea>
                                </div>
                                @error('who_we_are_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="who_we_are_ar">
                                        {{ __('admin/settings/general/index.who_we_are_ar_label') }}
                                    </label>
                                    <textarea class="form-control" name="who_we_are_ar" id="editor2">
                                        {!! old('who_we_are_ar', settings()->get('who_we_are_ar')) !!}
                                    </textarea>
                                </div>
                                @error('who_we_are_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="privacy_policy_en">
                                        {{ __('admin/settings/general/index.privacy_policy_en_label') }}
                                    </label>
                                    <textarea class="form-control" name="privacy_policy_en" id="editor3">
                                        {!! old('privacy_policy_en', settings()->get('privacy_policy_en')) !!}
                                    </textarea>
                                </div>
                                @error('privacy_policy_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="privacy_policy_ar">
                                        {{ __('admin/settings/general/index.privacy_policy_ar_label') }}
                                    </label>
                                    <textarea class="form-control" name="privacy_policy_ar" id="editor4">
                                        {!! old('privacy_policy_ar', settings()->get('privacy_policy_ar')) !!}
                                    </textarea>
                                </div>
                                @error('privacy_policy_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exchange_and_return_policy_en">
                                        {{ __('admin/settings/general/index.exchange_and_return_policy_en_label') }}
                                    </label>
                                    <textarea class="form-control" name="exchange_and_return_policy_en" id="editor5">
                                        {!! old('exchange_and_return_policy_en', settings()->get('exchange_and_return_policy_en')) !!}
                                    </textarea>
                                </div>
                                @error('exchange_and_return_policy_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exchange_and_return_policy_ar">
                                        {{ __('admin/settings/general/index.exchange_and_return_policy_ar_label') }}
                                    </label>
                                    <textarea class="form-control" name="exchange_and_return_policy_ar" id="editor6">
                                        {!! old('exchange_and_return_policy_ar', settings()->get('exchange_and_return_policy_ar')) !!}
                                    </textarea>
                                </div>
                                @error('exchange_and_return_policy_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="contact_title_en">
                                        {{ __('admin/settings/general/index.contact_title_en_label') }}
                                    </label>
                                    <textarea class="form-control" name="contact_title_en" id="editor7">
                                        {!! old('contact_title_en', settings()->get('contact_title_en')) !!}
                                    </textarea>
                                </div>
                                @error('contact_title_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="contact_title_ar">
                                        {{ __('admin/settings/general/index.contact_title_ar_label') }}
                                    </label>
                                    <textarea class="form-control" name="contact_title_ar" id="editor8">
                                        {!! old('contact_title_ar', settings()->get('contact_title_ar')) !!}
                                    </textarea>
                                </div>
                                @error('contact_title_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="contact_content_en">
                                        {{ __('admin/settings/general/index.contact_content_en_label') }}
                                    </label>
                                    <textarea class="form-control" name="contact_content_en" id="editor9">
                                        {!! old('contact_content_en', settings()->get('contact_content_en')) !!}
                                    </textarea>
                                </div>
                                @error('contact_content_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="contact_content_ar">
                                        {{ __('admin/settings/general/index.contact_content_ar_label') }}
                                    </label>
                                    <textarea class="form-control" name="contact_content_ar" id="editor10">
                                        {!! old('contact_content_ar', settings()->get('contact_content_ar')) !!}
                                    </textarea>
                                </div>
                                @error('contact_content_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="need_help">
                                        {{ __('admin/settings/general/index.need_help_label') }}
                                    </label>
                                    <input type="email" value="{{ old('need_help', settings()->get('need_help')) }}"
                                        name="need_help" class="form-control" id="need_help">
                                </div>
                                @error('need_help')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="email">
                                        {{ __('admin/settings/general/index.email_label') }}
                                    </label>
                                    <input type="text" value="{{ old('email', settings()->get('email')) }}"
                                        name="email" class="form-control" id="email">
                                </div>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="phone">
                                        {{ __('admin/settings/general/index.phone_label') }}
                                    </label>
                                    <input type="text" value="{{ old('phone', settings()->get('phone')) }}"
                                        name="phone" class="form-control" id="phone">
                                </div>
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="address">
                                        {{ __('admin/settings/general/index.address_label') }}
                                    </label>
                                    <input type="text" value="{{ old('address', settings()->get('address')) }}"
                                        name="address" class="form-control" id="address">
                                </div>
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="tax">
                                        {{ __('admin/settings/general/index.tax_label') }}
                                    </label>
                                    <input type="text" value="{{ old('tax', settings()->get('tax')) }}"
                                        name="tax" class="form-control" id="tax">
                                </div>
                                @error('tax')
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
    <script>
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor3'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor4'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor5'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor6'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor7'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor8'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor9'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor10'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor11'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor12'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor13'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor14'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor15'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor16'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
