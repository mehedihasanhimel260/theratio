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
                            <a href="{{ route('all.sponsor') }}" class="btn btn-primary rounded-pill waves-effect waves-light">All Sponsor</a>                            
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Sponsor Image</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Sponsor Image Information</p>

                        <form id="myForm" method="post" action="{{ route('sponsor.update') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $edit_sponsor->id }}" >

                            <div class="row"> 
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label"> Sponsor Image</label>
                                        <input type="file" id="image" name="image" class="form-control" >
                                    </div>
                                    <img src="{{ (!empty($edit_sponsor->image)) ? asset($edit_sponsor->image) : url('upload/no_image.jpg') }}" alt="" id="image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 80px;height:80px">
                                </div>                  
                                <div class="col-lg-6 mt-2">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label">Title In English </label>
                                        <input type="text" name="title_english" id="title_english" class="form-control" placeholder="Title In English..." value="{{ $edit_sponsor->title_english }}">
                                    </div>
                                </div>    
                                <div class="col-lg-6 mt-2"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Title In Bangla </label>
                                        <input type="text" id="title_bangla" name="title_bangla" class="form-control" placeholder="Title In Bangla..." value="{{ $edit_sponsor->title_bangla }}">
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
        
      

@endsection