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
                                                       
                        </ol>
                    </div>
                    <h4 class="text-white py-1" style="font-size: 20px">Counter Image Information</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Counter Image</p>

                        <form id="myForm" method="post" action="{{ route('counter.image.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row"> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="image_1" class="form-label">Image 1 </label>
                                        <input type="file" id="image_1" name="image_1" class="form-control" placeholder="Counter Image...">

                                        <img src="{{ (!empty($counter_image->image_1)) ? asset($counter_image->image_1) : url('upload/no_image.jpg') }}" alt="" id="image_1_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 80px;height:80px">
                                    </div>
                                   
                                </div> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label"> Coutner Title English 1 </label>
                                        <input type="text" id="title_english_1" name="title_english_1" class="form-control" placeholder="Coutner Title English 1..." value="{{ $counter_image->title_english_1??'' }}">
                                    </div>
                                   
                                </div>                  
                                <div class="col-lg-3">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label"> Coutner Title Bangla 1  </label>
                                        <input type="text" name="title_bangla_1" id="title_bangla_1" class="form-control" placeholder="Coutner Title Bangla 1" value="{{ $counter_image->title_bangla_1??'' }}">
                                    </div>
                                </div>    
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Counter Value 1 </label>
                                        <input type="number" id="value_1" name="value_1" class="form-control" placeholder="Counter Value..." value="{{ $counter_image->value_1??'' }}">
                                    </div>
                                </div>                               
                            </div>

                            <!-- end row-->
                            <div class="row"> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="image_2" class="form-label">Image 2 </label>
                                        <input type="file" id="image_2" name="image_2" class="form-control" placeholder="Counter Image...">

                                        <img src="{{ (!empty($counter_image->image_2)) ? asset($counter_image->image_2) : url('upload/no_image.jpg') }}" alt="" id="image_2_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 80px;height:80px">
                                    </div>
                                   
                                </div> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label"> Coutner Title English 2 </label>
                                        <input type="text" id="title_english_2" name="title_english_2" class="form-control" placeholder="Coutner Title English ..." value="{{ $counter_image->title_english_2??'' }}">
                                    </div>
                                   
                                </div>                  
                                <div class="col-lg-3">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label"> Coutner Title Bangla 2  </label>
                                        <input type="text" name="title_bangla_2" id="title_bangla_2" class="form-control" placeholder="Coutner Title Bangla " value="{{ $counter_image->title_bangla_2??'' }}">
                                    </div>
                                </div>    
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Counter Value 2 </label>
                                        <input type="number" id="value_2" name="value_2" class="form-control" placeholder="Counter Value..." value="{{ $counter_image->value_2??'' }}">
                                    </div>
                                </div> 
                                
                            </div>

                            <!-- end row-->
                            <div class="row"> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="image_3" class="form-label">Image 3 </label>
                                        <input type="file" id="image_3" name="image_3" class="form-control" placeholder="Counter Image...">

                                        <img src="{{ (!empty($counter_image->image_3)) ? asset($counter_image->image_3) : url('upload/no_image.jpg') }}" alt="" id="image_3_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 80px;height:80px">
                                    </div>
                                   
                                </div> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label"> Coutner Title English 3 </label>
                                        <input type="text" id="title_english_3" name="title_english_3" class="form-control" placeholder="Coutner Title English ..." value="{{ $counter_image->title_english_3??'' }}">
                                    </div>
                                   
                                </div>                  
                                <div class="col-lg-3">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label"> Coutner Title Bangla 3  </label>
                                        <input type="text" name="title_bangla_3" id="title_bangla_3" class="form-control" placeholder="Coutner Title Bangla " value="{{ $counter_image->title_bangla_3??'' }}">
                                    </div>
                                </div>    
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Counter Value 3 </label>
                                        <input type="number" id="value_3" name="value_3" class="form-control" placeholder="Counter Value..." value="{{ $counter_image->value_3??'' }}">
                                    </div>
                                </div> 
                             
                            </div>

                            <!-- end row-->
                            <div class="row"> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="image_4" class="form-label">Image 4 </label>
                                        <input type="file" id="image_4" name="image_4" class="form-control" placeholder="Counter Image...">

                                        <img src="{{ (!empty($counter_image->image_4)) ? asset($counter_image->image_4) : url('upload/no_image.jpg') }}" alt="" id="image_4_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 80px;height:80px">
                                    </div>
                                   
                                </div> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label"> Coutner Title English 4 </label>
                                        <input type="text" id="title_english_4" name="title_english_4" class="form-control" placeholder="Coutner Title English ..." value="{{ $counter_image->title_english_4??'' }}">
                                    </div>
                                   
                                </div>                  
                                <div class="col-lg-3">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label"> Coutner Title Bangla 4  </label>
                                        <input type="text" name="title_bangla_4" id="title_bangla_4" class="form-control" placeholder="Coutner Title Bangla " value="{{ $counter_image->title_bangla_4??'' }}">
                                    </div>
                                </div>    
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Counter Value 4 </label>
                                        <input type="number" id="value_4" name="value_4" class="form-control" placeholder="Counter Value..." value="{{ $counter_image->value_4??'' }}">
                                    </div>
                                </div> 
                               
                               
                                
                            </div>

                            <!-- end row-->
                            <div class="text-center">  
                                @if($counter_image != true)                         
                                <button type="submit" class="btn btn-success waves-effect waves-light "><i class="mdi mdi-content-save"></i>Submit</button> 
                                @else                         
                                <button type="submit" class="btn btn-success waves-effect waves-light "><i class="mdi mdi-content-save"></i>Update</button> 
                                @endif                         
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
            $('#image_1').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#image_1_show').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#image_2').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#image_2_show').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#image_3').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#image_3_show').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#image_4').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#image_4_show').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            
        });
    </script>


@endsection