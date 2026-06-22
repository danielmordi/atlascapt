@extends('layouts.auth')

@section('title')
    {{ config('app.name') }} Register
@endsection

@section('content')
    <div class="auth-cover-sidebar-inner">
        <div class="auth-cover-card-wrapper">
            <div class="auth-cover-card p-sm-5">
                <div class="wd-50 mb-5">
                    <img src="{{ asset('img/logo-full.png') }}" alt="" class="" width="150px" />
                </div>
                <h2 class="fs-20 fw-bolder mb-4">Register</h2>
                <h4 class="fs-13 fw-bold mb-2">Manage all your Duralux crm</h4>
                <p class="fs-12 fw-medium text-muted">Let's get you all setup, so you can verify your personal account and
                    begine setting up your profile.</p>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="register" method="POST" class="w-100 mt-4 pt-2">
                    @csrf
                    <div class="mb-4">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name"
                            name="name" required>
                        @error('name')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                            name="email" required>
                        @error('email')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                            placeholder="Username" name="username" required>
                        @error('username')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4 generate-pass">
                        <div class="input-group field">
                            <input type="password" class="form-control password @error('password') is-invalid @enderror"
                                id="newPassword" placeholder="Password Confirm" name="password" required>
                            <div class="input-group-text c-pointer gen-pass" data-bs-toggle="tooltip"
                                title="Generate Password"><i class="feather-hash"></i></div>
                            <div class="input-group-text border-start bg-gray-2 c-pointer show-pass"
                                data-bs-toggle="tooltip" title="Show/Hide Password"><i></i></div>
                        </div>
                        <div class="progress-bar mt-2">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div id="password-alert" class="alert alert-info mt-2 d-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <span><strong>Password generated!</strong> Please copy and save it.</span>
                                <button type="button" class="btn btn-xs btn-primary copy-pass"
                                    data-clipboard-target="#newPassword">Copy</button>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="password" id="password-confirm"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            placeholder="Password again" name="password_confirmation" required>
                    </div>
                    <div class="mt-4">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="receiveMial" required>
                            <label class="custom-control-label c-pointer text-muted" for="receiveMial"
                                style="font-weight: 400 !important">Yes, I wnat to receive {{ config('app.name') }}
                                community emails</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="termsCondition" required>
                            <label class="custom-control-label c-pointer text-muted" for="termsCondition"
                                style="font-weight: 400 !important">I agree to all the <a href="{{ route('terms') }}">Terms
                                    &amp;
                                    Conditions and Fees</a>.</label>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-lg btn-primary w-100">Create Account</button>
                    </div>
                </form>
                <div class="mt-5 text-muted">
                    <span>Already have an account?</span>
                    <a href="{{ route('login') }}" class="fw-bold">Login</a>
                </div>
            </div>
        </div>
        <!-- Begin page -->
        <div style="display: none">
            <div class="pt-5 mt-5 account-pages">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-5 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mt-4 text-center">
                                        <div class="mb-3">
                                            <a href="/"><img src="{{ asset('img/logo-full.png') }}" width="200"
                                                    alt="logo"></a>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <p class="mb-4 text-center text-muted">Register to start investing today.</p>
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form class="mt-4" action="register" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="username">Username</label>
                                                <input type="text" name="username" required
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    id="username" style="" placeholder="Enter username">
                                                @error('username')
                                                    <span class="invalid-feedback">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="name">Name</label>
                                                <input type="text" name="name" required
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    style="" placeholder="Enter name">
                                                @error('name')
                                                    <span class="invalid-feedback">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="useremail">Email</label>
                                                <input type="email" name="email" required
                                                    class="form-control @error('email') is-invalid @enderror" id="useremail"
                                                    style="" placeholder="Enter email">
                                                @error('email')
                                                    <span class="invalid-feedback">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <input type="password" name="password" required
                                                    class="form-control @error('password') is-invalid @enderror "
                                                    id="userpassword" style="" placeholder="Enter password">
                                                @error('password')
                                                    <span class="invalid-feedback">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="confirmuserpassword">Confirm
                                                    Password</label>
                                                <input type="password" required name="password_confirmation"
                                                    class="form-control" id="confirmuserpassword" style=""
                                                    placeholder="Confirm password">
                                            </div>
                                            <div class="mb-3">
                                                <div class="text-end">
                                                    <button class="btn btn-primary w-md waves-effect waves-light"
                                                        type="submit">
                                                        Register
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-2 mb-0 row">
                                                <div class="mt-3 col-12">
                                                    <p class="mb-0 font-size-14 text-muted">By registering you agree to the
                                                        <a href="/terms">Terms of Use</a> {{ config('app.name') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 text-center position-relative">
                                <p class="text-dark">Already have an account ? <a href="{{ route('login') }}"
                                        class="fw-medium text-primary"> Login </a></p>
                                <p class="text-dark">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> © {{ config('app.name') }}.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('includes.script')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const genPassBtn = document.querySelector('.gen-pass');
                const passwordInput = document.getElementById('newPassword');
                const confirmInput = document.getElementById('password-confirm');
                const alertDiv = document.getElementById('password-alert');

                if (genPassBtn) {
                    genPassBtn.addEventListener('click', function () {
                        // Wait for the existing script to generate and set the password
                        setTimeout(() => {
                            const generatedPassword = passwordInput.value;
                            if (confirmInput) {
                                confirmInput.value = generatedPassword;
                                // Also trigger any input events if needed
                                confirmInput.dispatchEvent(new Event('input'));
                            }
                            if (alertDiv) {
                                alertDiv.classList.remove('d-none');
                            }
                        }, 100);
                    });
                }

                const showPassBtn = document.querySelector('.show-pass');
                if (showPassBtn) {
                    showPassBtn.addEventListener('click', function () {
                        // Use setTimeout 0 to ensure this runs after the main script toggles the type
                        setTimeout(() => {
                            if (passwordInput && confirmInput) {
                                confirmInput.type = passwordInput.type;
                            }
                        }, 0);
                    });
                }

                const copyBtn = document.querySelector('.copy-pass');
                if (copyBtn) {
                    copyBtn.addEventListener('click', function () {
                        const targetId = this.getAttribute('data-clipboard-target');
                        const targetInput = document.querySelector(targetId);

                        if (targetInput) {
                            const textToCopy = targetInput.value;
                            navigator.clipboard.writeText(textToCopy).then(() => {
                                // Success feedback
                                const originalText = this.innerText;
                                this.innerText = 'Copied!';
                                this.classList.replace('btn-primary', 'btn-success');

                                // Reset button after delay
                                setTimeout(() => {
                                    this.innerText = originalText;
                                    this.classList.replace('btn-success', 'btn-primary');
                                }, 2000);

                                // Inform user (Optional: could use a toast if available)
                                // Since we already updated the button, the user is informed.
                                // But the request specifically said "inform the user that the password has been copied"
                                // Maybe add a small toast notification here if library exists.
                                if (typeof Swal !== 'undefined') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Copied!',
                                        text: 'Password has been copied to clipboard',
                                        timer: 1500,
                                        showConfirmButton: false
                                    });
                                }
                            }).catch(err => {
                                console.error('Failed to copy: ', err);
                            });
                        }
                    });
                }
            });
        </script>
@endsection