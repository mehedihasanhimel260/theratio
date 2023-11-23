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
                    <h4 class="page-title">Edit Website Banner </h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">                
                <h4 class="header-title mb-4">Edit Website Banner</h4>

                <form id="myForm" method="post" action="{{ route('website.banner.update') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <input type="hidden" name="id" value="{{ $edit_webiste_banner->id }}">

                    <div class="row">                  
                        <div class="col-lg-6">                      
                            <div class="form-group mb-3">
                                <label for="simpleinput" class="form-label">Banner English Title </label>
                                <input type="text" name="title_english" id="title_english" class="form-control" value="{{ $edit_webiste_banner->title_english??null }}" style="padding:10px 5px">
                            </div>
                        </div>    
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Banner Bangla Title </label>
                                <input type="text" id="title_bangla" name="title_bangla" class="form-control" value="{{ $edit_webiste_banner->title_bangla??null }}" style="padding:10px 5px">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Short Details English </label>
                                <input type="text" id="short_details_eng" name="short_details_eng" class="form-control" value="{{ $edit_webiste_banner->short_details_eng??null }}" style="padding:10px 5px">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Short Details Bangla </label>
                                <input type="text" id="short_details_bng" name="short_details_bng" class="form-control" value="{{ $edit_webiste_banner->short_details_bng??null }}" style="padding:10px 5px">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="banner_image" class="form-label">Banner Image</label>
                                <input type="file" id="banner_image" name="banner_image" class="form-control" style=";padding:10px 5px">
                            </div>
                            @if($edit_webiste_banner->banner_image)                          
                             <img src="{{ asset($edit_webiste_banner->banner_image) }}" id="banner_showImg" class="avatar-lg img-thumbnail" alt="banner-image" style="width: 120px;height:120px">
                             @else
                             <img src="{{ url('backend/no_image.jpg') }}" id="banner_showImg" class="avatar-lg img-thumbnail" alt="banner-image" style="width: 120px;height:120px">
                             @endif
                        </div>  
                        
                     <!-- end col --> 
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
        $('#banner_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#banner_showImg').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


@endsection