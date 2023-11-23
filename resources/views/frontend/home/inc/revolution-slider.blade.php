<section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
    <div id="slider-revolution">
        <ul>
            @foreach ($slider as $item)
                <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img alt="" class="rev-slidebg" data-bgparallax="0" src="{{ asset($item->image) }}">

                    <div class="tp-caption big-white sft" data-x="center" data-y="250" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-speed="800" data-start="400"
                        data-easing="easeInOutExpo">
                        {{ $item->short_text_eng }}
                    </div>

                    <div class="tp-caption title-128 font-weight-bold text-white" data-x="center" data-y="350"
                        data-height="none" data-whitespace="wrap"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="400">
                        {{ $item->title_english }}
                    </div>

                    <div class="tp-caption sfb" data-x="center" data-y="490" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-speed="400" data-start="800" data-easing="easeInOutExpo">
                        <a href="#section-intro" class="btn-custom font-weight-bold scroll-to">Our Portfolio
                        </a>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</section>
