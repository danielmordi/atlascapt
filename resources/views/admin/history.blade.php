@extends('layouts.base')

@section('content')

  <div class="main-wrapper">
    @include('theme.nav')
    @include('theme.header')
    @include('theme.admin-sidebar')

    <div class="content-body">
      <section class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h4 class="lead">All Transaction</h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
              <tr>
                <th scope="col">Transaction</th>
                <th scope="col">User</th>
                <th scope="col">Package</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
              </thead>
              <tbody>
              @if (session()->has('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
              @foreach ($histories as $history)
                <tr>
                  <td>{{ strtoupper($history->transaction_type) }}</td>
                  <td>{{ $history->user->name }}</td>
                  <td>{{ $history->plan }}</td>
                  <td> @money($history->amount * 100, 'USD')</td>
                  <td><span
                      class="badge badge-{{ isset($history->status) == 'pending' ? 'warning' : 'success' }}">{{ strtoupper($history->status) }}</span>
                  </td>
                  <td>{{ $history->created_at->diffForHumans() }}</td>
                  <td>
                    <a href="{{ route('admin.deposit-confirmation', $history->id) }}"
                       class="btn btn-sm btn-success">
                      Confirm
                    </a>
                    <a href="{{ route('admin.deposit.failed', $history->id) }}"
                       class="btn btn-sm btn-danger">
                      Not recived
                    </a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="pagination">
              {{ $histories->links('pagination::bootstrap-4') }}
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  @include('theme.scripts')
@endsection
