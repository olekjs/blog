@extends('layouts.app')

@section('content')
    <div class="page-title-area page-title-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>{{ $post->title }}</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home', app()->getLocale()) }}">{{ __('Strona główna') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('category.show', [app()->getLocale(), $post->category->slug]) }}">
                                    {{ $post->category->name }}
                                </a>
                            </li>
                            <li>
                                {{ $post->title }}
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
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{ $post->hero->link }}" alt="{{ $post->title }} hero image">
                        </div>
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>{{ __('Autor:') }}</span> <a>{{ $post->author->full_name }}</a></li>
                                    <li class="text-muted">{{ $post->created_at->format('d.m.Y') }}</li>
                                </ul>
                            </div>
                            <h3>{{ $post->title }}</h3>
                            {!! $post->content !!}
                        </div>
                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="fas fa-bookmark"></i></span>
                                @foreach($post->tags as $tag)
                                    <a>{{ $tag->name }}</a>,
                                @endforeach
                            </div>
                            <div class="article-share">
                                <ul class="social">
                                    <li><span>{{ __('Udostępnij:') }}</span></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    <a href="#"><i class="flaticon-left-chevron"></i> {{ __('Poprzedni wpis') }}</a>
                                </div>

                                <div class="nav-next">
                                    <a href="#">{{ __('Następny wpis') }} <i class="flaticon-right-chevron"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <x-layout.sidebar></x-layout.sidebar>
                </div>
            </div>
        </div>
    </section>
@endsection