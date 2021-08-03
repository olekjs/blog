@extends('layouts.app')

@section('content')
    <div class="page-title-area page-title-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>{{ __('O mnie') }}</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home', app()->getLocale()) }}">
                                    {{ __('Strona główna') }}
                                </a>
                            </li>
                            <li>
                                {{ __('O mnie') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-img2"><img src="/theme/img/shape/2.svg" alt="image"></div>
        <div class="shape-img3"><img src="/theme/img/shape/3.svg" alt="image"></div>
        <div class="shape-img4"><img src="/theme/img/shape/4.png" alt="image"></div>
        <div class="shape-img5"><img src="/theme/img/shape/5.png" alt="image"></div>
        <div class="shape-img7"><img src="/theme/img/shape/7.png" alt="image"></div>
        <div class="shape-img8"><img src="/theme/img/shape/8.png" alt="image"></div>
        <div class="shape-img9"><img src="/theme/img/shape/9.png" alt="image"></div>
        <div class="shape-img10"><img src="/theme/img/shape/10.png" alt="image"></div>
    </div>
    <section class="free-trial-area ptb-100 bg-f4f7fe">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ft-img">
                        <img src="/theme/img/about-me1.png" alt="About me image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-content">
                        <span class="sub-title">Aleksander Kaim</span>
                        <h2>{{ __('Programista, który na co dzień pracuje we frameworku Laravel') }}</h2>
                    </div>
                    <div class="mt-5">
                        <a href="https://github.com/olekjs" target="_blank">
                            <i class="fab fa-github fa-2x"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/aleksander-kaim/" target="_blank" class="ml-3">
                            <i class="fab fa-linkedin-in fa-2x"></i>
                        </a>
                        <a href="https://twitter.com/Olek46154641" class="ml-3" target="_blank">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fun-facts-two bg-f2f2f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="fun-fact-card">
                        <i class="bx bx-list-check"></i>
                        <h3>
                            <span class="odometer" data-count="30">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>{{ __('Wykonanych projektów') }}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="fun-fact-card">
                        <i class="bx bx-smile"></i>
                        <h3>
                            <span class="odometer" data-count="4">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>{{ __('Lata doświadczenia') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="overview-area ptb-100">
        <div class="container">
            <div class="overview-box it-overview">
                <div class="overview-content">
                    <div class="content">
                        <h2>{{ __('Technologie') }}</h2>
                        <p>{{ __('Technologie, aplikacje i projekty, w których miałem okazje pracować.') }}</p>
                        <ul class="features-list">
                            <li>
                                <span>
                                    <i class="bx bxs-badge-check"></i>
                                    Laravel
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="bx bxs-badge-check"></i>
                                    Vue.js
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="bx bxs-badge-check"></i>
                                    Python
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="bx bxs-badge-check"></i>
                                    Django
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="bx bxs-badge-check"></i>
                                    {{ __('Serwisy AWS') }}
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="bx bxs-badge-check"></i>
                                    {{ __('Comarch XL - API') }}
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="bx bxs-badge-check"></i>
                                    {{ __('CSIOZ - Web Serwisy') }}
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="bx bxs-badge-check"></i>
                                    {{ __('Magento 2 - API') }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="overview-image">
                    <div class="image">
                        <img src="/theme/img/cloud-about-me.png" alt="cloud image">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection