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
                @foreach ($teams as $team)
                    <div class="team-item">
                        <div class="team-wrap">
                            <div class="team-thumb">
                                <img src="{{ asset($team->image) }}" alt="{{ $team->name_english }}">
                            </div>
                            <div class="team-text-overlay">
                                <div class="team-info dtable">
                                    <div class="dcell">
                                        <h4 class="m_name">{{ $team->name_english }}</h4>
                                        <div class="team-social flex-middle">
                                            <span class="ot-flaticon-add"></span>
                                            <a href=" {{ $team->twitter }}"><i class="fab fab fa-twitter"></i></a>
                                            <a href=" {{ $team->linkedin }}"><i class="fab fab fa-linkedin-in"></i></a>
                                            <a href=" {{ $team->instagram }}"><i class="fab fab fa-instagram"></i></a>
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
    </div>
</section>

{{-- <section>
    <div class="wm wm-border dark wow fadeInDown ">03</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h1>Our Team</h1>
                <div class="separator"><span><i class="fa fa-square"></i></span></div>
            </div>


            <div class="spacer-single"></div>
            @foreach ($teams as $team)
                @php
                    $delay = $loop->iteration == 2 ? '0.2s' : ($loop->iteration == 3 ? '0.3s' : ($loop->iteration == 4 ? '0.4s' : ''));
                @endphp
                <div class="col-md-3 wow fadeInRight" data-wow-delay="{{ $delay }}">
                    <div class="de-team-contact s2">
                        <img src="{{ asset($team->image) }}" class="img-responsive" alt="" />
                        <h3>{{ $team->name_english }}</h3>
                        {{ $team->desig_english }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}
