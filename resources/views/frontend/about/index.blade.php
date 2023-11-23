@extends('frontend.layout')
@section('content')
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                    <ul class="crumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="sep">/</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-top no-bottom">
        <section id="section-about-us-2" class="side-bg no-padding">
            <div class="image-container col-md-5 pull-left" style="background-image: url({{ asset($about->main_image) }})"
                data-delay="0"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6 " data-animation="fadeInRight" data-delay="200">
                        <div class="inner-padding">
                            <h2>{{ $about->title_english }}</h2>
                            {!! $about->details_1_eng !!}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-team">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 container-4">
                        <!-- team member -->
                        <!-- team close -->

                        <!-- team member -->

                        @foreach ($teams as $team)
                            <div class="de-team-list">
                                <div class="team-pic">
                                    <img src="{{ asset($team->image) }}" class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc col-md-12">
                                    <h3>{{ $team->name_english }}</h3>
                                    <p class="lead">{{ $team->desig_english }}</p>
                                    <div class="small-border"></div>
                                    <p></p>

                                    <div class="social">
                                        <a href="{{ $team->facebook }}"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="{{ $team->twitter }}"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="{{ $team->instagram }}"><i class="fa fa-instagram fa-lg"></i></a>
                                        <a href="{{ $team->linkedin }}"><i class="fa fa-linkedin fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- team close -->

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </section>

        <section id="section-testimonial" class="text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>Customer Says</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                <div id="testimonial-carousel" class="owl-carousel owl-theme de_carousel wow fadeInUp" data-wow-delay=".3s">

                    @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>{!! $testimonial->review_eng !!}</p>
                                    <div class="de_testi_by">
                                        {{ $testimonial->name_english }}
                                    </div>
                                </blockquote>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- section begin -->
        <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5"
            data-type="background" aria-label="view-all-projects">
            <a href="{{ route('contact.us') }}" class="btn btn-line black btn-big">Talk With Us</a>
        </section>
        <!-- logo carousel section close -->

    </div>
@endsection
