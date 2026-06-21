@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Manage Copy Traders
@endsection

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="my-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h4 class="fw-semibold mb-0 text-white">Manage Copy Traders</h4>
                </div>
                <div class="d-flex">
                    <a href="{{ route('admin.create.copy-trader') }}" class="btn btn-primary">Add New Trader</a>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            @livewire('user.trades.copy-trader')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection