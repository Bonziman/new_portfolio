@extends('master')
@section('content')
@section('title', $post->title)
<style>
p img{
    width: 100% !important;
    height: auto !important; 
}
</style>
<div class="cover-v1 jarallax overlay" style="background-image: url('https://eloirdiwi.free.nf/portfolio/storage/app/public/{{ $post->images->first()->image_path }}');">
        <div class="container">
          <div class="row align-items-center">
              
            <div class="col-md-8 mx-auto text-center">
              <h1 class="blog-heading" data-aos="fade-up" data-aos-delay="0">{{ $post->title}}</h1>
              <div class="post-meta" data-aos="fade-up" data-aos-delay="100">By {{ $post->author}} on {{ $post->date}} &bullet; {{ $post->read_time}} mins read</div>
            </div>

          </div>
        </div>


        <!-- dov -->
        <a href="#blog-single-section" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label">Scroll</span>
        </a>

      </div>
      <!-- END .cover-v1 -->

      <div class="unslate_co--section" id="blog-single-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">
              <h3 class="mb-4">{{ $post->sub_title }}</h3>
              <p>{!! $post->text1 !!}</p>

            <!-- <div class="pt-5 categories_tags ">
                <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  </p>
              </div>
                 post navigation
              <div class="post-single-navigation d-flex align-items-stretch">
                <a href="#" class="mr-auto w-50 pr-4">
                  <span class="d-block">Previous Post</span>
                  A Mounteering Guide For Beginners
                </a>
                <a href="#" class="ml-auto w-50 text-right pl-4">
                  <span class="d-block">Next Post</span>
                  12 Creative Designers Share Ideas About Web Design
                </a>
              </div> -->

            <!-- END .cover-v1 
            <div class="pt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_woman_2.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Irish Smith</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_woman_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Christine Stewart</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_man_3.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Chintan Patel</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="images/person_man_2.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/person_man_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>Ben Afflick</h3>
                                  <div class="meta">January 9, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_woman_3.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul>
              -->
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <!-- <h3 class="mb-5">Leave a comment</h3> -->
                <!-- <form action="#" class="">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary btn-md">
                  </div>

                </form> -->
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

      
      </div> 
@endsection