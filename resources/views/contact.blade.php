@extends('layouts.app')

@section('content')
    <div class="page-title-area page-title-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>{{ __('Kontakt') }}</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home', app()->getLocale()) }}">
                                    {{ __('Strona główna') }}
                                </a>
                            </li>
                            <li>
                                {{ __('Kontakt') }}
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
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-email"></i>
                        </div>

                        <h3>{{ __('Adres e-mail') }}</h3>
                        <p>
                            <a href="mailto:aleksander.kaim@webbulls.pl">aleksander.kaim@webbulls.pl</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-marker"></i>
                        </div>
                        <h3>{{ __('Lokalizacje') }}</h3>
                        <p>Kraków, Gdańsk</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection