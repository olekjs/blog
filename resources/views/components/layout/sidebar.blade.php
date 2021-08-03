<aside class="widget-area" id="secondary">
    <section class="widget widget_search">
        <form class="search-form" action="{{ route('post.index', app()->getLocale()) }}">
            <label>
                <span class="screen-reader-text"></span>
                <input type="search" class="search-field" name="filters[query]" value="{{ request()->input('filters.query') }}" placeholder="{{ __('Szukaj na stronie...') }}">
            </label>
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </section>
    <section class="widget widget_aronix_posts_thumb">
        <h3 class="widget-title">{{ __('Popularne wpisy') }}</h3>
        @foreach($popularPosts as $post)
            <article class="item">
                <a href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}" class="thumb">
                    <img class="img-fluid" src="{{ $post->hero->link }}" alt="{{ $post->title }} hero image">
                </a>
                <div class="info">
                    <time>{{ $post->created_at->format('d.m.Y') }}</time>
                    <h4 class="title usmall">
                        <a href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}">
                            {{ $post->title }}
                        </a>
                    </h4>
                </div>
                <div class="clear"></div>
            </article>
        @endforeach
    </section>

    <section class="widget widget_categories">
        <h3 class="widget-title">{{ __('Kategorie') }}</h3>
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('category.show', [app()->getLocale(), $category->slug]) }}">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="widget widget_recent_entries">
        <h3 class="widget-title">{{ __('Najnowsze wpisy') }}</h3>
        <ul>
            @foreach($latestPosts as $post)
                <li>
                    <a href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="widget widget_tag_cloud">
        <h3 class="widget-title">{{ __('Tagi') }}</h3>

        <div class="tagcloud">
            @foreach($tags as $tag)
                <a href="#">
                    {{ $tag->name }} <span class="tag-link-count"> ({{ $tag->posts_count }})</span>
                </a>
            @endforeach
        </div>
    </section>
</aside>