<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>

    <!-- META DATA eta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="{{ config('app.name') }} Sign up/Sign in">

    <!-- TITLE -->
    <title> {{ config('app.name') }} </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('build/assets/images/brand-logos/favicon.png') }}" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('build/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/icon-fonts/icons.css') }}" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('build/assets/app-fce3f544.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/app-fce3f544.css') }}" />

    <!-- MAIN JS -->
    <script src="{{ asset('build/assets/authentication-main.js') }}"></script>




</head>

<body>



    <div class="container">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            @yield('content')
            {{-- <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="my-5 d-flex justify-content-center">
                    <a href="index.html">
                        <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                        <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                    </a>
                </div>
                <div class="card custom-card">
                    <div class="p-5 card-body">
                        <p class="mb-2 text-center h5 fw-semibold">Sign In</p>
                        <p class="mb-4 text-center text-muted op-7 fw-normal">Welcome back Jhon !</p>
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <label for="signin-username" class="form-label text-default">User Name</label>
                                <input type="text" class="form-control form-control-lg" id="signin-username"
                                    placeholder="user name">
                            </div>
                            <div class="mb-2 col-xl-12">
                                <label for="signin-password" class="form-label text-default d-block">Password<a
                                        href="resetpassword-basic.html" class="float-end text-danger">Forget password
                                        ?</a></label>
                                <div class="input-group">
                                    <input type="password" class="form-control form-control-lg" id="signin-password"
                                        placeholder="password">
                                    <button class="btn btn-light" type="button"
                                        onclick="createpassword('signin-password',this)" id="button-addon2"><i
                                            class="align-middle ri-eye-off-line"></i></button>
                                </div>
                                <div class="mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                            Remember password ?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 col-xl-12 d-grid">
                                <a href="index.html" class="btn btn-lg btn-primary">Sign In</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="mt-3 fs-12 text-muted">Dont have an account? <a href="signup-basic.html"
                                    class="text-primary">Sign Up</a></p>
                        </div>
                        <div class="my-3 text-center authentication-barrier">
                            <span>OR</span>
                        </div>
                        <div class="text-center btn-list">
                            <button class="btn btn-icon btn-light">
                                <i class="ri-facebook-line fw-bold text-dark op-7"></i>
                            </button>
                            <button class="btn btn-icon btn-light">
                                <i class="ri-google-line fw-bold text-dark op-7"></i>
                            </button>
                            <button class="btn btn-icon btn-light">
                                <i class="ri-twitter-line fw-bold text-dark op-7"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>



    <!-- SCRIPTS -->

    <!-- BOOTSTRAP JS -->
    <script src="build/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- SHOW PASSWORD JS -->
    <script src="build/assets/show-password.js"></script>


    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '895c501c9dc88990965cb7859ee28172f070465a';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>



    <!-- END SCRIPTS -->

</body>

<!-- Mirrored from laravelui.spruko.com/ynex/signin-basic by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 05:24:21 GMT -->

</html>