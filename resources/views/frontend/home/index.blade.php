@extends('frontend.layout')
@section('content')
    <div id="content" class="site-content">
        @include('frontend.home.inc.revolution-slider')
        {{-- <section class="story-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="story-text">
                            <p>“Even if you don’t have a ready sketch of what you want – we will help you to get the
                                result you dreamed of.”</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="story-author">
                            <img src="{{ asset('frontend/assets') }}/images/image1-home1.png" class="" alt="">
                            <div class="story-content">
                                <h5 class="story-title">David Oswald</h5>
                                <p class="story-description">founder of company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="about-1">
            <div class="grid-lines grid-lines-vertical">
                <span class="g-line-vertical line-left color-line-default"></span>
                <span class="g-line-vertical line-center color-line-default"></span>
                <span class="g-line-vertical line-right color-line-default"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                        <div class="about-img-1">
                            <img src="{{ asset($about->main_image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 align-self-center">
                        <div class="about-content-1 ml-xl-70">
                            <div class="ot-heading is-dots">
                                <span>[ about company ]</span>
                                <h2 class="main-heading">{{ $about->title_english }}</h2>
                            </div>
                            <p>
                                {!! $about->details_1_eng !!}
                            </p>
                            <div class="ot-button">
                                <a href="{{ route('about.details') }}" class="octf-btn octf-btn-dark">View About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="client-1 bg-light-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="clients-slide owl-theme owl-carousel">
                            @foreach ($brands as $brand)
                                <div class="img-item">
                                    <figure><img src="{{ asset($brand->image) }}" alt="">
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @foreach ($images as $image)
                        <div class="col-lg-4 col-md-6 px-0">
                            <div class="cate-lines h-light">
                                <div class="cate-item">
                                    <a href="#">
                                        <img src="{{ asset($image->image) }}" alt="">
                                    </a>
                                    <div class="cate-item_content">
                                        <a href="#">
                                            <h2>Office Spaces<span class="number-stroke"> {{ $loop->iteration }}</span></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <section class="services-1">
            <div class="grid-lines grid-lines-vertical">
                <span class="g-line-vertical line-left color-line-default"></span>
                <span class="g-line-vertical line-center color-line-default"></span>
                <span class="g-line-vertical line-right color-line-default"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center theratio-align-center">
                        <div class="ot-heading is-dots">
                            <span>[ OUR SERVICES ]</span>
                            <h2 class="main-heading">What Can We Offer</h2>
                        </div>
                        <div class="space-50"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div
                                class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-1 text-center">
                                <div class="icon-main"><img src="{{ asset($service->main_image) }}"
                                        style="border-radius: 25px" alt="">
                                </div>
                                <div class="content-box">
                                    <h5><a href="servcies-detail-1.html">{{ $service->title_english }}</a></h5>
                                    <p>
                                        @if (strlen($service->des_sm_eng) > 10)
                                            @php
                                                preg_match('/^([\w\W\s]+?\s+){10}/', $service->des_sm_eng, $matches);
                                            @endphp
                                            {!! $matches[0] !!}
                                        @else
                                            {!! $service->des_sm_eng !!}
                                        @endif


                                    </p>
                                </div>
                                <div class="link-box">
                                    <a href="{{ route('service.details', $service->id) }}" class="btn-details">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="space-120"></div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                        <div class="ot-counter">
                            <div>
                                <span>[</span>
                                <span class="num" data-to="{{ $projects_don->value_1 }}"
                                    data-time="2000">{{ $projects_don->value_1 }}</span>
                                <span>+]</span>
                            </div>
                            <h6>{{ $projects_don->title_english_1 }}</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                        <div class="ot-counter">
                            <div>
                                <span>[</span>
                                <span class="num" data-to="{{ $projects_don->value_2 }}"
                                    data-time="2000">{{ $projects_don->value_2 }}</span>
                                <span>+]</span>
                            </div>
                            <h6>{{ $projects_don->title_english_2 }}</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-sm-0">
                        <div class="ot-counter">
                            <div>
                                <span>[</span>
                                <span class="num" data-to="{{ $projects_don->value_3 }}"
                                    data-time="2000">{{ $projects_don->value_3 }}</span>
                                <span>+]</span>
                            </div>
                            <h6>{{ $projects_don->title_english_3 }}</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="ot-counter">
                            <div>
                                <span>[</span>
                                <span class="num" data-to="{{ $projects_don->value_4 }}"
                                    data-time="2000">{{ $projects_don->value_4 }}</span>
                                <span>+]</span>
                            </div>
                            <h6>{{ $projects_don->title_english_4 }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-0">
            <div class="projects-grid pf_4_cols style-2 p-info-s2 img-scale w-auto no-gaps mx-0">
                <div class="grid-sizer"></div>
                @foreach ($projects as $project)
                    <div
                        class="project-item  category-14 {{ $loop->iteration == 1 || $loop->iteration == 6 ? 'thumb2x' : '' }}">
                        <div class="projects-box">
                            <div class="projects-thumbnail ">
                                <a href="{{ route('project.details', $project->id) }}">
                                    <img src="{{ asset($project->main_image) }}" style="height: 476px;" alt="">
                                </a>
                                <div class="overlay">
                                    <h5>{{ $project->title_english }}</h5>
                                    <i class="ot-flaticon-add"></i>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a class="title-link"
                                            href="{{ route('project.details', $project->id) }}">{!! $project->des_sm_eng !!}</a>
                                    </h5>
                                    <p class="portfolio-cates"><a href="#"> </a></p>
                                </div>
                                <a class="overlay" href="{{ route('project.details', $project->id) }}"></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <section class="cta">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h2 class="text-light mb-0">Get Incredible Interior Design Right Now!</h2>
                        <div class="space-5"></div>
                        <p class=" mb-0">At every stage, we could supervise your project – controlling all the
                            details and consulting the builders.</p>
                    </div>
                    <div class="col-lg-4 text-left text-lg-right align-self-center">
                        <div class="ot-button">
                            <a href="{{ route('contact.us') }}" class="octf-btn octf-btn-light border-hover-light">get in
                                touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="skill-1">
            <div class="grid-lines grid-lines-vertical">
                <span class="g-line-vertical line-left color-line-default"></span>
                <span class="g-line-vertical line-center color-line-default"></span>
                <span class="g-line-vertical line-right color-line-default"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 align-self-center">
                        <div class="skill-content-1 mr-xl-70">
                            <div class="ot-heading is-dots">
                                <span>[ our skills ]</span>
                                <h2 class="main-heading">The Core Company Values</h2>
                            </div>
                            <div class="space-20"></div>
                            <div class="space-5"></div>
                            <p>We are constantly growing, learning, and improving and our partners are steadily
                                increasing. 200 projects is a sizable number.</p>
                            <div class="space-10"></div>
                            <div class="ot-progress pb-3" data-percent="65" data-processed="true">
                                <div class="overflow">
                                    <span class="pname f-left">interior sketch</span>
                                </div>
                                <div class="iprogress">
                                    <div class="progress-bar"><span class="ppercent">65%</span></div>
                                </div>
                            </div>
                            <div class="ot-progress pb-3" data-percent="85" data-processed="true">
                                <div class="overflow"><span class="pname f-left">3D Modeling</span></div>
                                <div class="iprogress">
                                    <div class="progress-bar"><span class="ppercent">85%</span></div>
                                </div>
                            </div>
                            <div class="ot-progress pb-3" data-percent="55" data-processed="true">
                                <div class="overflow"><span class="pname f-left">2D Planning</span></div>
                                <div class="iprogress">
                                    <div class="progress-bar"><span class="ppercent">55%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-4 mt-lg-0 align-self-center">
                        <div class="skill-img-1">
                            <img src="{{ asset('frontend/assets') }}/images/image3-home1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        @include('frontend.home.inc.team')
        <section>
            <div class="grid-lines grid-lines-vertical">
                <span class="g-line-vertical line-left color-line-default"></span>
                <span class="g-line-vertical line-center color-line-default"></span>
                <span class="g-line-vertical line-right color-line-default"></span>
            </div>
            <div class="container">
                <div class="row pb-50">
                    <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                        <div class="ot-heading is-dots">
                            <span>[ our blog ]</span>
                            <h2 class="main-heading">Read Our Latest News</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-right align-self-center">
                        <div class="ot-button">
                            <a href="{{ route('all.blogs.list') }}" class="octf-btn octf-btn-dark border-hover-dark">View
                                all</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="post-box masonry-post post-item">
                                <div class="post-inner">
                                    <div class="entry-media post-cat-abs">
                                        <a href="{{ route('blog.details', $blog->id) }}"><img
                                                src="{{ asset($blog->main_image) }}" alt=""></a>
                                        <div class="post-cat">
                                            <div class="posted-in"><a href="#">
                                                    {{-- CategoryName Interior --}}
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="inner-post">
                                        <div class="entry-header">
                                            <div class="entry-meta">
                                                <span class="posted-on"><a href="#">
                                                        {{ $blog->created_at->format('F j, Y') }}</a></span>
                                                <span class="byline">
                                                    <span class="author vcard"><a class="url fn n"
                                                            href="{{ route('blog.details', $blog->id) }}"><!-- Poster name Tom
                                                                                                                                                                                                                                                                        Black --></a></span>
                                                </span>
                                            </div><!-- .entry-meta -->

                                            <h5 class="entry-title">
                                                <a class="title-link"
                                                    href="{{ route('blog.details', $blog->id) }}">{{ $blog->title_english }}</a>
                                            </h5>
                                        </div><!-- .entry-header -->

                                        <div class="the-excerpt">
                                            @if (strlen($blog->short_des_eng) > 6)
                                                @php
                                                    preg_match('/^([\w\W\s]+?\s+){6}/', $blog->short_des_eng, $matches);
                                                @endphp
                                                {!! $matches[0] !!}
                                            @else
                                                {!! $blog->short_des_eng !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
@endsection
