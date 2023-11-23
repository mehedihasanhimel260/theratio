<section id="section-testimonial-architecture"
    data-bgimage="url({{ asset('frontend/assets') }}/images-architecture/bg/1.jpg) fixed">
    <div class="container">
        <div class="row">

            <div class="col-md-8 offset-md-2">

                <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">
                    @foreach ($testimonials as $testimonial)
                        <blockquote class="testimonial-big">
                            <span class="title">{{ $testimonial->desig_eng }}</span>
                            {!! $testimonial->review_eng !!}

                            <span class="name">{{ $testimonial->name_english }}</span>
                        </blockquote>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
</section>
