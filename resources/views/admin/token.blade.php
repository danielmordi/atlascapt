@extends('layouts.base')

@section('title')
    Token Sale
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Manage Token</p>
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
                                <th>Payment Coin</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($tokens as $token)
                                    <tr>
                                        <td>{{ $token->user->username ?? '' }}</td>
                                        <td>{{ $token->amount ?? '' }}</td>
                                        <td>{{ $token->payment_method ?? '' }}</td>
                                        <td>
                                            <a href="{{ route('admin.view.user', $token->user_id) }}"
                                                class="btn btn-primary btn-sm">View user</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination">
                            {{ $tokens->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END layout-wrapper -->

    </div>
@endsection
