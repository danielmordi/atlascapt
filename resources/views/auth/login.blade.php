@extends('layouts.auth')

@section('title')
    {{ config('app.name') }} - Login
@endsection

@section('content')
    <div class="auth-cover-card p-sm-5">
        <div class="wd-50 mb-5">
            <img src="{{ asset('img/logo-full.png') }}" alt="" class="" width="150px" />
        </div>
        <h2 class="fs-20 fw-bolder mb-4">Login</h2>
        <h4 class="fs-13 fw-bold mb-2">Login to your account</h4>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="login" method="POST" class="w-100 mt-4 pt-2">
            @csrf
            <div class="mb-4">
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email or Username" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberMe">
                        <label class="custom-control-label c-pointer" for="rememberMe">Remember Me</label>
                    </div>
                </div>
                <div>
                    <a href="{{ route('password.request') }}" class="fs-11 text-primary">Forget password?</a>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-lg btn-primary w-100">Login</button>
            </div>
        </form>
        <div class="mt-5 text-muted">
            <span> Don't have an account?</span>
            <a href="register" class="fw-bold">Create an Account</a>
        </div>
    </div>
@endsection
