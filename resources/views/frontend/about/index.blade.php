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
                    <img src="{{ asset('frontend/assets') }}/images/image1-aboutus.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 align-self-center">
                <div class="about-detail">
                    <div class="ot-heading is-dots">
                        <span>[ about company ]</span>
                        <h2 class="main-heading">Best Interior Solutions</h2>
                    </div>
                    <p>The basic philosophy of our studio is to create individual, aesthetically stunning solutions for our customers by lightning-fast development of projects employing unique styles and architecture. Even if you don’t have a ready sketch of what you want – we will help you to get the result you dreamed of.</p>
                    <div class="ot-button">
                        <a href="portfolio-masonry.html" class="octf-btn octf-btn-dark border-hover-dark">View Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<section class="about-counter">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                <div class="ot-counter">
                    <div>
                        <span>[</span>
                        <span class="num" data-to="180" data-time="2000">0</span>
                        <span>+]</span>
                    </div>
                    <h6>Current Clients</h6>                            
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                <div class="ot-counter">
                    <div>
                        <span>[</span>
                        <span class="num" data-to="10" data-time="2000">0</span>
                        <span>+]</span>
                    </div>
                    <h6>years of experience</h6>                            
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-sm-0">
                <div class="ot-counter">
                    <div>
                        <span>[</span>
                        <span class="num" data-to="35" data-time="2000">0</span>
                        <span>+]</span>
                    </div>
                    <h6>awards winning</h6>                             
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="ot-counter">
                    <div>
                        <span>[</span>
                        <span class="num" data-to="5" data-time="2000">0</span>
                        <span>+]</span>
                    </div>
                    <h6>Offices Worldwide</h6>                              
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how-it-work">
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
                                The basic philosophy of our studio is to create individual, aesthetically stunning solutions for our customers by lightning-fast development of projects employing unique styles.
                            </div>
                        </div>
                        <div class="acc-item">
                            <div class="acc-toggle flex-middle">
                                How interior design is cost?
                                <span class="down"><i class="fas fa-plus"></i></span>
                                <span class="up"><i class="fas fa-minus"></i></span>
                            </div>
                            <div class="acc-content">
                                The basic philosophy of our studio is to create individual, aesthetically stunning solutions for our customers by lightning-fast development of projects employing unique styles.
                            </div>
                        </div>
                        <div class="acc-item">
                            <div class="acc-toggle flex-middle">
                                How much time I will spend on planning?
                                <span class="down"><i class="fas fa-plus"></i></span>
                                <span class="up"><i class="fas fa-minus"></i></span>
                            </div>
                            <div class="acc-content">
                                The basic philosophy of our studio is to create individual, aesthetically stunning solutions for our customers by lightning-fast development of projects employing unique styles.
                            </div>
                        </div>
                        <div class="acc-item">
                            <div class="acc-toggle flex-middle">
                                Can I create custom design?
                                <span class="down"><i class="fas fa-plus"></i></span>
                                <span class="up"><i class="fas fa-minus"></i></span>
                            </div>
                            <div class="acc-content">
                                The basic philosophy of our studio is to create individual, aesthetically stunning solutions for our customers by lightning-fast development of projects employing unique styles.
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
</section>
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
                        <div class="testi-item">
                            <div class="ttext">
                                <div class="layer-behind"></div>
                                <span></span>
                                "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."                          
                            </div>
                            <div class="t-head flex-middle">
                                <img src="{{ asset('frontend/assets') }}/images/testi1.png" alt="">
                                <div class="tinfo">
                                    <h6>Anna Paulina</h6>
                                    <span>Client of Company</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="ttext">
                                <div class="layer-behind"></div>
                                <span></span>
                                "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."                          
                            </div>
                            <div class="t-head flex-middle">
                                <img src="{{ asset('frontend/assets') }}/images/testi2.png" alt="">
                                <div class="tinfo">
                                    <h6>Pablo Gusterio</h6>
                                    <span>Client of Company</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="ttext">
                                <div class="layer-behind"></div>
                                <span></span>
                                "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."                          
                            </div>
                            <div class="t-head flex-middle">
                                <img src="{{ asset('frontend/assets') }}/images/testi3.png" alt="">
                                <div class="tinfo">
                                    <h6>Kristina Lee</h6>
                                    <span>Client of Company</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="ttext">
                                <div class="layer-behind"></div>
                                <span></span>
                                "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."                          
                            </div>
                            <div class="t-head flex-middle">
                                <img src="{{ asset('frontend/assets') }}/images/testi1.png" alt="">
                                <div class="tinfo">
                                    <h6>Anna Paulina</h6>
                                    <span>Client of Company</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="ttext">
                                <div class="layer-behind"></div>
                                <span></span>
                                "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."                          
                            </div>
                            <div class="t-head flex-middle">
                                <img src="{{ asset('frontend/assets') }}/images/testi2.png" alt="">
                                <div class="tinfo">
                                    <h6>Pablo Gusterio</h6>
                                    <span>Client of Company</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="ttext">
                                <div class="layer-behind"></div>
                                <span></span>
                                "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."                          
                            </div>
                            <div class="t-head flex-middle">
                                <img src="{{ asset('frontend/assets') }}/images/testi3.png" alt="">
                                <div class="tinfo">
                                    <h6>Kristina Lee</h6>
                                    <span>Client of Company</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
