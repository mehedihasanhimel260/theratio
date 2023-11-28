@extends('frontend.layout')
@section('content')
    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Blog Grid</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-content">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="post-box masonry-post post-item">
                            <div class="post-inner">
                                <div class="entry-media post-cat-abs">
                                    <a href="{{ route('blog.details', $blog->id) }}"><img
                                            src="{{ asset($blog->main_image) }}" alt=""></a>
                                    <div class="post-cat">
                                        <div class="posted-in"><a href="#"></a></div>
                                    </div>
                                </div>
                                <div class="inner-post">
                                    <div class="entry-header">
                                        <div class="entry-meta">
                                            <span class="posted-on"><a
                                                    href="{{ route('blog.details', $blog->id) }}">{{ $blog->created_at->format('F d, Y') }}</a></span>
                                            <span class="byline">
                                                <span class="author vcard"><a class="url fn n"
                                                        href="{{ route('blog.details', $blog->id) }}"></a></span>
                                            </span>
                                        </div><!-- .entry-meta -->

                                        <h5 class="entry-title">
                                            <a class="title-link" href="{{ route('blog.details', $blog->id) }}">
                                                {{ $blog->title_english }}
                                            </a>
                                        </h5>
                                    </div><!-- .entry-header -->

                                    <div class="the-excerpt">
                                        @php
                                            $blog_short_des_eng = strip_tags($blog->short_des_eng);
                                            $words = str_word_count($blog_short_des_eng, 1);
                                            $shortenedText = implode(' ', array_slice($words, 0, 15));
                                        @endphp
                                        @if (count($words) > 15)
                                            {!! $shortenedText !!}...
                                            {{-- {{ strip_tags($shortenedText) }} --}}
                                        @else
                                            {{ strip_tags($blog->short_des_eng) }}
                                        @endif
                                    </div><!-- .entry-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $blogs->links() }}
                {{-- <ul class="page-pagination none-style">
                    <li><a class="prev page-numbers" href="#"><i class="ot-flaticon-left-arrow"></i></a></li>
                    <li><a class="page-numbers" href="#">1</a></li>
                    <li><span aria-current="page" class="page-numbers current">2</span></li>
                    <li><a class="page-numbers" href="#">3</a></li>
                    <li><a class="next page-numbers" href="#"><i class="ot-flaticon-right-arrow"></i></a></li>
                </ul> --}}
            </div>
        </div>
    </div>
@endsection
