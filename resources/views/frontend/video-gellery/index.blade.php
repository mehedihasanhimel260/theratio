@extends('frontend.layout')
@section('content')
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Video Gallery</h1>
                    <ul class="crumb">
                        <li><a href="/">Home</a></li>
                        <li class="sep">/</li>
                        <li>Video Gallery</li>
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
                @foreach ($videos as $video)
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="post-image">
                                    <div class="iframe-wrapper embed-responsive">
                                        <iframe
                                            src="https://www.youtube.com/embed/{{ $video->video_link }}?rel=0?version=3&autoplay=1&controls=0&&showinfo=0&loop=1"
                                            frameborder="0"></iframe>
                                    </div>
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
