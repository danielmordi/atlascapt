<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="xmlrpc.php" />
    <title>Home &#8211; {{ config('app.name') }}</title>
    <meta name='robots' content='max-image-preview:large' />
    <meta name="description"
        content="{{ config('app.name') }} is a global investment banking and securities trading companies. {{ config('app.name') }} is mainly active as a financial service provider for large companies and institutional investors, along with a small branch exists for wealthy private clients.">
    <meta name="keywords"
        content="revora, Atlas equity hub, atlas equity finance, atlas equity invest, atlas equity,advisor, analytical, audit, broker, brokerage, business, company, consulting, currency, exchange, finance, financial, insurance, modern, trader">
    <meta name="author" content="Revora-DEX">


    <meta property="og:image" content="{{ asset('assets/img/logo-full.png') }}">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:url" content="/">
    <meta property="og:site_name" content="Consistent Growth & Transparency">
    <meta property="og:locale" content="en">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ config('app.name') }}: Consistent Growth & Transparency">
    <meta property="og:description"
        content="The {{ config('app.name') }} is a global investment banking and securities trading companies. {{ config('app.name') }} is mainly active as a financial service provider for large companies and institutional investors, along with a small branch exists for wealthy private clients.">
    <meta property="twitter:description"
        content="The {{ config('app.name') }} is a global investment banking and securities trading companies. {{ config('app.name') }} is mainly active as a financial service provider for large companies and institutional investors, along with a small branch exists for wealthy private clients.">
    <meta property="twitter:image" content="{{ asset('assets/img/logo-full.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="alternate" type="application/rss+xml" title="{{ config('app.name') }} &raquo; Feed"
        href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="{{ config('app.name') }} &raquo; Comments Feed"
        href="comments/feed/index.html" />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed298f.json?url=https%3A%2F%2Fkitpro.site%2Ffundpro%2Ftemplate-kit%2Fhome%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed7819?url=https%3A%2F%2Fkitpro.site%2Ffundpro%2Ftemplate-kit%2Fhome%2F&amp;format=xml" />
    <style id='wp-img-auto-sizes-contain-inline-css'>
        img:is([sizes=auto i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }

        /*# sourceURL=wp-img-auto-sizes-contain-inline-css */
    </style>
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/all.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.mine7a7.css?ver=3.34.0'
        media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css'
        href='wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend653d.css?ver=2.7.1' media='all' />
    <link rel='stylesheet' id='jkit-elements-main-css'
        href='wp-content/plugins/jeg-elementor-kit/assets/css/elements/main41fe.css?ver=3.0.1' media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

        /*# sourceURL=wp-emoji-styles-inline-css */
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }

        /*# sourceURL=/wp-includes/css/classic-themes.min.css */
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgb(6, 147, 227) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgb(252, 185, 0) 0%, rgb(255, 105, 0) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgb(255, 105, 0) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);
            --wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-term-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-term-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }

        /*# sourceURL=global-styles-inline-css */
    </style>
    <link rel='stylesheet' id='template-kit-export-css'
        href='wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.css?ver=1.0.23'
        media='all' />
    <link rel='stylesheet' id='hfe-style-css'
        href='wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor653d.css?ver=2.7.1'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='wp-content/plugins/elementor/assets/css/frontend.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='elementor-post-3-css'
        href='wp-content/uploads/sites/270/elementor/css/post-31efa.css?ver=1732242535' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css'
        href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.mine7a7.css?ver=3.34.0'
        media='all' />
    <link rel='stylesheet' id='widget-heading-css'
        href='wp-content/plugins/elementor/assets/css/widget-heading.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='widget-text-editor-css'
        href='wp-content/plugins/elementor/assets/css/widget-text-editor.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='sweetalert2-css'
        href='wp-content/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min430c.css?ver=11.6.16'
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href='wp-content/plugins/elementor/assets/css/widget-image.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='widget-rating-css'
        href='wp-content/plugins/elementor/assets/css/widget-rating.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='e-animation-grow-css'
        href='wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-grow.mine7a7.css?ver=3.34.0'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href='wp-content/plugins/elementor/assets/css/conditionals/e-swiper.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='widget-image-carousel-css'
        href='wp-content/plugins/elementor/assets/css/widget-image-carousel.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='widget-counter-css'
        href='wp-content/plugins/elementor/assets/css/widget-counter.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='e-animation-float-css'
        href='wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-float.mine7a7.css?ver=3.34.0'
        media='all' />
    <link rel='stylesheet' id='widget-icon-list-css'
        href='wp-content/plugins/elementor/assets/css/widget-icon-list.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='widget-spacer-css'
        href='wp-content/plugins/elementor/assets/css/widget-spacer.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='elementor-post-363-css'
        href='wp-content/uploads/sites/270/elementor/css/post-3639163.css?ver=1732242537' media='all' />
    <link rel='stylesheet' id='elementor-post-369-css'
        href='wp-content/uploads/sites/270/elementor/css/post-3699163.css?ver=1732242537' media='all' />
    <link rel='stylesheet' id='text-editor-style-css'
        href='wp-content/plugins/metform/public/assets/css/text-editor3b71.css?ver=3.5.0' media='all' />
    <link rel='stylesheet' id='hello-elementor-css'
        href='wp-content/themes/hello-elementor/style.min1102.css?ver=2.8.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='wp-content/themes/hello-elementor/theme.min1102.css?ver=2.8.1' media='all' />
    <link rel='stylesheet' id='hfe-elementor-icons-css'
        href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min705c.css?ver=5.34.0'
        media='all' />
    <link rel='stylesheet' id='hfe-icons-list-css'
        href='wp-content/plugins/elementor/assets/css/widget-icon-list.min44b4.css?ver=3.24.3' media='all' />
    <link rel='stylesheet' id='hfe-social-icons-css'
        href='wp-content/plugins/elementor/assets/css/widget-social-icons.min2401.css?ver=3.24.0' media='all' />
    <link rel='stylesheet' id='hfe-social-share-icons-brands-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands52d5.css?ver=5.15.3' media='all' />
    <link rel='stylesheet' id='hfe-social-share-icons-fontawesome-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome52d5.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='hfe-nav-menu-icons-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid52d5.css?ver=5.15.3' media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css'
        href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles3621.css?ver=3.7.8'
        media='all' />
    <link rel='stylesheet' id='ekit-responsive-css'
        href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive3621.css?ver=3.7.8'
        media='all' />
    <link rel='stylesheet' id='elementor-gf-roboto-css'
        href='https://fonts.googleapis.com/css?family=Roboto:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=auto'
        media='all' />
    <link rel='stylesheet' id='elementor-gf-robotoslab-css'
        href='https://fonts.googleapis.com/css?family=Roboto+Slab:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=auto'
        media='all' />
    <link rel='stylesheet' id='elementor-gf-opensans-css'
        href='https://fonts.googleapis.com/css?family=Open+Sans:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=auto'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-jkiticon-css'
        href='wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon41fe.css?ver=3.0.1' media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css'
        href='wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons3621.css?ver=3.7.8'
        media='all' />
    <script src="wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.mine7a7.js?ver=3.34.0"
        id="font-awesome-4-shim-js"></script>
    <script src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script id="jquery-js-after">
        ! function($) {
            "use strict";
            $(document).ready(function() {
                $(this).scrollTop() > 100 && $(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"), $(
                    window).scroll(function() {
                    $(this).scrollTop() < 100 ? $(".hfe-scroll-to-top-wrap").fadeOut(300) : $(
                        ".hfe-scroll-to-top-wrap").fadeIn(300)
                }), $(".hfe-scroll-to-top-wrap").on("click", function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 300);
                    return !1
                })
            })
        }(jQuery);
        ! function($) {
            'use strict';
            $(document).ready(function() {
                var bar = $('.hfe-reading-progress-bar');
                if (!bar.length) return;
                $(window).on('scroll', function() {
                    var s = $(window).scrollTop(),
                        d = $(document).height() - $(window).height(),
                        p = d ? s / d * 100 : 0;
                    bar.css('width', p + '%')
                });
            });
        }(jQuery);
        //# sourceURL=jquery-js-after
    </script>
    <script src="wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.js?ver=1.0.23"
        id="template-kit-export-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.9" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index42dc.html?p=6' />
    <meta name="generator"
        content="Elementor 3.34.0; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    @stack('styles')
</head>

<body
    class="wp-singular envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-6 wp-theme-hello-elementor ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-6">
    <div id="page" class="hfeed site">

        <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
            <p class="main-title bhf-hidden" itemprop="headline"><a href="https://kitpro.site/fundpro"
                    title="{{ config('app.name') }}" rel="home">{{ config('app.name') }}</a></p>
            <div data-elementor-type="wp-post" data-elementor-id="363" class="elementor elementor-363">
                <div class="elementor-element elementor-element-dd47b18 e-flex e-con-boxed e-con e-parent"
                    data-id="dd47b18" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-d03d991 e-flex e-con-boxed e-con e-child"
                            data-id="d03d991" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-751864f e-con-full e-flex e-con e-child"
                                    data-id="751864f" data-element_type="container">
                                    <div class="elementor-element elementor-element-e1f4d88 elementor-widget elementor-widget-image"
                                        data-id="e1f4d88" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img fetchpriority="high" width="800" height="270"
                                                src="{{ asset('img/logo-full.png') }}"
                                                class="attachment-large size-large wp-image-852" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6d7bddf e-flex e-con-boxed e-con e-child"
                                    data-id="6d7bddf" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-1d34ed2 hfe-nav-menu__align-right hfe-submenu-icon-arrow hfe-submenu-animation-none hfe-link-redirect-child hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
                                            data-id="1d34ed2" data-element_type="widget"
                                            data-settings="{&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:91,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;30&quot;,&quot;right&quot;:&quot;30&quot;,&quot;bottom&quot;:&quot;30&quot;,&quot;left&quot;:&quot;30&quot;,&quot;isLinked&quot;:true},&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;220&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
                                            data-widget_type="navigation-menu.default">
                                            <div class="elementor-widget-container">
                                                <div class="hfe-nav-menu hfe-layout-horizontal hfe-nav-menu-layout horizontal hfe-pointer__none"
                                                    data-layout="horizontal" data-last-item="cta">
                                                    <div role="button"
                                                        class="hfe-nav-menu__toggle elementor-clickable"
                                                        tabindex="0" aria-label="Menu Toggle">
                                                        <span class="screen-reader-text">Menu</span>
                                                        <div class="hfe-nav-menu-icon">
                                                            <i aria-hidden="true"
                                                                class="icon icon-menu-button-of-three-horizontal-lines"></i>
                                                        </div>
                                                    </div>
                                                    <nav class="hfe-nav-menu__layout-horizontal hfe-nav-menu__submenu-arrow"
                                                        data-toggle-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;icon icon-menu-button-of-three-horizontal-lines&quot;&gt;&lt;/i&gt;"
                                                        data-close-icon="&lt;svg aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;e-font-icon-svg e-far-window-close&quot; viewBox=&quot;0 0 512 512&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;&lt;path d=&quot;M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 394c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V86c0-3.3 2.7-6 6-6h404c3.3 0 6 2.7 6 6v340zM356.5 194.6L295.1 256l61.4 61.4c4.6 4.6 4.6 12.1 0 16.8l-22.3 22.3c-4.6 4.6-12.1 4.6-16.8 0L256 295.1l-61.4 61.4c-4.6 4.6-12.1 4.6-16.8 0l-22.3-22.3c-4.6-4.6-4.6-12.1 0-16.8l61.4-61.4-61.4-61.4c-4.6-4.6-4.6-12.1 0-16.8l22.3-22.3c4.6-4.6 12.1-4.6 16.8 0l61.4 61.4 61.4-61.4c4.6-4.6 12.1-4.6 16.8 0l22.3 22.3c4.7 4.6 4.7 12.1 0 16.8z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;"
                                                        data-full-width="yes">
                                                        <ul id="menu-1-1d34ed2" class="hfe-nav-menu">
                                                            <li id="menu-item-311"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu {{ request()->routeIs('home') ? 'current-menu-item' : '' }}"
                                                                style="margin-right: 30px">
                                                                <a href="{{ route('home') }}"
                                                                    class="hfe-menu-item">Home</a>
                                                            </li>
                                                            <li id="menu-item-312"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu {{ request()->routeIs('about') ? 'current-menu-item' : '' }}"
                                                                style="margin-right: 30px">
                                                                <a href="{{ route('about') }}"
                                                                    class="hfe-menu-item">About Us</a>
                                                            </li>
                                                            <li id="menu-item-313"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu {{ request()->routeIs('whitepaper') ? 'current-menu-item' : '' }}"
                                                                style="margin-right: 30px">
                                                                <a href="{{ route('whitepaper') }}"
                                                                    class="hfe-menu-item">Whitepaper</a>
                                                            </li>
                                                            <li id="menu-item-313"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu {{ request()->routeIs('terms') ? 'current-menu-item' : '' }}"
                                                                style="margin-right: 30px">
                                                                <a href="{{ route('terms') }}"
                                                                    class="hfe-menu-item">Terms and Conditions</a>
                                                            </li>
                                                            <li id="menu-item-313"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu {{ request()->routeIs('contact') ? 'current-menu-item' : '' }}"
                                                                style="margin-right: 30px">
                                                                <a href="{{ route('contact') }}"
                                                                    class="hfe-menu-item">Contact Us</a>
                                                            </li>
                                                            <li id="menu-item-321"
                                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu {{ request()->routeIs('login') ? 'current-menu-item' : '' }}">
                                                                <a href="{{ route('login') }}"
                                                                    class="hfe-menu-item">Login / Register</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
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
        </header>

        @yield('content')

        <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
            <div class='footer-width-fixer'>
                <div data-elementor-type="wp-post" data-elementor-id="369" class="elementor elementor-369">
                    <div class="elementor-element elementor-element-d8b82aa e-flex e-con-boxed e-con e-parent"
                        data-id="d8b82aa" data-element_type="container">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-330aeec e-flex e-con-boxed e-con e-child"
                                data-id="330aeec" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-85ed20d e-flex e-con-boxed e-con e-child"
                                        data-id="85ed20d" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-664fb9a e-flex e-con-boxed e-con e-child"
                                                data-id="664fb9a" data-element_type="container"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-41a04f4 e-con-full e-flex e-con e-child"
                                                        data-id="41a04f4" data-element_type="container">
                                                        <div class="elementor-element elementor-element-828b674 elementor-widget elementor-widget-image"
                                                            data-id="828b674" data-element_type="widget"
                                                            data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <img width="800" height="270"
                                                                    src="{{ asset('img/logo-full-light.png') }}"
                                                                    class="attachment-large size-large wp-image-856"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-cfaeae1 elementor-widget elementor-widget-text-editor"
                                                            data-id="cfaeae1" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>A Profitable And Reliable Company With An Unblemished
                                                                    Reputation In The Field Of Crypto Trading And
                                                                    Investment In The Global Financial Market. </p>
                                                            </div>
                                                        </div>
                                                        <div style="display: none"
                                                            class="elementor-element elementor-element-fb6aa36 e-grid-align-left elementor-shape-circle e-grid-align-mobile-center elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                            data-id="fb6aa36" data-element_type="widget"
                                                            data-widget_type="social-icons.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-social-icons-wrapper elementor-grid"
                                                                    role="list">
                                                                    <span class="elementor-grid-item" role="listitem">
                                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-animation-shrink elementor-repeater-item-17e4b36"
                                                                            target="_blank">
                                                                            <span
                                                                                class="elementor-screen-only">Facebook</span>
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-facebook"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                                                                </path>
                                                                            </svg> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item" role="listitem">
                                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-1d7e86a"
                                                                            target="_blank">
                                                                            <span
                                                                                class="elementor-screen-only">Twitter</span>
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-twitter"
                                                                                viewBox="0 0 512 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                                                </path>
                                                                            </svg> </a>
                                                                    </span>
                                                                    <span class="elementor-grid-item" role="listitem">
                                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-7c6e50e"
                                                                            target="_blank">
                                                                            <span
                                                                                class="elementor-screen-only">Youtube</span>
                                                                            <svg aria-hidden="true"
                                                                                class="e-font-icon-svg e-fab-youtube"
                                                                                viewBox="0 0 576 512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                                                                </path>
                                                                            </svg> </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-2062622 e-flex e-con-boxed e-con e-child"
                                                        data-id="2062622" data-element_type="container">
                                                        <div class="e-con-inner">
                                                            <div class="elementor-element elementor-element-61e7ab7 e-con-full e-flex e-con e-child"
                                                                data-id="61e7ab7" data-element_type="container">
                                                                <div class="elementor-element elementor-element-a80b4fd e-flex e-con-boxed e-con e-child"
                                                                    data-id="a80b4fd" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-ad0816c elementor-widget elementor-widget-heading"
                                                                            data-id="ad0816c"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h5
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    quick links</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-c5d0858 elementor-tablet-align-left elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                            data-id="c5d0858"
                                                                            data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                        href="{{ route('terms') }}">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Condition</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-522b7a7 elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                            data-id="522b7a7"
                                                                            data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                        href="#">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Privacy
                                                                                                Policy</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-34ae1f4 elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                            data-id="34ae1f4"
                                                                            data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                        href="{{ route('contact') }}">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Support</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-2889fc9 elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                            data-id="2889fc9"
                                                                            data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                        href="{{ route('contact') }}">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Help
                                                                                                Center</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-8531e33 e-con-full e-flex e-con e-child"
                                                                data-id="8531e33" data-element_type="container">
                                                                <div class="elementor-element elementor-element-544885f e-flex e-con-boxed e-con e-child"
                                                                    data-id="544885f" data-element_type="container">
                                                                    <div class="e-con-inner">
                                                                        <div class="elementor-element elementor-element-9982069 elementor-widget elementor-widget-heading"
                                                                            data-id="9982069"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    services</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-7865096 elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                            data-id="7865096"
                                                                            data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                        href="#">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Consulting</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-04cf7fc elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                            data-id="04cf7fc"
                                                                            data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                        href="#">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Finance</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-520e765 elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                            data-id="520e765"
                                                                            data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                        href="#">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Analytics</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-19456a9 elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                            data-id="19456a9"
                                                                            data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                        href="#">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Assurance</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-09f4fa8 e-flex e-con-boxed e-con e-child"
                                                                data-id="09f4fa8" data-element_type="container">
                                                                <div class="e-con-inner">
                                                                    <div class="elementor-element elementor-element-4c3c1cb elementor-widget elementor-widget-heading"
                                                                        data-id="4c3c1cb" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                join us now!</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-0477f28 elementor-widget elementor-widget-text-editor"
                                                                        data-id="0477f28" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p>Stay updated with our latest news and
                                                                                announcements.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-e455415 elementor-widget elementor-widget-metform"
                                                                        data-id="e455415" data-element_type="widget"
                                                                        data-widget_type="metform.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div id="mf-response-props-id-259"
                                                                                data-previous-steps-style=""
                                                                                data-editswitchopen=""
                                                                                data-response_type="alert"
                                                                                data-erroricon="fas fa-exclamation-triangle"
                                                                                data-successicon="fas fa-check"
                                                                                data-messageposition="top"
                                                                                class="   mf-scroll-top-no">
                                                                                <div class="formpicker_warper formpicker_warper_editable"
                                                                                    data-metform-formpicker-key="259">

                                                                                    <div
                                                                                        class="elementor-widget-container">

                                                                                        <div id="metform-wrap-e455415-259"
                                                                                            class="mf-form-wrapper"
                                                                                            data-form-id="259"
                                                                                            data-action="https://kitpro.site/fundpro/wp-json/metform/v1/entries/insert/259"
                                                                                            data-wp-nonce="e7d417ccf2"
                                                                                            data-form-nonce="036ddbc7e5"
                                                                                            data-quiz-summery="false"
                                                                                            data-save-progress="false"
                                                                                            data-form-type="contact_form"
                                                                                            data-stop-vertical-effect="">
                                                                                        </div>


                                                                                        <!-----------------------------
                                                                                        * controls_data : find the the props passed indie of data attribute
                                                                                        * props.SubmitResponseMarkup : contains the markup of error or success message
                                                                                        * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
                                                                                        --------------------------- -->

                                                                                        <script type="text/mf"
                                                                                            class="mf-template">
                                                                                            function controls_data (value){
                                                                                                let currentWrapper = "mf-response-props-id-259";
                                                                                                let currentEl = document.getElementById(currentWrapper);
                                                                                                
                                                                                                return currentEl ? currentEl.dataset[value] : false
                                                                                            }


                                                                                            let is_edit_mode = '' ? true : false;
                                                                                            let message_position = controls_data('messageposition') || 'top';

                                                                                            
                                                                                            let message_successIcon = controls_data('successicon') || '';
                                                                                            let message_errorIcon = controls_data('erroricon') || '';
                                                                                            let message_editSwitch = controls_data('editswitchopen') === 'yes' ? true : false;
                                                                                            let message_proClass = controls_data('editswitchopen') === 'yes' ? 'mf_pro_activated' : '';
                                                                                            
                                                                                            let is_dummy_markup = is_edit_mode && message_editSwitch ? true : false;

                                                                                            
                                                                                            return html`
                                                                                                <form
                                                                                                    className="metform-form-content"
                                                                                                    ref=${parent.formContainerRef}
                                                                                                    onSubmit=${ validation.handleSubmit( parent.handleFormSubmit ) }
                                                                                                
                                                                                                    >
                                                                                            
                                                                                            
                                                                                                    ${is_dummy_markup ? message_position === 'top' ?  props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
                                                                                                    ${is_dummy_markup ? ' ' :  message_position === 'top' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

                                                                                                    <!--------------------------------------------------------
                                                                                                    *** IMPORTANT / DANGEROUS ***
                                                                                                    ${html``} must be used as in immediate child of "metform-form-main-wrapper"
                                                                                                    class otherwise multistep form will not run at all
                                                                                                    ---------------------------------------------------------->

                                                                                                    <div className="metform-form-main-wrapper" key=${'hide-form-after-submit'} ref=${parent.formRef}>
                                                                                                    ${html`
                                                                                                                <div data-elementor-type="wp-post" key="2" data-elementor-id="259" className="elementor elementor-259">
                                                                                                        <div className="elementor-element elementor-element-4f67360 e-flex e-con-boxed e-con e-parent" data-id="4f67360" data-element_type="container">
                                                                                                            <div className="e-con-inner">
                                                                                                <div className="elementor-element elementor-element-ecd6dc8 e-flex e-con-boxed e-con e-child" data-id="ecd6dc8" data-element_type="container">
                                                                                                            <div className="e-con-inner">
                                                                                                <div className="elementor-element elementor-element-d94f5f4 e-flex e-con-boxed e-con e-child" data-id="d94f5f4" data-element_type="container">
                                                                                                            <div className="e-con-inner">
                                                                                                        <div className="elementor-element elementor-element-39deee3 elementor-widget elementor-widget-mf-email" data-id="39deee3" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
                                                                                                        <div className="elementor-widget-container">
                                                                                                            
                                                                                                <div className="mf-input-wrapper">
                                                                                                    
                                                                                                    <input 
                                                                                                type="email" 
                                                                                                
                                                                                                defaultValue="" 
                                                                                                className="mf-input " 
                                                                                                id="mf-input-email-39deee3" 
                                                                                                name="mf-email" 
                                                                                                placeholder="${ parent.decodeEntities(`Email`) } " 
                                                                                                
                                                                                                onBlur=${parent.handleChange} onFocus=${parent.handleChange} aria-invalid=${validation.errors['mf-email'] ? 'true' : 'false' } 
                                                                                                ref=${el=> parent.activateValidation({"message":"This field is required.","emailMessage":"Please enter a valid Email address","minLength":1,"maxLength":"","type":"none","required":false,"expression":"null"}, el)}
                                                                                                            />

                                                                                                        <${validation.ErrorMessage} 
                                                                                                errors=${validation.errors} 
                                                                                                name="mf-email" 
                                                                                                as=${html`<span className="mf-error-message"></span>`}
                                                                                            />
                                                                                            
                                                                                                    </div>

                                                                                                </div>
                                                                                                </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                        <div className="elementor-element elementor-element-68594c9 e-con-full e-flex e-con e-child" data-id="68594c9" data-element_type="container">
                                                                                                <div className="elementor-element elementor-element-d1a00fd mf-btn--justify mf-btn--tablet-justify mf-btn--mobile-justify elementor-widget elementor-widget-mf-button" data-id="d1a00fd" data-element_type="widget" data-widget_type="mf-button.default">
                                                                                                <div className="elementor-widget-container">
                                                                                                            <div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
                                                                                                            <button type="submit" className="metform-btn metform-submit-btn " id="">
                                                                                                    <span>${ parent.decodeEntities(`Subscribe`) } </span>
                                                                                                </button>
                                                                                                    </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                                </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </div>
                                                                                                            `}
                                                                                                    </div>

                                                                                                    ${is_dummy_markup ? message_position === 'bottom' ? props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
                                                                                                    ${is_dummy_markup ? ' ' : message_position === 'bottom' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}
                                                                                                
                                                                                                </form>
                                                                                            `
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
                                    </div>
                                    <div class="elementor-element elementor-element-edab2a1 e-flex e-con-boxed e-con e-child"
                                        data-id="edab2a1" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-d2cd49b elementor-widget elementor-widget-text-editor"
                                                data-id="d2cd49b" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Copyright © 2026 {{ config('app.name') }} | Powered by
                                                        {{ config('app.name') }}
                                                    </p>
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
        </footer>
    </div><!-- #page -->
    <script type="speculationrules">
    {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/fundpro/*"},{"not":{"href_matches":["/fundpro/wp-*.php","/fundpro/wp-admin/*","/fundpro/wp-content/uploads/sites/270/*","/fundpro/wp-content/*","/fundpro/wp-content/plugins/*","/fundpro/wp-content/themes/hello-elementor/*","/fundpro/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
    </script>
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <link rel='stylesheet' id='jeg-dynamic-style-css'
        href='wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles6f3e.css?ver=1.3.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-shrink-css'
        href='wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-shrink.mine7a7.css?ver=3.34.0'
        media='all' />
    <link rel='stylesheet' id='widget-social-icons-css'
        href='wp-content/plugins/elementor/assets/css/widget-social-icons.mine7a7.css?ver=3.34.0' media='all' />
    <link rel='stylesheet' id='e-apple-webkit-css'
        href='wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.mine7a7.css?ver=3.34.0'
        media='all' />
    <link rel='stylesheet' id='metform-ui-css'
        href='wp-content/plugins/metform/public/assets/css/metform-ui3b71.css?ver=3.5.0' media='all' />
    <link rel='stylesheet' id='metform-style-css'
        href='wp-content/plugins/metform/public/assets/css/style3b71.css?ver=3.5.0' media='all' />
    <link rel='stylesheet' id='elementor-post-259-css'
        href='wp-content/uploads/sites/270/elementor/css/post-2599163.css?ver=1732242537' media='all' />
    <script src="wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1"
        id="jquery-numerator-js"></script>
    <script src="wp-content/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0"
        id="hello-theme-frontend-js"></script>
    <script src="wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script3621.js?ver=3.7.8"
        id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
        var elementskit = {
            resturl: 'https://kitpro.site/fundpro/wp-json/elementskit/v1/',
        }


        //# sourceURL=elementskit-framework-js-frontend-js-after
    </script>
    <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts3621.js?ver=3.7.8"
        id="ekit-widget-scripts-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min430c.js?ver=11.6.16"
        id="sweetalert2-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/webpack.runtime.mine7a7.js?ver=3.34.0"
        id="elementor-webpack-runtime-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/frontend-modules.mine7a7.js?ver=3.34.0"
        id="elementor-frontend-modules-js"></script>
    <script src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.34.0",
            "is_static": false,
            "experimentalFeatures": {
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "hello-theme-header-footer": true,
                "nested-elements": true,
                "home_screen": true,
                "global_classes_should_enforce_capabilities": true,
                "e_variables": true,
                "cloud-library": true,
                "e_opt_in_v4_page": true,
                "e_interactions": true,
                "import-export-customization": true
            },
            "urls": {
                "assets": "https:\/\/kitpro.site\/fundpro\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/kitpro.site\/fundpro\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/kitpro.site\/fundpro\/wp-content\/uploads\/sites\/270"
            },
            "nonces": {
                "floatingButtonsClickTracking": "ce4f548747"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 6,
                "title": "Home%20%E2%80%93%20Fundpro",
                "excerpt": "",
                "featuredImage": "https:\/\/kitpro.site\/fundpro\/wp-content\/uploads\/sites\/270\/2024\/09\/Home-516x1024.jpg"
            }
        };
        //# sourceURL=elementor-frontend-js-before
    </script>
    <script src="wp-content/plugins/elementor/assets/js/frontend.mine7a7.js?ver=3.34.0" id="elementor-frontend-js"></script>
    <script id="elementor-frontend-js-after">
        var jkit_ajax_url = "indexe2f2.html?jkit-ajax-request=jkit_elements",
            jkit_nonce = "519d794b0b";
        //# sourceURL=elementor-frontend-js-after
    </script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/video-button41fe.js?ver=3.0.1"
        id="jkit-element-videobutton-js"></script>
    <script src="wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element41fe.js?ver=3.0.1"
        id="jkit-sticky-element-js"></script>
    <script src="wp-content/plugins/header-footer-elementor/inc/js/frontend653d.js?ver=2.7.1" id="hfe-frontend-js-js">
    </script>
    <script src="wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min94a4.js?ver=8.4.5" id="swiper-js"></script>
    <script src="wp-content/plugins/metform/public/assets/js/htm3b71.js?ver=3.5.0" id="htm-js"></script>
    <script src="wp-includes/js/dist/vendor/react.mine1ab.js?ver=18.3.1.1" id="react-js"></script>
    <script src="wp-includes/js/dist/vendor/react-dom.mine1ab.js?ver=18.3.1.1" id="react-dom-js"></script>
    <script src="wp-includes/js/dist/escape-html.min3a9d.js?ver=6561a406d2d232a6fbd2" id="wp-escape-html-js"></script>
    <script src="wp-includes/js/dist/element.min8eb0.js?ver=6a582b0c827fa25df3dd" id="wp-element-js"></script>
    <script id="metform-app-js-extra">
        var mf = {
            "postType": "envato_tk_templates",
            "restURI": "https://kitpro.site/fundpro/wp-json/metform/v1/forms/views/"
        };
        //# sourceURL=metform-app-js-extra
    </script>
    <script src="wp-content/plugins/metform/public/assets/js/app3b71.js?ver=3.5.0" id="metform-app-js"></script>
    <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min3621.js?ver=3.7.8"
        id="animate-circle-js"></script>
    <script id="elementskit-elementor-js-extra">
        var ekit_config = {
            "ajaxurl": "https://kitpro.site/fundpro/wp-admin/admin-ajax.php",
            "nonce": "8cd2e12297"
        };
        //# sourceURL=elementskit-elementor-js-extra
    </script>
    <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor3621.js?ver=3.7.8"
        id="elementskit-elementor-js"></script>
    <script id="wp-emoji-settings" type="application/json">
    {"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"https://kitpro.site/fundpro/wp-includes/js/wp-emoji-release.min.js?ver=6.9"}}
    </script>
    <script type="module">
        /*! This file is auto-generated */
        const a = JSON.parse(document.getElementById("wp-emoji-settings").textContent),
            o = (window._wpemojiSettings = a, "wpEmojiSettingsSupports"),
            s = ["flag", "emoji"];

        function i(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function c(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data);
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0);
            const a = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data);
            return t.every((e, t) => e === a[t])
        }

        function p(e, t) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var n = e.getImageData(16, 16, 1, 1);
            for (let e = 0; e < n.data.length; e++)
                if (0 !== n.data[e]) return !1;
            return !0
        }

        function u(e, t, n, a) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e,
                        "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e,
                        "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                        "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                    );
                case "emoji":
                    return !a(e, "\ud83e\u1fac8")
            }
            return !1
        }

        function f(e, t, n, a) {
            let r;
            const o = (r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ?
                    new OffscreenCanvas(300, 150) : document.createElement("canvas")).getContext("2d", {
                    willReadFrequently: !0
                }),
                s = (o.textBaseline = "top", o.font = "600 32px Arial", {});
            return e.forEach(e => {
                s[e] = t(o, e, n, a)
            }), s
        }

        function r(e) {
            var t = document.createElement("script");
            t.src = e, t.defer = !0, document.head.appendChild(t)
        }
        a.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, new Promise(t => {
            let n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e
                        .timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), c
                            .toString(), p.toString()
                        ].join(",") + "));",
                        a = new Blob([e], {
                            type: "text/javascript"
                        });
                    const r = new Worker(URL.createObjectURL(a), {
                        name: "wpTestEmojiSupports"
                    });
                    return void(r.onmessage = e => {
                        i(n = e.data), r.terminate(), t(n)
                    })
                } catch (e) {}
                i(n = f(s, u, c, p))
            }
            t(n)
        }).then(e => {
            for (const n in e) a.supports[n] = e[n], a.supports.everything = a.supports.everything && a.supports[n],
                "flag" !== n && (a.supports.everythingExceptFlag = a.supports.everythingExceptFlag && a.supports[
                    n]);
            var t;
            a.supports.everythingExceptFlag = a.supports.everythingExceptFlag && !a.supports.flag, a.supports
                .everything || ((t = a.source || {}).concatemoji ? r(t.concatemoji) : t.wpemoji && t.twemoji && (r(t
                    .twemoji), r(t.wpemoji)))
        });
        //# sourceURL=https://kitpro.site/fundpro/wp-includes/js/wp-emoji-loader.min.js
    </script>

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



</body>

</html>
