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
                    <h4 class="page-title">Edit Team Members</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Edit Team Members Information</p>

                        <form id="myForm" method="post" action="{{ route('update.team') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $edit_team->id }}">

                            <div class="row"> 
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label">Image</label>
                                        <input type="file" id="image" name="image" class="form-control" >
                                    </div>                                   
                                    <img src="{{ (!empty($edit_team->image)) ? asset($edit_team->image) : url('upload/no_image.jpg') }}" alt="" id="image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 80px;height:80px">
                                </div>                  
                                <div class="col-lg-6 mt-2">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label">Name In English </label>
                                        <input type="text" name="name_english" id="name_english" class="form-control" placeholder="Name In English..." value="{{ $edit_team->name_english }}">
                                    </div>
                                </div>    
                                <div class="col-lg-6 mt-2"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Name In Bangla </label>
                                        <input type="text" id="name_bangla" name="name_bangla" class="form-control" placeholder="Name In Bangla..." value="{{ $edit_team->name_bangla }}">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Email </label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email..." value="{{ $edit_team->email }}">
                                    </div>
                                </div> 
                               
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Designation In English </label>
                                        <input type="text" id="desig_english" name="desig_english" class="form-control" placeholder="Designation In English..." value="{{ $edit_team->desig_english }}">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Designation In Bangla </label>
                                        <input type="text" id="desig_bangla" name="desig_bangla" class="form-control" placeholder="Designation In Bangla..." value="{{ $edit_team->desig_bangla }}">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Facebook </label>
                                        <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Facebook..." value="{{ $edit_team->facebook }}">
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Instagram </label>
                                        <input type="text" id="instagram" name="instagram" class="form-control" placeholder="Instagram..." value="{{ $edit_team->instagram }}">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Twitter </label>
                                        <input type="text" id="twitter" name="twitter" class="form-control" placeholder="Twitter..." value="{{ $edit_team->twitter }}">
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">LinkedIn </label>
                                        <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="LinkedIn..." value="{{ $edit_team->linkedin }}">
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Teletgram </label>
                                        <input type="text" id="telegram" name="telegram" class="form-control" placeholder="Telegram..." value="{{ $edit_team->telegram }}">
                                    </div>
                                </div>
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Youtube </label>
                                        <input type="text" id="youtube" name="youtube" class="form-control" placeholder="Youtube..." value="{{ $edit_team->youtube }}">
                                    </div>
                                </div>                                
                                
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Team Type </label>
                                        <select name="committee" class="form-select" id="committee">
                                            <option selected disabled>Select Team Type</option>
                                            <option value="faculty" {{ $edit_team->committee == 'faculty' ? 'selected' : '' }}>Faculty Teachers</option>
                                            <option value="advisory" {{ $edit_team->committee == 'advisory' ? 'selected' : '' }}>Advisory Members</option>
                                            <option value="secretary" {{ $edit_team->committee == 'secretary' ? 'selected' : '' }}>Secretary</option>
                                            <option value="asistants" {{ $edit_team->committee == 'asistants' ? 'selected' : '' }}>Lab Asistants</option>
                                            <option value="vice" {{ $edit_team->committee == 'vice' ? 'selected' : '' }}>Vice Secretary</option>
                                        </select>                                        
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