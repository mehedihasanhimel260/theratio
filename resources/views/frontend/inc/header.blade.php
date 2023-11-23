 @php

     $WebsiteLink = App\Models\WebsiteLink::latest()->first();
     $logos = App\Models\Logo::latest()->first();
     $services = \App\Models\Service::get();
     $projects = \App\Models\Project::where('status', 1)->get();
     $images = \App\Models\ImageGallery::where('status', 1)
         ->latest('id', 'DESC')
         ->get();
 @endphp


 <header id="site-header" class="site-header header-transparent">
     <!-- Main Header start -->
     <div class="octf-main-header is-fixed">
         <div class="octf-area-wrap">
             <div class="container-fluid octf-mainbar-container">
                 <div class="octf-mainbar">
                     <div class="octf-mainbar-row octf-row">
                         <div class="octf-col logo-col no-padding">
                             <div id="site-logo" class="site-logo">
                                 <a href="/">
                                     <img src="{{ asset($logos->frontend_logo_image) }}" alt="Theratio" class="">
                                 </a>
                             </div>
                         </div>
                         <div class="octf-col menu-col no-padding">
                             <nav id="site-navigation" class="main-navigation">
                                 <ul class="menu">
                                     <li>
                                         <a href="/">Home</a>
                                     </li>
                                     <li>
                                         <a href="{{ route('about.details') }}">About Us</a>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Projects</a>
                                         <ul class="sub-menu">
                                             @foreach ($projects as $project)
                                                 <li><a
                                                         href="{{ route('project.details', $project->id) }}">{{ $project->title_english }}</a>
                                                 </li>
                                             @endforeach
                                         </ul>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Services</a>
                                         <ul class="sub-menu">
                                             @foreach ($services as $service)
                                                 <li><a
                                                         href="{{ route('service.details', $service->id) }}">{{ $service->title_english }}</a>
                                                 </li>
                                             @endforeach
                                         </ul>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Gallary</a>
                                         <ul class="sub-menu">
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
                         </div>
                         <div class="octf-col cta-col text-right no-padding">
                             <!-- Call To Action -->
                             <div class="octf-btn-cta">

                                 <div class="octf-sidepanel octf-cta-header">
                                     <div class="site-overlay panel-overlay"></div>
                                     <div id="panel-btn" class="panel-btn octf-cta-icons">
                                         <i class="ot-flaticon-menu"></i>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="header_mobile">
         <div class="container-fluid">
             <div class="octf-mainbar-row octf-row">
                 <div class="octf-col">
                     <div class="mlogo_wrapper clearfix">
                         <div class="mobile_logo">
                             <a href="index.html">
                                 <img src="{{ asset($logos->frontend_logo_image) }}" alt="Theratio">
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="octf-col justify-content-end">
                     <div class="octf-search octf-cta-header">
                         <div class="toggle_search octf-cta-icons">
                             <i class="ot-flaticon-search"></i>
                         </div>
                         <!-- Form Search on Header -->
                         <div class="h-search-form-field collapse">
                             <div class="h-search-form-inner">
                                 <form role="search" method="get" class="search-form">
                                     <input type="search" class="search-field" placeholder="SEARCH..." value=""
                                         name="s">
                                     <button type="submit" class="search-submit"><i
                                             class="ot-flaticon-search"></i></button>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <div class="octf-menu-mobile octf-cta-header">
                         <div id="mmenu-toggle" class="mmenu-toggle">
                             <button><i class="ot-flaticon-menu"></i></button>
                         </div>
                         <div class="site-overlay mmenu-overlay"></div>
                         <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                             <div class="mmenu-inner">
                                 <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                 <div class="mobile-nav">
                                     <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                         <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                             <a href="/">Home</a>
                                         </li>
                                         <li>
                                             <a href="{{ route('about.details') }}">About Us</a>
                                         </li>
                                         <li class="menu-item-has-children"><a href="#">Projects</a>
                                             <ul class="sub-menu">
                                                 @foreach ($projects as $project)
                                                     <li><a
                                                             href="{{ route('project.details', $project->id) }}">{{ $project->title_english }}</a>
                                                     </li>
                                                 @endforeach
                                             </ul>
                                         </li>
                                         <li class="menu-item-has-children"><a href="#">Projects</a>
                                             <ul class="sub-menu">
                                                 @foreach ($services as $service)
                                                     <li><a
                                                             href="{{ route('service.details', $service->id) }}">{{ $service->title_english }}</a>
                                                     </li>
                                                 @endforeach
                                             </ul>
                                         </li>
                                         <li class="menu-item-has-children"><a href="#">Gallary</a>
                                             <ul class="sub-menu">
                                                 <li><a href="{{ route('image.gallery') }}">Image Gallary</a></li>
                                                 <li><a href="{{ route('video.gallery') }}">Video Gallary</a></li>
                                             </ul>
                                         </li>
                                         <li><a href="{{ route('all.blogs.list') }}">Blog</a>
                                         </li>
                                         <li><a href="{{ route('contact.us') }}">Contact</a>
                                         </li>

                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>

 <div id="side-panel" class="side-panel">
     <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
     <div class="side-panel-block">
         <div class="side-panel-wrap">
             <div class="the-logo">
                 <a href="index-html.html">
                     <img src="{{ asset($logos->frontend_footer_image) }}" alt="Theratio">
                 </a>
             </div>
             <div class="ot-heading">
                 <h2 class="main-heading">Our Gallery</h2>
             </div>
             <div class="image-gallery">
                 <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                     @foreach ($images as $image)
                         <figure class="gallery-item">
                             <div class="gallery-icon landscape">
                                 <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24"
                                     data-elementor-lightbox-title="p4-gallery1" href="{{ asset($image->image) }}">
                                     <img src="{{ asset($image->image) }}" class="" alt="">
                                 </a>
                             </div>
                         </figure>
                     @endforeach

                 </div>
             </div>
             <div class="ot-heading ">
                 <h2 class="main-heading">Contact Info</h2>
             </div>
             <div class="side-panel-cinfo">
                 <ul class="panel-cinfo">
                     <li class="panel-list-item">
                         <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                         <span class="panel-list-text">{{ $WebsiteLink->address_english }}</span>
                     </li>
                     <li class="panel-list-item">
                         <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                         <span class="panel-list-text">{{ $WebsiteLink->email }}</span>
                     </li>
                     <li class="panel-list-item">
                         <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                         <span class="panel-list-text">{{ $WebsiteLink->phone }}</span>
                     </li>
                 </ul>
             </div>
             <div class="side-panel-social">
                 <ul>
                     <li><a href="{{ $WebsiteLink->twitter }}" target="_self"><i class="fab fa-twitter"></i></a>
                     </li>
                     <li><a href="{{ $WebsiteLink->facebook }}" target="_self"><i class="fab fa-facebook-f"></i></a>
                     </li>
                     <li><a href="{{ $WebsiteLink->linkedIn }}" target="_self"><i
                                 class="fab fa-linkedin-in"></i></a>
                     </li>
                     <li><a href="{{ $WebsiteLink->instagram }}" target="_self"><i class="fab fa-instagram"></i></a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
