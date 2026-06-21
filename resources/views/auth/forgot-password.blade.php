@extends('layouts.auth')

@section('title')
    {{ config('app.name') }} | Reset Password
@endsection

@section('content')
    <div class="auth-cover-card p-sm-5">
        <div class="wd-50 mb-5">
            <img src="{{ asset('img/logo-full.png') }}" alt="" class="" width="150px" />
        </div>
        <h2 class="fs-20 fw-bolder mb-4">Forgot Password</h2>
        <h4 class="fs-13 fw-bold mb-2">Reset your password</h4>
        <p class="fs-12 fw-medium text-muted">Enter your email address and we'll send you a link to reset your password.</p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="/forgot-password" method="POST" class="w-100 mt-4 pt-2">
            @csrf
            <div class="mb-4">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email Address" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mt-5">
                <button type="submit" class="btn btn-lg btn-primary w-100">Reset Password</button>
            </div>
        </form>
        <div class="mt-5 text-muted">
            <span>Remember your password?</span>
            <a href="{{ route('login') }}" class="fw-bold">Login</a>
        </div>
    </div>
@endsection
