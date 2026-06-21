@extends('layouts.base')

@section('title')
    Create Plans
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Manage packages</p>
                </div>
            </div>

            <!-- End::page-header -->

            @if (session()->has('success'))
                <div class="mb-3 alert alert-{{ session()->has('success') ? 'success' : 'danger' }}">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-4">
                    <div class="py-4 card card-body">
                        <h3 class="lead text-uppercase">
                            {{ isset($package->id) ? 'Edit package' : 'Add package' }}
                        </h3>
                        <div id="packages" class="=">
                            <form
                                action="{{ isset($package->id) ? route('admin.packages.update', $package->id) : route('admin.packages.store') }}"
                                method="post">
                                @csrf
                                @isset($package->id)
                                    @method('PATCH')
                                @endisset
                                <div class="mt-2 form-group">
                                    <label for="pckg_name" class="form-label">Package Name</label>
                                    <input type="text" name="pckg_name" placeholder="Package Name" id="pckg_name"
                                        class="form-control mb-2 @error('pckg_name') is-invalid @enderror"
                                        value="{{ isset($package->id) ? $package->name : old('pckg_%') }}">
                                    @error('pckg_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pckg_" class="form-label">Package Percentage</label>
                                    <input type="text" name="pckg_%" id="pckg_%" placeholder="Package %"
                                        class="mb-2 form-control"
                                        value="{{ isset($package->id) ? $package->percentage : old('pckg_%') }}">
                                </div>
                                <div class="form-group">
                                    <label for="hashrate" class="form-label">Daily ROI</label>
                                    <input type="text" name="hashrate" id="hashrate" placeholder="Daily ROI"
                                        class="mb-2 form-control"
                                        value="{{ isset($package->id) ? $package->hash_rate : old('pckg_%') }}">
                                </div>
                                <div class="form-group">
                                    <label for="pckg_min_val" class="form-label">Min Value</label>
                                    <input type="text" name="pckg_min_val" id="pckg_min_val"
                                        placeholder="Package Min Value" class="mb-2 form-control"
                                        value="{{ isset($package->id) ? $package->min_val : old('pckg_%') }}">
                                    @if (session()->has('error'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ session('error') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="pckg_max_val" class="form-label">Max Value</label>
                                    <input type="text" name="pckg_max_val" id="pckg_max_val"
                                        placeholder="Package Max Value" class="mb-2 form-control"
                                        value="{{ isset($package->id) ? $package->max_val : old('pckg_%') }}">
                                </div>
                                <div class="form-group">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input type="text" name="duration" id="duration" placeholder="Package Duration"
                                        class="mb-2 form-control"
                                        value="{{ isset($package->id) ? $package->duration : old('pckg_%') }}">
                                </div>
                                <button type="submit" class="mx-auto mt-2 btn btn-secondary w-100 text-uppercase"
                                    style="letter-spacing: 1.5px">Add
                                    Package
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    @if (!isset($package->id))
                        <div class="card card-body table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-white bg-dark">
                                    <tr>
                                        <th class="text-nowrap" scope="col">Name</th>
                                        <th class="text-nowrap" scope="col">Percentage</th>
                                        <th class="text-nowrap" scope="col">Daily ROI</th>
                                        <th class="text-nowrap" scope="col">Minimum value</th>
                                        <th class="text-nowrap" scope="col">Maximum value</th>
                                        <th class="text-nowrap" scope="col">Duration</th>
                                        <th class="text-nowrap" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $pk)
                                        <tr>
                                            <td class="text-nowrap">{{ $pk->name }}</td>
                                            <td class="text-nowrap">{{ strval($pk->percentage) }}</td>
                                            <td class="text-nowrap">{{ $pk->hash_rate }}</td>
                                            <td class="text-nowrap">{{ $pk->min_val }}</td>
                                            <td class="text-nowrap">{{ $pk->max_val }}</td>
                                            <td class="text-nowrap">{{ $pk->duration }}</td>
                                            <td class="text-nowrap text-uppercase d-flex">
                                                <a href="{{ route('admin.packages.edit', $pk->id) }}"
                                                    class="mx-1 btn btn-sm btn-success">
                                                    Edit
                                                </a>
                                                <form id="delete-package"
                                                    action="{{ route('admin.packages.delete', $pk->id) }}"
                                                    method="POST">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
@endsection
