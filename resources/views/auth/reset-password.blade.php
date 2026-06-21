@extends('layouts.auth')

@section('title')
    {{ config('app.name') }} - Reset Password
@endsection

@section('content')
    <div class="auth-cover-card p-sm-5">
        <div class="wd-50 mb-5">
            <img src="{{ asset('img/logo-full.png') }}" alt="" class="" width="150px" />
        </div>
        <h2 class="fs-20 fw-bolder mb-4">Reset Password</h2>
        <h4 class="fs-13 fw-bold mb-2">Create a new password</h4>
        <p class="fs-12 fw-medium text-muted">Please enter your email and choose a new secure password.</p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="/reset-password" method="POST" class="w-100 mt-4 pt-2">
            @csrf

            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <div class="mb-4">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email Address" value="{{ old('email', $email ?? '') }}" required autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="New Password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password"
                    required autocomplete="new-password">
            </div>

            <div class="mt-5">
                <button type="submit" class="btn btn-lg btn-primary w-100">Reset Password</button>
            </div>
        </form>
    </div>
@endsection
