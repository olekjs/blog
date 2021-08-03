@extends('layouts.app')

@section('content')
    <div class="page-title-area page-title-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>{{ $category->name }}</h2>
                        <ul>
                            <li>
                                <a href="{{ route('home', app()->getLocale()) }}">
                                    {{ __('Strona główna') }}
                                </a>
                            </li>
                            <li>
                                {{ __('Blog') }}
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
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach($category->posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}">
                                    <img src="{{ $post->hero->link }}" alt="{{ $post->title }} hero image">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <ul>
                                        <li>
                                            {{ __('Autor:') }} <a href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}">
                                                {{ $post->author->full_name }}
                                            </a>
                                        </li>
                                        <li>
                                            {{ $post->created_at->format('d.m.Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p>
                                    {!! strip_tags(Str::limit($post->content), 150) !!}
                                </p>
                                <a href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}" class="read-more-btn">
                                    {{ __('Czytaj dalej...') }} <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 col-md-12">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection