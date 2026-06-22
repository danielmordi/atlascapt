@extends('layouts.home.app')

@push('styles')
    <link rel='stylesheet' id='elementor-post-383-css'
        href='../../wp-content/uploads/sites/270/elementor/css/post-3836463.css?ver=1732242602' media='all' />
@endpush

@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="383" class="elementor elementor-383">
        <div class="elementor-element elementor-element-d2db74d e-flex e-con-boxed e-con e-parent" data-id="d2db74d"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-dfdb5f6 e-flex e-con-boxed e-con e-child" data-id="dfdb5f6"
                    data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-38a57e1 e-con-full e-flex e-con e-child"
                            data-id="38a57e1" data-element_type="container">
                            <div class="elementor-element elementor-element-48313bc elementor-widget elementor-widget-heading"
                                data-id="48313bc" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">Our Whitepaper</h1>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b27f110 e-con-full e-flex e-con e-child"
                                data-id="b27f110" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-element elementor-element-3ae58f1 elementor-align-center elementor-widget elementor-widget-button"
                                    data-id="3ae58f1" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{ route('home') }}">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right"
                                                            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-button-text">Home</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1e37d67 elementor-widget elementor-widget-button"
                                    data-id="1e37d67" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{ route('whitepaper') }}">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Whitepaper</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7f8ba21 elementor-widget elementor-widget-text-editor"
                                data-id="7f8ba21" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>To empower our clients with the cutting-edge tools and deep market knowledge required
                                        to succeed in the dynamic world of crypto and forex trading.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="elementor-element elementor-element-125e6b9 e-flex e-con-boxed e-con e-parent" data-id="125e6b9"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-f0a1d71 e-flex e-con-boxed e-con e-child" data-id="f0a1d71"
                    data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-cb919a5 elementor-widget elementor-widget-image-carousel"
                            data-id="cb919a5" data-element_type="widget"
                            data-settings="{&quot;slides_to_show&quot;:&quot;5&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:500,&quot;speed&quot;:7000,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:53,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;4&quot;,&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;slides_to_scroll_tablet&quot;:&quot;1&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                            data-widget_type="image-carousel.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-image-carousel-wrapper swiper" role="region"
                                    aria-roledescription="carousel" aria-label="Image Carousel" dir="ltr">
                                    <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="1 of 6">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="../../wp-content/uploads/sites/270/2024/09/a11.png"
                                                    alt="a11.png" /></figure>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="2 of 6">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="../../wp-content/uploads/sites/270/2024/09/0logoipsum-262-1.png"
                                                    alt="0logoipsum-262-1.png" /></figure>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="3 of 6">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="../../wp-content/uploads/sites/270/2024/09/a12.png"
                                                    alt="a12.png" /></figure>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="4 of 6">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="../../wp-content/uploads/sites/270/2024/09/a13.png"
                                                    alt="a13.png" /></figure>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="5 of 6">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="../../wp-content/uploads/sites/270/2024/09/a14.png"
                                                    alt="a14.png" /></figure>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="6 of 6">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="../../wp-content/uploads/sites/270/2024/09/a15.png"
                                                    alt="a15.png" /></figure>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="elementor-element elementor-element-f6cee96 e-flex e-con-boxed e-con e-parent" data-id="f6cee96"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="auto-container">
                    <p style="text-transform: uppercase">{{ config('app.name') }} AS A COMPANY</p>
                    <h2>ABSTRACT</h2>
                    <p>Smart contract platforms and cryptocurrencies have captured mass attention but still have not been
                        able to
                        achieve
                        mass adoption due to scalability and user experience issues. Our network aims to solve the problems
                        faced by
                        investors which are still in process of providing themselves a skillful way of profiting while
                        hedging the
                        financial
                        markets. We are redefining how money is being moved, spent and invested. We are powering the Future
                        of Money by
                        creating powerful solutions for good returns on assets.</p>

                    <p>Today {{ config('app.name') }} is a private limited investment hedge farming company founded and
                        registered in
                        UK. Incorporated since
                        2012, evolving the way digital asset investments are made in the industry. Management in our team
                        ranges from
                        various skilled analysts in value investments of the stock market to partnered companies and private
                        clients.
                    </p>

                    <h2>WHAT YOU GET?</h2>
                    <p>{{ config('app.name') }} Limited is a crypto hedge fund with these:</p>
                    <ul>
                        <li>
                            <strong>Security</strong><br>
                            The security of users’ data and funds is paramount to any business we know that and so we put up
                            a safe &
                            secure
                            architecture to prevent scam or fraud. Investors must contact support after depositing to give
                            an option for
                            a
                            security question and answer which is useful for instantly verifying your account information,
                            thereby
                            protecting
                            you against data theft or scam. Along with that is our feature of protection against DDoS
                            attacks causing
                            full
                            data encryption.
                        </li>

                        <li>
                            <strong>Fast Payment Processing</strong><br>
                            We are a smart contract that ensures speedy payment processing for users after investment
                            maturity. Payment
                            system is based on blockchain, which is optimized for high performance, fair ecosystem for every
                            crypto
                            related
                            project.
                            performance, fair ecosystem for every crypto related project.

                        </li>

                        <li>
                            <strong>Dedicated Customer Support Service</strong><br>
                            Investors have access to a 24/7 dedicated customer support service, available to attend to any
                            issue you may
                            encounter while trying to execute a deposit/withdrawal transaction.
                        </li>
                    </ul><br>

                    <h2>ARCHITECTURE</h2>
                    <p>
                        Since the {{ config('app.name') }} Network's core focus is on mass user adoption, it is ideal to
                        make a deep
                        dive into the technical
                        architecture from where the user should start a journey. Our investment packages range from basic to
                        compound
                        investment packages to suit your income. We automate arbitrages, provide exchanges with liquidity
                        both CEX and
                        DEX
                        incentivize liquidity providers (LP) to stake or lock up their crypto assets in a smart
                        contract-based liquidity
                        pool. These incentives can be a percentage of transaction fees, interest from lenders or a
                        governance token (see
                        liquidity mining below). These returns are expressed as a return of interest (ROI). As more
                        investors add funds
                        to
                        the related liquidity pool, the value of the issued returns rise in value. other services.
                        Investments can also
                        be
                        made in cryptocurrencies, which include: Bitcoin, Ethereum and USDT. Immediately you execute account
                        funding we
                        immediately hedge your position opening a bear and bull position with our swift graphed strategy to
                        enable you
                        earn
                        in the market in every cycle without losing the value of your asset. With a team of experts and
                        professionals in
                        Risk Management and Liquidity, Business Management, Hedging, and others, we bring an alternative
                        investment
                        vehicle
                        that employs a variety of strategies to generate alpha strategies for their accredited investor
                        clients.
                    </p>

                    <p>
                        {{ config('app.name') }} Limited puts your cryptocurrency assets to work and earning. We don’t only
                        support
                        crypto assets but as well
                        traditional assets ie TESLA, NIO, AMD etc. {{ config('app.name') }} was founded by aboard which
                        drafted out a
                        strategy of helping you
                        grow their individual assets providing a negotiable contract in a period of asset holding ranging
                        from liquidity
                        mining, market making, staking and business funding. We have the management services for investors,
                        businesses,
                        and
                        private clients, with a proven track record that always ensures that every investment was worth it.
                        Licenses and
                        approvals are assured in all jurisdictions, the company and its subsidiaries intend to operate in
                        full
                        compliance
                        with applicable laws and regulations and obtain the necessary licenses and approvals.
                    </p>

                    <p>This means that the development and roll-out of all the initiatives described in this whitepaper are
                        guaranteed.
                        Regulatory licenses and/or approvals are likely to be required in a number of relevant jurisdictions
                        in which
                        relevant activities may take place. It is possible to guarantee and we give assurances, that we heed
                        to
                        contractual
                        agreement within the particular timeframe of contract. This means that the initiatives described in
                        this
                        whitepaper
                        would be available in certain markets. In addition, the development of any initiatives of this
                        project is
                        intended
                        to be implemented in stages. During certain stages of development, the project may rely on
                        relationships with
                        certain licensed third-party entities. If these entities are no longer properly licensed in the
                        relevant
                        jurisdiction, this will impact the ability of the company to rely on the services of that party.</p>

                    <h4>OUR FARMING PACKAGES COMES IN SHORT-TERM (MONTHLY) AND LONG TERM (ANNUALY)</h4>
                    <p>
                        whereby you get -50% off your plan if you subscribe to a SHORT-TERM package and full access to your
                        plan if you
                        subscribe under our ANNUAL package. NB: You can withdraw your earnings which are posted weekly
                        within duration
                        of
                        your plan and your deposit only at the expiration of your contract.
                    </p>

                    <h4>LP PARTNERS</h4>
                    <p>
                        NYSE one of our biggest partners providing us the feature of traditional assets farming for the
                        stock traders so
                        as
                        for them to get to retain their stock value while they earn
                    </p>
                    <p>
                        Binance has kept their words in providing us a huge access to the crypto space projects enabling us
                        the
                        flexibility
                        of good yield returns, swift payments, coin staking and liquidity availability.
                    </p>
                    <ul>
                        <li>PANCAKESWAP</li>
                        <li>UNISWAP</li>
                        <li>TETHER AND DAI</li>
                    </ul>

                    <h2>{{ config('app.name') }} AS A PROTOCOL</h2>
                    <p>
                        {{ config('app.name') }} is a protocol, launched September 2014. Because of its nature, it will
                        exist for as
                        long as the crypto space
                        does. Designed with simplicity in mind, the protocol provides an interface for seamless exchange of
                        cross chain
                        asset/tokens. By eliminating unnecessary forms of rent extraction and middlemen it allows faster,
                        more efficient
                        exchange. Where it makes tradeoffs, decentralization, censorship resistance, and security are
                        prioritized.
                        There is no central token. No special treatment is given to early investors, adopters, or
                        developers.
                        Asset/Token
                        listing/trade activity is arbitraged throughout data interaction with data oracle servers that
                        provides the best
                        market rate for users. All smart contract functions are public and all upgrades are opt-in.
                        This site will serve as a project overview for - explaining how it works, how to use it, and how to
                        build on top
                        of
                        it. These docs are actively being worked on and more information will be added on an ongoing basis.
                    </p>
                    <p>
                        We achieve extremely efficient trades by implementing the swap invariant, which has significantly
                        lower slippage
                        for
                        stablecoin trades than many other prominent invariants (e.g., constant-product). Note that in this
                        context
                        allows
                        stablecoins which refers to tokens that are stable representations of one another. This includes,
                        for example,
                        USD-
                        pegged stablecoins (like DAI and USDC), but also ETH and sETH (synthetic ETH) or different versions
                        of wrapped
                        BTC.
                        For a detailed overview of the StableSwap invariant design, please read the official StableSwap
                        whitepaper.
                        We allow staking which creates a pool which is essentially a smart contract that implements the swap
                        invariant
                        and
                        therefore contains the logic for exchanging stable tokens. However, while the pool implement the
                        swap invariant,
                        they may come in different pool flavors.
                        In its simplest form, a pool is an implementation of the swap invariant with 2 or more tokens, which
                        can be
                        referred
                        to as a plain pool. Alternative and more complex pool flavors include pools with lending
                        functionality,
                        so-called
                        lending pools, as well as metapools, which are pools that allow for the exchange of one or more
                        tokens with the
                        tokens of one or more underlying base pools. These pool interaction are done by our chain connection
                        with a wide
                        variety of trusted pools in the space from on chain to off chain. CEXS to DEXS
                    </p>

                    <h4>Collateral Assets</h4>
                    <p>
                        ie off chain assets like the stock asset backed token. These are generated, backed, and kept stable
                        through
                        collateral assets that are deposited into vaults on the Protocol. A collateral asset is a digital
                        asset that
                        holders
                        have voted to accept into the Protocol.
                        To generate, the Protocol accepts as collateral any asset that has been approved by
                        {{ config('app.name') }}
                        holders.
                    </p>

                    <p>
                        The oracle is in charge of determining price feeds and lending/borrowing rates etc.
                        {{ config('app.name') }} TOKEN: By so doing assets are minted into the network by users providing
                        collateral to
                        stake with the {{ config('app.name') }} token
                        to create a vault that gives asset minting possibilities for interested parties. These vaults are
                        governed by
                        each
                        individual staking and have their community for retrieval or related activity ie liquidation.
                    </p>

                    <p>
                        We use LINK as our oracle service, ChainLink nodes return replies to data requests or queries made
                        by or on
                        behalf
                        of a user contract, which we refer to as requesting contracts and denote by USER-SC. ChainLink’s
                        on-chain
                        interface
                        to requesting contracts is itself an on-chain contract that we denote by CHAINLINK-SC.
                    </p>

                    <p>Behind CHAINLINK-SC, ChainLink has an on-chain component consisting of three main contracts: a
                        reputation
                        contract,
                        an order-matching contract, and an aggregating contract. The reputation contract keeps track of
                        oracle-service-provider performance metrics. The order-matching smart contract takes a proposed
                        service level
                        agreement, logs the SLA parameters, and collects bids from oracle providers. It then selects bids
                        using the
                        reputation contract and finalizes the oracle SLA. The aggregating contract collects the oracle
                        providers’
                        responses
                        and calculates the final collective result of the ChainLink query. It also feeds oracle provider
                        metrics back
                        into
                        the reputation contract. ChainLink contracts are designed in a modular manner, allowing for them to
                        be
                        configured or
                        replaced by users as needed. The on-chain work flow has three steps: 1) oracle selection, 2) data
                        reporting, 3)
                        result aggregation.</p>
                    <p>Oracle Selection An oracle services purchaser specifies requirements that make up a service level
                        agreement (SLA)
                        proposal. The SLA proposal includes details such as query parameters and the number of oracles
                        needed by the
                        purchaser. Additionally, the purchaser specifies the reputation and aggregating contracts to be used
                        for the
                        rest of
                        the agreement.
                        Using the reputation maintained on-chain, along with a more robust set of data gathered from logs of
                        past
                        contracts,
                        purchasers can manually sort, filter, and select oracles via off-chain listing services. Our
                        intention is for
                        ChainLink to maintain one such listing service, collecting all ChainLink-related logs and verifying
                        the binaries
                        of
                        listed oracle contracts. The data used to generate listings will be pulled from the blockchain,
                        allowing for
                        alternative oracle-listing services to be built. Purchasers will submit SLA proposals to oracles
                        off-chain, and
                        come
                        to agreement before finalizing the SLA on-chain.</p>
                    <p>Manual matching is not possible for all situations. For example, a contract may need to request
                        oracle services
                        dynamically in response to its load. Automated solu- tions solve this problem and enhance usability.
                        For these
                        reasons, automated oracle matching is also being proposed by ChainLink through the use of
                        order-matching
                        contracts.
                    </p>
                    <p>Once the purchaser has specified their SLA proposal, instead of contacting the ora- cles directly,
                        they will
                        submit
                        the SLA to an order-matching contract. The submission of the proposal to the order-matching contract
                        triggers a
                        log
                        that oracle providers can monitor and filter based on their capabilities and service objectives.
                        ChainLink nodes
                        then choose whether to bid on the proposal or not, with the contract only accepting bids from nodes
                        that meet
                        the
                        SLA’s requirements. When an oracle service provider bids on a contract, they commit to it,
                        specifically by
                        attaching
                        the penalty amount that would be lost due to their misbehavior, as defined in the SLA.</p>
                    <p>Bids are accepted for the entirety of the bidding window. Once the SLA has received enough qualified
                        bids and the
                        bidding window has ended, the requested number of oracles is selected from the pool of bids. Penalty
                        payments
                        that
                        were offered during the bidding process are returned to oracles who were not selected, and a
                        finalized SLA
                        record is
                        created. When the finalized SLA is recorded it triggers a log notifying the selected oracles. The
                        oracles then
                        perform the assignment detailed by the SLA.</p>

                    <p>Data Reporting Once the new oracle record has been created, the off-chain oracles execute the
                        agreement and
                        report
                        back on-chain. For more detail about off-chain interactions</p>

                    <p>
                        For more information kindly visit:
                    <p>WEBSITE: <a href="https://stakefarms.online/">http://www.stakefarms.online/</a></p>
                    <p>E-MAIL US: support@atlascapt.com</p>
                    </p>

                    <h2>OUR PARTNERS</h2>
                    <p>
                        NYSE one of our biggest partners providing us the feature of traditional assets farming for the
                        stock traders so
                        as
                        for them to get to retain their stock value while they earn
                    </p>

                    <p>Binance has kept their words in providing us a huge access to the crypto space projects enabling us
                        the
                        flexibility
                        of good yield returns, swift payments, coin staking and liquidity availability.</p>

                </div>
            </div>
        </div>
    </div>
@endsection
