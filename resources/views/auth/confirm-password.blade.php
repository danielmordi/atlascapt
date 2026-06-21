@extends('layouts.auth')

@section('title')
    {{ config('app.name') }} - Confirm Password
@endsection

@section('content')
    <div class="auth-cover-card p-sm-5">
        <div class="wd-50 mb-5">
            <img src="{{ asset('img/logo-full.png') }}" alt="" class="" width="150px" />
        </div>
        <h2 class="fs-20 fw-bolder mb-4">Confirm Password</h2>
        <h4 class="fs-13 fw-bold mb-2">Please confirm your password</h4>
        <p class="fs-12 fw-medium text-muted">This is a secure area of the application. Please confirm your password before
            continuing.</p>

        <form method="POST" action="{{ route('password.confirm') }}" class="w-100 mt-4 pt-2">
            @csrf

            <div class="mb-4">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="fs-11 text-primary">Forgot password?</a>
                @endif
            </div>

            <div class="mt-5">
                <button type="submit" class="btn btn-lg btn-primary w-100">
                    Confirm Password
                </button>
            </div>
        </form>
    </div>
@endsection
