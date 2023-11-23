@extends('frontend.layout')
@section('content')
    <!-- revolution slider begin -->
    @include('frontend.home.inc.revolution-slider')
    <!-- revolution slider close -->

    <section id="section-text">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-md-1 mb-sm-30 text-center wow fadeInRight">
                    <div class="de-images">
                        <img class="di-small wow fadeIn" src="{{ asset($about->main_image) }}" alt="" />
                        <img class="di-small-2" src="{{ asset($about->main_image) }}" alt="" />
                        <img class="img-fluid wow fadeInRight" data-wow-delay=".25s" src="{{ asset($about->main_image) }}"
                            alt="" />
                    </div>
                </div>

                <div class="col-lg-5 offset-md-1 wow fadeInLeft" data-wow-delay="0s">
                    <h2>Your Partner for<br><span class="id-color">{{ $about->title_english }}</span></h2>
                    <p>
                        {!! $about->details_1_eng !!}
                    </p>

                    <a href="{{ route('about.details') }}" class="btn-custom font-weight-bold">About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- section begin -->
    @include('frontend.home.inc.service-section')
    <!-- section close -->


    <!-- section begin -->
    @include('frontend.home.inc.testimonial')
    <!-- section close -->



    <!-- section begin -->
    <section id="call-to-action" class="bg-color text-dark call-to-action padding40" aria-label="cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <h3 class="size-2 no-margin">Do You Need First-Class Construction? </h3>
                </div>

                <div class="col-lg-4 col-md-5 text-right">
                    <a href="{{ route('contact.us') }}" class="btn-black">Contact Us Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- logo carousel section close -->

    <section id="section-gallery-carousel" aria-label="section" class="no-top no-bottom" data-bgcolor="#111111">
        <div class="container-fluid position-relative">
            <div class="row align-items-center g-0">
                <div class="col-md-3 text-center">
                    <div class="spacer-single"></div>
                    <h3 class="no-bottom">Recent Works</h3>
                    <div class="spacer-single"></div>
                </div>

                <div class="col-md-9">
                    <div class="owl-custom-nav nav-in-col">
                        <a class="btn-next"></a>
                        <a class="btn-prev"></a>
                    </div>

                    <div id="gallery-carousel-3" class="owl-carousel owl-theme owl-slide">

                        <!-- gallery item -->
                        @foreach ($projects as $project)
                            <div class="item s2">
                                <div class="picframe">
                                    <a class="image-popup-no-margins" href="{{ asset($project->main_image) }}">
                                        <span class="overlay-v">
                                            <span class="pf_text">
                                                <span class="project-name">{{ $project->title_english }}</span>
                                            </span>
                                        </span>
                                        <img src="{{ asset($project->main_image) }}" alt="" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <!-- close gallery item -->

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- section begin -->
    {{-- <section id="section-highlight">
        <div class="wm wm-border dark wow fadeInDown ">02</div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                    <h1>Why Choose Us?</h1>
                    <div class="separator"><span><i class="fa fa-square"></i></span></div>
                    <div class="spacer-single"></div>
                </div>


                <div class="col-lg-4 wow fadeIn" data-wow-delay="0s">
                    <div class="box-number square">
                        <i class="bg-color icon_ribbon_alt"></i>
                        <div class="text">
                            <h3><span>Certified Construction</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam, eaque ipsa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeIn" data-wow-delay=".25s">
                    <div class="box-number square">
                        <i class="bg-color icon_star_alt"></i>
                        <div class="text">
                            <h3><span>Top Rated Company</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam, eaque ipsa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="box-number square">
                        <i class="bg-color icon_puzzle"></i>
                        <div class="text">
                            <h3><span>Expert Team</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam, eaque ipsa.</p>
                        </div>
                    </div>
                </div>

                <div class="spacer-single"></div>

                <div class="col-lg-4 wow fadeIn" data-wow-delay=".75s">
                    <div class="box-number square">
                        <i class="bg-color icon_currency"></i>
                        <div class="text">
                            <h3><span>Budget Management</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam, eaque ipsa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeIn" data-wow-delay="1s">
                    <div class="box-number square">
                        <i class="bg-color icon_shield"></i>
                        <div class="text">
                            <h3><span>Guaranteed Works</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam, eaque ipsa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeIn" data-wow-delay="1.25s">
                    <div class="box-number square">
                        <i class="bg-color icon_headphones"></i>
                        <div class="text">
                            <h3><span>24/7 Support</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam, eaque ipsa.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section> --}}
    <!-- section close -->


    @include('frontend.home.inc.team')

    <section id="section-text" data-bgimage="url({{ asset('frontend/assets') }}/images-architecture/bg/2.jpg) top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">

                    <div class="de_count ultra-big font-border text-center">
                        <h3 class="timer " data-to="{{ $projects_don->value_1 }}" data-speed="5000">
                            {{ $projects_don->value_1 }}</h3>
                        <span class="bg-color text-dark">{{ $projects_don->title_english_1 }}</span>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
