@php
    $logos = App\Models\Logo::latest()->first();
    $services = \App\Models\Service::get();
    $projects = \App\Models\Project::where('status', 1)->get();
@endphp
<header class="transparent">
    <div class="info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="column">Working Hours Monday - Friday <span
                            class="id-color"><strong>08:00-16:00</strong></span></div>
                    <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span>
                    </div>
                    <!-- social icons -->
                    <div class="column social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                    <!-- social icons close -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- logo begin -->
                <div id="logo">
                    <a href="/">
                        <img class="logo" src="{{ asset($logos->frontend_logo_image) }}" alt="">
                    </a>
                </div>
                <!-- logo close -->

                <!-- small button begin -->
                <span id="menu-btn"></span>
                <!-- small button close -->

                <!-- mainmenu begin -->
                <nav class="md-flex">
                    <ul id="mainmenu">
                        <li><a href="/">Home<span></span></a>
                        </li>

                        <li><a href="{{ route('about.details') }}">About Us</a>
                        </li>
                        <li><a href="#">Projects</a>
                            <ul>
                                @foreach ($projects as $project)
                                    <li><a
                                            href="{{ route('project.details', $project->id) }}">{{ $project->title_english }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li><a href="#">Services</a>

                            <ul>
                                @foreach ($services as $service)
                                    <li>
                                        <a
                                            href="{{ route('service.details', $service->id) }}">{{ $service->title_english }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li><a href="services.html">Gallary</a>
                            <ul>
                                <li><a href="{{ route('image.gallery') }}">Image Gallary</a></li>
                                <li><a href="{{ route('video.gallery') }}">Video Gallary</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('all.blogs.list') }}">Blog</a>
                        </li>
                        <li><a href="{{ route('contact.us') }}">Contact</a>
                        </li>
                    </ul>
                </nav>

                <!-- mainmenu close -->

            </div>


        </div>
    </div>
</header>
