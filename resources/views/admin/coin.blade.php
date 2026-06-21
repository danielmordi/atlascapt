@extends('layouts.base')

@section('title')
    Add wallet address
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Manage Wallet Address</p>
                </div>
            </div>

            <!-- End::page-header -->

            @if (session()->has('success'))
                <div class="alert alert-{{ session()->has('success') ? 'success' : 'danger' }}">
                    <small>{{ session('success') }}</small>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-4">
                    <div class="py-4 card card-body">
                        <h3 class="lead text-uppercase">{{ isset($coin->id) ? 'Edit Coin' : 'Add Coin' }}
                        </h3>
                        <div id="coins" class="=">
                            <form
                                action="{{ isset($coin->id) ? route('admin.coin.update', $coin->id) : route('admin.coin.store') }}"
                                method="post" id="addCoinForm" class="mb-4">
                                @csrf
                                @isset($coin->id)
                                    @method('PATCH')
                                @endisset
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="coin_name" placeholder="Name of Coin"
                                        class="mb-2 form-control"
                                        value="{{ isset($coin->id) ? $coin->name : old('pckg_%') }}">
                                </div>
                                <div class="form-group">
                                    <label for="wallet_id" class="form-label">Wallet Address</label>
                                    <input type="text" name="wallet_id" id="wallet_id" placeholder="Wallet ID"
                                        class="mb-2 form-control"
                                        value="{{ isset($coin->id) ? $coin->wallet_id : old('pckg_%') }}">
                                </div>
                                <button type="submit" style="letter-spacing:1.3px"
                                    class="mt-3 btn btn-success w-100 text-uppercase">
                                    {{ isset($coin->id) ? 'Update coin' : 'Add coin' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    @if (!isset($coin->id))
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Name</th>
                                            <th>Wallet ID</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($coins as $coin)
                                                <tr>
                                                    <td>{{ $coin->name }}</td>
                                                    <td>{{ $coin->wallet_id }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('admin.coin.edit', $coin->id) }}"
                                                            class="mx-1 btn btn-primary btn-sm">
                                                            Edit
                                                        </a>
                                                        <form id="delete-package"
                                                            action="{{ route('admin.coin.delete', $coin->id) }}"
                                                            method="POST">
                                                            @csrf @method('DELETE')
                                                            <button class="btn btn-sm btn-danger"
                                                                type="submit">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
