<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="maryinparis" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>@yield('title')</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/css/bootstrap.min.css') }}" />
    <!--! END: Bootstrap CSS-->
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
    <!--! END: Custom CSS-->
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-cover-wrapper">
        <div class="auth-cover-content-inner" style="background-image: url({{ asset('img/auth-bg.jpg') }});background-repeat: no-repeat;background-size: cover;">
            <div class="auth-cover-content-wrapper">
                <div class="auth-img">
                    {{-- <img src="{{ asset('img/auth-bg.jpg') }}" alt="" class="img-fluid"> --}}
                </div>
            </div>
        </div>
        <div class="auth-cover-sidebar-inner" st>
            <div class="auth-cover-card-wrapper">
                @yield('content')
            </div>
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--<< Footer Section Start >>-->
    <div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"detect_browser_language":true,"languages":["en","fr","it","es","de","id","th","hi","ar"],"wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
    <!--<< All JS Plugins >>-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="{{ asset('dash-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ asset('dash-assets/vendors/js/daterangepicker.min.js') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/apexcharts.min.js') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/circle-progress.min.js') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/select2.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/select2-active.min.html') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/tagify.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/tagify-data.min.js') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/quill.min.html') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/apexcharts.min.js') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/jquery.time-to.min.js') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/circle-progress.min.js') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/tui-code-snippet.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/tui-time-picker.min.html') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/tui-date-picker.min.html') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/moment.min.html') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/chance.min.html') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/time-tracker.min.html') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/emojionearea.min.html') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/jquery.time-to.min.js') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/jquery.calendar.min.js') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/dataTables.min.html') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/dataTables.bs5.min.html') }}"></script>
    <script src="{{ asset('dash-assets/vendors/js/lslstrength.min.js') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/cleave.min.html') }}"></script>

    <script src="{{ asset('dash-assets/vendors/js/jquery.print.min.html') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('dash-assets/js/common-init.min.js') }}"></script>
    <script src="{{ asset('dash-assets/js/dashboard-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/apps-email-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/analytics-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/apps-storage-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/apps-tasks-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/apps-calendar-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/apps-chat-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/settings-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/widgets-charts-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/widgets-lists-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/widgets-miscellaneous-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/widgets-statistics-init.min.html') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ asset('dash-assets/js/theme-customizer-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/widgets-tables-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/proposal-create-init.min.js') }}"></script>
    <script src="{{ asset('dash-assets/js/proposal-view-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/reports-leads-init.min.js') }}"></script>
    <script src="{{ asset('dash-assets/js/reports-project-init.min.js') }}"></script>
    <script src="{{ asset('dash-assets/js/reports-sales-init.min.html') }}"></script>
    <script src="{{ asset('dash-assets/js/reports-tmesheets-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/leads-view-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/leads-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/payment-init.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/customers-view-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/invoice-create-init.min.html') }}"></script>

    <script src="{{ asset('dash-assets/js/invoice-view-init.min.html') }}"></script>
    <!--! END: Theme Customizer !-->

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"e97d358126754c0fad9102db62fedc44","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'9bc4c7661f737e7d',t:'MTc2ODEzODMzMw=='};var a=document.createElement('script');a.src='https://bestwpware.com/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

</html>
