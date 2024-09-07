
@foreach ($projects as $project)
    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
    <a href="{{ route('single', $project->title) }}" class="project-link isotope-item gsap-reveal-img" data-id="1">
        <div class="overlay">
            <span class="wrap-icon icon-link2"></span>
            <div class="portfolio-item-content">
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->role }}</p>
            </div>
        </div>
        @if ($project->images->isNotEmpty())
            <img src="https://eloirdiwi.free.nf/portfolio/storage/app/public/{{$project->images->first()->image_path }}" class="lazyload img-fluid" alt="Image" />
        @endif
    </a>
</div>

@endforeach



