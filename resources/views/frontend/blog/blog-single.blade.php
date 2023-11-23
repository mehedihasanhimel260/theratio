@extends('frontend.layout')
@section('content')
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Single</h1>
                    <ul class="crumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="sep">/</li>
                        <li>Blog Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-read">
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{ asset($blog_details->main_image) }}" alt="" />
                            </div>

                            <div class="date-box">
                                <div class="day">{{ $blog_details->created_at->format('d') }}</div>
                                <div class="month">{{ $blog_details->created_at->format('M') }}</div>
                            </div>

                            <div class="post-text">
                                <h3><a href="#">{{ $blog_details->title_english }}</a></h3>
                                <p>
                                    {!! $blog_details->short_des_eng ?? null !!}
                                    {!! $blog_details->long_des1_eng ?? null !!}
                                    {!! $blog_details->long_des2_eng ?? null !!}
                                </p>
                            </div>
                        </div>

                    </div>


                </div>

                <div id="sidebar" class="col-md-4">
                    <div class="widget widget-post">
                        <h4>Recent Posts</h4>
                        <div class="small-border"></div>

                        <ul class="de-bloglist-type-1">
                            @foreach ($blogs as $blog)
                                <li>
                                    <div class="d-image">
                                        <img src="{{ asset($blog->main_image) }}" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="{{ route('blog.details', $blog->id) }}">{{ $blog->title_english }}</a>
                                        <div class="d-date">{{ $blog->created_at->format('F d, Y') }}</div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
