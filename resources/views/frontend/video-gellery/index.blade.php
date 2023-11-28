@extends('frontend.layout')
@section('content')
    <!-- subheader -->
    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent page-header-contact">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Video Gallary</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="/">Home</a></li>
                        <li class="active">Video Gallary</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- subheader close -->
    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                @foreach ($videos as $video)
                    <div class="col-lg-4 col-md-6 mb-3 mt-3">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <iframe width="" height=""
                                        src="https://www.youtube.com/embed/{{ $video->video_link }}" frameborder="0"
                                        style="border-radius:15px"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="spacer-single"></div>
                {{-- 
                <ul class="pagination m-auto">
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul> --}}

            </div>

        </div>
    </div>
@endsection
<Script></Script>
<style scoped>
    .iframe-wrapper {
        position: relative;
        width: 100%;
        padding-top: 56.25%;
        overflow: hidden;
    }

    .iframe-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 88%;
        border-radius: 5px;
    }
</style>
