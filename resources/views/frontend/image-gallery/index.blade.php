@extends('frontend.layout')
@section('content')
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Image Gallery</h1>
                    <ul class="crumb">
                        <li><a href="/">Home</a></li>
                        <li class="sep">/</li>
                        <li>Image Gallery</li>
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
                @foreach ($images as $image)
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <a class="image-popup-no-margins" href="{{ asset($image->image) }}">
                                        <img alt="" src="{{ asset($image->image) }}">
                                    </a>
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
                    <li><a href="#">Next</a></li>
                </ul>

            </div>

        </div>
    </div>
@endsection
