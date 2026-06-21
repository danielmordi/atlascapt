@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Notifications
@endsection

@section('content')
    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Notifications</p>
                    <span class="fs-semibold text-muted">View and manage your account notifications.</span>
                </div>
                <div class="mt-2 btn-list mt-md-0">
                    @if(Auth::user()->unreadNotifications->count() > 0)
                        <a href="{{ route('user.notifications.readAll') }}" class="btn btn-primary btn-wave">
                            Mark All as Read
                        </a>
                    @endif
                </div>
            </div>
            <!-- End::page-header -->

            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success mt-2">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card custom-card">
                        <div class="card-body">
                            @forelse ($notifications as $n)
                                <div class="p-3 mb-3 rounded d-flex justify-content-between align-items-center border {{ $n->read() ? 'bg-light text-muted border-light' : 'bg-white border-primary shadow-sm' }}">
                                    <div>
                                        <div class="d-flex align-items-center gap-2 mb-1">
                                            @if(!$n->read())
                                                <span class="badge bg-primary">New</span>
                                            @endif
                                            <h6 class="mb-0 fw-semibold {{ $n->read() ? 'text-muted' : 'text-dark' }}">{{ $n->data['title'] ?? 'System Notification' }}</h6>
                                            <span class="text-muted fs-11">({{ $n->created_at->diffForHumans() }})</span>
                                        </div>
                                        <p class="mb-0 fs-13 text-muted">{{ $n->data['message'] ?? '' }}</p>
                                    </div>
                                    <div class="d-flex gap-2">
                                        @if(!$n->read())
                                            <a href="{{ route('user.notifications.read', $n->id) }}" class="btn btn-sm btn-outline-success">
                                                <i class="bx bx-check"></i> Mark Read
                                            </a>
                                        @endif
                                        <form action="{{ route('user.notifications.delete', $n->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this notification?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bx bx-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-5 text-muted">
                                    <i class="bx bx-bell-off" style="font-size: 3rem;"></i>
                                    <p class="mt-2 mb-0">You have no notifications yet.</p>
                                </div>
                            @endforelse

                            <div class="mt-4">
                                {{ $notifications->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
