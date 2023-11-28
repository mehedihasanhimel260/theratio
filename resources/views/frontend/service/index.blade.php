@extends('frontend.layout')
@section('content')
    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Service Single</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Service</a></li>
                        <li class="active">Service Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-content">
        <div class="container">
            <div class="row">
                <div class="content-area col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <article class="blog-post post-box">
                        <div class="entry-media post-cat-abs">
                            <img src="{{ asset($blog_details->main_image) }}" alt="">
                            <div class="post-cat">
                                <div class="posted-in"><a href="#"></a></div>
                            </div>
                        </div>
                        <div class="inner-post">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <span class="posted-on">_ <a
                                            href="#">{{ $blog_details->created_at->format('F d, Y') }}</a></span>
                                    <span class="byline">_ <a class="url fn n" href="#">
                                            {{-- Category Name --}}
                                        </a></span>
                                    <span class="comment-num">_ <a href="#">
                                            {{-- Comment count --}}
                                        </a></span>
                                </div>
                                <h3 class="entry-title">{{ $blog_details->title_english }}</h3>
                            </header>
                            <div class="entry-summary the-excerpt">

                                {!! $blog_details->short_des_eng ?? null !!}
                                {!! $blog_details->long_des1_eng ?? null !!}
                                {!! $blog_details->long_des2_eng ?? null !!}
                            </div>
                            <div class="post-nav clearfix">
                                <div class="post-prev">
                                    @if (!empty($previousPost->main_image))
                                        <a href="{{ route('service.details', $previousPost->id) }}">
                                            <div class="thumb-post-prev"><img src="{{ asset($previousPost->main_image) }}"
                                                    alt=""></div>
                                            <div class="info-post-prev">
                                                <h6><span class="title-link">{{ $previousPost->title_english }}</span></h6>
                                                <span>{{ $previousPost->created_at->format('F d, Y') }}</span>
                                            </div>
                                        </a>
                                    @endif

                                </div>
                                <div class="post-next">
                                    @if (!empty($nextPost->main_image))
                                        <a href="{{ route('service.details', $nextPost->id) }}">
                                            <div class="thumb-post-next"><img src="{{ asset($nextPost->main_image) }}"
                                                    alt=""></div>
                                            <div class="info-post-next">
                                                <h6><span class="title-link">{{ $nextPost->title_english }}</span>
                                                </h6>
                                                <span>{{ $nextPost->created_at->format('F d, Y') }}</span>
                                            </div>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="widget-area primary-sidebar col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <aside class="widget widget_recent_news">
                        <h6 class="widget-title">Recent Posts</h6>
                        <ul class="recent-news clearfix">
                            @foreach ($blogs as $blog)
                                <li class="clearfix">
                                    <div class="thumb">
                                        <a href="{{ route('service.details', $blog->id) }}"><img
                                                src="{{ asset($blog->main_image) }}" alt=""></a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a
                                                href="{{ route('service.details', $blog->id) }}">{{ $blog->title_english }}</a>
                                        </h6>
                                        <span class="post-on"><span
                                                class="entry-date">{{ $blog->created_at->format('F d, Y') }}</span></span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </aside>
                    <aside class="widget widget_media_image text-center">
                        <a href="{{ route('contact.us') }}"><img
                                src="{{ asset('frontend/assets') }}/images/widget-banner.jpg" alt=""></a>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
