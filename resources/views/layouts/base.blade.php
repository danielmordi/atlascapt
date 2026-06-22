<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="maryinparis" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>{{ config('app.name') }} || Dashboard</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/css/bootstrap.min.css') }}" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Boxicons CSS-->
    <link href="{{ asset('icon-fonts/boxicons/css/boxicons.css') }}" rel="stylesheet">
    <!--! END: Boxicons CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/daterangepicker.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/jquery-jvectormap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/select2-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/jquery.time-to.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/tagify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/tagify-data.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/quill.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('dash-assets/vendors/css/tui-calendar.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('dash-assets/vendors/css/tui-theme.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('dash-assets/vendors/css/tui-time-picker.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('dash-assets/vendors/css/tui-date-picker.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('dash-assets/vendors/css/emojionearea.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/jquery.time-to.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/vendors/css/dataTables.bs5.min.css') }}">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/css/theme.min.css') }}" />
    @stack('style')
    @livewireStyles
    <style>
        .nxl-container {
            display: flex !important;
            flex-direction: column !important;
            min-height: 100vh !important;
        }

        .footer {
            margin-top: auto !important;
        }

        body.modal-open .nxl-container,
        body.modal-open .nxl-header,
        body.modal-open .nxl-navigation,
        body.modal-open .page-header {
            filter: none !important;
        }
    </style>
</head>
<!--! END: Custom CSS-->
</head>

<body>
    <!-- Left sidebar -->
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="index.html" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="{{ asset('img/logo-full.png') }}" alt="" class="logo logo-lg" width="125" />
                    <img src="{{ asset('img/logo-abbr.png') }}" alt="" class="logo logo-sm" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption"><label>Main</label></li>
                    @if (session()->has('hasClonedUser'))
                        <li class="nxl-item">
                            <a href="{{ route('user.loginAsAdmin', session()->has('hasClonedUser')) }}"
                                class="nxl-link text-danger">
                                <span class="nxl-micon"><i class="bx bx-arrow-back text-danger"></i></span>
                                <span class="nxl-mtext">Go back to admin panel</span>
                            </a>
                        </li>
                    @endif
                    <li class="nxl-item">
                        <a href="{{ Auth::user()->role_id == 2 ? route('user.dashboard') : route('admin.dashboard') }}"
                            class="nxl-link">
                            <span class="nxl-micon"><i class="bx bx-home"></i></span>
                            <span class="nxl-mtext">Dashboard</span>
                        </a>
                    </li>
                    @if (Auth::user()->role_id == 2)
                        {{-- User menu items --}}
                        <li class="nxl-item">
                            <a href="{{ route('user.live-trade') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-chart'></i></span>
                                <span class="nxl-mtext">Live Trade</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('user.copy-traders') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-user-voice'></i></span>
                                <span class="nxl-mtext">Copy Trader</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('user.my-plans') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-briefcase-alt-2'></i></span>
                                <span class="nxl-mtext">My Investment</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('user.deposit') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-credit-card-front'></i></span>
                                <span class="nxl-mtext">Deposit</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('user.withdraw') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-money-withdraw'></i></span>
                                <span class="nxl-mtext">Withdraw</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('user.transactions') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-history'></i></span>
                                <span class="nxl-mtext">Transaction History</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('user.mining') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-list-ul'></i></span>
                                <span class="nxl-mtext">Investment Plan</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('user.ipos.index') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-trending-up'></i></span>
                                <span class="nxl-mtext">IPO / Stocks</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('user.referrals') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-left-down-arrow-circle'></i></span>
                                <span class="nxl-mtext">My Referral</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('user.profile') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-user-circle'></i></span>
                                <span class="nxl-mtext">Profile Settings</span>
                            </a>
                        </li>
                    @else
                        {{-- Admin menu items --}}
                        <li class="nxl-item">
                            <a href="{{ route('admin.packages') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-list-ul'></i></span>
                                <span class="nxl-mtext">Packages</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('admin.ipos.index') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-trending-up'></i></span>
                                <span class="nxl-mtext">Manage IPOs</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('admin.manage.copy-traders') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-user-voice'></i></span>
                                <span class="nxl-mtext">Manage Copy Traders</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('admin.coin') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bxs-wallet'></i></span>
                                <span class="nxl-mtext">Wallet Address</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('admin.token-sale') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-coin-stack'></i></span>
                                <span class="nxl-mtext">Token Sale</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('admin.depositlog') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-file'></i></span>
                                <span class="nxl-mtext">Deposit Log</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('admin.withdrawalog') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-file'></i></span>
                                <span class="nxl-mtext">Withdrawal Request</span>
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a href="{{ route('admin.profile') }}" class="nxl-link">
                                <span class="nxl-micon"><i class='bx bx-user'></i></span>
                                <span class="nxl-mtext">Admin profile</span>
                            </a>
                        </li>
                    @endif
                    <li class="nxl-item">
                        <a href="#" class="nxl-link text-danger"
                            onclick="event.preventDefault(); document.getElementById('side_bar_logout_btn').submit();">
                            <span class="nxl-micon"><i class='bx bx-log-out text-danger'></i></span>
                            <span class="nxl-mtext text-danger">Logout</span>
                            <form id="side_bar_logout_btn" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!-- Header Section Start -->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    <header class="nxl-header">
        <div class="header-wrapper">
            <!--! [Start] Header Left !-->
            <div class="header-left d-flex align-items-center gap-4">
                <!--! [Start] nxl-head-mobile-toggler !-->
                <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                    <div class="hamburger hamburger--arrowturn">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
                <!--! [Start] nxl-head-mobile-toggler !-->
                <!--! [Start] nxl-navigation-toggle !-->
                <div class="nxl-navigation-toggle">
                    <a href="javascript:void(0);" id="menu-mini-button">
                        <i class="feather-align-left"></i>
                    </a>
                    <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
                <!--! [End] nxl-navigation-toggle !-->
            </div>
            <!--! [End] Header Left !-->
            <!--! [Start] Header Right !-->
            <div class="header-right ms-auto">
                <div class="d-flex align-items-center">
                    <div class="nxl-h-item d-none d-sm-flex">
                        <div class="full-screen-switcher">
                            <a href="javascript:void(0);" class="nxl-head-link me-0"
                                onclick="$('body').fullScreenHelper('toggle');">
                                <i class="feather-maximize maximize"></i>
                                <i class="feather-minimize minimize"></i>
                            </a>
                        </div>
                    </div>
                    <div class="nxl-h-item dark-light-theme">
                        <a href="javascript:void(0);" class="nxl-head-link me-0 dark-button">
                            <i class="feather-moon"></i>
                        </a>
                        <a href="javascript:void(0);" class="nxl-head-link me-0 light-button" style="display: none">
                            <i class="feather-sun"></i>
                        </a>
                    </div>
                    @if (Auth::user()->role_id == 2)
                        <!-- Notification Bell Dropdown -->
                        <div class="dropdown nxl-h-item">
                            <a class="nxl-head-link me-0" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="feather-bell"></i>
                                @if (Auth::user()->unreadNotifications->count() > 0)
                                    <span
                                        class="badge bg-danger rounded-circle position-absolute top-0 start-100 translate-middle-y px-1"
                                        style="font-size: 0.6rem; transform: translate(-50%, 25%) !important; min-width: 19px !important; height: 19px !important;">
                                        {{ Auth::user()->unreadNotifications->count() }}
                                    </span>
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notification-dropdown"
                                style="min-width: 320px; max-height: 400px; overflow-y: auto;">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <h6 class="text-dark mb-0">Notifications</h6>
                                    @if (Auth::user()->unreadNotifications->count() > 0)
                                        <a href="{{ route('user.notifications.readAll') }}"
                                            class="fs-11 fw-semibold text-primary">Mark all as read</a>
                                    @endif
                                </div>
                                <div class="dropdown-divider"></div>
                                @forelse(Auth::user()->notifications()->take(5)->get() as $notification)
                                    <div class="dropdown-item d-flex align-items-start p-3 gap-2 {{ $notification->read() ? 'text-muted' : 'bg-light fw-bold' }}"
                                        style="white-space: normal;">
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <span
                                                    class="fs-12 text-dark">{{ $notification->data['title'] ?? 'Notification' }}</span>
                                                <span
                                                    class="fs-10 text-muted">{{ $notification->created_at->diffForHumans() }}</span>
                                            </div>
                                            <p class="fs-11 mb-0 text-muted">
                                                {{ $notification->data['message'] ?? '' }}</p>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                @empty
                                    <div class="p-3 text-center text-muted">No notifications</div>
                                @endforelse
                                <a href="{{ route('user.notifications') }}"
                                    class="dropdown-item text-center text-primary fs-11 fw-semibold">View All
                                    Notifications</a>
                            </div>
                        </div>
                    @endif
                    <div class="dropdown nxl-h-item sr-only">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button"
                            data-bs-auto-close="outside">
                            <img src="{{ asset('dash-assets/images/avatar/1.png') }}" alt="user-image"
                                class="img-fluid user-avtar me-0" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('dash-assets/images/avatar/1.png') }}" alt="user-image"
                                        class="img-fluid user-avtar" />
                                    <div>
                                        <h6 class="text-dark mb-0">{{ Auth::user()->name }}</h6>
                                        <span class="fs-12 fw-medium text-muted">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="dropdown">
                                    <span class="hstack">
                                        <i
                                            class="wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2"></i>
                                        <span>Active</span>
                                    </span>
                                    <i class="feather-chevron-right ms-auto me-0"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i
                                                class="wd-10 ht-10 border border-2 border-gray-1 bg-warning rounded-circle me-2"></i>
                                            <span>Always</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i
                                                class="wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2"></i>
                                            <span>Active</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i
                                                class="wd-10 ht-10 border border-2 border-gray-1 bg-danger rounded-circle me-2"></i>
                                            <span>Bussy</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i
                                                class="wd-10 ht-10 border border-2 border-gray-1 bg-info rounded-circle me-2"></i>
                                            <span>Inactive</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i
                                                class="wd-10 ht-10 border border-2 border-gray-1 bg-dark rounded-circle me-2"></i>
                                            <span>Disabled</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i
                                                class="wd-10 ht-10 border border-2 border-gray-1 bg-primary rounded-circle me-2"></i>
                                            <span>Cutomization</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="dropdown">
                                    <span class="hstack">
                                        <i class="feather-dollar-sign me-2"></i>
                                        <span>Subscriptions</span>
                                    </span>
                                    <i class="feather-chevron-right ms-auto me-0"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Plan</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Billings</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Referrals</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Payments</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Statements</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Subscriptions</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="{{ Auth::user()->role_id == 2 ? route('user.profile') : route('admin.profile') }}" class="dropdown-item">
                                <i class="feather-user"></i>
                                <span>Profile & Password</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-activity"></i>
                                <span>Activity Feed</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-dollar-sign"></i>
                                <span>Billing Details</span>
                            </a>
                            <a href="{{ Auth::user()->role_id == 2 ? route('user.notifications') : 'javascript:void(0);' }}"
                                class="dropdown-item">
                                <i class="feather-bell"></i>
                                <span>Notifications</span>
                            </a>
                            <a href="{{ Auth::user()->role_id == 2 ? route('user.profile') : route('admin.profile') }}" class="dropdown-item">
                                <i class="feather-settings"></i>
                                <span>Account Settings</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"
                                onclick="event.preventDefault(); document.getElementById('header_logout_btn').submit();">
                                <i class="feather-log-out"></i>
                                <span>Logout</span>
                                <form id="header_logout_btn" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--! [End] Header Right !-->
        </div>
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        @auth
            @if (Auth::user()->is_blocked == '1')
                <div class="container text-center" style="margin-top: 10em">
                    <h1 class="display-3">Your Account has been suspended</h1>
                    <p>Please contact our customer service team for more information.
                        <a href="mailto:support@atlasequityhq.com">support@atlasequityhq.com</a>
                    </p>
                </div>
            @else
                @yield('content')
            @endif
        @endauth
        <!--<< Footer Section Start >>-->
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script data-cfasync="false"
                    src="https://bestwpware.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
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
    <!--! BEGIN: Vendors JS !-->
    <script src="{{ asset('dash-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ asset('dash-assets/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/jquery.time-to.min.js') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('dash-assets/js/common-init.min.js') }}"></script>
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ asset('dash-assets/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->


    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '6d86d053ca4564fd3f18aaebe09057977c8fb461';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>



    @stack('modals')
    @stack('scripts')
    @livewireScripts
</body>

</html>
