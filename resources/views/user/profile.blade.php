@extends('layouts.base')

@section('title')
    Profile Settings
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Profile Settings</p>
                    <span class="fs-12 text-muted">Manage your account profile and security password</span>
                </div>
            </div>
            <!-- End::page-header -->

            <div class="row g-4">

                {{-- Left: Edit Profile --}}
                <div class="col-lg-6 col-md-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <i class="feather-user me-2 text-primary"></i>Edit Profile
                            </h5>
                        </div>
                        <div class="card-body">

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="feather-check-circle me-2"></i>{{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            @if ($errors->has('username') || $errors->has('email'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    @foreach (['username', 'email'] as $field)
                                        @error($field)
                                            <div><i class="feather-alert-circle me-1"></i>{{ $message }}</div>
                                        @enderror
                                    @endforeach
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <form action="{{ route('user.profile.update') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="user_username" class="form-label fw-semibold">Username</label>
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror"
                                        id="user_username" placeholder="Enter username"
                                        value="{{ old('username', $user->username ?? '') }}" required>
                                    @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="user_email" class="form-label fw-semibold">Email Address</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="user_email" placeholder="Enter email"
                                        value="{{ old('email', $user->email ?? '') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="feather-save me-1"></i>Update Profile
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Right: Change Password --}}
                <div class="col-lg-6 col-md-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <i class="feather-lock me-2 text-warning"></i>Change Password
                            </h5>
                        </div>
                        <div class="card-body">

                            @if (session('password_success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="feather-check-circle me-2"></i>{{ session('password_success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            @if ($errors->has('current_password') || $errors->has('password'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    @error('current_password')
                                        <div><i class="feather-alert-circle me-1"></i>{{ $message }}</div>
                                    @enderror
                                    @error('password')
                                        <div><i class="feather-alert-circle me-1"></i>{{ $message }}</div>
                                    @enderror
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <form action="{{ route('user.profile.password') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="user_current_password" class="form-label fw-semibold">Current Password</label>
                                    <div class="input-group">
                                        <input type="password" name="current_password"
                                            class="form-control @error('current_password') is-invalid @enderror"
                                            id="user_current_password" placeholder="Enter current password">
                                        <button class="btn btn-outline-secondary toggle-password" type="button"
                                            data-target="user_current_password">
                                            <i class="feather-eye"></i>
                                        </button>
                                        @error('current_password')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="user_password" class="form-label fw-semibold">New Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="user_password" placeholder="Min. 8 characters">
                                        <button class="btn btn-outline-secondary toggle-password" type="button"
                                            data-target="user_password">
                                            <i class="feather-eye"></i>
                                        </button>
                                        @error('password')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-2" id="user_password_strength" style="display:none;">
                                        <div class="progress" style="height:4px;">
                                            <div id="user_strength_bar" class="progress-bar" style="width:0%"></div>
                                        </div>
                                        <small id="user_strength_label" class="text-muted mt-1 d-block"></small>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="user_password_confirmation" class="form-label fw-semibold">Confirm New Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password_confirmation"
                                            class="form-control"
                                            id="user_password_confirmation" placeholder="Repeat new password">
                                        <button class="btn btn-outline-secondary toggle-password" type="button"
                                            data-target="user_password_confirmation">
                                            <i class="feather-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-warning w-100">
                                    <i class="feather-lock me-1"></i>Update Password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var targetId = this.getAttribute('data-target');
            var input = document.getElementById(targetId);
            var icon = this.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('feather-eye', 'feather-eye-off');
            } else {
                input.type = 'password';
                icon.classList.replace('feather-eye-off', 'feather-eye');
            }
        });
    });

    // Password strength meter
    var userPasswordInput = document.getElementById('user_password');
    if (userPasswordInput) {
        userPasswordInput.addEventListener('input', function() {
            var val = this.value;
            var strengthDiv = document.getElementById('user_password_strength');
            var bar = document.getElementById('user_strength_bar');
            var label = document.getElementById('user_strength_label');

            if (val.length === 0) {
                strengthDiv.style.display = 'none';
                return;
            }
            strengthDiv.style.display = 'block';

            var score = 0;
            if (val.length >= 8) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            var colors = ['#dc3545', '#fd7e14', '#ffc107', '#28a745'];
            var labels = ['Weak', 'Fair', 'Good', 'Strong'];
            var pct = (score / 4) * 100;

            bar.style.width = pct + '%';
            bar.style.backgroundColor = colors[score - 1] || '#dc3545';
            label.textContent = 'Strength: ' + (labels[score - 1] || 'Very Weak');
        });
    }
</script>
@endpush
