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
                    <h4 class="page-title">Add Testimonials</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Testimonials Main Informantion</p>

                        <form id="myForm" method="post" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">                  
                                <div class="col-lg-6">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label">Name In English </label>
                                        <input type="text" name="name_english" id="name_english" class="form-control" placeholder="Name In English...">
                                    </div>
                                </div>    
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="name_bangla" class="form-label">Name In Bangla </label>
                                        <input type="text" id="name_bangla" name="name_bangla" class="form-control" placeholder="Name In Bangla ...">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="desig_eng" class="form-label">Designation In English </label>
                                        <input type="text" id="desig_eng" name="desig_eng" class="form-control" placeholder="Designation In English ...">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="desig_bng" class="form-label">Designation In Bangla </label>
                                        <input type="text" id="desig_bng" name="desig_bng" class="form-control" placeholder="Designation In Bangla ...">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" id="image" name="image" class="form-control" >
                                    </div>
                                    <img src="{{ url('upload/no_image.jpg') }}" alt="" id="image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                     
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Review Star </label>
                                        <select name="star" class="form-select" id="" style=" padding: 12px 5px;
                                        margin: 8px 0;               
                                        border-radius: 4px;">
                                            <option value="" selected disabled>Select Satr...</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>                                                                              
                                    </div>
                                </div>  
                               
                                <div class="col-lg-12 mt-2"> 
                                    <div class="form-group mb-3">
                                        <label for="review_eng" class="form-label">Client Review In English </label>
                                        <textarea name="review_eng" class="form-control" id="" cols="30" rows="5" placeholder="Client Review In English ...">
                                      </textarea>
                                    </div>
                                </div> 
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="review_bng" class="form-label">Client Review In Bangla </label>
                                        <textarea name="review_bng" class="form-control" id="" cols="30" rows="5" placeholder="Client Review In Bangla ...">
                                      </textarea>
                                    </div>
                                </div> 
                              
                            </div>

                            <!-- end row-->
                            <div class="text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light "><i class="mdi mdi-content-save"></i>Submit</button>
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
        
        {{-- js form validation rules --}}
        <script type="text/javascript">
            $(document).ready(function (){
                $('#myForm').validate({
                    rules: {
                        name_english: {
                            required : true,
                        },  
                        image: {
                            required : true,
                        },                
                        star: {
                            required : true,
                        },                
                                      
                    },
                   
                    messages :{
                        name_english: {
                            required : 'Please Enter Service Title',
                        }, 
                        image: {
                            required : 'Please Select Banner Image',
                        },               
                        star: {
                            required : 'Please Select Review Star',
                        },               
                                     
        
                    },
                    errorElement : 'span', 
                    errorPlacement: function (error,element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight : function(element, errorClass, validClass){
                        $(element).addClass('is-invalid');
                    },
                    unhighlight : function(element, errorClass, validClass){
                        $(element).removeClass('is-invalid');
                    },
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