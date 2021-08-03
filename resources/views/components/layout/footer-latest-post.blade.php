<div class="single-footer-widget pl-5">
    <h3>{{ __('Ostatni wpis') }}</h3>

    <ul class="footer-instagram-post">
        <li>
            <a href="{{ route('post.show', [app()->getLocale(), $post->slug]) }}">
                <img class="img-fluid" src="{{ $post->hero->link }}" alt="{{ $post->title }} hero image">
            </a>
        </li>
    </ul>
</div>