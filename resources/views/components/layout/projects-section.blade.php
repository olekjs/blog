<section class="projects-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">{{ __('Projekty') }}</span>
            <h2>{{ __('Projekty i rozwiązania, które udało mi się stworzyć') }}</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="projects-slides owl-carousel owl-theme">
            @foreach($projects as $project)
                <div class="single-projects-box">
                    <a href="{{ $project->link }}">
                        <img src="{{ $project->hero->link }}" alt="{{ $project->name }} hero image">
                    </a>
                    <div class="projects-content">
                        <h3>
                            <a href="{{ $project->link }}">{{ $project->name }}</a>
                        </h3>
                        <span class="category">
                            {{ Str::limit(strip_tags($project->content), 40) }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>