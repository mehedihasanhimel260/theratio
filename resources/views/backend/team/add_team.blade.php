@extends('admin_dashboard')
@section('title') Dashboard @endsection
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
                            <a href="{{ route('all.team') }}" class="btn btn-primary rounded-pill waves-effect waves-light">All Team Members</a>                            
                        </ol>
                    </div>
                    <h4 class="page-title">Add Team Members</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Team Members Information</p>

                        <form id="myForm" method="post" action="{{ route('team.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row"> 
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label">Image</label>
                                        <input type="file" id="image" name="image" class="form-control" >
                                    </div>
                                    <img src="{{ url('upload/no_image.jpg') }}" alt="" id="image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 80px;height:80px">
                                </div>                  
                                <div class="col-lg-6 mt-2">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label">Name In English </label>
                                        <input type="text" name="name_english" id="name_english" class="form-control" placeholder="Name In English..." >
                                    </div>
                                </div>    
                                <div class="col-lg-6 mt-2"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Name In Bangla </label>
                                        <input type="text" id="name_bangla" name="name_bangla" class="form-control" placeholder="Name In Bangla..." >
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Email </label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email..." >
                                    </div>
                                </div> 
                               
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Designation In English </label>
                                        <input type="text" id="desig_english" name="desig_english" class="form-control" placeholder="Designation In English..." >
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Designation In Bangla </label>
                                        <input type="text" id="desig_bangla" name="desig_bangla" class="form-control" placeholder="Designation In Bangla..." >
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Facebook </label>
                                        <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Facebook..." >
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Instagram </label>
                                        <input type="text" id="instagram" name="instagram" class="form-control" placeholder="Instagram..." >
                                    </div>
                                </div>
                                
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Twitter </label>
                                        <input type="text" id="twitter" name="twitter" class="form-control" placeholder="Twitter..." >
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">LinkedIn </label>
                                        <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="LinkedIn..." >
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Teletgram </label>
                                        <input type="text" id="telegram" name="telegram" class="form-control" placeholder="Telegram..." >
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Youtube </label>
                                        <input type="text" id="youtube" name="youtube" class="form-control" placeholder="Youtube..." >
                                    </div>
                                </div>                                
                                
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Team Type </label>
                            <select name="committee" class="form-select" id="committee">
                                <option selected disabled>Select Team Type</option>
                                <option value="faculty">Faculty Teachers</option>
                                <option value="advisory">Advisory Members</option>
                                <option value="secretary">Secretary</option>
                                <option value="asistants">Lab Asistants</option>
                                <option value="vice">Vice Secretary</option>
                            </select>
                                        
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
                        email: {
                            required : true,
                        },                
                        image: {
                            required : true,
                        },                
                        committee: {
                            required : true,
                        },                
                                      
                    },
                   
                    messages :{
                        name_english: {
                            required : 'Please Enter Teacher Name',
                        }, 
                        email: {
                            required : 'Please Select Teacher Image',
                        },               
                        image: {
                            required : 'Please Select Teacher Image',
                        },               
                        committee: {
                            required : 'Please Select Team type',
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