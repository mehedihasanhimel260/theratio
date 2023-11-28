@extends('frontend.layout')
@section('content')
    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-about">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">About Us</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="about-company">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 align-self-center text-center mb-5 mb-lg-0">
                    <div class="about-img">
                        <img src="{{ asset($about->main_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 align-self-center">
                    <div class="about-detail">
                        <div class="ot-heading is-dots">
                            <span>[ about company ]</span>
                            <h2 class="main-heading">{{ $about->title_english }}</h2>
                        </div>
                        <p>{!! $about->details_1_eng !!}</p>
                        <div class="ot-button">
                            <a href="{{ route('contact.us') }}" class="octf-btn octf-btn-dark border-hover-dark">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- 
<section class="our-philosophy">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 theratio-align-center text-center">
                <div class="ot-heading is-dots">
                    <span>[ company strategy ]</span>
                    <h2 class="main-heading text-light">Our Philosophy</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5 mb-xl-0">
                <div class="support-box">
                    <div class="inner-box">
                        <div class="overlay flex-middle">
                            <div class="inner">
                                <p>We call our style ‘live minimalism’. Live minimalism is not about a or visual look. It refers to inner feelings, to your true self.</p>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="icon-title">
                                <span class="ot-flaticon-brickwall"></span>
                                <h5>Our Missions</h5>
                            </div>
                            <img src="{{ asset('frontend/assets') }}/images/support1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5 mb-xl-0">
                <div class="support-box">
                    <div class="inner-box">
                        <div class="overlay flex-middle">
                            <div class="inner">
                                <p>We call our style ‘live minimalism’. Live minimalism is not about a or visual look. It refers to inner feelings, to your true self.</p>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="icon-title">
                                 <span class="ot-flaticon-paint"></span>
                                 <h5>Our Vision</h5>
                            </div>
                            <img src="{{ asset('frontend/assets') }}/images/support2.jpg" class="" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="support-box">
                    <div class="inner-box">
                        <div class="overlay flex-middle">
                            <div class="inner">
                                <p>We call our style ‘live minimalism’. Live minimalism is not about a or visual look. It refers to inner feelings, to your true self.</p>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="icon-title">
                                 <span class="ot-flaticon-cube"></span>
                                 <h5>Our Values</h5>
                            </div>
                            <img src="{{ asset('frontend/assets') }}/images/support3.jpg" class="attachment-full size-full lazyloaded" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
--}}
    <section class="about-counter">
        <div class="container">
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
                            <span class="num" data-to="{{ $projects_don->value_2 }}" data-time="2000">{{ $projects_don->value_2 }}</span>
                            <span>+]</span>
                        </div>
                        <h6>{{ $projects_don->title_english_2 }}</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-sm-0">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="{{ $projects_don->value_3 }}" data-time="2000">{{ $projects_don->value_3 }}</span>
                            <span>+]</span>
                        </div>
                        <h6>{{ $projects_don->title_english_3 }}</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="{{ $projects_don->value_4 }}" data-time="2000">{{ $projects_don->value_4 }}</span>
                            <span>+]</span>
                        </div>
                        <h6>{{ $projects_don->title_english_4 }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="how-it-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-5 mb-lg-0 align-self-center">
                    <div class="work-content">
                        <div class="ot-heading is-dots">
                            <span>[ how it works ]</span>
                            <h2 class="main-heading">From Sketch to Life</h2>
                        </div>
                        <div class="ot-accordions">
                            <div class="acc-item">
                                <div class="acc-toggle flex-middle" data-default="yes">
                                    What is 3D desing and how it work?
                                    <span class="down"><i class="fas fa-plus"></i></span>
                                    <span class="up"><i class="fas fa-minus"></i></span>
                                </div>
                                <div class="acc-content">
                                    The basic philosophy of our studio is to create individual, aesthetically stunning
                                    solutions for our customers by lightning-fast development of projects employing unique
                                    styles.
                                </div>
                            </div>
                            <div class="acc-item">
                                <div class="acc-toggle flex-middle">
                                    How interior design is cost?
                                    <span class="down"><i class="fas fa-plus"></i></span>
                                    <span class="up"><i class="fas fa-minus"></i></span>
                                </div>
                                <div class="acc-content">
                                    The basic philosophy of our studio is to create individual, aesthetically stunning
                                    solutions for our customers by lightning-fast development of projects employing unique
                                    styles.
                                </div>
                            </div>
                            <div class="acc-item">
                                <div class="acc-toggle flex-middle">
                                    How much time I will spend on planning?
                                    <span class="down"><i class="fas fa-plus"></i></span>
                                    <span class="up"><i class="fas fa-minus"></i></span>
                                </div>
                                <div class="acc-content">
                                    The basic philosophy of our studio is to create individual, aesthetically stunning
                                    solutions for our customers by lightning-fast development of projects employing unique
                                    styles.
                                </div>
                            </div>
                            <div class="acc-item">
                                <div class="acc-toggle flex-middle">
                                    Can I create custom design?
                                    <span class="down"><i class="fas fa-plus"></i></span>
                                    <span class="up"><i class="fas fa-minus"></i></span>
                                </div>
                                <div class="acc-content">
                                    The basic philosophy of our studio is to create individual, aesthetically stunning
                                    solutions for our customers by lightning-fast development of projects employing unique
                                    styles.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="work-img">
                        <img src="{{ asset('frontend/assets') }}/images/image2-aboutus.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="about-team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ot-heading is-dots">
                        <span>[ our professionals ]</span>
                        <h2 class="main-heading">Meet Our Skilled Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-slider owl-theme owl-carousel">
                    @foreach ($teams as $team)
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset($team->image) }}" alt="Christina Torres">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">{{ $team->name_english }}</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="{{ $team->facebook }}"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{ $team->twitter }}"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{ $team->instagram }}"><i
                                                        class="fa fa-instagram fa-lg"></i></a>
                                                <a href="{{ $team->linkedin }}"><i class="fa fa-linkedin fa-lg"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ {{ $team->desig_english }}]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>
    <section class="about-testi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[ testimonials ]</span>
                        <h2 class="main-heading">What People Say</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ot-testimonials v-light">
                        <div class="testimonial-inner testi-col-3 owl-theme owl-carousel">
                            @foreach ($testimonials as $testimonial)
                                <div class="testi-item">
                                    <div class="ttext">
                                        <div class="layer-behind"></div>
                                        <span></span>
                                        {!! $testimonial->review_eng !!}
                                    </div>
                                    <div class="t-head flex-middle">
                                        <img src="{{ asset($testimonial->image) }}" alt="">
                                        <div class="tinfo">
                                            <h6> {{ $testimonial->name_english }}</h6>
                                            <span> {{ $testimonial->desig_eng }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
