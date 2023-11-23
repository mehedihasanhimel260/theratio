@extends('frontend.layout')
@section('content')
    <div id="content" class="site-content">
@include('frontend.home.inc.revolution-slider')
        <section class="story-1">
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
                            <img src="{{ asset('frontend/assets') }}/images/image1-home1.png" class=""
                                alt="">
                            <div class="story-content">
                                <h5 class="story-title">David Oswald</h5>
                                <p class="story-description">founder of company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                            <img src="{{ asset('frontend/assets') }}/images/image2-home1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 align-self-center">
                        <div class="about-content-1 ml-xl-70">
                            <div class="ot-heading is-dots">
                                <span>[ about company ]</span>
                                <h2 class="main-heading">From Sketch to Life</h2>
                            </div>
                            <p>The basic philosophy of our studio is to create individual, aesthetically stunning
                                solutions for our customers by lightning-fast development of projects employing
                                unique styles and architecture. Even if you don’t have a ready sketch of what you
                                want – we will help you to get the result you dreamed of.</p>
                            <div class="ot-button">
                                <a href="portfolio-masonry.html" class="octf-btn octf-btn-dark">View Projects</a>
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
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client01.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client02.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client03.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client04.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client05.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client06.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client01.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client02.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client03.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client04.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client05.svg" alt="">
                                </figure>
                            </div>
                            <div class="img-item">
                                <figure><img src="{{ asset('frontend/assets') }}/images/client06.svg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 px-0">
                        <div class="cate-lines h-light">
                            <div class="cate-item">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets') }}/images/cate1.jpg" alt="">
                                </a>
                                <div class="cate-item_content">
                                    <a href="#">
                                        <h2>Office Spaces<span class="number-stroke">01</span></h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-0">
                        <div class="cate-lines h-light">
                            <div class="cate-item">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets') }}/images/cate2.jpg" alt="">
                                </a>
                                <div class="cate-item_content">
                                    <a href="#">
                                        <h2>Public Spaces<span class="number-stroke">02</span></h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 px-0">
                        <div class="cate-lines s-dark">
                            <div class="cate-item">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets') }}/images/cate3.jpg" alt="">
                                </a>
                                <div class="cate-item_content">
                                    <a href="#">
                                        <h2>Residential Spaces<span class="number-stroke">03</span></h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div
                            class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-1 text-center">
                            <div class="icon-main"><img src="{{ asset('frontend/assets') }}/images/iconbox1.2.png"
                                    alt="">
                            </div>
                            <div class="content-box">
                                <h5><a href="servcies-detail-1.html">Design & Planning</a></h5>
                                <p>We will help you to get the result you dreamed of.</p>
                            </div>
                            <div class="link-box">
                                <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div
                            class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-2 text-center">
                            <div class="icon-main"><img src="{{ asset('frontend/assets') }}/images/iconbox2.png"
                                    alt=""></div>
                            <div class="content-box">
                                <h5><a href="servcies-detail-1.html">Custom Solutions</a></h5>
                                <p>Individual, aesthetically stunning solutions for customers.</p>
                            </div>
                            <div class="link-box">
                                <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div
                            class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-3 text-center">
                            <div class="icon-main"><img src="{{ asset('frontend/assets') }}/images/iconbox3.png"
                                    alt=""></div>
                            <div class="content-box">
                                <h5><a href="servcies-detail-1.html">Furniture & Decor</a></h5>
                                <p>We create and produce our product design lines.</p>
                            </div>
                            <div class="link-box">
                                <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-120"></div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                        <div class="ot-counter">
                            <div>
                                <span>[</span>
                                <span class="num" data-to="180" data-time="2000">180</span>
                                <span>+]</span>
                            </div>
                            <h6>Current Clients</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                        <div class="ot-counter">
                            <div>
                                <span>[</span>
                                <span class="num" data-to="10" data-time="2000">10</span>
                                <span>+]</span>
                            </div>
                            <h6>years of experience</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-sm-0">
                        <div class="ot-counter">
                            <div>
                                <span>[</span>
                                <span class="num" data-to="35" data-time="2000">35</span>
                                <span>+]</span>
                            </div>
                            <h6>awards winning</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="ot-counter">
                            <div>
                                <span>[</span>
                                <span class="num" data-to="5" data-time="2000">5</span>
                                <span>+]</span>
                            </div>
                            <h6>Offices Worldwide</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-0">
            <div class="projects-grid pf_4_cols style-2 p-info-s2 img-scale w-auto no-gaps mx-0">
                <div class="grid-sizer"></div>
                <div class="project-item category-19 thumb2x">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="portfolio-standar.html">
                                <img src="{{ asset('frontend/assets') }}/images/projects-grid/project-metro1.jpg"
                                    alt="">
                            </a>
                            <div class="overlay">
                                <h5>Stylish Family Appartment</h5>
                                <i class="ot-flaticon-add"></i>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-info-inner">
                                <h5><a class="title-link" href="portfolio-standar.html">Stylish Family
                                        Appartment</a></h5>
                                <p class="portfolio-cates"><a href="#">Interior</a></p>
                            </div>
                            <a class="overlay" href="portfolio-standar.html"></a>
                        </div>
                    </div>
                </div>
                <div class="project-item category-14 ">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="portfolio-detail-slider.html">
                                <img src="{{ asset('frontend/assets') }}/images/projects-grid/project2.jpg"
                                    alt="">
                            </a>
                            <div class="overlay">
                                <h5>Minimal Guests House</h5>
                                <i class="ot-flaticon-add"></i>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-info-inner">
                                <h5><a class="title-link" href="portfolio-detail-slider.html">Minimal Guests
                                        House</a></h5>
                                <p class="portfolio-cates">
                                    <a href="#">Decor</a>
                                    <a href="#">Interior</a>
                                </p>
                            </div>
                            <a class="overlay" href="portfolio-detail-slider.html"></a>
                        </div>
                    </div>
                </div>
                <div class="project-item category-15 ">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="portfolio-left.html">
                                <img src="{{ asset('frontend/assets') }}/images/projects-grid/project3.jpg"
                                    alt="">
                            </a>
                            <div class="overlay">
                                <h5>Art Family Residence</h5>
                                <i class="ot-flaticon-add"></i>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-info-inner">
                                <h5><a class="title-link" href="portfolio-left.html">Art Family Residence</a></h5>
                                <p class="portfolio-cates"><a href="#">Architecture</a></p>
                            </div>
                            <a class="overlay" href="portfolio-left.html"></a>
                        </div>
                    </div>
                </div>
                <div class="project-item category-20 ">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="portfolio-right.html">
                                <img src="{{ asset('frontend/assets') }}/images/projects-grid/project4.jpg"
                                    alt="">
                            </a>
                            <div class="overlay">
                                <h5>Private House in Spain</h5>
                                <i class="ot-flaticon-add"></i>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-info-inner">
                                <h5><a class="title-link" href="portfolio-right.html">Private House in Spain</a>
                                </h5>
                                <p class="portfolio-cates"><a href="#">Furniture</a></p>
                            </div>
                            <a class="overlay" href="portfolio-right.html"></a>
                        </div>
                    </div>
                </div>
                <div class="project-item category-19 ">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="portfolio-small.html">
                                <img src="{{ asset('frontend/assets') }}/images/projects-grid/project5.jpg"
                                    alt="">
                            </a>
                            <div class="overlay">
                                <h5>Modern Villa in Belgium</h5>
                                <i class="ot-flaticon-add"></i>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-info-inner">
                                <h5><a class="title-link" href="portfolio-small.html">Modern Villa in Belgium</a>
                                </h5>
                                <p class="portfolio-cates"><a href="#">Furniture</a></p>
                            </div>
                            <a class="overlay" href="portfolio-small.html"></a>
                        </div>
                    </div>
                </div>
                <div class="project-item category-14 thumb2x">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="portfolio-big.html">
                                <img src="{{ asset('frontend/assets') }}/images/projects-grid/project-metro2.jpg"
                                    alt="">
                            </a>
                            <div class="overlay">
                                <h5>Minimalistic Style Appartment</h5>
                                <i class="ot-flaticon-add"></i>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-info-inner">
                                <h5><a class="title-link" href="portfolio-big.html">Minimalistic Style
                                        Appartment</a></h5>
                                <p class="portfolio-cates"><a href="#">Furniture</a><a href="#">interior</a>
                                </p>
                            </div>
                            <a class="overlay" href="portfolio-big.html"></a>
                        </div>
                    </div>
                </div>
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
                            <a href="contact.html" class="octf-btn octf-btn-light border-hover-light">get in
                                touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="skill-1">
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
        </section>
        <section class="section-team-list team-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center theratio-align-center">
                        <div class="ot-heading is-dots">
                            <span>[ our professionals ]</span>
                            <h2 class="main-heading">Meet Our Skilled Team</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="team-slider owl-theme owl-carousel">
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member1.jpg" alt="Christina Torres">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Christina Torres</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ Company Founder ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member2.jpg" alt="Jesica Lina">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Jesica Lina</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ Marketing Manager ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member3.jpg" alt="Robert Cooper">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Robert Cooper</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ Finance Manager ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member4.jpg" alt="Olivia Peterson">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Olivia Peterson</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ CEO of Company ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member5.jpg" alt="Amalia Bruno">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Amalia Bruno</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ Interior Designer ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member6.jpg" alt="Katie Doyle">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Katie Doyle</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ Interior Designer ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member10.jpg" alt="Andrew Kinzer">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Andrew Kinzer</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ CEO of Company ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member6.jpg" alt="Anna Richmond">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Anna Richmond</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ Marketing Manager ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member1.jpg" alt="Christina Torres">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Christina Torres</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ Company Founder ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member2.jpg" alt="Jesica Lina">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Jesica Lina</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ Marketing Manager ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ asset('frontend/assets') }}/images/member3.jpg" alt="Robert Cooper">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">Robert Cooper</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                <a href="https://twitter.com/"><i class="fab fab fa-twitter"></i></a>
                                                <a href="https://linkedin.com/"><i class="fab fab fa-linkedin-in"></i></a>
                                                <a href="https://instagram.com/"><i class="fab fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="m_extra">
                                            <span>[ Finance Manager ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                            <a href="blog.html" class="octf-btn octf-btn-dark border-hover-dark">View all</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="post-box masonry-post post-item">
                            <div class="post-inner">
                                <div class="entry-media post-cat-abs">
                                    <a href="post.html"><img src="{{ asset('frontend/assets') }}/images/blog/grid1.jpg"
                                            alt=""></a>
                                    <div class="post-cat">
                                        <div class="posted-in"><a href="#">Interior</a></div>
                                    </div>
                                </div>
                                <div class="inner-post">
                                    <div class="entry-header">
                                        <div class="entry-meta">
                                            <span class="posted-on"><a href="#">March 19, 2020</a></span>
                                            <span class="byline">
                                                <span class="author vcard"><a class="url fn n" href="#">Tom
                                                        Black</a></span>
                                            </span>
                                        </div><!-- .entry-meta -->

                                        <h5 class="entry-title">
                                            <a class="title-link" href="post.html">Top 10 Tips for Your Kitchen
                                                Interior Design</a>
                                        </h5>
                                    </div><!-- .entry-header -->

                                    <div class="the-excerpt">
                                        A faceting effect livens up and...
                                    </div><!-- .entry-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="post-box masonry-post post-item">
                            <div class="post-inner">
                                <div class="entry-media post-cat-abs">
                                    <a href="post.html"><img src="{{ asset('frontend/assets') }}/images/blog/grid2.jpg"
                                            alt=""></a>
                                    <div class="post-cat">
                                        <div class="posted-in"><a href="#">Interior</a></div>
                                    </div>
                                </div>
                                <div class="inner-post">
                                    <div class="entry-header">
                                        <div class="entry-meta">
                                            <span class="posted-on"><a href="#">March 19, 2020</a></span>
                                            <span class="byline">
                                                <span class="author vcard"><a class="url fn n" href="#">Tom
                                                        Black</a></span>
                                            </span>
                                        </div><!-- .entry-meta -->

                                        <h5 class="entry-title">
                                            <a class="title-link" href="post.html">The Golden Ratio Rules for
                                                Best 2D Sketch</a>
                                        </h5>
                                    </div><!-- .entry-header -->

                                    <div class="the-excerpt">
                                        A faceting effect livens up and...
                                    </div><!-- .entry-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="post-box masonry-post post-item">
                            <div class="post-inner">
                                <div class="entry-media post-cat-abs">
                                    <a href="post.html"><img src="{{ asset('frontend/assets') }}/images/blog/grid3.jpg"
                                            alt=""></a>
                                    <div class="post-cat">
                                        <div class="posted-in"><a href="#">Interior</a></div>
                                    </div>
                                </div>
                                <div class="inner-post">
                                    <div class="entry-header">
                                        <div class="entry-meta">
                                            <span class="posted-on"><a href="#">March 19, 2020</a></span>
                                            <span class="byline">
                                                <span class="author vcard"><a class="url fn n" href="#">Tom
                                                        Black</a></span>
                                            </span>
                                        </div><!-- .entry-meta -->

                                        <h5 class="entry-title">
                                            <a class="title-link" href="post.html">Use Pastel Colors & Natural
                                                Materials</a>
                                        </h5>
                                    </div><!-- .entry-header -->

                                    <div class="the-excerpt">
                                        A faceting effect livens up and...
                                    </div><!-- .entry-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
