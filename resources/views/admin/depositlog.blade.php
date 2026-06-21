@extends('layouts.base')

@section('title')
    Deposit Logs
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Deposit Transaction Logs</p>
                </div>
            </div>

            <!-- End::page-header -->

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card custom-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="text-uppercase">
                                <th>Username</th>
                                <th>Amount</th>
                                <th>Package</th>
                                <th>Deposit Coin</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($deposits as $log)
                                    <tr>
                                        <td>{{ $log->user->name ?? '' }}</td>
                                        <td>{{ $log->amount ?? '' }}</td>
                                        <td>{{ $log->package->name ?? '' }}</td>
                                        <td>{{ $log->coin->name ?? '' }}</td>
                                        <td>
                                            <span class="badge bg-orange">{{ $log->status }}</span>
                                        </td>
                                        <td>{{ $log->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('admin.confirmDeposit', $log->id) }}"
                                                class="btn btn-primary btn-sm">Confirm</a>
                                            <a href="{{ route('admin.cancelDeposit', $log->id) }}"
                                                class="btn btn-danger btn-sm">Cancel</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination">
                            {{ $deposits->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
