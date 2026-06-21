@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Transaction History
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Transaction History</p>
                </div>
            </div>

            <!-- End::page-header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card custom-card">
                        <div class="card-body table-responsive">
                            <div class="table-responsive">
                                <table class="table text-nowrap table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Description</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $t)
                                            <tr>
                                                <td>{{ $t->description }}</td>
                                                <td>{{ currency_converter($t->amount) }}</td>
                                                <td>
                                                    <div
                                                        class="badge bg-{{ $t->status == 'completed' ? 'success' : 'danger' }}">
                                                        {{ $t->status }}
                                                    </div>
                                                </td>
                                                <td>{{ $t->created_at->diffForHumans() }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $transactions->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
@endsection
