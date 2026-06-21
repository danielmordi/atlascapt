@extends('layouts.home.app')

@push('styles')
    <link rel='stylesheet' id='elementor-post-383-css'
        href='wp-content/uploads/sites/270/elementor/css/post-3836463.css?ver=1732242602' media='all' />

    <style>
        .testimonial-cards {
            display: grid;
            /* This forces exactly 3 columns of equal width */
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .testimonial-card-wrapper {
            height: 100%;
        }

        /* Ensure the card takes full height of the grid cell */
        .elementskit-testimonial-slider-block-style {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #ffffff;
            /* Assuming white background based on context, adjust if needed */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .elementskit-stars {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0 0 15px 0;
            gap: 5px;
        }

        .elementskit-stars svg {
            width: 18px;
            height: 18px;
            fill: #FEC42D;
        }
    </style>
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
                                    <h1 class="elementor-heading-title elementor-size-default">Success Stories</h1>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b27f110 e-con-full e-flex e-con e-child"
                                data-id="b27f110" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="width: 55%">
                                <div class="elementor-element elementor-element-3ae58f1 elementor-align-center elementor-widget elementor-widget-button"
                                    data-id="3ae58f1" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="#">
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
                                                href="#">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Success Stories</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7f8ba21 elementor-widget elementor-widget-text-editor"
                                data-id="7f8ba21" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Discover how traders around the globe are utilizing our advanced tools and secure
                                        ecosystem to outperform the markets and secure their financial futures.</p>
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
                <div class="testimonial-cards">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-card-wrapper">
                            <div
                                class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two">
                                <div class="elementskit-commentor-header">
                                    <ul class="elementskit-stars">
                                        @for ($j = 0; $j < $testimonial['rating']; $j++)
                                            <li>
                                                <a>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                    </svg>
                                                </a>
                                            </li>
                                        @endfor
                                    </ul>
                                    <div class="elementskit-icon-content elementskit-watermark-icon ">
                                        <i aria-hidden="true" class="jki jki-quote2-light"></i>
                                    </div>
                                </div>

                                <div class="elementskit-commentor-content">
                                    <p>{{ $testimonial['content'] }}</p>
                                </div>

                                <div class="elementskit-commentor-bio">
                                    <div class="elementkit-commentor-details ">
                                        <!-- Image removed as requested -->
                                        <div class="elementskit-profile-info">
                                            <strong class="elementskit-author-name">{{ $testimonial['author'] }}</strong>
                                            <span class="elementskit-author-des">{{ $testimonial['location'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-707c674 e-flex e-con-boxed e-con e-parent" data-id="707c674"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-4450611 e-flex e-con-boxed e-con e-child" data-id="4450611"
                    data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-6a41ee7 e-flex e-con-boxed e-con e-child"
                            data-id="6a41ee7" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-86af9a1 e-con-full e-flex e-con e-child"
                                    data-id="86af9a1" data-element_type="container">
                                    <div class="elementor-element elementor-element-b931e96 elementor-widget elementor-widget-jkit_heading"
                                        data-id="b931e96" data-element_type="widget"
                                        data-widget_type="jkit_heading.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile- jeg_module_383_2_6963de5a7f603">
                                                <div class="heading-section-title  display-inline-block">
                                                    <h2 class="heading-title">Our <span
                                                            class="style-color"><span>Team</span></span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7f29701 elementor-widget elementor-widget-heading"
                                        data-id="7f29701" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Market Experts
                                                Dedicated to Your Growth</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-68c24ff elementor-widget elementor-widget-text-editor"
                                        data-id="68c24ff" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Our team consists of seasoned financial analysts, blockchain architects, and
                                                portfolio managers dedicated to providing you with institutional-grade
                                                trading insights.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-05c7029 e-flex e-con-boxed e-con e-child"
                            data-id="05c7029" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-d44e4f6 e-flex e-con-boxed e-con e-child"
                                    data-id="d44e4f6" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-28067de e-flex e-con-boxed e-con e-child"
                                            data-id="28067de" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-3a32816 e-flex e-con-boxed e-con e-child"
                                                    data-id="3a32816" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-3184af3 e-flex e-con-boxed e-con e-child"
                                                            data-id="3184af3" data-element_type="container">
                                                            <div class="e-con-inner">
                                                                <div class="elementor-element elementor-element-5c084ca elementor-widget elementor-widget-image"
                                                                    data-id="5c084ca" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="800" height="880"
                                                                            src="../../wp-content/uploads/sites/270/2024/09/23-14-931x1024.jpg"
                                                                            class="attachment-large size-large wp-image-396"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/23-14-931x1024.jpg 931w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/23-14-273x300.jpg 273w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/23-14-768x845.jpg 768w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/23-14-800x880.jpg 800w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/23-14.jpg 1000w"
                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4b10f64 e-flex e-con-boxed e-con e-child"
                                                            data-id="4b10f64" data-element_type="container">
                                                            <div class="e-con-inner">
                                                                <div class="elementor-element elementor-element-422174a e-flex e-con-boxed e-con e-child"
                                                                    data-id="422174a" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-ffae55e elementor-widget elementor-widget-spacer"
                                                                            data-id="ffae55e" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-f5960c9 e-flex e-con-boxed e-con e-child"
                                                                    data-id="f5960c9" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-334f6a7 elementor-widget elementor-widget-heading"
                                                                            data-id="334f6a7" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h5
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    jackie cho</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-71c20d6 elementor-widget elementor-widget-text-editor"
                                                                            data-id="71c20d6" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p>Senior Market Strategist</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-25202a7 e-flex e-con-boxed e-con e-child"
                                                    data-id="25202a7" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-e67012e e-flex e-con-boxed e-con e-child"
                                                            data-id="e67012e" data-element_type="container">
                                                            <div class="e-con-inner">
                                                                <div class="elementor-element elementor-element-1eaae5b elementor-widget elementor-widget-image"
                                                                    data-id="1eaae5b" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="800" height="880"
                                                                            src="../../wp-content/uploads/sites/270/2024/09/25-15-931x1024.jpg"
                                                                            class="attachment-large size-large wp-image-405"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/25-15-931x1024.jpg 931w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/25-15-273x300.jpg 273w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/25-15-768x845.jpg 768w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/25-15-800x880.jpg 800w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/25-15.jpg 1000w"
                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-08000de e-flex e-con-boxed e-con e-child"
                                                            data-id="08000de" data-element_type="container">
                                                            <div class="e-con-inner">
                                                                <div class="elementor-element elementor-element-de6e9b9 e-flex e-con-boxed e-con e-child"
                                                                    data-id="de6e9b9" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-eff44c7 elementor-widget elementor-widget-spacer"
                                                                            data-id="eff44c7" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-37f10a0 e-flex e-con-boxed e-con e-child"
                                                                    data-id="37f10a0" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-5c71630 elementor-widget elementor-widget-heading"
                                                                            data-id="5c71630" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h5
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    avery davis</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-6364881 elementor-widget elementor-widget-text-editor"
                                                                            data-id="6364881" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p>Head of Compliance & Risk</p>
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
                                        <div class="elementor-element elementor-element-19fe2dd e-flex e-con-boxed e-con e-child"
                                            data-id="19fe2dd" data-element_type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-f7ff7ba e-flex e-con-boxed e-con e-child"
                                                    data-id="f7ff7ba" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-a0eeb42 e-flex e-con-boxed e-con e-child"
                                                            data-id="a0eeb42" data-element_type="container">
                                                            <div class="e-con-inner">
                                                                <div class="elementor-element elementor-element-d4c3cd0 elementor-widget elementor-widget-image"
                                                                    data-id="d4c3cd0" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="800" height="880"
                                                                            src="../../wp-content/uploads/sites/270/2024/09/33-4-931x1024.jpg"
                                                                            class="attachment-large size-large wp-image-676"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/33-4-931x1024.jpg 931w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/33-4-273x300.jpg 273w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/33-4-768x845.jpg 768w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/33-4-800x880.jpg 800w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/33-4.jpg 1000w"
                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ae099fb e-flex e-con-boxed e-con e-child"
                                                            data-id="ae099fb" data-element_type="container">
                                                            <div class="e-con-inner">
                                                                <div class="elementor-element elementor-element-1dafd6c e-flex e-con-boxed e-con e-child"
                                                                    data-id="1dafd6c" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-9461644 elementor-widget elementor-widget-spacer"
                                                                            data-id="9461644" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-610747d e-flex e-con-boxed e-con e-child"
                                                                    data-id="610747d" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-053239e elementor-widget elementor-widget-heading"
                                                                            data-id="053239e" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h5
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Rosella Amy</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-16c690e elementor-widget elementor-widget-text-editor"
                                                                            data-id="16c690e" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p>Portfolio Operations Manager</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-015b58a e-flex e-con-boxed e-con e-child"
                                                    data-id="015b58a" data-element_type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-26309d5 e-flex e-con-boxed e-con e-child"
                                                            data-id="26309d5" data-element_type="container">
                                                            <div class="e-con-inner">
                                                                <div class="elementor-element elementor-element-837e254 elementor-widget elementor-widget-image"
                                                                    data-id="837e254" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async"
                                                                            width="800" height="880"
                                                                            src="../../wp-content/uploads/sites/270/2024/09/26-12-931x1024.jpg"
                                                                            class="attachment-large size-large wp-image-406"
                                                                            alt=""
                                                                            srcset="https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/26-12-931x1024.jpg 931w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/26-12-273x300.jpg 273w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/26-12-768x845.jpg 768w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/26-12-800x880.jpg 800w, https://kitpro.site/fundpro/wp-content/uploads/sites/270/2024/09/26-12.jpg 1000w"
                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f906fab e-flex e-con-boxed e-con e-child"
                                                            data-id="f906fab" data-element_type="container">
                                                            <div class="e-con-inner">
                                                                <div class="elementor-element elementor-element-6ad8a22 e-flex e-con-boxed e-con e-child"
                                                                    data-id="6ad8a22" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-f5ac8ec elementor-widget elementor-widget-spacer"
                                                                            data-id="f5ac8ec" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-2080f77 e-flex e-con-boxed e-con e-child"
                                                                    data-id="2080f77" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-4a394d3 elementor-widget elementor-widget-heading"
                                                                            data-id="4a394d3" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h5
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Jacob Murphy</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-ccdaaf4 elementor-widget elementor-widget-text-editor"
                                                                            data-id="ccdaaf4" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p>Lead Quantitative Analyst</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
