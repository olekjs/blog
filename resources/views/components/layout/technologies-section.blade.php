<div class="partner-area ptb-100 pb-0">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('Technologie') }}</h2>
        </div>
        <div class="partner-slides owl-carousel owl-theme">
            @foreach($technologies as $technology)
                <div class="single-partner-item">
                    <a href="#technologies">
                        <img src="/theme/img/technologies/{{ $technology }}-logo.png" alt="technologies image">
                        <img class="img-logo-square" src="/theme/img/technologies/{{ $technology }}-square.png" alt="technologies image">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>