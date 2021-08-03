<div class="works-area ptb-100">
    <div class="container-fluid">
        <div class="section-title">
            <h2>{{ __('Ostatnie wpisy') }}</h2>
            <p>{{ __('Wpisy ze świata IT') }}</p>
        </div>

        <div class="row">
            @foreach($latestPosts as $post)
                <div class="col-lg-4 col-sm-6 col-xl-3">
                    <div class="work-card">
                        <img src="{{ $post->hero->link }}" alt="{{ $post->title }} hero image">
                        <div class="content">
                            <span>
                                <a href="{{ route('category.show', [app()->getLocale(), $post->category->slug]) }}">
                                    {{ $post->category->name }}
                                </a>
                            </span>
                            <h3>
                                <a href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <a class="work-btn" href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}">
                                {{ __('Czytaj dalej...') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>