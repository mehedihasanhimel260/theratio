@extends('admin_dashboard')
@section('title') Admin @endsection
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                            <li class="breadcrumb-item active">Tabs & Accordions</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Banner And Title</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">                
                <h4 class="header-title mb-4">Edit Banner And Title</h4>

                <form id="myForm" method="post" action="{{ route('banner.title.update') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <input type="hidden" name="id" value="{{ $edit_banner_title->id }}">

                    <div class="row">                  
                        <div class="col-lg-6">                      
                            <div class="form-group mb-3">
                                <label for="simpleinput" class="form-label">English Title </label>
                                <input type="text" name="title_english" id="title_english" class="form-control" value="{{ $edit_banner_title->title_english??null }}">
                            </div>
                        </div>    
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Bangla Title </label>
                                <input type="text" id="title_bangla" name="title_bangla" class="form-control" value="{{ $edit_banner_title->title_bangla??null }}">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="banner_image" class="form-label">Banner Image</label>
                                <input type="file" id="image" name="banner_image" class="form-control" >
                            </div>
                            @if($edit_banner_title->banner_image)                          
                             <img src="{{ asset($edit_banner_title->banner_image) }}" id="showImg" class="avatar-lg img-thumbnail" alt="banner-image" style="width: 120px;height:120px">
                             @else
                             <img src="{{ url('backend/no_image.jpg') }}" id="showImg" class="avatar-lg img-thumbnail" alt="banner-image" style="width: 120px;height:120px">
                             @endif
                        </div>  
                        
<div class="col-lg-6"> 
    <div class="form-group mb-3">
    <label for="example-select" class="form-label">Select Page for the title and banner</label>
        <select class="form-select" name="page" id="page">
            <option value="" disabled selected>Select Page</option>
            <option value="courses" {{ $edit_banner_title->page == 'courses' ? 'selected' : '' }}>Courses</option>
            <option value="instructor" {{ $edit_banner_title->page == 'instructor' ? 'selected' : '' }}>Instructor</option>
            <option value="testimonial" {{ $edit_banner_title->page == 'testimonial' ? 'selected' : '' }}>Testimonial</option>
            <option value="blogs" {{ $edit_banner_title->page == 'blogs' ? 'selected' : '' }}>Blogs</option>
            <option value="research" {{ $edit_banner_title->page == 'research' ? 'selected' : '' }}>Research</option>
            <option value="contacts" {{ $edit_banner_title->page == 'contacts' ? 'selected' : '' }}>Contacts</option>
            <option value="gallery" {{ $edit_banner_title->page == 'gallery' ? 'selected' : '' }}>Image Gallery</option>
            <option value="video-gallery" {{ $edit_banner_title->page == 'video-gallery' ? 'selected' : '' }}>Video Gallery</option>
            <option value="sponsor" {{ $edit_banner_title->page == 'sponsor' ? 'selected' : '' }}>Sponsor</option>
            <option value="enrollment" {{ $edit_banner_title->page == 'enrollment' ? 'selected' : '' }}>Enrollment</option>
            <option value="login" {{ $edit_banner_title->page == 'login' ? 'selected' : '' }}>Login</option>
            <option value="register" {{ $edit_banner_title->page == 'register' ? 'selected' : '' }}>Register</option>
        </select>
    </div>
</div>  <!-- end col --> 
                    </div>
                    <!-- end row-->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success waves-effect waves-light "><i class="mdi mdi-content-save"></i>Update</button>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->

    </div><!-- end col -->
</div><!-- end row -->

</div> <!-- container -->

</div> <!-- content -->


{{-- image view js  --}}
<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImg').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


@endsection