<div class="seo-banner-slider owl-carousel owl-theme">
    <div class="seo-banner">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container mt-50">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <h1>{{ $heroPost->title }}</h1>
                                <p>{{ strip_tags(Str::limit($heroPost->content), 150) }}</p>
                                <div class="banner-btn">
                                    <a href="{{ route('post.show', [app()->getLocale(), $heroPost->slug]) }}" class="default-btn me-3">
                                        {{ __('Czytaj dalej...') }} <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="seo-banner-image animate-tb">
                                <img src="{{ $heroPost->hero->link }}" alt="{{ $heroPost->title }} hero image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-img2"><img src="/theme/img/shape/2.svg" alt="image"></div>
        <div class="shape-img3"><img src="/theme/img/shape/3.svg" alt="image"></div>
        <div class="shape-img4"><img src="/theme/img/shape/4.png" alt="image"></div>
        <div class="shape-img5"><img src="/theme/img/shape/5.png" alt="image"></div>
        <div class="shape-img6"><img src="/theme/img/shape/6.png" alt="image"></div>
        <div class="shape-img7"><img src="/theme/img/shape/7.png" alt="image"></div>
        <div class="shape-img8"><img src="/theme/img/shape/8.png" alt="image"></div>
        <div class="shape-img9"><img src="/theme/img/shape/9.png" alt="image"></div>
        <div class="shape-img10"><img src="/theme/img/shape/10.png" alt="image"></div>
        <div class="shape-img13"><img src="/theme/img/shape/13.png" alt="image"></div>
        <div class="shape-img14"><img src="/theme/img/shape/14.png" alt="image"></div>
    </div>
</div>