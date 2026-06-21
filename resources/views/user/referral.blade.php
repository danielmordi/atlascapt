@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Referral Link
@endsection

<style>
    .tradingview-widget-copyright {
        display: none;
    }
</style>

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">My Referrals</p>
                </div>
            </div>

            <!-- End::page-header -->

            <div class="row"> mb-8
                <div class="col-md-6 col-sm-12">
                    <div class="input-group mb-4">
                        <input type="text" id="copyReferralLink" value="{{ Auth::user()->referral_link }}" readonly
                            class="form-control">
                        <button class="btn btn-primary copyReferralLink" data-clipboard-target="#copyReferralLink">Copy!
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-uppercase">
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Deposit</th>
                                        <th>Date</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($refs as $ref)
                                            <tr>
                                                <td>{{ $ref->name }}</td>
                                                <td>{{ $ref->username }}</td>
                                                <td>{{ $ref->profit = null ? 'Not yet' : 'Yes' }}</td>
                                                <td>{{ $ref->created_at->format('m/d/Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END layout-wrapper -->
@endsection
