@extends('layouts.app')

@section('content')
    <section class="featured-services-area ptb-100 mt-5">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">{{ __('Kategorie') }}</span>
                <h2>{{ __('Znajdź właściwą kategorię') }}</h2>
                <p>
                    {{ __('Tutaj znajdziesz uporządkowane tematycznie kategorie, które poruszam we wpisach') }}
                </p>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-featured-box">
                            <div class="icon">
                                <i class="flaticon-analytics"></i>
                            </div>
                            <h3>{{ $category->name }}</h3>
                            <p>{{ $category->description }}</p>
                            <a href="{{ route('category.show', [app()->getLocale(), $category->slug]) }}" class="default-btn">
                                {{ __('Pokaż wpisy') }} <span></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection