@extends('layouts.home.app')


@section('content')
    <!-- Banner Section -->
    <section class="banner-section banner-one">
        <div class="banner-container"
            style="
            display: flex;
            align-items: center;
            height: 100vh;
        ">
            <div class="my-4 auto-container">
                <h1>Fastest Growing cryptocurrency Staking/Investment Platform for Blockchain investors</h1>
                <div class="upper-text">
                    A Profitable And Reliable Company With An Unblemished Reputation In The
                    Field Of Crypto Trading And Investment In The Global Financial Market.
                </div>
                <div class="lower-link-box">
                    <div class="link">
                        <a href="/register" class="m-2 theme-btn btn-style-one">
                            <span class="txt">Start Investing Now!</span>
                        </a>
                        <a href="/login" class="m-2 theme-btn btn-style-one">
                            <span class="txt">Login</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Intro Section-->
    <section class="intro-section" id="intro-section">
        <div class="auto-container">

            <div class="clearfix row">
                <!--Text Column-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="title-box">
                            <h6 class="subtitle"><span class="uppercase">WHAT IS {{ config('app.name') }}</span></h6>
                            <h2>We’ve built a platform to buy and sell shares.</h2>
                        </div>
                        <div class="about">
                            <div class="info-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon fa fa-users"></span></div>
                                    <h5>Decentralized Platform</h5>
                                    <div class="text">The platform helps investors in making Easy Purchase of Tokens as
                                        well as Cryptocurrency staking.</div>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon fa fa-globe"></span></div>
                                    <h5>Crowd Wisdom</h5>
                                    <div class="text">The process of taking into account the collective opinion of
                                        a
                                        group</div>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon fa fa-star"></span></div>
                                    <h5>Rewards Mechanism</h5>
                                    <div class="text">The system offers reward bonus for Excellent Stakes.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image">
                            <img src="{{ asset('homepage-assets/images/resource/globe-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Why Section-->
    <section class="why-section" id="why-token">
        <div class="auto-container">
            <div class="title-box">
                <h6 class="subtitle"><span>Why choose {{ config('app.name') }}</span></h6>
            </div>
            <div class="clearfix row">
                <!--Why Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon"><img
                                    src="{{ asset('homepage-assets/images/resource/icon-1.svg') }}" alt=""></span>
                        </div>
                        <h4>Mobie payment made easy</h4>
                        <div class="text">You can use a mobile device to pay with simple steps.</div>
                    </div>
                </div>
                <!--Why Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon"><img
                                    src="{{ asset('homepage-assets/images/resource/icon-2.svg') }}" alt=""></span>
                        </div>
                        <h4>No transaction fee</h4>
                        <div class="text">You can buy tokens without paying any transaction fee.</div>
                    </div>
                </div>
                <!--Why Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon"><img
                                    src="{{ asset('homepage-assets/images/resource/icon-3.svg') }}" alt=""></span>
                        </div>
                        <h4>Protect the identity</h4>
                        <div class="text">
                            If we detect a threat to your identity,we would alert you and take Safety pre-measures.
                        </div>
                    </div>
                </div>
                <!--Why Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon"><img
                                    src="{{ asset('homepage-assets/images/resource/icon-4.svg') }}" alt=""></span>
                        </div>
                        <h4>Security & control over money</h4>
                        <div class="text">Security and control over funds (provide high levels of security allowing users
                            to keep control over funds)
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--How It Works-->
    <section class="how-it-works">
        <div class="bg-layer-right"
            style="background-image: url('{{ asset('homepage-assets/images/background/how-pattern-1.png') }}');"></div>
        <div class="bg-layer-center"
            style="background-image: url('{{ asset('homepage-assets/images/background/how-pattern-2.png') }}');"></div>
        <div class="bg-layer-two"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h6 class="subtitle"><span>How it works</span></h6>
                <h2>Our Ecosystem is Based on Blockchain and solving its issues.</h2>
            </div>

            <div class="carousel-box">
                <div class="pagers-box">
                    <div class="clearfix pager-one">
                        <a href="#" class="pager-item" data-slide-index="0">
                            <div class="icon-box"><i class="fa-solid fa-people-roof"></i></div>
                        </a>
                        <a href="#" class="pager-item" data-slide-index="1">
                            <div class="icon-box"><i class="fa-solid fa-cloud-snow"></i></div>
                        </a>
                        <a href="#" class="pager-item" data-slide-index="2">
                            <div class="icon-box"><i class="fa-solid fa-person-digging"></i></div>
                        </a>
                        <a href="#" class="pager-item" data-slide-index="3">
                            <div class="icon-box"><i class="fa-solid fa-cubes"></i></div>
                        </a>
                        <a href="#" class="pager-item" data-slide-index="4">
                            <div class="icon-box"><i class="fa-solid fa-circle-dot"></i></div>
                        </a>
                        <a href="#" class="pager-item" data-slide-index="5">
                            <div class="icon-box"><i class="fa-solid fa-shield-check"></i></div>
                        </a>
                        <a href="#" class="pager-item" data-slide-index="6">
                            <div class="icon-box"><i class="fa-solid fa-coins"></i></div>
                        </a>
                    </div>
                </div>
                <div class="slider-box">
                    <div class="how-work-carousel" id="how-work-carousel">
                        <div class="slide">
                            <div class="inner-box">
                                <h5>Risk management</h5>
                                <div class="text">we protect our users. we put our users' needs first</div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="inner-box">
                                <h5>Build Wealth</h5>
                                <div class="text">{{ config('app.name') }} has Fixed income on investments which is an
                                    important hedge against more volatile components of a traditional portfolio,
                                    outperforming other mass-market fixed income returns.</div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="inner-box">
                                <h5>Mining</h5>
                                <div class="text">{{ config('app.name') }} strives to offer its users only the best DeFi
                                    Mining projects</div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="inner-box">
                                <h5>Total Control</h5>
                                <div class="text">Set your choice amount of investment and watch all your
                                    investments grow daily on your dashboard.</div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="inner-box">
                                <h5>Fast & Easy</h5>
                                <div class="text">Register and start your investment in a minute by
                                    following the process of transferring your choice of coin to the company's
                                    wallet address featuring updating an evidence of payment.</div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="inner-box">
                                <h5>Safe and Secured</h5>
                                <div class="text">Start up your investment with confidence that your investments
                                    are safe and secured by institutional-grade investments transparently administered
                                    by our proprietary.</div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="inner-box">
                                <h5>Mission Focused</h5>
                                <div class="text">Millennium coin is a trading and investment company committed
                                    in providing everyone access to their investments and financing that build profits
                                    with the lowest possible fees.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Allocation Section-->
    <section class="allocation-section">

        <div class="bg-circles"><img src="{{ asset('homepage-assets/images/resource/circles.png') }}" alt="">
        </div>
        <div class="pattern-layer"><img src="{{ asset('homepage-assets/images/resource/allo-pattern.png') }}"
                alt="">
        </div>

        <div class="auto-container">
            <div class="clearfix price-box">
                <div class="price"><span>1 SFL = 0.0013 BTC</span></div>
                <div class="link-box"><a href="#" class="theme-btn btn-style-one"><span class="txt">Buy
                            now</span></a></div>
            </div>
            <div class="tabs-box">
                <div class="tab-buttons">
                    <ul class="clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1"><span>Funding Allocation</span></li>
                        <li class="tab-btn" data-tab="#tab-2"><span>Token Allocation</span></li>
                    </ul>
                </div>
                <div class="tabs-content">

                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="inner">
                            <div class="clearfix row">
                                <!--Image Col-->
                                <div class="image-col col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="image"><img
                                                src="{{ asset('homepage-assets/images/resource/graph-1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <!--Text Col-->
                                <div class="text-col col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="progress-box">
                                            <div class="bar-block">
                                                <div class="bar-legend">Contingency: 5%</div>
                                                <div class="prog-bar color-1">
                                                    <div class="bar-inner" style="width: 15%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Partner/Investor: 5%</div>
                                                <div class="prog-bar color-2">
                                                    <div class="bar-inner" style="width: 18%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Legal & Regulation: 10%</div>
                                                <div class="prog-bar color-3">
                                                    <div class="bar-inner" style="width: 20%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Business Development: 10%</div>
                                                <div class="prog-bar color-4">
                                                    <div class="bar-inner" style="width: 20%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Marketing: 20%</div>
                                                <div class="prog-bar color-5">
                                                    <div class="bar-inner" style="width: 25%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Product Develoment: 40%</div>
                                                <div class="prog-bar color-6">
                                                    <div class="bar-inner" style="width: 45%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Operational: 10%</div>
                                                <div class="prog-bar color-7">
                                                    <div class="bar-inner" style="width: 20%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-2">
                        <div class="inner">
                            <div class="clearfix row">
                                <!--Image Col-->
                                <div class="image-col col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="image"><img
                                                src="{{ asset('homepage-assets/images/resource/graph-1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <!--Text Col-->
                                <div class="text-col col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="progress-box">
                                            <div class="bar-block">
                                                <div class="bar-legend">Contingency: 5%</div>
                                                <div class="prog-bar color-1">
                                                    <div class="bar-inner" style="width: 5%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Partner/Investor: 5%</div>
                                                <div class="prog-bar color-2">
                                                    <div class="bar-inner" style="width: 5%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Legal & Regulation: 10%</div>
                                                <div class="prog-bar color-3">
                                                    <div class="bar-inner" style="width: 10%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Business Development: 10%</div>
                                                <div class="prog-bar color-4">
                                                    <div class="bar-inner" style="width: 10%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Marketing: 20%</div>
                                                <div class="prog-bar color-5">
                                                    <div class="bar-inner" style="width: 20%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Product Development: 40%</div>
                                                <div class="prog-bar color-6">
                                                    <div class="bar-inner" style="width: 40%;"></div>
                                                </div>
                                            </div>
                                            <div class="bar-block">
                                                <div class="bar-legend">Operational: 10%</div>
                                                <div class="prog-bar color-7">
                                                    <div class="bar-inner" style="width: 10%;"></div>
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
    </section>

    <!--Plan Section-->
    <section class="roadmap-section" id="roadmap">
        <div class="bg-layer-left"
            style="background-image: url('{{ asset('homepage-assets/images/background/pattern-1.png') }}');"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h6 class="subtitle"><span>Our Investment Plans</span></h6>
                <h2>Our Strategy & Investment Plans</h2>
            </div>

            <div class="roadmap-box">
                <div class="first-row items-row">
                    <div class="clearfix row justify-content-center">
                        <!--Plan Block-->
                        @foreach ($packages as $pkg)
                            <div class="roadmap-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box checked">
                                    <div class="lower-box">
                                        <h4>{{ $pkg->name }}</h4>
                                        <div class="text">
                                            Earns you a daily ROI of <b>{{ $pkg->percentage }}%</b> daily for
                                            <b>{{ $pkg->duration }}</b> days.
                                            Minimum investment is the equivalent of <b>{{ currency_converter($pkg->min_val) }}</b> for all
                                            coins.
                                            {{-- Earns you a daily Roi of {{ $pkg->percentage }}% daily for <b>{{ $pkg->duration }}</b> days.
                                            Minimum investment is {{ $pkg->min_val }} btc or it’s equivalent in all coins. --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="/register" class="px-5 btn btn-primary">Start Investing</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Documents Section-->
    <section class="docs-section" id="documents">
        <div class="auto-container">
            <div class="inner-container">
                <div class="clearfix row">
                    <!--Text Column-->
                    <div class="text-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="title-box">
                                <h6 class="subtitle"><span>Whitepaper</span></h6>
                                <h2>Read Our Documents</h2>
                                <div class="text-content text">Here is our full documents that help you to
                                    understand deeply about us and our operation </div>
                            </div>
                            <div class="lower-text">
                                <ul class="clearfix">
                                    <li><i class="fa-solid fa-check"></i><a href="/whitepaper" target="_blank"> White
                                            Paper</a></li>
                                    <li><i class="fa-solid fa-check"></i><a href="/terms" target="_blank"> Terms and
                                            Condition</li>
                                    <li><i class="fa-solid fa-check"></i><a href="/policy" target="_blank"> Privacy&
                                            Policy</li>
                                </ul>
                            </div>
                            <!--<div class="link-box"><a href="#" class="theme-btn btn-style-one"><span-->
                            <!--            class="txt">Dowload <i class="fa-solid fa-caret-down"></i></span></a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="image-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image">
                                <img src="{{ asset('homepage-assets/images/resource/f-image-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FAQs Section-->
    <section class="faqs-section" style="border-top: none">
        <div class="auto-container">
            <div class="inner-container">
                <div class="title-box">
                    <h6 class="subtitle"><span>FAQs</span></h6>
                    <h2>Frequently Questions</h2>
                </div>
                <div class="clearfix row">
                    <!--Text Column-->
                    <div class="text-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="tabs-box">
                                <div class="tab-buttons">
                                    <ul class="clearfix">
                                        <li class="tab-btn active-btn" data-tab="#f-tab-1"><span>General</span></li>
                                        <li class="tab-btn" data-tab="#f-tab-2"><span>{{ config('app.name') }}</span>
                                        </li>
                                        <!--<li class="tab-btn" data-tab="#f-tab-3"><span>Tokens</span></li>-->
                                        <!--<li class="tab-btn" data-tab="#f-tab-4"><span>Client</span></li>-->
                                        <!--<li class="tab-btn" data-tab="#f-tab-5"><span>Legal</span></li>-->
                                    </ul>
                                </div>
                                <div class="tabs-content">

                                    <!--Tab-->
                                    <div class="tab active-tab" id="f-tab-1">
                                        <div class="tab-inner">
                                            <div class="clearfix accordion-box">
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What is this website about? Is
                                                        {{ config('app.name') }} coin ICO? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">No. This is not an Initial Coin Offering.
                                                                We believe that Stake Farm's
                                                                should be approached with caution as the majority of "Alt
                                                                coins" do not offer any benefits
                                                                to more established crypto currencies such as Bitcoin,
                                                                Ethereum, etc. <br />Stake farm is a Registered
                                                                Firm that manages Cryptocurrency Investments/Staking,with
                                                                its user friendly Interface,Daily/weekly
                                                                Staking reward and 24/7 Customer Support.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What cryptocurrencies can I use to
                                                        purchase? <i class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} can be purchased
                                                                using Etherum,Usdt,Bitcoin,BNB and Xrp.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">I forgot my password. What should I do? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">Go to Password Reminder section, enter your
                                                                registration e-mail address and follow the instructions.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What is the process of investing? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">To make investments/Staking,Kindly create
                                                                an account and
                                                                navigate through your Dashboard to the Plan buttons,choose a
                                                                plan that
                                                                suits your budget and follow the process.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="f-tab-2">
                                        <div class="tab-inner">
                                            <div class="clearfix accordion-box">
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What Markets do you trade? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">Tradeable Coins: Bitcoin, Litecoin,
                                                                Ethereum, Bitcoin Cash and XRP.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What is the risk for my investment? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">There is no risk whatsoever. Just invest
                                                                and enjoy the financial freedom.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">How can I access the account? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">If you are a registered user of
                                                                {{ config('app.name') }},
                                                                please enter your username and password in the appropriate
                                                                fields at the top
                                                                of the website and click the "Login to Account" button. You
                                                                will be redirected
                                                                to your account automatically as soon as you have done the
                                                                above.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">Are there any limits for an investment amount? How
                                                        can I keep my account safe? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">We take all security measures to protect
                                                                your account and keep it safe from third parties intrusion.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="f-tab-3">
                                        <div class="tab-inner">
                                            <div class="clearfix accordion-box">
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What is {{ config('app.name') }}? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What cryptocurrencies can I use to
                                                        purchase? <i class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">How can I participate in the <span
                                                            class="uppercase">{{ config('app.name') }}</span>
                                                        sale? <i class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">How do I benefit from the <span
                                                            class="uppercase">{{ config('app.name') }}</span>? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="f-tab-4">
                                        <div class="tab-inner">
                                            <div class="clearfix accordion-box">
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What is {{ config('app.name') }}? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What cryptocurrencies can I use to
                                                        purchase? <i class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">How can I participate in the <span
                                                            class="uppercase">{{ config('app.name') }}</span>
                                                        sale? <i class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">How do I benefit from the <span
                                                            class="uppercase">{{ config('app.name') }}</span>? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="f-tab-5">
                                        <div class="tab-inner">
                                            <div class="clearfix accordion-box">
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What is {{ config('app.name') }}? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">What cryptocurrencies can I use to
                                                        purchase? <i class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">How can I participate in the <span
                                                            class="uppercase">{{ config('app.name') }}</span>
                                                        sale? <i class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Block-->
                                                <div class="block accordion">
                                                    <div class="acc-btn">How do I benefit from the <span
                                                            class="uppercase">{{ config('app.name') }}</span>? <i
                                                            class="fa-regular fa-angle-down"></i></div>
                                                    <div class="acc-content">
                                                        <div class="content">
                                                            <div class="text">{{ config('app.name') }} is the
                                                                cryptocurrency
                                                                industry’s
                                                                equivalent to an initial public offering and is
                                                                launched to raise funds.</div>
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
                    <!--Image Column-->
                    <div class="image-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image">
                                <img src="images/resource/f-image-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Section-->
    <section class="contact-section" id="contact-section">
        <div class="bg-pattern"
            style="background-image: url('{{ asset('homepage-assets/images/background/pattern-2.png') }}');"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h6 class="subtitle"><span>Contact</span></h6>
                <h2>Contact <span class="uppercase">{{ config('app.name') }}</span></h2>
            </div>
            <div class="info-box">
                <ul class="clearfix info">
                    {{-- <li class="email"><i class="icon fa-solid fa-location-crosshairs"></i><a href="#"><span
                                class="__cf_email__">Office address: 8th Floor Cheapside London,United kingdom</span></a>
                    </li> --}}
                    <!--<li class="email"><i class="icon fa-solid fa-location-crosshairs"></i><a href="#"><span-->
                    <!--            class="__cf_email__">Mailing address: 2547 Larry Street San Francisco CA</span></a>-->
                    <!--</li>-->
                    <br />
                    <li class="email"><i class="icon fa-solid fa-envelope"></i><a
                            href="mailto:support@atlascapt.com"><span class="__cf_email__"
                                data-cfemail="support@atlascapt.com">support@atlascapt.com</span></a>
                    </li>
                    {{-- <li class="phone"><i class="icon fa-solid fa-phone"></i><a href="tel:+12093400260">+12093400260</a> --}}
                    </li>
                    <li class="social">
                        <i class="icon fa-solid fa-paper-plane"></i>
                        <a href="https://t.me/stakefarmltds">Join us on Telegram</a>
                    </li>
                </ul>
            </div>
            <div class="form-box contact-form default-form">
                <form id="contactform">
                    <div class="clearfix row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="username" value="" placeholder="First Name"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="lastname" value="" placeholder="Last Name"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="email" name="email" value="" placeholder="Email Address"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="phone" value="" placeholder="Phone Number"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="field-inner">
                                <textarea name="message" placeholder="Your Message ..." required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="text-center">
                                <button class="theme-btn btn-style-one" onclick='contactForm()'>
                                    <span class="btn-title">Submit your message</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
    <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd"
        background-color="#ffffff" locale="en"
        style="position: fixed;bottom: 0;"></coingecko-coin-price-marquee-widget>
@endsection
