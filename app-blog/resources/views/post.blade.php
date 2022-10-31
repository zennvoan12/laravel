@extends('layouts.main')

@section('container')
    <main id="main">

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" data-aos="fade-up">

                        <!-- ======= Single Post Content ======= -->


                        <figure class="my-4">
                            <img src="https://source.unsplash.com/900x400?{{ $post->category->name }}" alt=""
                                class="img-fluid">
                            <div class="single-post mt-3">
                                <div class="post-meta"><span class="date"><a
                                            href="/categories/{{ $post->category->slug }}">
                                            {{ $post->category->name }}</a></span> <span class="mx-1">&bullet;</span>
                                    <span>{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                                <h1 class="mb-5">{{ $post->title }}</h1>
                                <p class="float-end"><span class="firstcharacter"></span>{!! $post->body !!}</p>


                            </div><!-- End Single Post Content -->

                            <!-- ======= Comments ======= -->
                            <div class="comments">
                                <h5 class="comment-title py-4">2 Comments</h5>
                                <div class="comment d-flex mb-4">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm rounded-circle">
                                            <img class="avatar-img" src="assets/img/person-5.jpg" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ms-sm-3">
                                        <div class="comment-meta d-flex align-items-baseline">
                                            <h6 class="me-2">Jordan Singer</h6>
                                            <span class="text-muted">2d</span>
                                        </div>
                                        <div class="comment-body">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima ipsum at
                                            amet
                                            doloremque qui magni, placeat deserunt pariatur itaque laudantium impedit
                                            aliquam
                                            eligendi repellendus excepturi quibusdam nobis esse accusantium.
                                        </div>

                                        <div class="comment-replies bg-light p-3 mt-3 rounded">
                                            <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>

                                            <div class="reply d-flex mb-4">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar avatar-sm rounded-circle">
                                                        <img class="avatar-img" src="assets/img/person-4.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                                    <div class="reply-meta d-flex align-items-baseline">
                                                        <h6 class="mb-0 me-2">Brandon Smith</h6>
                                                        <span class="text-muted">2d</span>
                                                    </div>
                                                    <div class="reply-body">
                                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reply d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar avatar-sm rounded-circle">
                                                        <img class="avatar-img" src="assets/img/person-3.jpg" alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                                    <div class="reply-meta d-flex align-items-baseline">
                                                        <h6 class="mb-0 me-2">James Parsons</h6>
                                                        <span class="text-muted">1d</span>
                                                    </div>
                                                    <div class="reply-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio
                                                        dolore sed eos sapiente, praesentium.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm rounded-circle">
                                            <img class="avatar-img" src="assets/img/person-2.jpg" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-shrink-1 ms-2 ms-sm-3">
                                        <div class="comment-meta d-flex">
                                            <h6 class="me-2">Santiago Roberts</h6>
                                            <span class="text-muted">4d</span>
                                        </div>
                                        <div class="comment-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in
                                            corrupti
                                            dolorum, quas delectus nobis porro accusantium molestias sequi.
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Comments -->

                            <!-- ======= Comments Form ======= -->
                            <div class="row justify-content-center mt-5">

                                <div class="col-lg-12">
                                    <h5 class="comment-title">Leave a Comment</h5>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="comment-name">Name</label>
                                            <input type="text" class="form-control" id="comment-name"
                                                placeholder="Enter your name">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="comment-email">Email</label>
                                            <input type="text" class="form-control" id="comment-email"
                                                placeholder="Enter your email">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="comment-message">Message</label>

                                            <textarea class="form-control" id="comment-message" placeholder="Enter your name" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary" value="Post comment">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Comments Form -->

                    </div>
                    <div class="col-md-3">
                        <!-- ======= Sidebar ======= -->
                        <div class="aside-block">

                            <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-popular" type="button" role="tab"
                                        aria-controls="pills-popular" aria-selected="true">Popular</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-trending" type="button" role="tab"
                                        aria-controls="pills-trending" aria-selected="false">Trending</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-latest" type="button" role="tab"
                                        aria-controls="pills-latest" aria-selected="false">Latest</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">

                                <!-- Popular -->
                                @if ($posts->sortBy('created_at'))
                                    @foreach ($posts->take(4) as $post)
                                        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                            aria-labelledby="pills-popular-tab">

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date"></span><a
                                                        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}
                                                    </a> <span class="mx-1">&bullet;</span>
                                                    <span>{{ $post->created_at->diffForHumans() }}</span>
                                                </div>
                                                <h2 class="mb-2"><a
                                                        href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                                <span class="author mb-3 d-block"><a
                                                        href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></span>
                                            </div>

                                        </div>
                                    @endforeach
                                @endif
                                <!-- End Popular -->


                                <!-- Trending -->
                                @if ($posts->sortBy('created_at', SORT_NATURAL))
                                    @foreach ($posts->take(4) as $post)
                                        <div class="tab-pane fade" id="pills-trending" role="tabpanel"
                                            aria-labelledby="pills-trending-tab">
                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span
                                                        class="date">{{ $post->category->name }}</span> <span
                                                        class="mx-1">&bullet;</span>
                                                    <span>{{ $post->created_at->diffForHumans() }}</span></div>
                                                <h2 class="mb-2"><a href="#">{{ $post->title }}</a></h2>
                                                <span class="author mb-3 d-block">{{ $post->author->name }}</span>
                                            </div>


                                        </div> <!-- End Trending -->
                                    @endforeach
                                @endif

                                <!-- Latest -->
                                @foreach ($posts as $post)
                                    <div class="tab-pane fade" id="pills-latest" role="tabpanel"
                                        aria-labelledby="pills-latest-tab">
                                        <div class="post-entry-1 border-bottom">
                                            <div class="post-meta"><span
                                                    class="date">{{ $post->category->name }}</span> <span
                                                    class="mx-1">&bullet;</span>
                                                <span>{{ $post->created_at->diffForHumans() }}</span>
                                            </div>
                                            <h2 class="mb-2"><a href="#">{{ $post->title }}</a></h2>
                                            <span class="author mb-3 d-block">{{ $post->author->name }}</span>
                                        </div>
                                @endforeach



                            </div> <!-- End Latest -->

                        </div>
                    </div>

                    <div class="aside-block">
                        <h3 class="aside-title">Video</h3>
                        <div class="video-post">
                            <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                                <span class="bi-play-fill"></span>
                                <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Video -->

                    <div class="aside-block">
                        <h3 class="aside-title">Categories</h3>
                        <ul class="aside-links list-unstyled">
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a>
                            </li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a>
                            </li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a>
                            </li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a>
                            </li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a>
                            </li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a>
                            </li>
                        </ul>
                    </div><!-- End Categories -->

                    <div class="aside-block">
                        <h3 class="aside-title">Tags</h3>
                        <ul class="aside-tags list-unstyled">
                            <li><a href="category.html">Business</a></li>
                            <li><a href="category.html">Culture</a></li>
                            <li><a href="category.html">Sport</a></li>
                            <li><a href="category.html">Food</a></li>
                            <li><a href="category.html">Politics</a></li>
                            <li><a href="category.html">Celebrity</a></li>
                            <li><a href="category.html">Startups</a></li>
                            <li><a href="category.html">Travel</a></li>
                        </ul>
                    </div><!-- End Tags -->

                </div>
            </div>
            </div>
        </section>


    </main>





@endsection
