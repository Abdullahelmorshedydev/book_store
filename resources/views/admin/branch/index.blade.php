@extends('admin.layouts.app')

@section('style')
@endsection

@section('title', __('admin/branch/index.title'))

@section('breadcrumb')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('admin/branch/index.header') }}</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('admin/branch/index.active') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <!--div-->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">{{ __('admin/branch/index.label') }}</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mg-b-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('admin/branch/index.name') }}</th>
                                <th>{{ __('admin/branch/index.address') }}</th>
                                <th>{{ __('admin/branch/index.status') }}</th>
                                <th>{{ __('admin/branch/index.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($branches as $branch)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <th>{{ $branch->name }}</th>
                                    <th>{{ $branch->address }}</th>
                                    <td>{{ $branch->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.branches.show', $branch->id) }}"
                                            class="btn btn-secondary">
                                            {{ __('admin/branch/index.show') }}
                                        </a>
                                        <a href="{{ route('admin.branches.edit', $branch->id) }}" class="btn btn-info">
                                            {{ __('admin/branch/index.edit') }}
                                        </a>
                                        <form class="btn btn-danger"
                                            action="{{ route('admin.branches.destroy', $branch->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-danger"
                                                type="submit">{{ __('admin/branch/index.delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $branches->links() }}
            </div>
        </div>
    </div>
    <!--/div-->
@endsection

@section('script')
@endsection
