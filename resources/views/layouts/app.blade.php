<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Laravel Bootstrap Responsive Admin Web Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="dashboard bootstrap, laravel template, admin panel in laravel, php admin panel, admin panel for laravel, admin template bootstrap 5, laravel admin panel, admin dashboard template, hrm dashboard, vite laravel, admin dashboard, ecommerce admin dashboard, dashboard laravel, analytics dashboard, template dashboard, admin panel template, bootstrap admin panel template">

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('build/assets/images/brand-logos/favicon.png') }}" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('build/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/icon-fonts/icons.css') }}" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('build/assets/app-fce3f544.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/app-fce3f544.css') }}" />

    <!-- NODE WAVES CSS -->
    <link href="{{ asset('build/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/simplebar/simplebar.min.css') }}">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/%40simonwep/pickr/themes/nano.min.css') }}">

    <!-- CHOICES CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- CHOICES JS -->
    <script src="{{ asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- MAIN JS -->
    <script src="{{ asset('build/assets/main.js') }}"></script>

    <!-- DATA TABLES CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">

    <!-- LIGHTBOX CSS -->
    <link rel="stylesheet" href="{{ asset('build/lightbox.css') }}">

    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 19472431;
        window.__lc.integration_name = "manual_channels";
        window.__lc.product_name = "livechat";;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                        t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/19472431/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->



    @livewireStyles

</head>

<body>

    <!-- LOADER -->
    <div id="loader">
        <img src="{{ asset('build/assets/images/media/loader.svg') }}" alt="">
    </div>
    <!-- END LOADER -->

    <!-- PAGE -->
    <div class="page">

        <!-- HEADER -->

        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="{{ Auth::user()->role_id == 2 ? route('user.dashboard') : route('admin.dashboard') }}"
                                class="header-logo">
                                <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}"
                                    alt="logo" class="desktop-logo">
                                <img src="{{ asset('build/assets/images/brand-logos/toggle-logo.png') }}"
                                    alt="logo" class="toggle-logo">
                                <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}"
                                    alt="logo" class="desktop-dark" width="150">
                                <img src="{{ asset('build/assets/images/brand-logos/toggle-dark.png') }}"
                                    alt="logo" class="toggle-dark">
                                <img src="{{ asset('build/assets/images/brand-logos/desktop-white.png') }}"
                                    alt="logo" class="desktop-white" width="150">
                                <img src="{{ asset('build/assets/images/brand-logos/toggle-white.png') }}"
                                    alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-0 fw-semibold lh-1">{{ Auth::user()->name }}</p>
                                    <span
                                        class="op-7 fw-normal d-block fs-11">{{ currency_converter(Auth::user()->totalProfitEarned) }}</span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- END HEADER -->

        <!-- SIDEBAR -->

        <aside class="sticky app-sidebar" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="{{ Auth::user()->role_id == 2 ? route('user.dashboard') : route('admin.dashboard') }}"
                    class="header-logo">
                    <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                        class="desktop-logo">
                    <img src="{{ asset('build/assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                        class="toggle-logo">
                    <img src="{{ asset('build/assets/images/brand-logos/desktop-white.png') }}" alt="logo"
                        class="desktop-dark" width="150">
                    <img src="{{ asset('build/assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                        class="toggle-dark">
                    <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                        class="desktop-white" width="150">
                    <img src="{{ asset('build/assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                        class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        @if (session()->has('hasClonedUser'))
                            <li class="slide">
                                <a href="{{ route('user.loginAsAdmin', session()->has('hasClonedUser')) }}"
                                    class="side-menu__item text-danger">
                                    <i class="bx bx-arrow-back side-menu__icon text-danger"></i>
                                    <span class="side-menu__label text-danger">Go back to admin panel</span>
                                </a>
                            </li>
                        @endif
                        <li class="slide">
                            <a href="{{ Auth::user()->role_id == 2 ? route('user.dashboard') : route('admin.dashboard') }}"
                                class="side-menu__item">
                                <i class="bx bx-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        @if (Auth::user()->role_id == 2)
                            <li class="slide">
                                <a href="{{ route('user.deposit') }}" class="side-menu__item">
                                    <i class='bx bx-credit-card-front side-menu__icon'></i>
                                    <span class="side-menu__label">Deposit</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('user.withdraw') }}" class="side-menu__item">
                                    <i class='bx bx-money-withdraw side-menu__icon'></i>
                                    <span class="side-menu__label">Withdraw</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('user.transactions') }}" class="side-menu__item">
                                    <i class='bx bx-history side-menu__icon'></i>
                                    <span class="side-menu__label">Transaction History</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('user.mining') }}" class="side-menu__item">
                                    <i class='bx bx-list-ul side-menu__icon'></i>
                                    <span class="side-menu__label">Mining</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('user.referrals') }}" class="side-menu__item">
                                    <i class='bx bx-left-down-arrow-circle side-menu__icon'></i>
                                    <span class="side-menu__label">My Referral</span>
                                </a>
                            </li>
                        @else
                            <li class="slide">
                                <a href="{{ route('admin.packages') }}" class="side-menu__item">
                                    <i class='bx bx-list-ul side-menu__icon'></i>
                                    <span class="side-menu__label">Packages</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('admin.coin') }}" class="side-menu__item">
                                    <i class='bx bxs-wallet side-menu__icon'></i>
                                    <span class="side-menu__label">Wallet Address</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('admin.token-sale') }}" class="side-menu__item">
                                    <i class='bx bx-coin-stack side-menu__icon'></i>
                                    <span class="side-menu__label">Token Sale</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('admin.depositlog') }}" class="side-menu__item">
                                    <i class='bx bx-file side-menu__icon'></i>
                                    <span class="side-menu__label">Deposit Log</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('admin.withdrawalog') }}" class="side-menu__item">
                                    <i class='bx bx-file side-menu__icon'></i>
                                    <span class="side-menu__label">Withdrawal Request</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('admin.profile') }}" class="side-menu__item">
                                    <i class='bx bx-user side-menu__icon'></i>
                                    <span class="side-menu__label">Admin profile</span>
                                </a>
                            </li>
                        @endif
                        <li class="slide">
                            <a href="#" class="side-menu__item text-danger"
                                onclick="event.preventDefault(); document.getElementById('side_bar_logout_btn').submit();">
                                <i class='bx bx-log-out side-menu__icon text-danger'></i>
                                <span class="side-menu__label text-danger">Logout</span>

                                <form id="side_bar_logout_btn" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- END SIDEBAR -->

        <!-- MAIN-CONTENT -->

        @auth
            @if (Auth::user()->is_blocked == '1')
                <div class="container text-center" style="margin-top: 10em">
                    <h1 class="display-3">Your Account has been suspended</h1>
                    <p>Please contact our customer service team for more information.
                        <a href="mailto:support@atlascapt.com">support@.com</a>
                    </p>
                </div>
                @dd()
            @endif
        @endauth
        @yield('content')
        {{-- @stack('scripts') --}}
        <!-- END MAIN-CONTENT -->

        <!-- FOOTER -->

        <footer class="py-3 mt-auto text-center bg-white footer">
            <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);"
                        class="text-dark fw-semibold">{{ config('app.name') }}</a>. all
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- END FOOTER -->



    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->
    <div class="gtranslate_wrapper"></div>
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "native_language_names": true,
            "detect_browser_language": true,
            "languages": ["en", "fr", "it", "es", "de", "id", "th", "hi", "ar"],
            "wrapper_selector": ".gtranslate_wrapper"
        }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

    <!-- SCROLL-TO-TOP -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- POPPER JS -->
    <script src="{{ asset('build/assets/libs/%40popperjs/core/umd/popper.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- NODE WAVES JS -->
    <script src="{{ asset('build/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- SIMPLEBAR JS -->
    <script src="{{ asset('build/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <link rel="modulepreload" href="{{ asset('build/assets/simplebar-635bad04.js') }}" />
    <script type="module" src="{{ asset('build/assets/simplebar-635bad04.js') }}"></script>

    <!-- COLOR PICKER JS -->
    <script src="{{ asset('build/assets/libs/%40simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- STOCKS DASHBOARD JS -->
    <link rel="modulepreload" href="{{ asset('build/assets/stocks-dashboard-efafb411.js') }}" />
    <script type="module" src="{{ asset('build/assets/stocks-dashboard-efafb411.js') }}"></script>

    <!-- JQUERY JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- DATATABLES CDN JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <!-- INTERNAL DATATABLES JS -->
    <link rel="modulepreload" href="{{ asset('build/assets/datatables-52162115.js') }}" />
    <script type="module" src="{{ asset('build/assets/datatables-52162115.js') }}"></script>

    <!-- STICKY JS -->
    <script src="{{ asset('build/assets/sticky.js') }}"></script>

    <!-- LIGHTBOX JS -->
    <script src="{{ asset('build/lightbox.js') }}"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="{{ asset('build/assets/app-3cade095.js') }}" />
    <script type="module" src="{{ asset('build/assets/app-3cade095.js') }}"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <link rel="modulepreload" href="{{ asset('build/assets/custom-switcher-383b6a5b.js') }}" />
    <script type="module" src="{{ asset('build/assets/custom-switcher-383b6a5b.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
    <script src="{{ asset('build/kjua.min.js') }}"></script>

    @stack('scripts')

    <!-- END SCRIPTS -->

    @livewireScripts

</body>

</html>
