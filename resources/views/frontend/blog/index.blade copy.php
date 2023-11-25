@extends('frontend.layout')
@section('content')
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog</h1>
                    <ul class="crumb">
                        <li><a href="/">Home</a></li>
                        <li class="sep">/</li>
                        <li>Blog</li>
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

                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <a class="image-popup-no-margins" href="{{ asset($blog->main_image) }}">
                                        <img alt="" src="{{ asset($blog->main_image) }}">
                                    </a>
                                </div>
                                <div class="post-text">
                                    <h4><a href=" {{ route('blog.details', $blog->id) }}">{{ $blog->title_english }}</a></h4>
                                    @php
                                        $blog_short_des_eng = strip_tags($blog->short_des_eng);
                                        $words = str_word_count($blog_short_des_eng, 1);
                                        $shortenedText = implode(' ', array_slice($words, 0, 30));
                                    @endphp
                                    @if (count($words) > 30)
                                        <p> {!! $shortenedText !!}...</p>
                                        {{-- {{ strip_tags($shortenedText) }} --}}
                                    @else
                                        <p>{{ strip_tags($blog->short_des_eng) }}</p>
                                    @endif
                                    <span class="p-date">{{ $blog->created_at->format('F d, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="spacer-single"></div>

                <ul class="pagination m-auto">
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul>

            </div>

        </div>
    </div>
@endsection
