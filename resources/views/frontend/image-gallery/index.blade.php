@extends('frontend.layout')
@section('content')
    <!-- subheader -->
    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent page-header-contact">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Image Gallary</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="/">Home</a></li>
                        <li class="active">Image Gallary</li>
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
                @foreach ($images as $image)
                    <div class="col-lg-4 col-md-6 mb-3 mt-3">
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
                {{-- {{ $images->links() }} --}}
                {{-- <ul class="pagination m-auto">
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">Next</a></li>
                </ul> --}}

            </div>

        </div>
    </div>
@endsection
