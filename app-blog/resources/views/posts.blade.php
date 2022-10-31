@extends('layouts.main')

@section('container')
    <h1 class="text-center">
        {{ $title }}
    </h1>

    @if ($posts)
        @if ($posts->sliding(2))
            <!-- ======= Hero Slider Section ======= -->
            <section id="hero-slider" class="hero-slider">
                <div class="container-md" data-aos="fade-in">
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper sliderFeaturedPosts">
                                <div class="swiper-wrapper">
                                    {{-- swiper slide --}}
                                    @foreach ($posts->take(4) as $post)
                                        <div class="swiper-slide">
                                            <a href="/posts/{{ $post->slug }}" class="img-bg d-flex align-items-end"
                                                style="background-image: url('https://source.unsplash.com/1900x800?{{ $post->category->name }}');">
                                                <div class="img-bg-inner">
                                                    <h2>{{ $post->title }}</h2>
                                                    <p>{{ $post->excerpt }}</p>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

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
        @endif
        <!-- ======= Post Grid Section ======= -->
        <hr class="mb-2 ">
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    {{-- main posted --}}
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                            <a href="/posts/{{ $posts[0]->slug }}"><img
                                    src="https://source.unsplash.com/1900x800?{{ $posts[0]->category->name }}"
                                    alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date"><a href=""></a>
                                    <a href="/categories/{{ $posts[0]->category->slug }}">
                                        {{ $posts[0]->category->name }}</span> </a>
                                </a>
                                <span class="mx-1">&bullet;</span>
                                <span>{{ $posts[0]->created_at->diffForHumans() }}</span>
                            </div>
                            <h2><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h2>
                            <p class="mb-4 d-block">{{ $posts[0]->excerpt }}</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img
                                        src="https://source.unsplash.com/1900x800?{{ $posts[0]->category->name }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="name">
                                    <a href="/authors/{{ $posts[0]->author->username }}" class="link-info">
                                        <h3 class="m-0 p-0">{{ $posts[0]->author->name }}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- End Main Posted --}}

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                @foreach ($posts->take(3) as $post)
                                    <div class="post-entry-1">
                                        <a href="/posts/{{ $post->slug }}"><img
                                                src="https://source.unsplash.com/1900x800?{{ $post->category->name }}"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">
                                                <a href="/categories/{{ $post->category->slug }}">
                                                    {{ $post->category->name }}</span></a>
                                            <span class="mx-1">&bullet;</span>
                                            <span>{{ $post->created_at->diffForHumans() }}</span>
                                        </div>
                                        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                    </div>
                                @endforeach

                            </div>

                            <div class="col-lg-4 border-start custom-border">
                                @foreach ($posts->take(3) as $post)
                                    <div class="post-entry-1">
                                        <a href="/posts/{{ $post->slug }}"><img
                                                src="https://source.unsplash.com/1900x800?{{ $post->category->name }}"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">
                                                <a href="/categories/{{ $post->category->slug }}">
                                                    {{ $post->category->name }}</span></a>
                                            <span class="mx-1">&bullet;</span>
                                            <span>{{ $post->created_at->diffForHumans() }}</span>
                                        </div>
                                        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Trending Section -->
                            <div class="col-lg-4">
                                @if ($posts->sortBy('title'))
                                    <div class="trending">
                                        <h3>Trending</h3>
                                        <ul class="trending-post">
                                            @foreach ($posts->take(4) as $post)
                                                <li>
                                                    <a href="/posts/{{ $post->slug }}">
                                                        <span class="number">{{ $post->id }}</span>
                                                        <h3>{{ $post->title }}</h3>
                                                        <span class="author">{{ $post->author->name }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                @endif
                                </ul>
                            </div>

                        </div> <!-- End Trending Section -->

                    </div>
                </div>

            </div> <!-- End .row -->
            </div>
        </section> <!-- End Post Grid Section -->
    @else
        @include('partials.404')
    @endif

    <div class="container">

        <div class="row">
            @foreach ($posts->skip(7) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="position-absolute bg-dark px-3 py-2"
                            style="background-color: rgba(0, 0, 0, 0.9) transparent;">
                            <a href="/categories/{{ $post->category->slug }}" class="text-white">
                                {{ $post->category->name }}
                            </a>
                        </div>
                        <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-muted">

                                    By. <a href="/authors/{{ $post->author->username }}" class="link-info">
                                        {{ $post->author->name }}</a>

                                    <span>{{ $post->created_at->diffForHumans() }}
                                    </span>
                                    </a>
                                </small>
                            </p>
                            <p class="card-text"> {{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
