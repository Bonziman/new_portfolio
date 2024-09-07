<div class="unslate_co--section" id="journal-section">
    <div class="container">
        <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Journal</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
        </div>
        
        <div class="row gutter-v4 align-items-stretch">
             <?php
             $class1 = 'col-sm-6 col-md-6 col-lg-8 blog-post-entry';
             $class2 =  'col-sm-6 col-md-6 col-lg-4 blog-post-entry';
             $count = 0;
             $randomClass = $class1;
            ?>
            @foreach ($posts as $post)
            <?php
            if ($count == 0 || $count == 6){
                $randomClass = $class1;
            }
            else{
                $randomClass = $class2;
            }
            $count++;
            ?>
            <div class="{{ $randomClass }}" data-aos="fade-up" data-aos-delay="0">
                <a href="{{ url('/blog', [Str::slug($post->title)]) }}" class="grid-item blog-item w-100 h-100">
                    <div class="overlay">
                        <div class="portfolio-item-content">
                            <h3>{{ $post->title }}</h3>
                            <p class="post-meta">By {{ $post->author }} <span class="small">&bullet;</span> {{ $post->read_time }} mins</p>
                        </div>
                    </div>
                    @if ($post->images->isNotEmpty())
                        <img src="https://eloirdiwi.free.nf/portfolio/storage/app/public/{{$post->images->first()->image_path }}" class="lazyload" alt="Image" />
                    @endif
                </a>
            </div>
            @endforeach
        </div>

    </div>
</div>
