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
                                    <h1 class="elementor-heading-title elementor-size-default">Terms and Conditions</h1>
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
                                                href="{{ route('terms-and-condition') }}">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Terms and Conditions</span>
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
                <div class=" auto-container">
                    <h1>Terms and Conditions</h1>
                    <p>Last updated: January 13, 2024</p>
                    <p>Please read these terms and conditions carefully before using Our Service.</p>
                    <h1>Interpretation and Definitions</h1>
                    <h2>Interpretation</h2>
                    <p>The words of which the initial letter is capitalized have meanings defined under the following
                        conditions. The following definitions shall have the same meaning regardless of whether they appear
                        in singular or in plural.</p>
                    <h2>Definitions</h2>
                    <p>For the purposes of these Terms and Conditions:</p>
                    <ul>
                        <li>
                            <p><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common
                                control with a party, where &quot;control&quot; means ownership of 50% or more of the
                                shares, equity interest or other securities entitled to vote for election of directors or
                                other managing authority.</p>
                        </li>
                        <li>
                            <p><strong>Country</strong> refers to: United Kingdom</p>
                        </li>
                        <li>
                            <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;,
                                &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Stake Farm LTD, 8th Floor
                                Cheapside London,United kingdom.</p>
                        </li>
                        <li>
                            <p><strong>Device</strong> means any device that can access the Service such as a computer, a
                                cellphone or a digital tablet.</p>
                        </li>
                        <li>
                            <p><strong>Service</strong> refers to the Website.</p>
                        </li>
                        <li>
                            <p><strong>Terms and Conditions</strong> (also referred as &quot;Terms&quot;) mean these Terms
                                and Conditions that form the entire agreement between You and the Company regarding the use
                                of the Service. This Terms and Conditions agreement has been created with the help of the <a
                                    href="https://www.freeprivacypolicy.com/free-terms-and-conditions-generator/"
                                    target="_blank">Free Terms and Conditions Generator</a>.</p>
                        </li>
                        <li>
                            <p><strong>Third-party Social Media Service</strong> means any services or content (including
                                data, information, products or services) provided by a third-party that may be displayed,
                                included or made available by the Service.</p>
                        </li>
                        <li>
                            <p><strong>Website</strong> refers to Stake Farm, accessible from <a
                                    href="https://stakesfarm.com/" rel="external nofollow noopener"
                                    target="_blank">https://stakesfarm.com/</a></p>
                        </li>
                        <li>
                            <p><strong>You</strong> means the individual accessing or using the Service, or the company, or
                                other legal entity on behalf of which such individual is accessing or using the Service, as
                                applicable.</p>
                        </li>
                    </ul>
                    <h1>Acknowledgment</h1>
                    <p>These are the Terms and Conditions governing the use of this Service and the agreement that operates
                        between You and the Company. These Terms and Conditions set out the rights and obligations of all
                        users regarding the use of the Service.</p>
                    <p>Your access to and use of the Service is conditioned on Your acceptance of and compliance with these
                        Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access
                        or use the Service.</p>
                    <p>By accessing or using the Service You agree to be bound by these Terms and Conditions. If You
                        disagree with any part of these Terms and Conditions then You may not access the Service.</p>
                    <p>You represent that you are over the age of 18. The Company does not permit those under 18 to use the
                        Service.</p>
                    <p>Your access to and use of the Service is also conditioned on Your acceptance of and compliance with
                        the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the
                        collection, use and disclosure of Your personal information when You use the Application or the
                        Website and tells You about Your privacy rights and how the law protects You. Please read Our
                        Privacy Policy carefully before using Our Service.</p>
                    <h1>Links to Other Websites</h1>
                    <p>Our Service may contain links to third-party web sites or services that are not owned or controlled
                        by the Company.</p>
                    <p>The Company has no control over, and assumes no responsibility for, the content, privacy policies, or
                        practices of any third party web sites or services. You further acknowledge and agree that the
                        Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or
                        alleged to be caused by or in connection with the use of or reliance on any such content, goods or
                        services available on or through any such web sites or services.</p>
                    <p>We strongly advise You to read the terms and conditions and privacy policies of any third-party web
                        sites or services that You visit.</p>
                    <h1>Termination</h1>
                    <p>We may terminate or suspend Your access immediately, without prior notice or liability, for any
                        reason whatsoever, including without limitation if You breach these Terms and Conditions.</p>
                    <p>Upon termination, Your right to use the Service will cease immediately.</p>
                    <h1>Limitation of Liability</h1>
                    <p>Notwithstanding any damages that You might incur, the entire liability of the Company and any of its
                        suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall
                        be limited to the amount actually paid by You through the Service or 100 USD if You haven't
                        purchased anything through the Service.</p>
                    <p>To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be
                        liable for any special, incidental, indirect, or consequential damages whatsoever (including, but
                        not limited to, damages for loss of profits, loss of data or other information, for business
                        interruption, for personal injury, loss of privacy arising out of or in any way related to the use
                        of or inability to use the Service, third-party software and/or third-party hardware used with the
                        Service, or otherwise in connection with any provision of this Terms), even if the Company or any
                        supplier has been advised of the possibility of such damages and even if the remedy fails of its
                        essential purpose.</p>
                    <p>Some states do not allow the exclusion of implied warranties or limitation of liability for
                        incidental or consequential damages, which means that some of the above limitations may not apply.
                        In these states, each party's liability will be limited to the greatest extent permitted by law.</p>
                    <h1>&quot;AS IS&quot; and &quot;AS AVAILABLE&quot; Disclaimer</h1>
                    <p>The Service is provided to You &quot;AS IS&quot; and &quot;AS AVAILABLE&quot; and with all faults and
                        defects without warranty of any kind. To the maximum extent permitted under applicable law, the
                        Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors
                        and service providers, expressly disclaims all warranties, whether express, implied, statutory or
                        otherwise, with respect to the Service, including all implied warranties of merchantability, fitness
                        for a particular purpose, title and non-infringement, and warranties that may arise out of course of
                        dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the
                        Company provides no warranty or undertaking, and makes no representation of any kind that the
                        Service will meet Your requirements, achieve any intended results, be compatible or work with any
                        other software, applications, systems or services, operate without interruption, meet any
                        performance or reliability standards or be error free or that any errors or defects can or will be
                        corrected.</p>
                    <p>Without limiting the foregoing, neither the Company nor any of the company's provider makes any
                        representation or warranty of any kind, express or implied: (i) as to the operation or availability
                        of the Service, or the information, content, and materials or products included thereon; (ii) that
                        the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency
                        of any information or content provided through the Service; or (iv) that the Service, its servers,
                        the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan
                        horses, worms, malware, timebombs or other harmful components.</p>
                    <p>Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on
                        applicable statutory rights of a consumer, so some or all of the above exclusions and limitations
                        may not apply to You. But in such a case the exclusions and limitations set forth in this section
                        shall be applied to the greatest extent enforceable under applicable law.</p>
                    <h1>Governing Law</h1>
                    <p>The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use
                        of the Service. Your use of the Application may also be subject to other local, state, national, or
                        international laws.</p>
                    <h1>Disputes Resolution</h1>
                    <p>If You have any concern or dispute about the Service, You agree to first try to resolve the dispute
                        informally by contacting the Company.</p>
                    <h1>For European Union (EU) Users</h1>
                    <p>If You are a European Union consumer, you will benefit from any mandatory provisions of the law of
                        the country in which you are resident in.</p>
                    <h1>United States Legal Compliance</h1>
                    <p>You represent and warrant that (i) You are not located in a country that is subject to the United
                        States government embargo, or that has been designated by the United States government as a
                        &quot;terrorist supporting&quot; country, and (ii) You are not listed on any United States
                        government list of prohibited or restricted parties.</p>
                    <h1>Severability and Waiver</h1>
                    <h2>Severability</h2>
                    <p>If any provision of these Terms is held to be unenforceable or invalid, such provision will be
                        changed and interpreted to accomplish the objectives of such provision to the greatest extent
                        possible under applicable law and the remaining provisions will continue in full force and effect.
                    </p>
                    <h2>Waiver</h2>
                    <p>Except as provided herein, the failure to exercise a right or to require performance of an obligation
                        under these Terms shall not effect a party's ability to exercise such right or require such
                        performance at any time thereafter nor shall the waiver of a breach constitute a waiver of any
                        subsequent breach.</p>
                    <h1>Translation Interpretation</h1>
                    <p>These Terms and Conditions may have been translated if We have made them available to You on our
                        Service.
                        You agree that the original English text shall prevail in the case of a dispute.</p>
                    <h1>Changes to These Terms and Conditions</h1>
                    <p>We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a
                        revision is material We will make reasonable efforts to provide at least 30 days' notice prior to
                        any new terms taking effect. What constitutes a material change will be determined at Our sole
                        discretion.</p>
                    <p>By continuing to access or use Our Service after those revisions become effective, You agree to be
                        bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop
                        using the website and the Service.</p>
                    <h1>Contact Us</h1>
                    <p>If you have any questions about these Terms and Conditions, You can contact us:</p>
                    <ul>
                        <li>
                            <p>By email: support@atlascapt.com</p>
                        </li>
                        <li>
                            <p>By phone number: +19293602066</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
