@extends('layouts.guest')

@section('title')
  {{ config('app.name') }} | Confirm password
@endsection

@section('content')
  <!-- Begin page -->
  <div id="layout-wrapper">

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

      <div class="page-content">
        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">{{ __('Two factor Challenge') }}</div>

                <div class="card-body">
                  {{ __('Please enter your authentication code to login.') }}

                  <form method="POST" action="{{ route('two-factor.login') }}" class="">
                    @csrf

                    <div class="form-group">
                      <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

                      <div class="">
                        <input id="code" type="text" class="form-control @error('code') is-invalid @enderror"
                               name="code" required autocomplete="code">

                        @error('code')
                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row mb-0 mt-3">
                      <div class="d-flex">
                        <button type="submit" class="btn btn-primary">
                          {{ __('Submit') }}
                        </button>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="card-body pt-0">
                  Don't have access to your Two-factor authentication code?
                  <button class="btn btn-link p-0 m-0 align-baseline mt-1 collapsed" type="button"
                          data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                          aria-controls="collapseExample">
                    Click here to enter your recovery code.
                  </button>

                  <div class="collapse" id="collapseExample">
                    <form method="POST" action="{{ route('two-factor.login') }}" class="">
                      @csrf

                      <div class="form-group">
                        <label for="recovery_code"
                               class="col-md-4 col-form-label text-md-right">{{ __('Recovery code') }}</label>

                        <div class="">
                          <input id="recovery_code" type="text"
                                 class="form-control @error('recovery_code') is-invalid @enderror"
                                 name="recovery_code" required autocomplete="recovery_code">

                          @error('recovery_code')
                          <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row mb-0 mt-3">
                        <div class="d-flex">
                          <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page-content -->


      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <script>document.write(new Date().getFullYear())</script>
              © Bitfornt Stake Inc.
            </div>
            <div class="col-sm-6">
              <div class="text-sm-end d-none d-sm-block">
                Crafted with <i class="mdi mdi-heart text-danger"></i>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->

  @include('includes.script')
@endsection
