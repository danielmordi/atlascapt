@extends('layouts.base')

@section('title')
    Admin profile
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Profile</p>
                </div>
            </div>

            <!-- End::page-header -->

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.profile.update', $user->id) }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="username" class="scr-only">Username</label>
                    <input type="text" name="username" class="bg-white form-control" id="username"
                        placeholder="Username" value="{{ $user->username ?? '' }}" required>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="email" class="scr-only">Email</label>
                    <input type="email" name="email" class="bg-white form-control" id="username" placeholder="Email"
                        value="{{ $user->email }}" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>

        </div>
    </div>
    <!-- End Page-content -->
@endsection

@push('scripts')
    <script>
        function count_it() {
            var count = $('#count');
            var tx = document.getElementById('text#1').value.length;

            return count.text(tx) - 99;
        }
    </script>
@endpush
