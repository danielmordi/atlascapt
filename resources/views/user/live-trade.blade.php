@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Live Trade
@endsection

@section('content')
    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h1 class="mb-0 fw-semibold fs-24">Live Market Trading</h1>
                    <span class="fs-semibold text-muted">Trade assets against the current market price.</span>
                </div>
            </div>
            <!-- End::page-header -->

            <div class="row">
                <div class="col-xl-12">
                    @livewire('user.trades.live-trade')
                </div>
            </div>
        </div>
    </div>
@endsection