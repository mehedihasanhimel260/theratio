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
                            <a href="{{ route('all.testimonial_1') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="fe-arrow-left"></i>All Testimonials</a>                            
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Testimonials</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Testimonials Main Informantion</p>

                        <form id="myForm" method="post" action="{{ route('testimonial.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $edit_testimonial->id }}">

                            <div class="row">                  
                                <div class="col-lg-6">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label">Name In English </label>
                                        <input type="text" name="name_english" id="name_english" class="form-control" placeholder="Name In English..." value="{{ $edit_testimonial->name_english }}">
                                    </div>
                                </div>    
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="name_bangla" class="form-label">Name In Bangla </label>
                                        <input type="text" id="name_bangla" name="name_bangla" class="form-control" placeholder="Name In Bangla ..." value="{{ $edit_testimonial->name_bangla }}">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="desig_eng" class="form-label">Designation In English </label>
                                        <input type="text" id="desig_eng" name="desig_eng" class="form-control" placeholder="Designation In English ..." value="{{ $edit_testimonial->desig_eng }}">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="desig_bng" class="form-label">Designation In Bangla </label>
                                        <input type="text" id="desig_bng" name="desig_bng" class="form-control" placeholder="Designation In Bangla ..." value="{{ $edit_testimonial->desig_bng }}">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" id="image" name="image" class="form-control" >
                                    </div>
                                    <img src="{{ (!empty($edit_testimonial->image)) ? asset($edit_testimonial->image) : url('upload/no_image.jpg') }}" alt="" id="image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                     
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Review Star </label>
                                        <select name="star" class="form-select" id="" style=" padding: 12px 5px;
                                        margin: 8px 0;               
                                        border-radius: 4px;">
                                        <option value="" selected disabled>Select Satr...</option>
                                        <option value="0" {{ $edit_testimonial->star == '0' ? 'selected' : '' }}>0</option>
                                        <option value="1" {{ $edit_testimonial->star == '1' ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ $edit_testimonial->star == '2' ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ $edit_testimonial->star == '3' ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ $edit_testimonial->star == '4' ? 'selected' : '' }}>4</option>
                                        <option value="5" {{ $edit_testimonial->star == '5' ? 'selected' : '' }}>5</option>
                                        </select>                                                                              
                                    </div>
                                </div>  
                               
                                <div class="col-lg-12 mt-2"> 
                                    <div class="form-group mb-3">
                                        <label for="review_eng" class="form-label">Client Review In English </label>
                                        <textarea name="review_eng" class="form-control" id="" cols="30" rows="5" placeholder="Client Review In English ..." >
                                            {!! $edit_testimonial->review_eng !!}
                                      </textarea>
                                    </div>
                                </div> 
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="review_bng" class="form-label">Client Review In Bangla </label>
                                        <textarea name="review_bng" class="form-control" id="" cols="30" rows="5" placeholder="Client Review In Bangla ...">
                                            {!! $edit_testimonial->review_bng !!}
                                      </textarea>
                                    </div>
                                </div> 
                              
                            </div>

                            <!-- end row-->
                            <div class="text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light "><i class="mdi mdi-content-save"></i>Update</button>
                            </div>
                        </form>
        
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
        
            </div><!-- end col -->
        </div>        
        <!-- end row -->

              
    </div> <!-- container -->

</div> <!-- content -->
       
        
        {{-- image view js  --}}
        <script>
            $(document).ready(function(){
                $('#image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#image_show').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
                
            });
        </script>
       
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea',
        // content_css: 'dark',
        skin: "oxide-dark",
        content_css: "tinymce-5-dark"
    });
</script>
        


@endsection