@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/settings/links/index.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/settings/links/index.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/settings/links/index.active') }}</span>
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
                    {{ __('admin/settings/links/index.label') }}
                </div>
                <br>
                <form action="{{ route('admin.settings.links.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row row-sm">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="card-body pt-0">
                                <div class="form-group">
                                    <label for="facebook_link">
                                        {{ __('admin/settings/links/index.facebook_link_label') }}
                                    </label>
                                    <input type="text" value="{{ old('facebook_link', settings()->get('facebook_link')) }}"
                                        name="facebook_link" class="form-control" id="facebook_link">
                                </div>
                                @error('facebook_link')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="instgram_link">
                                        {{ __('admin/settings/links/index.instgram_link_label') }}
                                    </label>
                                    <input type="text" value="{{ old('instgram_link', settings()->get('instgram_link')) }}"
                                        name="instgram_link" class="form-control" id="instgram_link">
                                </div>
                                @error('instgram_link')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="x_link">
                                        {{ __('admin/settings/links/index.x_link_label') }}
                                    </label>
                                    <input type="text" value="{{ old('x_link', settings()->get('x_link')) }}"
                                        name="x_link" class="form-control" id="x_link">
                                </div>
                                @error('x_link')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="card-body pt-0">
                                <div class="form-group">
                                    <label for="tiktok_link">
                                        {{ __('admin/settings/links/index.tiktok_link_label') }}
                                    </label>
                                    <input type="text" value="{{ old('tiktok_link', settings()->get('tiktok_link')) }}"
                                        name="tiktok_link" class="form-control" id="tiktok_link">
                                </div>
                                @error('tiktok_link')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="youtube_link">
                                        {{ __('admin/settings/links/index.youtube_link_label') }}
                                    </label>
                                    <input type="text" value="{{ old('youtube_link', settings()->get('youtube_link')) }}"
                                        name="youtube_link" class="form-control" id="youtube_link">
                                </div>
                                @error('youtube_link')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="threads_link">
                                        {{ __('admin/settings/links/index.threads_link_label') }}
                                    </label>
                                    <input type="text" value="{{ old('threads_link', settings()->get('threads_link')) }}"
                                        name="threads_link" class="form-control" id="threads_link">
                                </div>
                                @error('threads_link')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-0">
                        {{ __('admin/settings/links/index.submit') }}
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
    </script>
@endsection

{{-- <div class="form-group">
    <label for="customFile">Image</label>
    <div class="custom-file">
        <input class="custom-file-input" name="image" id="customFile" type="file">
        <label class="custom-file-label" for="customFile">
            {{ __('admin/settings/links/index.choose_file') }}
        </label>
    </div>
</div>
@error('image')
    <div class="text-danger">{{ $message }}</div>
@enderror --}}
