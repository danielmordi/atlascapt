@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Dashboard
@endsection

@push('scripts')
    <script src="{{ asset('dash-assets/js/dashboard-init.min.js') }}"></script>
    <script src="{{ asset('dash-assets/js/analytics-init.min.js') }}"></script>
@endpush

<style>
    .tradingview-widget-container {
        height: 50vh !important;
    }
</style>

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Welcome back, {{ Auth::user()->name }},</p>
                    <span class="fs-semibold text-muted">Track your Investment, activity, charts here.</span>
                </div>
            </div>

            <!-- End::page-header -->

            <!-- Start::row-2 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content">
                        <div class="p-0 border-0 tab-pane show active" id="stocks-portfolio" role="tabpanel">
                            <div class="row">
                                <!-- Stat Cards Row -->
                                <div class="col-12">
                                    <style>
                                        .dash-stat-card {
                                            border: none;
                                            border-radius: 16px;
                                            background: #fff;
                                            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
                                            transition: transform 0.2s ease, box-shadow 0.2s ease;
                                            overflow: hidden;
                                        }
                                        .dash-stat-card:hover {
                                            transform: translateY(-3px);
                                            box-shadow: 0 8px 24px rgba(0,0,0,0.10);
                                        }
                                        .dash-stat-card .card-body {
                                            padding: 1.4rem 1.5rem 1.2rem;
                                        }
                                        .dash-stat-icon {
                                            width: 44px;
                                            height: 44px;
                                            border-radius: 12px;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            font-size: 1.2rem;
                                            flex-shrink: 0;
                                        }
                                        .dash-stat-icon.blue   { background: #e8f0fe; color: #4285f4; }
                                        .dash-stat-icon.green  { background: #e6f9f0; color: #1bbc74; }
                                        .dash-stat-icon.red    { background: #fdecea; color: #e74c3c; }
                                        .dash-stat-icon.purple { background: #f3eeff; color: #9b59b6; }
                                        .dash-stat-label {
                                            font-size: 0.92rem;
                                            font-weight: 600;
                                            color: #1a1a2e;
                                            margin-bottom: 2px;
                                            line-height: 1.2;
                                        }
                                        .dash-stat-sub {
                                            font-size: 0.74rem;
                                            color: #9aa3b2;
                                            margin-bottom: 0;
                                        }
                                        .dash-stat-amount {
                                            font-size: 1.55rem;
                                            font-weight: 700;
                                            color: #1a1a2e;
                                            letter-spacing: -0.5px;
                                            margin: 0.6rem 0 0.4rem;
                                            line-height: 1.2;
                                        }
                                        .dash-stat-change {
                                            font-size: 0.78rem;
                                            font-weight: 600;
                                            border-radius: 6px;
                                            padding: 2px 6px;
                                            display: inline-block;
                                        }
                                        .dash-stat-change.up   { color: #1bbc74; background: #e6f9f0; }
                                        .dash-stat-change.down { color: #e74c3c; background: #fdecea; }
                                        .dash-stat-change i { font-size: 0.7rem; }
                                        .dash-stat-action-row a {
                                            font-size: 0.82rem;
                                            font-weight: 500;
                                            text-decoration: none;
                                            padding: 5px 14px;
                                            border-radius: 8px;
                                            transition: opacity 0.2s;
                                        }
                                        .dash-stat-action-row a:hover { opacity: 0.85; }
                                    </style>

                                    <div class="row g-3 mb-3">

                                        <!-- Card 1: Total Balance -->
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card dash-stat-card stretch stretch-full">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between mb-1">
                                                        <div>
                                                            <p class="dash-stat-label mb-0">Total Balance</p>
                                                            <p class="dash-stat-sub">Current market value</p>
                                                        </div>
                                                        <div class="dash-stat-icon blue">
                                                            <i class="bx bx-wallet-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="dash-stat-amount">
                                                        $&thinsp;{{ number_format(Auth::user()->totalProfitEarned + Auth::user()->deposit, 2) }}
                                                    </div>
                                                    @php
                                                        $balanceChange = Auth::user()->totalProfitEarned;
                                                        $balanceBase   = Auth::user()->deposit > 0 ? Auth::user()->deposit : 1;
                                                        $balancePct    = round(($balanceChange / $balanceBase) * 100, 2);
                                                    @endphp
                                                    <span class="dash-stat-change {{ $balancePct >= 0 ? 'up' : 'down' }}">
                                                        <i class="bx {{ $balancePct >= 0 ? 'bx-up-arrow-alt' : 'bx-down-arrow-alt' }}"></i>
                                                        {{ $balancePct >= 0 ? '+' : '' }}{{ currency_converter(abs($balanceChange)) }} ({{ abs($balancePct) }}%)
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 2: Total Profit -->
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card dash-stat-card stretch stretch-full">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between mb-1">
                                                        <div>
                                                            <p class="dash-stat-label mb-0">Total Profit</p>
                                                            <p class="dash-stat-sub">This month earnings</p>
                                                        </div>
                                                        <div class="dash-stat-icon green">
                                                            <i class="bx bx-trending-up"></i>
                                                        </div>
                                                    </div>
                                                    <div class="dash-stat-amount">
                                                        $&thinsp;{{ number_format(Auth::user()->totalProfitEarned, 2) }}
                                                    </div>
                                                    @php
                                                        $profit    = Auth::user()->totalProfitEarned;
                                                        $profitPct = Auth::user()->deposit > 0 ? round(($profit / Auth::user()->deposit) * 100, 2) : 0;
                                                    @endphp
                                                    <span class="dash-stat-change {{ $profitPct >= 0 ? 'up' : 'down' }}">
                                                        <i class="bx {{ $profitPct >= 0 ? 'bx-up-arrow-alt' : 'bx-down-arrow-alt' }}"></i>
                                                        {{ $profitPct >= 0 ? '+' : '' }}{{ currency_converter(abs($profit)) }} ({{ abs($profitPct) }}%)
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 3: Total Loss -->
                                        {{-- <div class="col-xl-4 col-md-6">
                                            <div class="card dash-stat-card stretch stretch-full">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between mb-1">
                                                        <div>
                                                            <p class="dash-stat-label mb-0">Total Loss</p>
                                                            <p class="dash-stat-sub">Risk management</p>
                                                        </div>
                                                        <div class="dash-stat-icon red">
                                                            <i class="bx bx-trending-down"></i>
                                                        </div>
                                                    </div>
                                                    @php
                                                        $loss    = Auth::user()->totalLoss ?? 0;
                                                        $lossDeposit = Auth::user()->deposit > 0 ? Auth::user()->deposit : 1;
                                                        $lossPct = round(($loss / $lossDeposit) * 100, 2);
                                                    @endphp
                                                    <div class="dash-stat-amount">
                                                        $&thinsp;{{ number_format($loss, 2) }}
                                                    </div>
                                                    <span class="dash-stat-change down">
                                                        <i class="bx bx-down-arrow-alt"></i>
                                                        -{{ currency_converter(abs($loss)) }} ({{ abs($lossPct) }}%)
                                                    </span>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <!-- Card 4: Total Investment -->
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card dash-stat-card stretch stretch-full">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between mb-1">
                                                        <div>
                                                            <p class="dash-stat-label mb-0">Total Investment</p>
                                                            <p class="dash-stat-sub">Last month: {{ currency_converter(Auth::user()->deposit) }}</p>
                                                        </div>
                                                        <div class="dash-stat-icon purple">
                                                            <i class="bx bx-dollar-circle"></i>
                                                        </div>
                                                    </div>
                                                    <div class="dash-stat-amount">
                                                        $&thinsp;{{ number_format(Auth::user()->deposit, 2) }}
                                                    </div>
                                                    <div class="dash-stat-action-row d-flex gap-2 mt-1">
                                                        <a href="{{ route('user.deposit') }}" class="btn btn-primary btn-sm">Deposit</a>
                                                        <a href="{{ route('user.my-plans') }}" class="btn btn-outline-primary btn-sm">My Plans</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-8 col-xl-6 col-md-12">
                                    <div class="card stretch stretch-full">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <h5 class="card-title mb-0">Stock &amp; IPO Statistics</h5>
                                            <a href="{{ route('user.ipos.purchased') }}" class="btn btn-sm btn-outline-primary">View All</a>
                                        </div>
                                        <div class="card-body">
                                            @if($purchasedIpos->isEmpty())
                                                <div class="text-center py-5 px-3">
                                                    <div class="avatar avatar-lg bg-soft-primary text-primary mb-3 mx-auto" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                                                        <i class="feather-trending-up fs-24"></i>
                                                    </div>
                                                    <h6 class="fw-bold text-dark">No Purchased Stocks or IPOs</h6>
                                                    <p class="text-muted small mb-4">Start investing in initial public offerings and stocks to grow your portfolio.</p>
                                                    <a href="{{ route('user.ipos.index') }}" class="btn btn-sm btn-primary">Explore Markets</a>
                                                </div>
                                            @else
                                                <div class="row g-4">
                                                    <!-- Stat 1 -->
                                                    <div class="col-sm-6">
                                                        <div class="p-3 border rounded bg-light-soft d-flex align-items-center" style="border-radius: 8px; border: 1px solid rgba(0, 0, 0, 0.05) !important;">
                                                            <div class="avatar avatar-sm text-primary me-3" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; border-radius: 8px; background-color: rgba(var(--primary-rgb), 0.1) !important;">
                                                                <i class="bx bx-line-chart fs-18"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fs-11 text-muted text-uppercase d-block fw-semibold" style="letter-spacing: 0.5px;">Invested Value</span>
                                                                <h5 class="fw-bold mb-0 text-dark">{{ currency_converter($totalIpoInvestment) }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Stat 2 -->
                                                    <div class="col-sm-6">
                                                        <div class="p-3 border rounded bg-light-soft d-flex align-items-center" style="border-radius: 8px; border: 1px solid rgba(0, 0, 0, 0.05) !important;">
                                                            <div class="avatar avatar-sm text-success me-3" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; border-radius: 8px; background-color: rgba(40, 167, 69, 0.1) !important;">
                                                                <i class="bx bx-pie-chart-alt-2 fs-18"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fs-11 text-muted text-uppercase d-block fw-semibold" style="letter-spacing: 0.5px;">Total Shares</span>
                                                                <h5 class="fw-bold mb-0 text-dark">{{ number_format($totalSharesBought) }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Stat 3 -->
                                                    <div class="col-sm-6">
                                                        <div class="p-3 border rounded bg-light-soft d-flex align-items-center" style="border-radius: 8px; border: 1px solid rgba(0, 0, 0, 0.05) !important;">
                                                            <div class="avatar avatar-sm text-info me-3" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; border-radius: 8px; background-color: rgba(23, 162, 184, 0.1) !important;">
                                                                <i class="bx bx-briefcase fs-18"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fs-11 text-muted text-uppercase d-block fw-semibold" style="letter-spacing: 0.5px;">Unique Assets</span>
                                                                <h5 class="fw-bold mb-0 text-dark">{{ $uniqueHoldingsCount }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Stat 4 -->
                                                    <div class="col-sm-6">
                                                        <div class="p-3 border rounded bg-light-soft d-flex align-items-center" style="border-radius: 8px; border: 1px solid rgba(0, 0, 0, 0.05) !important;">
                                                            <div class="avatar avatar-sm text-warning me-3" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; border-radius: 8px; background-color: rgba(255, 193, 7, 0.1) !important;">
                                                                <i class="bx bx-purchase-tag-alt fs-18"></i>
                                                            </div>
                                                            <div>
                                                                <span class="fs-11 text-muted text-uppercase d-block fw-semibold" style="letter-spacing: 0.5px;">Avg Share Cost</span>
                                                                <h5 class="fw-bold mb-0 text-dark">{{ currency_converter($avgSharePrice) }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card stretch stretch-full">
                                        <div class="card-header border-0">
                                            <h5 class="card-title">Fundamental &amp; Technical Outlook</h5>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active show" id="home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                        aria-selected="true">Track
                                                        all
                                                        markets</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#profile" type="button" role="tab"
                                                        aria-controls="profile" aria-selected="false">Personal trading
                                                        chart</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade active show" id="home" role="tabpanel"
                                                    aria-labelledby="home-tab">
                                                    <!-- TradingView Widget BEGIN -->
                                                    <div class="tradingview-widget-container"
                                                        style="width: 100%; height: 550px;">
                                                        <iframe scrolling="no" allowtransparency="true" frameborder="0"
                                                            style="user-select: none; box-sizing: border-box; display: block; height: calc(100% - 32px); width: 100%;"
                                                            src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A550%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%2C%22TRY%22%2C%22SEK%22%2C%22NOK%22%5D%2C%22colorTheme%22%3A%22light%22%2C%22utm_source%22%3A%22otv6.gotsignals.site%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22otv6.gotsignals.site%2Fuser%2Fdashboard%22%7D"
                                                            title="forex cross-rates TradingView widget" lang="en"></iframe>
                                                        <div class="tradingview-widget-copyright"><a
                                                                href="https://www.tradingview.com/?utm_source=otv6.gotsignals.site&amp;utm_medium=widget_new&amp;utm_campaign=forex-cross-rates"
                                                                rel="noopener nofollow" target="_blank"><span
                                                                    class="blue-text">Track all markets on
                                                                    TradingView</span></a>
                                                        </div>

                                                        <style>
                                                            .tradingview-widget-copyright {
                                                                font-size: 13px !important;
                                                                line-height: 32px !important;
                                                                text-align: center !important;
                                                                vertical-align: middle !important;
                                                                /* @mixin sf-pro-display-font; */
                                                                font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                                                                color: #B2B5BE !important;
                                                            }

                                                            .tradingview-widget-copyright .blue-text {
                                                                color: #2962FF !important;
                                                            }

                                                            .tradingview-widget-copyright a {
                                                                text-decoration: none !important;
                                                                color: #B2B5BE !important;
                                                            }

                                                            .tradingview-widget-copyright a:visited {
                                                                color: #B2B5BE !important;
                                                            }

                                                            .tradingview-widget-copyright a:hover .blue-text {
                                                                color: #1E53E5 !important;
                                                            }

                                                            .tradingview-widget-copyright a:active .blue-text {
                                                                color: #1848CC !important;
                                                            }

                                                            .tradingview-widget-copyright a:visited .blue-text {
                                                                color: #2962FF !important;
                                                            }
                                                        </style>
                                                    </div>
                                                    <!-- TradingView Widget END -->
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel"
                                                    aria-labelledby="profile-tab">
                                                    <div class="tradingview-widget-container">
                                                        <div id="tradingview_f933e">
                                                            <div id="tradingview_480ed-wrapper"
                                                                style="position: relative; box-sizing: content-box; margin: 0px auto !important; padding: 0px !important; font-family: -apple-system, BlinkMacSystemFont, &quot;Trebuchet MS&quot;, Roboto, Ubuntu, sans-serif; width: 100%; height: calc(518px);">
                                                                <iframe title="advanced chart TradingView widget" lang="en"
                                                                    id="tradingview_480ed"
                                                                    style="width: 100%; height: 100%; margin: 0px !important; padding: 0px !important;"
                                                                    frameborder="0" allowtransparency="true" scrolling="no"
                                                                    allowfullscreen="true"
                                                                    src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en#%7B%22symbol%22%3A%22COINBASE%3ABTCUSD%22%2C%22frameElementId%22%3A%22tradingview_480ed%22%2C%22interval%22%3A%221%22%2C%22hide_side_toolbar%22%3A%220%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22studies%22%3A%22BB%40tv-basicstudies%22%2C%22theme%22%3A%22light%22%2C%22style%22%3A%229%22%2C%22timezone%22%3A%22Etc%2FUTC%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22otv6.gotsignals.site%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22COINBASE%3ABTCUSD%22%2C%22page-uri%22%3A%22otv6.gotsignals.site%2Fuser%2Fdashboard%22%7D"></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="tradingview-widget-copyright" style="width: 100%;">

                                                            <script type="text/javascript"
                                                                src="https://s3.tradingview.com/tv.js"></script>
                                                            <script type="text/javascript">
                                                                new TradingView.widget({
                                                                    "width": "100%",
                                                                    "height": "550",
                                                                    "symbol": "COINBASE:BTCUSD",
                                                                    "interval": "1",
                                                                    "timezone": "Etc/UTC",
                                                                    "theme": 'light',
                                                                    "style": "9",
                                                                    "locale": "en",
                                                                    "toolbar_bg": "#f1f3f6",
                                                                    "enable_publishing": false,
                                                                    "hide_side_toolbar": false,
                                                                    "allow_symbol_change": true,
                                                                    "calendar": false,
                                                                    "studies": [
                                                                        "BB@tv-basicstudies"
                                                                    ],
                                                                    "container_id": "tradingview_f933e"
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-2 -->

        </div>

    </div>
@endsection