<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PT Sintech Berkah Abadi</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Aclonica&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    />
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>
    <!-- Custom styles for this template with bootstrap css -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/brands.min.css"
    />
    <!-- End Custom styles for this template with bootstrap css -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">

</head>
<body class="antialiased">

<div class="wrapper" id="root">
    <!-- Header -->
    <header id="header">
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container">
                <a class="navbar-brand navbar__brand" href="/">
                    <img
                        src={{asset("img/sintech-logo.png")}} 
                        srcset={{asset("img/sintech-logo@2x.png")}} 
                        width="75"
                        height="42"
                        alt="sintech-logo"/>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item nav__item">
                            <a class="nav-link nav__link {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('welcome')}}">Beranda</a>
                        </li>
                        <li class="nav-item nav__item">
                            <a class="nav-link nav__link {{ (request()->is('tentang-kami')) ? 'active' : '' }}" href="{{route('tentang-kami')}}">Tentang kami</a>
                        </li>
                        <li class="nav-item nav__item">
                            <a class="nav-link nav__link {{ (request()->is('pelayanan')) ? 'active' : '' }}" href="{{route('pelayanan')}}">Pelayanan</a>
                        </li>
                        <li class="nav-item nav__item">
                            <a class="nav-link nav__link {{ (request()->is('portofolio')) ? 'active' : '' }}" href="{{route('portofolio')}}">Portofolio</a>
                        </li>
                        <li class="nav-item nav__item">
                            <a class="nav-link nav__link {{ (request()->is('karier')) ? 'active' : '' }}" href="{{route('karier')}}">Karir</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar__action">
                    <a href="{{route('kontak')}}" class="btn btn-outline-info rounded-pill">
                        KONTAK <span class="d-none d-sm-inline-block">KAMI</span>
                    </a>
                    <!-- <div class="lang-selector dropdown">
                        <button
                            class="btn btn-outline-info btn-sm dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <img src={{asset("img/lang-id.png")}} width="28" height="22" alt="id"/>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                <img src={{asset("img/lang-en.png")}} width="28" height="22" alt="en"/>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                <img src={{asset("img/lang-id.png")}} width="28" height="22" alt="id"/>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <button
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        class="navbar-toggler"
                        data-bs-target="#navbarSupportedContent"
                        data-bs-toggle="collapse"
                        type="button"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->
    <!-- Main -->
    <main>
        @yield('content')
    </main>
    <!-- End Main -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-5 col-xl-4">
                    <div class="widget">
                        <h5>KANTOR PUSAT</h5>
                        <p class="text-center">
                            Jl. HR. Rasuna Said No. 76 <br/>Pakojan Pinang, Kota Tangerang <br/>Banten -
                            15142 <br/><br/>Telp : (021) 22292641 <br/>info@sintechabadi.com
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-xl-4">
                    <div class="widget">
                        <h5>SOSIAL MEDIA</h5>
                        <ul class="social-links">
                            <li>
                                <a href="https://facebook.com/sintechberkahabadi" class="social--facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://id.linkedin.com/in/sintechberkahabadi" class="social--linkedin"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://id.pinterest.com/sintechabadi" class="social--pinterest"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/sintechabadi" class="social--twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-4">
                    <div class="widget mb-0">
                        <a href="/" class="d-inline-block">
                            <img
                                src={{asset("img/sintech-logo.png")}} 
                                srcset={{asset("img/sintech-logo@2x.png")}}
                                width="101"
                                height="68"
                                alt="sintech logo"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <p>COPYRIGHT © PT. SINTECH BERKAH ABADI 2015 - 2022 ALL RIGHTS RESERVED</p>
        </div>
    </footer>
    <!-- End Footer -->
</div>
<!-- Jquery -->
<script src="{{ asset("js/vendor/jquery-3.6.0.min.js") }}"></script>
<!-- End Jquery -->
<!-- Bootstrap 5 Javascript -->
<script src="{{ asset("js/vendor/bootstrap.bundle.min.js") }}"></script>
<!-- End Bootstrap 5 Javascript -->
<!-- Custom Javascript -->
<!-- End Custom Javascript -->
<script src="{{ asset("js/app.min.js") }}"></script>
</body>
</html>
