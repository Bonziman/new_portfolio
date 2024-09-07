@extends('master')
@section('content')
@section('title', $project->title)
<div class="cover-v1 gradient-bottom-black jarallax" style="background-image: url('https://eloirdiwi.free.nf/portfolio/storage/app/public/{{ $project->images->first()->image_path }}');">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-10 mx-auto text-center">
              <h1 class="heading" data-aos="fade-up">{{ $project->title}}</h1>
              <h2 class="subheading" data-aos="fade-up" data-aos-delay="100">{{ $project->slogan}}</h2>
            </div>

          </div>
        </div>

        <!-- dov -->
        <a href="#portfolio-single-section" class="mouse-wrap smoothscroll" >
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label">Scroll</span>
        </a>

      </div>
      <!-- END .cover-v1 -->

      <div class="container">
        <div class="portfolio-single-wrap unslate_co--section" id="portfolio-single-section">

          <div class="portfolio-single-inner">
            <h2 class="heading-portfolio-single-h2">{{ $project->title}}</h2>

            <div class="row justify-content-between mb-5">
              <div class="col-12 mb-4">
                <div class="owl-carousel single-slider">
                  @foreach ($project->images as $image)
                  <figure class="mb-4">
                    <img src="https://eloirdiwi.free.nf/portfolio/storage/app/public/{{$image->image_path }}" alt="Project Image" class="img-fluid">
                    </figure>
                   @endforeach
                </div>
              </div>
              <div class="col-12 mb-5">
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Project Date</span>
                      <span class="detail-val">{{ $project->date->format('d F Y') }}</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Role</span>
                      <span class="detail-val"><a>{{ $project->role}}</a></span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Client</span>
                      <span class="detail-val">{{ $project->client}}</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Visit</span>
                      <span class="detail-val"><a href="{{ $project->link}}" target="_blank">{{ $project->link_puesdo}}</a></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 pr-md-5">
                <p>{{ $project->description}}</p>
              </div>
              <div class="col-md-6 pl-md-5">
                <p>{{ $project->second_description}}</p>
              </div>
            </div>

          </div>
        </div>
      </div>
@endsection