@extends('layouts.main')

@section('container')
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/post-slide-1.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                            est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                            ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                            necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/post-slide-2.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New
                                            Haircut</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                            est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                            ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                            necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/post-slide-3.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                            est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                            ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                            necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('assets/img/post-slide-4.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                            est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                            ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                            necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->



    @if ($posts->sortBy('created_at'))
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>{{ $posts[0]->category->name }}</h2>
                    <div><a href="category.html" class="more">See All {{ $posts[0]->category->name }}</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        @foreach ($posts->take(1) as $post)
                            <div class="d-lg-flex post-entry-2">
                                <a href="/posts/{{ $posts[0]->slug }}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                    <img src="https://source.unsplash.com/600x500?{{ $post->category->name }}"
                                        alt="" class="img-fluid">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h3><a href="/posts/{{ $posts[0]->slug }}">{{ $post->title }}</a></h3>
                                    <p>{{ $post->excerpt }}
                                    </p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img
                                                src="https://source.unsplash.com/600x500?{{ $post->category->name }}"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">{{ $post->author->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="row">
                            <div class="col-lg-4">

                                <div class="post-entry-1 border-bottom">
                                    <a href="/posts/{{ $posts[0]->slug }}"><img
                                            src="https://source.unsplash.com/600x500?{{ $post->category->name }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $posts[0]->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $posts[0]->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a href="">{{ $posts[0]->title }}</a></h2>
                                    <span class="author mb-3 d-block">{{ $posts[0]->author->name }}</span>
                                    <p class="mb-4 d-block">{{ $posts[0]->excerpt }}</p>
                                </div>


                                <div class="post-entry-1">
                                    <div class="post-meta"><span class="date">{{ $posts[0]->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $posts[0]->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a
                                            href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h2>
                                    <span class="author mb-3 d-block">{{ $posts[0]->author->name }}</span>
                                    <p class="mb-4 d-block">{{ $posts[0]->excerpt }}</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-entry-1">
                                    <a href="/posts/{{ $posts[0]->slug }}"><img
                                            src="https://source.unsplash.com/600x500?{{ $post->category->name }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a href="/posts/{{ $posts[0]->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <span class="author mb-3 d-block">{{ $post->author->name }}</span>
                                    <p class="mb-4 d-block">{{ $post->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        @foreach ($posts->take(6) as $post)
                            <div class="post-entry-1 border-bottom">

                                <div class="post-meta"><span class="date">{{ $posts[0]->category->name }}</span> <span
                                        class="mx-1">&bullet;</span>
                                    <span>>{{ $posts[0]->created_at->diffForHumans() }}</span>
                                </div>
                                <h2 class="mb-2"><a href="single-post.html">{{ $posts[0]->title }}</a></h2>
                                <span class="author mb-3 d-block">{{ $posts[0]->author->name }}</span>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </section><!-- End Culture Category Section -->
    @endif
    <!-- ======= Business Category Section ======= -->
    @if ($posts->sortBy('created_at'))
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>{{ $posts[1]->category->name }}</h2>
                    <div><a href="category.html" class="more">See All {{ $posts[1]->category->name }}</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        @foreach ($posts->take(1) as $post)
                            <div class="d-lg-flex post-entry-2">
                                <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                    <img src="https://source.unsplash.com/600x500?{{ $post->category->name }}"
                                        alt="" class="img-fluid">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">{{ $post->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h3><a href="single-post.html">{{ $post->title }}</a></h3>
                                    <p>{{ $post->excerpt }}
                                    </p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img
                                                src="https://source.unsplash.com/600x500?{{ $post->category->name }}"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">{{ $post->author->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="row">
                            <div class="col-lg-4">

                                <div class="post-entry-1 border-bottom">
                                    <a href="/posts/{{ $posts[0]->slug }}"><img
                                            src="https://source.unsplash.com/600x500?{{ $post->category->name }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $posts[1]->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $posts[1]->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a href="">{{ $posts[1]->title }}</a></h2>
                                    <span class="author mb-3 d-block">{{ $posts[1]->author->name }}</span>
                                    <p class="mb-4 d-block">{{ $posts[1]->excerpt }}</p>
                                </div>


                                <div class="post-entry-1">
                                    <div class="post-meta"><span class="date">{{ $posts[1]->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $posts[1]->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a
                                            href="/posts/{{ $posts[1]->slug }}">{{ $posts[1]->title }}</a></h2>
                                    <span class="author mb-3 d-block">{{ $posts[1]->author->name }}</span>
                                    <p class="mb-4 d-block">{{ $posts[1]->excerpt }}</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-entry-1">
                                    <a href="/posts/{{ $posts[1]->slug }}"><img
                                            src="https://source.unsplash.com/600x500?{{ $post->category->name }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $post->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a href="/posts/{{ $posts[1]->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <span class="author mb-3 d-block">{{ $post->author->name }}</span>
                                    <p class="mb-4 d-block">{{ $post->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        @foreach ($posts->take(6) as $post)
                            <div class="post-entry-1 border-bottom">

                                <div class="post-meta"><span class="date">{{ $posts[1]->category->name }}</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>>{{ $posts[1]->created_at->diffForHumans() }}</span>
                                </div>
                                <h2 class="mb-2"><a href="single-post.html">{{ $posts[1]->title }}</a></h2>
                                <span class="author mb-3 d-block">{{ $posts[1]->author->name }}</span>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section><!-- End Culture Category Section -->
    @endif
    <!-- End Business Category Section -->

    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>Lifestyle</h2>
                <div><a href="category.html" class="more">See All Lifestyle</a></div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="assets/img/post-landscape-8.jpg" alt=""
                                class="img-fluid"></a>
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                            temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil
                            tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe
                            perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi
                            atque eveniet, quo, praesentium dignissimos</p>

                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="assets/img/person-7.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="m-1 p-0">Esther Howard</h3>
                            </div>
                        </div>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the
                                Pimples Away)</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1">
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom
                                Should Know</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="assets/img/post-landscape-6.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="assets/img/post-landscape-5.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                                <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During
                                        Video Calls?</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="assets/img/post-landscape-4.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting
                                        Places On the Web?</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="assets/img/post-landscape-3.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For
                                        Instagram</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="assets/img/post-landscape-2.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                                <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should
                                        Know</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay
                                        Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in
                                        Layers That Will Inspire Your New Haircut</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for
                                        Long and Medium Hair</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A
                                        Working Mom’s Guide</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face
                                        (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working
                                        Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section><!-- End Lifestyle Category Section -->
@endsection
