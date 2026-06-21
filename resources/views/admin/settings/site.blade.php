@extends('layouts.base')

@section('title')
Site configuration
@endsection

@section('content')
<!-- Begin page -->
<div id="layout-wrapper">

  @include('includes.header')
  @include('includes.admin-navbar')

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

    <div class="page-content">
      <div class="container">
        <h1 class="px-2">Site Configurations</h1>

        <div class="table-reponsive">
          <form method="post">
            @csrf
            <div class="card">
              <div class="card-body">

                <div class="accordion" id="accordionExample">
                  <div class="accordion-item border rounded">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Homepage
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="mb-2 p-0">
                          <label for="banner_title">Banner Title</label>
                          <input type="text" name="banner_heading" id="ht-1" class="form-control" maxlength="100"
                            value="{{ $site->banner_heading ?? '' }}">
                        </div>
                        <div class="mb-2 p-0">
                          <label for="banner_desc">Banner content</label>
                          <textarea name="banner_sub_heading" id="text#1" cols="30" rows="2" maxlength="200"
                            onkeypress="count_it()" class="form-control"
                            style="resize: none">{{ $site->banner_sub_heading ?? '' }}</textarea>
                        </div>
                        <p id="count" class="textarea-val text-white"></p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border rounded mt-3">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        About us
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="mb-2">
                          <label for="">About heading</label>
                          <input type="text" name="about_heading" value="{{ $site->about_heading ?? '' }}"
                            class="form-control" maxlength="50">
                        </div>
                        <div class="mb-2 p-0">
                          <label for="">About content</label>
                          <textarea name="about_content" id="text#2" cols="30" rows="2" maxlength="200"
                            onkeypress="count_it()" class="form-control"
                            style="resize: none">{{ $site->about_content ?? '' }}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border rounded mt-3">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Contact info
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="mb-2">
                          <label for="address">Address</label>
                          <input type="text" name="addr" value="{{ $site->contact_address ?? '' }}" class="form-control"
                            maxlength="50">
                        </div>
                        <div class="mb-2">
                          <label for="address">Phone number</label>
                          <input type="text" name="num" value="{{ $site->contact_phonenumber ?? '' }}" class="form-control"
                            maxlength="50">
                        </div>
                        <div class="mb-2">
                          <label for="address">Email</label>
                          <input type="text" name="email" value="{{ $site->contact_email ?? '' }}" class="form-control"
                            maxlength="50">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border rounded mt-3">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Our services
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="mb-2">
                          <label for="1">.01</label>
                          <small class="d-block">Title</small>
                          <input type="text" name="t1" value="{{ $site->our_service_heading_one ?? '' }}" class="form-control"
                            maxlength="40">
                          <small>Body</small>
                          <input type="text" name="b1" value="{{ $site->our_service_body_one ?? '' }}" class="form-control">
                        </div>
                        <div class="mb-2">
                          <label for="1">.02</label>
                          <small class="d-block">Title</small>
                          <input type="text" name="t2" value="{{ $site->our_service_heading_two ?? '' }}" class="form-control"
                            maxlength="40">
                          <small>Body</small>
                          <input type="text" name="b2" value="{{ $site->our_service_body_two ?? '' }}" class="form-control">
                        </div>
                        <div class="mb-2">
                          <label for="1">.03</label>
                          <small class="d-block">Title</small>
                          <input type="text" name="t3" value="{{ $site->our_service_heading_three ?? '' }}"
                            class="form-control" maxlength="40">
                          <small>Body</small>
                          <input type="text" name="b3" value="{{ $site->our_service_body_three ?? '' }}" class="form-control">
                        </div>
                        <div class="mb-2">
                          <label for="1">.04</label>
                          <small class="d-block">Title</small>
                          <input type="text" name="t4" value="{{ $site->our_service_heading_four ?? '' }}"
                            class="form-control" maxlength="40">
                          <small>Body</small>
                          <input type="text" name="b4" value="{{ $site->our_service_body_four ?? '' }}" class="form-control">
                        </div>
                        <div class="mb-2">
                          <label for="1">.05</label>
                          <small class="d-block">Title</small>
                          <input type="text" name="t5" value="{{ $site->our_service_heading_five ?? '' }}"
                            class="form-control" maxlength="40">
                          <small>Body</small>
                          <input type="text" name="b5" value="{{ $site->our_service_body_five ?? '' }}" class="form-control">
                        </div>
                        <div class="mb-2">
                          <label for="1">.06</label>
                          <small class="d-block">Title</small>
                          <input type="text" name="t6" value="{{ $site->our_service_heading_six ?? '' }}" class="form-control"
                            maxlength="40">
                          <small>Body</small>
                          <input type="text" name="b6" value="{{ $site->our_service_body_six ?? '' }}" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <button type="submit" id="settings" class="btn btn-primary btn-lg btn-block text-uppercase mb-5">update</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End Page-content -->


    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <script>
              document.write(new Date().getFullYear())
            </script>
            © Cloud Cryptomines
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- end main content-->

  @include('includes.rightsidebar')

</div>
<!-- END layout-wrapper -->

@include('includes.script')
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
