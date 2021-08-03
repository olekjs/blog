<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="/theme/css/animate.min.css">
    <link rel="stylesheet" href="/theme/css/flaticon.css">
    <link rel="stylesheet" href="/theme/css/odometer.min.css">
    <link rel="stylesheet" href="/theme/css/meanmenu.css">
    <link rel="stylesheet" href="/theme/css/magnific-popup.min.css">
    <link rel="stylesheet" href="/theme/css/nice-select.min.css">
    <link rel="stylesheet" href="/theme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/theme/css/fontawesome.min.css">
    <link rel="stylesheet" href="/theme/css/boxicons.min.css">
    <link rel="stylesheet" href="/theme/css/style.css">
    <link rel="stylesheet" href="/theme/css/responsive.css">

    <link rel="icon" type="image/png" href="/theme/img/favicon.png">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <x-layout.navbar></x-layout.navbar>

        @yield('content')

        <section class="footer-area mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>{{ __('Kontakt') }}</h3>
                            <ul class="footer-contact-info">
                                <li>
                                    <i class="flaticon-email"></i>
                                    <span>{{ __('Masz pytania? Szukasz pomocy?') }}</span>
                                    <a href="mailto:aleksander.kaim@webbulls.pl">aleksander.kaim@webbulls.pl</a>
                                </li>
                                <li>
                                    <i class="flaticon-social-media"></i>
                                    <span>{{ __('Repozytoria i media społecznościowe') }}</span>

                                    <ul class="social">
                                        <li>
                                            <a href="https://github.com/olekjs" target="_blank">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/aleksander-kaim/" target="_blank">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/Olek46154641" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>{{ __('Przydatne linki') }}</h3>

                            <ul class="footer-quick-links">
                                <li>
                                    <a href="{{ route('home', app()->getLocale()) }}">Strona główna</a>
                                </li>
                                <li>
                                    <a href="{{ route('post.index', app()->getLocale()) }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('about-me', app()->getLocale()) }}">O mnie</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact', app()->getLocale()) }}">Kontakt</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <x-layout.footer-latest-post></x-layout.footer-latest-post>
                    </div>
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <p>
                                {{ __('Copyright @') }} {{ today()->year }} {{ __('Wszelkie prawa zastrzeżone') }}
                                <a href="{{ route('home', app()->getLocale()) }}" target="_blank">{{ config('app.name') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->
        
        <div class="go-top"><i class="fas fa-chevron-up"></i></div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- jQuery Min JS -->
    <script src="/theme/js/jquery.min.js"></script>
    <!-- Popper Min JS -->
    <script src="/theme/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="/theme/js/bootstrap.min.js"></script>
    <!-- MeanMenu JS  -->
    <script src="/theme/js/jquery.meanmenu.js"></script>
    <!-- Appear Min JS -->
    <script src="/theme/js/jquery.appear.min.js"></script>
    <!-- Odometer Min JS -->
    <script src="/theme/js/odometer.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="/theme/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup Min JS -->
    <script src="/theme/js/jquery.magnific-popup.min.js"></script>
    <!-- Parallax Min JS -->
    <script src="/theme/js/parallax.min.js"></script>
    <!-- Nice Select Min JS -->
    <script src="/theme/js/jquery.nice-select.min.js"></script>
    <!-- WOW Min JS -->
    <script src="/theme/js/wow.min.js"></script>
    <!-- AjaxChimp Min JS -->
    <script src="/theme/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="/theme/js/form-validator.min.js"></script>
    <!-- Contact Form Min JS -->
    <script src="/theme/js/contact-form-script.js"></script>
    <!-- Main JS -->
    <script src="/theme/js/main.js"></script>
</body>
</html>
