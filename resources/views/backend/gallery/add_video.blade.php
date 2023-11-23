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
                            <a href="{{ route('all.video') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="fe-arrow-left"></i>All Videos</a>                            
                        </ol>
                    </div>
                    <h4 class="page-title">Add Videos</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Add Videos For Video Gallery</p>

                        <form id="myForm" method="post" action="{{ route('video.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">                 
                            
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="video_link" class="form-label">Video link (put here embeded link) </label>
                                       <textarea name="video_link" class="form-control" id="video_link" cols="30" rows="5">
        
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
      
        {{-- js form validation rules --}}
        <script type="text/javascript">
            $(document).ready(function (){
                $('#myForm').validate({
                    rules: {
                         
                        video_link: {
                            required : true,
                        },                
                                      
                                      
                    },
                   
                    messages :{
                        
                        video_link: {
                            required : 'Please Enter Video Link',
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

        


@endsection