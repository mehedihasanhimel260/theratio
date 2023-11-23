@php
    $logos = App\Models\Logo::latest()->first();
    $projects = \App\Models\Project::where('status', 1)->get();
    $WebsiteLink = App\Models\WebsiteLink::latest()->first();
    $footer = App\Models\Footer::latest()->first();
@endphp



<footer id="site-footer" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer">
                    <img src="{{ asset($logos->frontend_footer_image) }}" class="footer-logo" alt="">
                    <p>We provides a full range of interior design, architectural design.</p>
                    <div class="footer-social list-social">
                        <ul>
                            <li><a href="{{ $WebsiteLink->facebook }}" target="_self"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $WebsiteLink->twitter }}" target="_self"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="{{ $WebsiteLink->linkedIn }}" target="_self"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ $WebsiteLink->instagram }}" target="_self"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer">
                    <h6>Contacts</h6>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                            <span class="list-item-text">{{ $WebsiteLink->address_english }}</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                            <span class="list-item-text">{{ $WebsiteLink->email }}</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                            <span class="list-item-text">{{ $WebsiteLink->phone }} </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="widget-footer widget-contact">
                    <h6>Latest Projects</h6>
                    <ul>
                        @foreach ($projects as $project)
                            <li><a href="{{ route('project.details', $project->id) }}">{{ $project->title_english }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="widget-footer footer-widget-subcribe">
                    <h6>Subscribe</h6>
                    <form class="mc4wp-form" method="post">
                        <div class="mc4wp-form-fields">
                            <div class="subscribe-inner-form">
                                <input type="email" name="EMAIL" placeholder="YOUR EMAIL" required="">
                                <button type="submit" class="subscribe-btn-icon"><i
                                        class="ot-flaticon-send"></i></button>
                            </div>
                        </div>
                    </form>
                    <p>Follow our newsletter to stay updated about agency.</p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #site-footer -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                <p>Copyright © 2021 <a class="text-light" href="#">{{ $footer->copy_right_text }}</a></p>
            </div>
            <div class="col-lg-5 col-md-12 align-self-center">
                <ul class="icon-list-items inline-items justify-content-lg-end">
                    <li class="icon-list-item inline-item">
                        <a href="#"><span class="icon-list-text">Terms of use</span></a>
                    </li>
                    <li class="icon-list-item inline-item">
                        <a href="#"><span class="icon-list-text">Privacy Environmental
                                Policy</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



