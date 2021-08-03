<div class="navbar-area">
    <div class="aronix-responsive-nav">
        <div class="container">
            <div class="aronix-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home', app()->getLocale()) }}">
                        <img src="/theme/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="aronix-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}">
                    <img src="/theme/img/logo.png" class="img-logo" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('post.index', app()->getLocale()) }}" class="nav-link">{{ __('Blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{ __('Kategorie') }} <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($categories as $category)
                                    <li class="nav-item">
                                        <a href="{{ route('category.show', [app()->getLocale(), $category->slug]) }}" class="nav-link">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about-me', app()->getLocale()) }}" class="nav-link">{{ __('O mnie') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact', app()->getLocale()) }}" class="nav-link">{{ __('Kontakt') }}</a>
                        </li>
                    </ul>
                    <div class="others-options">
                        <div class="option-item">
                            <i class="search-btn flaticon-search"></i>
                            <i class="close-btn flaticon-close"></i>
                            <div class="search-overlay search-popup">
                                <div class="search-box">
                                    <form class="search-form" action="{{ route('post.index', app()->getLocale()) }}">
                                        <input type="text" class="search-input" name="filters[query]" value="{{ request()->input('filters.query') }}" placeholder="{{ __('Szukaj na stronie...') }}">
                                        <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>