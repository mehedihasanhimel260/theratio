<div class="p-0">
    <div class="grid-lines grid-lines-horizontal z-index-1">
        <span class="g-line-horizontal line-bottom color-line-secondary"></span>
    </div>
    <div class="grid-lines grid-lines-vertical z-index-1">
        <span class="g-line-vertical line-left color-line-secondary"></span>
        <span class="g-line-vertical line-right color-line-secondary"></span>
    </div>
    <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase"
        data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_one" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>

                <!-- SLIDE 1 -->
                @foreach ($slider as $item)
                    <li data-index="rs-7{{ $loop->iteration }}" data-transition="fade" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="300" data-thumb="{{ asset($item->image) }}" data-rotate="0"
                        data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset($item->image) }}" data-bgcolor='rgba(255,255,255,0)' style=''
                            alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg"
                            data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina>

                        <!-- LAYER 1  right image overlay dark-->


                        <!-- LAYER 3  Thin text title-->
                        <div class="tp-caption tp-resizeme tp-caption-big" id="slide-70-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['56','46','34','0']"
                            data-y="['center','center','center','center']" data-voffset="['-64','-72','-65','-50']"
                            data-fontsize="['206',150','0','0']" data-lineheight="['206','170','127','80']"
                            data-letterspacing="['104','85','63','39']" data-fontweight="['900','900','900','900']"
                            data-color="['transparent','transparent','transparent','transparent']"
                            data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'
                            data-textAlign="['center','center','center','center']">Design
                        </div>

                        <!-- LAYER 4  Bold Title-->
                        <div class="tp-caption tp-resizeme tp-caption-main" id="slide-70-layer-2"
                            data-x="['center','center','center','center']" data-hoffset="['2','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['-56','-63','-60','-65']"
                            data-fontsize="['93','72','55','40']" data-lineheight="['83','70','51','55']"
                            data-color="['#fff','#fff','#fff','#fff']" data-fontweight="['200','200','200','200']"
                            data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','left']"> {{ $item->title_english }}
                        </div>

                        <!-- LAYER 5  Paragraph-->
                        <div class="tp-caption tp-resizeme tp-desc" id="slide-70-layer-3"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['54','43','31','15']"
                            data-fontsize="['19','18','17','16']" data-lineheight="['33','27','28','24']"
                            data-width="['818','630','500','417']" data-weight="['500','500','500','500']"
                            data-color="['#fff','#fff','#fff','#fff']" data-whitespace="normal" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                            data-textAlign="['center','center','center','center']">{{ $item->short_text_eng }}
                        </div>

                        <!-- LAYER 6  Read More-->
                        <div class="tp-caption rev-btn" id="slide-70-layer-4"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['170','140','119','110']"
                            data-fontsize="['13','18','17','0']" data-lineheight="['25','18','16','16']"
                            data-width="none" data-height="none" data-whitespace="nowrap"
                            data-responsive_offset="on"
                            data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"><a href="#"
                                class="octf-btn octf-btn-primary btn-slider btn-large">View Projects</a>
                        </div>

                    </li>
                @endforeach

            </ul>
            <div class="tp-bannertimer"></div>

        </div>
    </div>
    <div class="banner-desc-1">
        @php

            $WebsiteLink = App\Models\WebsiteLink::latest()->first();
        @endphp

        <ul>
            <li><a href="{{ $WebsiteLink->linkedIn }}"><span>linkedIn</span></a></li>
            <li><a href="{{ $WebsiteLink->twitter }}"><span>twitter</span></a></li>
            <li><a href="{{ $WebsiteLink->facebook }}"><span>facebook</span></a></li>
            <li><a href="{{ $WebsiteLink->instagram }}"><span>instagram</span></a></li>
        </ul>
    </div>
</div>

