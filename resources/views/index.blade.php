<!DOCTYPE html>
<html lang="en">

<head>
{{-- This is a test --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
                    },
                    colors: {
                        red: {
                            '50': '#ffebee',
                            '100': '#ffcdd2',
                            '200': '#ef9a9a',
                            '300': '#e57373',
                            '400': '#ef5350',
                            '500': '#f44336',
                            '600': '#e53935',
                            '700': '#d32f2f',
                            '800': '#c62828',
                            '900': '#b71c1c',
                            'accent-100': '#ff8a80',
                            'accent-200': '#ff5252',
                            'accent-400': '#ff1744',
                            'accent-700': '#d50000',
                        },
                        purple: {
                            50: '#f3e5f5',
                            100: '#e1bee7',
                            200: '#ce93d8',
                            300: '#ba68c8',
                            400: '#ab47bc',
                            500: '#9c27b0',
                            600: '#8e24aa',
                            700: '#7b1fa2',
                            800: '#6a1b9a',
                            900: '#4a148c',
                            'accent-100': '#ea80fc',
                            'accent-200': '#e040fb',
                            'accent-400': '#d500f9',
                            'accent-700': '#aa00ff',
                        },
                        'deep-purple': {
                            50: '#ede7f6',
                            100: '#d1c4e9',
                            200: '#b39ddb',
                            300: '#9575cd',
                            400: '#7e57c2',
                            500: '#673ab7',
                            600: '#5e35b1',
                            700: '#512da8',
                            800: '#4527a0',
                            900: '#311b92',
                            'accent-100': '#b388ff',
                            'accent-200': '#7c4dff',
                            'accent-400': '#651fff',
                            'accent-700': '#6200ea',
                        },
                        teal: {
                            50: '#e0f2f1',
                            100: '#b2dfdb',
                            200: '#80cbc4',
                            300: '#4db6ac',
                            400: '#26a69a',
                            500: '#009688',
                            600: '#00897b',
                            700: '#00796b',
                            800: '#00695c',
                            900: '#004d40',
                            'accent-100': '#a7ffeb',
                            'accent-200': '#64ffda',
                            'accent-400': '#1de9b6',
                            'accent-700': '#00bfa5',
                        },
                        indigo: {
                            50: '#e8eaf6',
                            100: '#c5cae9',
                            200: '#9fa8da',
                            300: '#7986cb',
                            400: '#5c6bc0',
                            500: '#3f51b5',
                            600: '#3949ab',
                            700: '#303f9f',
                            800: '#283593',
                            900: '#1a237e',
                            'accent-100': '#8c9eff',
                            'accent-200': '#536dfe',
                            'accent-400': '#3d5afe',
                            'accent-700': '#304ffe',
                        },
                        pink: {
                            50: '#fce4ec',
                            100: '#f8bbd0',
                            200: '#f48fb1',
                            300: '#f06292',
                            400: '#ec407a',
                            500: '#e91e63',
                            600: '#d81b60',
                            700: '#c2185b',
                            800: '#ad1457',
                            900: '#880e4f',
                            'accent-100': '#ff80ab',
                            'accent-200': '#ff4081',
                            'accent-400': '#f50057',
                            'accent-700': '#c51162',
                        },
                        blue: {
                            50: '#e3f2fd',
                            100: '#bbdefb',
                            200: '#90caf9',
                            300: '#64b5f6',
                            400: '#42a5f5',
                            500: '#2196f3',
                            600: '#1e88e5',
                            700: '#1976d2',
                            800: '#1565c0',
                            900: '#0d47a1',
                            'accent-100': '#82b1ff',
                            'accent-200': '#448aff',
                            'accent-400': '#2979ff',
                            'accent-700': '#2962ff',
                        },
                        'light-blue': {
                            50: '#e1f5fe',
                            100: '#b3e5fc',
                            200: '#81d4fa',
                            300: '#4fc3f7',
                            400: '#29b6f6',
                            500: '#03a9f4',
                            600: '#039be5',
                            700: '#0288d1',
                            800: '#0277bd',
                            900: '#01579b',
                            'accent-100': '#80d8ff',
                            'accent-200': '#40c4ff',
                            'accent-400': '#00b0ff',
                            'accent-700': '#0091ea',
                        },
                        cyan: {
                            50: '#e0f7fa',
                            100: '#b2ebf2',
                            200: '#80deea',
                            300: '#4dd0e1',
                            400: '#26c6da',
                            500: '#00bcd4',
                            600: '#00acc1',
                            700: '#0097a7',
                            800: '#00838f',
                            900: '#006064',
                            'accent-100': '#84ffff',
                            'accent-200': '#18ffff',
                            'accent-400': '#00e5ff',
                            'accent-700': '#00b8d4',
                        },
                        gray: {
                            50: '#fafafa',
                            100: '#f5f5f5',
                            200: '#eeeeee',
                            300: '#e0e0e0',
                            400: '#bdbdbd',
                            500: '#9e9e9e',
                            600: '#757575',
                            700: '#616161',
                            800: '#424242',
                            900: '#212121',
                        },
                        'blue-gray': {
                            50: '#eceff1',
                            100: '#cfd8dc',
                            200: '#b0bec5',
                            300: '#90a4ae',
                            400: '#78909c',
                            500: '#607d8b',
                            600: '#546e7a',
                            700: '#455a64',
                            800: '#37474f',
                            900: '#263238',
                        },
                        green: {
                            50: '#e8f5e9',
                            100: '#c8e6c9',
                            200: '#a5d6a7',
                            300: '#81c784',
                            400: '#66bb6a',
                            500: '#4caf50',
                            600: '#43a047',
                            700: '#388e3c',
                            800: '#2e7d32',
                            900: '#1b5e20',
                            'accent-100': '#b9f6ca',
                            'accent-200': '#69f0ae',
                            'accent-400': '#00e676',
                            'accent-700': '#00c853',
                        },
                        'light-green': {
                            50: '#f1f8e9',
                            100: '#dcedc8',
                            200: '#c5e1a5',
                            300: '#aed581',
                            400: '#9ccc65',
                            500: '#8bc34a',
                            600: '#7cb342',
                            700: '#689f38',
                            800: '#558b2f',
                            900: '#33691e',
                            'accent-100': '#ccff90',
                            'accent-200': '#b2ff59',
                            'accent-400': '#76ff03',
                            'accent-700': '#64dd17',
                        },
                        lime: {
                            50: '#f9fbe7',
                            100: '#f0f4c3',
                            200: '#e6ee9c',
                            300: '#dce775',
                            400: '#d4e157',
                            500: '#cddc39',
                            600: '#c0ca33',
                            700: '#afb42b',
                            800: '#9e9d24',
                            900: '#827717',
                            'accent-100': '#f4ff81',
                            'accent-200': '#eeff41',
                            'accent-400': '#c6ff00',
                            'accent-700': '#aeea00',
                        },
                        amber: {
                            50: '#fff8e1',
                            100: '#ffecb3',
                            200: '#ffe082',
                            300: '#ffd54f',
                            400: '#ffca28',
                            500: '#ffc107',
                            600: '#ffb300',
                            700: '#ffa000',
                            800: '#ff8f00',
                            900: '#ff6f00',
                            'accent-100': '#ffe57f',
                            'accent-200': '#ffd740',
                            'accent-400': '#ffc400',
                            'accent-700': '#ffab00',
                        },
                        yellow: {
                            50: '#fffde7',
                            100: '#fff9c4',
                            200: '#fff59d',
                            300: '#fff176',
                            400: '#ffee58',
                            500: '#ffeb3b',
                            600: '#fdd835',
                            700: '#fbc02d',
                            800: '#f9a825',
                            900: '#f57f17',
                            'accent-100': '#ffff8d',
                            'accent-200': '#ffff00',
                            'accent-400': '#ffea00',
                            'accent-700': '#ffd600',
                        },
                        orange: {
                            50: '#fff3e0',
                            100: '#ffe0b2',
                            200: '#ffcc80',
                            300: '#ffb74d',
                            400: '#ffa726',
                            500: '#ff9800',
                            600: '#fb8c00',
                            700: '#f57c00',
                            800: '#ef6c00',
                            900: '#e65100',
                            'accent-100': '#ffd180',
                            'accent-200': '#ffab40',
                            'accent-400': '#ff9100',
                            'accent-700': '#ff6d00',
                        },
                        'deep-orange': {
                            50: '#fbe9e7',
                            100: '#ffccbc',
                            200: '#ffab91',
                            300: '#ff8a65',
                            400: '#ff7043',
                            500: '#ff5722',
                            600: '#f4511e',
                            700: '#e64a19',
                            800: '#d84315',
                            900: '#bf360c',
                            'accent-100': '#ff9e80',
                            'accent-200': '#ff6e40',
                            'accent-400': '#ff3d00',
                            'accent-700': '#dd2c00',
                        },
                        brown: {
                            50: '#efebe9',
                            100: '#d7ccc8',
                            200: '#bcaaa4',
                            300: '#a1887f',
                            400: '#8d6e63',
                            500: '#795548',
                            600: '#6d4c41',
                            700: '#5d4037',
                            800: '#4e342e',
                            900: '#3e2723',
                        },
                    },
                    spacing: {
                        '7': '1.75rem',
                        '9': '2.25rem',
                        '28': '7rem',
                        '80': '20rem',
                        '96': '24rem',
                    },
                    height: {
                        '1/2': '50%',
                    },
                    scale: {
                        '30': '.3',
                    },
                    boxShadow: {
                        outline: '0 0 0 3px rgba(101, 31, 255, 0.4)',
                    },
                },
            },
            variants: {
                scale: ['responsive', 'hover', 'focus', 'group-hover'],
                textColor: ['responsive', 'hover', 'focus', 'group-hover'],
                opacity: ['responsive', 'hover', 'focus', 'group-hover'],
                backgroundColor: ['responsive', 'hover', 'focus', 'group-hover'],
            },
        }
    </script>

    <style>
        .owl-carousel .owl-item img {
            height: 194px !important;
        }

    </style>
</head>

<body class="bg-gray-700">
    <header>
        <div class="bg-gray-900">
            <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center">
                        <a href="/" aria-label="Company" title="Company" class="inline-flex items-center mr-8">
                            <img src="{{ asset('logo/logo-5.png') }}" alt="{{ config('app.name') }}"
                                class="w-8">
                            <span
                                class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">{{ config('app.anme', 'COINYIELD STAKE') }}</span>
                        </a>
                        {{-- <ul class="flex items-center hidden space-x-8 lg:flex">
                            <li><a href="/" aria-label="Our product" title="Our product"
                                    class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Product</a>
                            </li>
                            <li><a href="/" aria-label="Our product" title="Our product"
                                    class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Features</a>
                            </li>
                            <li><a href="/" aria-label="Product pricing" title="Product pricing"
                                    class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Pricing</a>
                            </li>
                            <li><a href="/" aria-label="About us" title="About us"
                                    class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">About
                                    us</a></li>
                        </ul> --}}
                    </div>
                    <ul class="flex items-center hidden space-x-8 lg:flex">
                        <li><a href="/login" aria-label="Sign in" title="Sign in"
                                class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Sign
                                in</a></li>
                        <li>
                            <a href="/register"
                                class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-gray-900 transition duration-200 bg-teal-400 rounded shadow-md hover:text-white hover:bg-teal-700 focus:shadow-outline focus:outline-none"
                                aria-label="Sign up" title="Sign up">
                                Sign up
                            </a>
                        </li>
                    </ul>
                    <!-- Mobile menu -->
                    <div class="lg:hidden">
                        <button aria-label="Open Menu" title="Open Menu"
                            class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                            <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                                <path fill="currentColor"
                                    d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                                <path fill="currentColor"
                                    d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                            </svg>
                        </button>
                        <!-- Mobile menu dropdown
            <div class="absolute top-0 left-0 w-full">
              <div class="p-5 bg-white border rounded shadow-sm">
                <div class="flex items-center justify-between mb-4">
                  <div>
                    <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                      <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                      </svg>
                      <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                    </a>
                  </div>
                  <div>
                    <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                      <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                        <path
                          fill="currentColor"
                          d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </div>
                <nav>
                  <ul class="space-y-4">
                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                    <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                    <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                    <li><a href="/" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign in</a></li>
                    <li>
                      <a
                        href="/"
                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                        aria-label="Sign up"
                        title="Sign up"
                      >
                        Sign up
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="bg-gray-900">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
                <div class="flex flex-col mb-16 sm:text-center sm:mb-0">
                    <a href="/" class="mb-6 sm:mx-auto">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-teal-accent-400">
                            <svg class="w-10 h-10 text-deep-purple-900" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </a>
                    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                        <h2
                            class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-white sm:text-4xl md:mx-auto">
                            <span class="relative inline-block">
                                <svg viewBox="0 0 52 24" fill="currentColor"
                                    class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-deep-purple-accent-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                    <defs>
                                        <pattern id="700c93bf-0068-4e32-aafe-ef5b6a647708" x="0" y="0" width=".135"
                                            height=".30">
                                            <circle cx="1" cy="1" r=".7"></circle>
                                        </pattern>
                                    </defs>
                                    <rect fill="url(#700c93bf-0068-4e32-aafe-ef5b6a647708)" width="52" height="24">
                                    </rect>
                                </svg>
                                <span class="relative">The</span>
                            </span>
                            quick, brown fox jumps over a lazy dog
                        </h2>
                        <p class="text-base text-indigo-100 md:text-lg">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem
                            aperiam, eaque ipsa quae.
                        </p>
                    </div>
                    <div>
                        <a href="/register"
                            class="inline-flex items-center justify-center h-12 px-6 font-semibold tracking-wide text-teal-900 transition duration-200 bg-teal-400 rounded shadow-md hover:text-deep-purple-900 hover:bg-indigo-accent-100 focus:shadow-outline focus:outline-none">
                            Get started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
        <div class="owl-carousel owl-theme">
            <div class="mx-2 my-4 item p">
                <img src="https://gimg2.gateimg.com//image_list/1647518505878567764_zs.png" alt="">
            </div>
            <div class="mx-2 my-4 item p">
                <img src="https://gimg2.gateimg.com//image_list/1647854663190519476_zs.png" alt="">
            </div>
            <div class="mx-2 my-4 item p">
                <img src="https://gimg2.gateimg.com//image_list/1647586127109975505_zs.jpg" alt="">
            </div>
            <div class="mx-2 my-4 item p">
                <img src="https://gimg2.gateimg.com//image_list/164748932872161689_zs.jpg" alt="">
            </div>
            <div class="mx-2 my-4 item p">
                <img src="https://gimg2.gateimg.com//image_list/1647489975351582423_zs.jpg" alt="">
            </div>
            <div class="mx-2 my-4 item p">
                <img src="https://gimg2.gateimg.com//image_list/1647495595260678975_zs.png" alt="">
            </div>
        </div>
    </div>

    <div class="bg-gray-300">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase bg-teal-400 rounded-full">
                        Our Pricing
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-700 md:mx-auto sm:text-4xl">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="7e5e8ff8-1960-4094-a63a-2a0c0f922d69" x="0" y="0" width=".135"
                                    height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#7e5e8ff8-1960-4094-a63a-2a0c0f922d69)" width="52" height="24"></rect>
                        </svg>
                        <span class="relative">Get</span>
                    </span>
                    Started with Our Flexible plans
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    We offer you the most profitable and reliable cloud yield farming contracts by providing
                    daily payouts for all the contracts in the currency of the contract.
                    Start cryptocurrency and stablecoins cloud yield farming today, and get the first payout tomorrow!
                </p>
            </div>
            <div
                class="grid max-w-md gap-10 row-gap-5 lg:max-w-screen-lg sm:row-gap-10 lg:grid-cols-3 xl:max-w-screen-lg sm:mx-auto">
                <div
                    class="flex flex-col justify-between p-8 transition-shadow duration-300 bg-white border rounded shadow-sm sm:items-center hover:shadow">
                    <div class="text-center">
                        <div class="text-lg font-semibold">Silver</div>
                        <div class="flex items-center justify-center mt-2">
                            <div class="mr-1 text-5xl font-bold">$199</div>
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="text-gray-700">10 deploys per day</div>
                            <div class="text-gray-700">Powerful User Panel</div>
                            <div class="text-gray-700">Payouts Daily</div>
                            <div class="text-gray-700">24/7 Support</div>
                            <div class="text-gray-700">FDA Approved</div>
                        </div>
                    </div>
                    <div>
                        <a href="/register"
                            class="inline-flex items-center justify-center w-full h-12 px-6 mt-6 font-medium tracking-wide text-white transition duration-200 bg-gray-800 rounded shadow-md hover:bg-gray-900 focus:shadow-outline focus:outline-none">
                            Buy Silver
                        </a>
                    </div>
                </div>
                <div
                    class="relative flex flex-col justify-between p-8 transition-shadow duration-300 bg-white border border-purple-900 rounded shadow-sm sm:items-center hover:shadow">
                    <div class="absolute inset-x-0 top-0 flex justify-center -mt-3">
                        <div
                            class="inline-block px-3 py-1 text-xs font-medium tracking-wider text-white uppercase bg-purple-400 rounded">
                            Most Popular
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-lg font-semibold">Gold</div>
                        <div class="flex items-center justify-center mt-2">
                            <div class="mr-1 text-5xl font-bold">$499</div>
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="text-gray-700">200 deploys per day</div>
                            <div class="text-gray-700">Powerful User Panel</div>
                            <div class="text-gray-700">Payouts Daily</div>
                            <div class="text-gray-700">24/7 Support</div>
                            <div class="text-gray-700">FDA Approved</div>
                        </div>
                    </div>
                    <div>
                        <a href="/register"
                            class="inline-flex items-center justify-center w-full h-12 px-6 mt-6 font-medium tracking-wide text-white transition duration-200 bg-purple-400 rounded shadow-md hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                            Buy Gold
                        </a>
                    </div>
                </div>
                <div
                    class="flex flex-col justify-between p-8 transition-shadow duration-300 bg-white border rounded shadow-sm sm:items-center hover:shadow">
                    <div class="text-center">
                        <div class="text-lg font-semibold">Platimum</div>
                        <div class="flex items-center justify-center mt-2">
                            <div class="mr-1 text-5xl font-bold">$999</div>
                        </div>
                        <div class="mt-2 space-y-3">
                            <div class="text-gray-700">500 GB of storage</div>
                            <div class="text-gray-700">Powerful User Panel</div>
                            <div class="text-gray-700">Payouts Daily</div>
                            <div class="text-gray-700">24/7 Support</div>
                            <div class="text-gray-700">FDA Approved</div>
                        </div>
                    </div>
                    <div>
                        <a href="/register"
                            class="inline-flex items-center justify-center w-full h-12 px-6 mt-6 font-medium tracking-wide text-white transition duration-200 bg-gray-800 rounded shadow-md hover:bg-gray-900 focus:shadow-outline focus:outline-none">
                            Buy Platimum
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="bg-gray-500">
        <div class="px-4 mx-auto py-80 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase bg-teal-400 rounded-full">
                        Brand new
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-300 md:mx-auto sm:text-4xl">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="27df4f81-c854-45de-942a-fe90f7a300f9" x="0" y="0" width=".135"
                                    height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#27df4f81-c854-45de-942a-fe90f7a300f9)" width="52" height="24"></rect>
                        </svg>
                        <span class="relative">The</span>
                    </span>
                    quick, brown fox jumps over a lazy dog
                </h2>
                <p class="text-base text-gray-200 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam,
                    eaque
                    ipsa quae.
                </p>
            </div>
            <div class="grid max-w-screen-lg gap-8 row-gap-10 mx-auto lg:grid-cols-2">
                <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
                    <div class="mr-4">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
                            <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5 text-white">The deep ocean</h6>
                        <p class="mb-3 text-sm text-gray-300">
                            A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear. I
                            didn't even know we were calling him Big Bear. We never had the chance to.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
                    <div class="mr-4">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
                            <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5 text-white">When has justice</h6>
                        <p class="mb-3 text-sm text-gray-300">
                            Rough pomfret lemon shark plownose chimaera southern sandfish kokanee northern sea robin
                            Antarctic cod. Yellow-and-black triplefin gulper South American Lungfish mahi-mahi,
                            butterflyfish glass catfish soapfish ling gray mullet!
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
                    <div class="mr-4">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
                            <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5 text-white">Organically grow</h6>
                        <p class="mb-3 text-sm text-gray-300">
                            A slice of heaven. O for awesome, this chocka full cuzzie is as rip-off as a cracker.
                            Meanwhile,
                            in behind the bicycle shed, Hercules Morse, as big as a horse and Mrs Falani were up to no
                            good
                            with a bunch of crook pikelets.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
                    <div class="mr-4">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
                            <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5 text-white">A slice of heaven</h6>
                        <p class="mb-3 text-sm text-gray-300">
                            Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank
                            compelling. Inspiring, invest synergy capacity building, white paper; silo, unprecedented
                            challenge B-corp problem-solvers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="bg-gray-500">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase bg-teal-400 rounded-full">
                        Brand new
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="b902cd03-49cc-4166-a0ae-4ca1c31cedba" x="0" y="0" width=".135"
                                    height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#b902cd03-49cc-4166-a0ae-4ca1c31cedba)" width="52" height="24"></rect>
                        </svg>
                        <span class="relative">The</span>
                    </span>
                    quick, brown fox jumps over a lazy dog
                </h2>
                <p class="text-base text-gray-300 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam,
                    eaque ipsa quae.
                </p>
            </div>
            <div class="grid gap-10 lg:grid-cols-4 sm:grid-cols-2">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <p class="text-2xl font-bold">Step 1</p>
                        <svg class="w-6 text-gray-700 transform rotate-90 sm:rotate-0" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
                            <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
                        </svg>
                    </div>
                    <p class="text-gray-300">
                        If one examines precultural libertarianism, one is faced with a choice: either accept
                        rationalism or conclude that context.
                    </p>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <p class="text-2xl font-bold">Step 2</p>
                        <svg class="w-6 text-gray-700 transform rotate-90 sm:rotate-0" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
                            <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
                        </svg>
                    </div>
                    <p class="text-gray-300">
                        That is the true genius of America - a faith in simple dreams,, an insistence on small miracles.
                    </p>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <p class="text-2xl font-bold">Step 3</p>
                        <svg class="w-6 text-gray-700 transform rotate-90 sm:rotate-0" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
                            <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
                        </svg>
                    </div>
                    <p class="text-gray-300">
                        Those options are already baked in with this model shoot me an email clear blue water but we
                        need distributors.
                    </p>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <p class="text-2xl font-bold">Success</p>
                        <svg class="w-8 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
                            <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                        </svg>
                    </div>
                    <p class="text-gray-300">
                        Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down clap
                        of thunder.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-lg sm:text-center sm:mx-auto">
            <a href="/" aria-label="Go Home" title="Logo" class="inline-block mb-4">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
                    <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                </div>
            </a>
            <h2 class="mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-32 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="6b0188f3-b7a1-4e9b-b95e-cad916bb3042" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#6b0188f3-b7a1-4e9b-b95e-cad916bb3042)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">The</span>
                </span>
                quick, brown fox jumps over a lazy dog
            </h2>
            <p class="text-base text-gray-300 md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae.
            </p>
            <hr class="my-8 border-gray-300" />
            <p class="py-4 font-bold text-center text-gray-300">
                Coming soon!
            </p>
            <div class="flex items-center mb-3 sm:justify-center">
                <a href="#" class="mr-3 transition duration-300 hover:shadow-lg">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1000px-Download_on_the_App_Store_Badge.svg.png"
                        class="object-cover object-top w-32 mx-auto" alt="" />
                </a>
                <a href="#" class="transition duration-300 hover:shadow-lg">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/1000px-Google_Play_Store_badge_EN.svg.png"
                        class="object-cover object-top w-32 mx-auto" alt="" />
                </a>
            </div>
            <p class="max-w-xs text-xs text-gray-500 sm:text-sm sm:max-w-sm sm:mx-auto">
                Sed ut unde omnis iste natus accusantium doloremque laudantium omnis iste.
            </p>
        </div>
    </div> --}}

    <footer>
        <div class="bg-gray-900">
            <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                <div class="pb-10 mx-auto leading-7 text-gray-500">
                    <span class="font-bold uppercase">{{ config('app.name') }}</span> DOES NOT ACCEPT ANY USERS FROM
                    THE COUNTRIES OR TERRITORIES WHERE ITS ACTIVITY SHALL
                    BE ESPECIALLY LISENCED, ACCREDITATED OR REGULATED BY OTHER WAYS. YOU SHALL CHECK YOUR APPLICABLE LAW
                    AND BE FULLY RESPONSIBLE FOR ANY NEGATIVE IMPACT ARISEN FROM YOUR RESIDENCE COUNTRY REGULATIONS. IF
                    YOU ARE TRAVELLING TO ANY OF THESE COUNTRIES, YOU ACKNOWLEDGE THAT OUR SERVICES MAY BE UNAVAILABLE
                    AND/OR BLOCKED IN SUCH COUNTRIES. THE COMPANY DOES ACCEPT ONLY PARTICIPANTS:

                    <ol class="py-5 list-decimal sm:ml-14">
                        <li>
                            he/she/it is of an age of majority (at least 18 years of age), meets all other eligibility
                            criteria
                            and residency requirements, and is fully able and legally competent to use the Website,
                            enter into
                            agreement with the {{ config('app.name') }} and in doing so will not violate any other
                            agreement to which
                            he/she/it is a party.
                        </li>
                        <li>
                            he/she/it has necessary and relevant experience and knowledge to deal with cryptocurrencies
                            and
                            Blockchain-based systems, as well as full understanding of their framework, and is aware of
                            all the
                            merits, risks and any restrictions associated with cryptocurrencies and Blockchain-based
                            systems, as
                            well as knows how to manage them, and is solely responsible for any evaluations based on
                            such
                            knowledge.
                        </li>
                        <li>
                            Is not a foreign or domestic PEP.
                        </li>
                        <li>
                            he/she/it will not be using the Website for any illegal activity, including but not limited
                            to money
                            laundering and the financing of terrorism.
                        </li>
                    </ol>

                    <p>
                        Keep in mind that Bitcoin trading with margin may be subject to taxation. You are solely
                        responsible
                        for withholding, collecting, reporting, paying, settling and/or remitting any and all taxes to
                        the
                        appropriate tax authorities in such jurisdiction(s) in which You may be liable to pay tax.
                    </p>

                    <p>
                        {{ config('app.name') }} shall not be responsible for withholding, collecting, reporting,
                        paying, settling
                        and/or remitting any taxes (including, but not limited to, any income, capital gains, sales,
                        value
                        added or similar tax) which may arise from Your participation in the Bitcoin trading with
                        margin.
                    </p>

                    <p>
                        Content, research, tools, and coin symbols are for educational and illustrative purposes only
                        and do
                        not imply a recommendation or solicitation to buy or sell a particular asset or to engage in any
                        particular investment strategy its merely a window into what we are doing and speculating about
                        currently. The projections or other information regarding the likelihood of various investment
                        outcomes are hypothetical in nature, are not guaranteed for accuracy or completeness, do not
                        reflect
                        actual investment results, do not take in to consideration commissions, margin interest and
                        other
                        costs, and are not guarantees of future results. All investments involve risk, losses may exceed
                        the
                        principal invested. You alone are responsible for evaluating the merits and risks associated
                        with
                        the use of our systems, services or products.
                    </p>
                </div>
                <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
                    <p class="text-sm text-gray-500">
                        © Copyright 2020 {{ config('app.name') }} Inc. All rights reserved.
                    </p>
                    <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                                </path>
                            </svg>
                        </a>
                        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path
                                    d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                                </path>
                            </svg>
                        </a>
                        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    </script>
</body>

</html>
