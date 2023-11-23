<section id="section-about">
    <div class="wm wm-border dark wow fadeInDown">01</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h1>Our Services</h1>
                <div class="separator"><span><i class="fa fa-square"></i></span></div>
                <div class="spacer-single"></div>
            </div>
            @foreach ($services as $service)
                @php
                    $delay = $loop->iteration == 2 ? '0.2s' : ($loop->iteration == 3 ? '0.4s' : '');
                @endphp
                <div class="col-md-4 wow fadeInRight" data-wow-delay="{{ $delay }}">
                    <a class="image-popup-no-margins" href="{{ asset($service->main_image) }}">
                        <img src="{{ asset($service->main_image) }}" class="img-responsive img-shadow" alt="">
                    </a>
                    <div class="spacer20"></div>
                    <h3><span class="id-color">{{ $loop->iteration }}</span> {{ $service->title_english }}</h3>
                    {!! $service->des_sm_eng !!}


                </div>
            @endforeach



        </div>
    </div>
</section>

{{-- 
<section id="section-about">
    <div class="wm wm-border dark wow fadeInDown">01</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h1>Our Services</h1>
                <div class="separator"><span><i class="fa fa-square"></i></span></div>
                <div class="spacer-single"></div>
            </div>

            <div class="col-md-4 wow fadeInRight">
                <a class="image-popup-no-margins"
                    href="{{ asset('frontend/assets') }}/images-architecture/services/1.jpg">
                    <img src="{{ asset('frontend/assets') }}/images-architecture/services/1.jpg"
                        class="img-responsive img-shadow" alt="">
                </a>
                <div class="spacer20"></div>
                <h3><span class="id-color">01</span> New Construction</h3>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam, eaque
                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.


            </div>

            <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                <a class="image-popup-no-margins"
                    href="{{ asset('frontend/assets') }}/images-architecture/services/2.jpg">
                    <img src="{{ asset('frontend/assets') }}/images-architecture/services/2.jpg"
                        class="img-responsive img-shadow" alt="">
                </a>
                <div class="spacer20"></div>
                <h3><span class="id-color">02</span> Remodeling</h3>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam, eaque
                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.


            </div>

            <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                <a class="image-popup-no-margins"
                    href="{{ asset('frontend/assets') }}/images-architecture/services/3.jpg">
                    <img src="{{ asset('frontend/assets') }}/images-architecture/services/3.jpg"
                        class="img-responsive img-shadow" alt="">
                </a>
                <div class="spacer20"></div>
                <h3><span class="id-color">03</span> Tenant Improvement</h3>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam, eaque
                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.


            </div>

        </div>
    </div>
</section> --}}
