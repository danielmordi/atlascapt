@extends('layouts.base')

<style>
    .filter-white {
        filter: invert(98%) sepia(2%) saturate(7%) hue-rotate(339deg) brightness(101%) contrast(104%);
        height: 75px !important;
    }
</style>

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Page Header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <h1 class="mb-0 page-title fw-semibold fs-18">Account Verification</h1>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            @livewire('upload-id')
                        </div>
                    </div>
                    <div class="mt-5 text-center position-relative">
                        <p class="text-white">
                            <a class="fw-bold text-primary" class="nav-link dropdown-toggle" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-exit-to-app"></i> Logout Now</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </p>
                        <p class="text-white">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © {{ config('app.name') }}.
                        </p>
                    </div>

                </div>
            </div>
            <!--End::row-1 -->

        </div>


    </div>
@endsection
