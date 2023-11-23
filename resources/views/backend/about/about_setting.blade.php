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
                            <a href="" class="btn btn-primary rounded-pill waves-effect waves-light">Edit - Update About</a>                            
                        </ol>
                    </div>
                    <h4 class="page-title">Edit - Update About</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">About Information</p>

                        <form id="myForm" method="post" action="{{ route('about.update.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">                  
                                <div class="col-lg-6">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label">About Title In English </label>
                                        <input type="text" name="title_english" id="title_english" class="form-control" placeholder="About Title In English..." value="{{ $about->title_english??'' }}">
                                    </div>
                                </div>    
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">About Title In Bangla </label>
                                        <input type="text" id="title_bangla" name="title_bangla" class="form-control" placeholder="About Title In Bangla ..." value="{{ $about->title_bangla??'' }}">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label">Main Image</label>
                                        <input type="file" id="main_image" name="main_image" class="form-control" >
                                    </div>
                                    @if($about->main_image??null)
                                    <img src="{{ asset($about->main_image) }}" alt="" id="main_image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                    @else
                                    <img src="{{ url('upload/no_image.jpg') }}" alt="" id="main_image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                    @endif
                                     
                                </div>  
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="banner_image" class="form-label">Banner Image</label>
                                        <input type="file" id="banner_image" name="banner_image" class="form-control" >
                                    </div>
                                    <img src="{{ (!empty($about->banner_image) ? asset($about->banner_image) : url('upload/no_image.jpg')) }}" alt="" id="banner_image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                     
                                </div>                                
                              
                                <p class="text-white my-3" style="font-size: 20px">About Details  Informantion</p>

                                <div class="col-lg-12 mt-2">                                    
                                    <div class="form-group">
                                        <label for="long_des1_eng" class="form-label">About Details-1 English</label>                                            
                                        <textarea id="tinymce" class="editor form-control" col="10" row="15" name="details_1_eng" placeholder="About Details-1 English">
                                            {!! $about->details_1_eng??'' !!}
                                        </textarea>
                                                                                
                                    </div>                                             
                                </div>  
                                <div class="col-lg-12 mt-2"> 
                                    <div class="form-group mb-3">
                                        <label for="long_des1_bng" class="form-label">About Details-1 Bangla</label>
                                        <textarea name="details_1_bng" id="tinymce" class="editor form-control" cols="30" rows="15" placeholder="About Details-1 Bangla...">
                                            {!! $about->details_1_bng??'' !!}
                                        </textarea> 
                                                  
                                    </div>                                   
                                </div> 
                                <div class="col-lg-12 mt-2">                                    
                                    <div class="form-group">
                                        <label for="long_des2_eng" class="form-label">About Details-2 English</label>
                                        <textarea name="details_2_eng" id="tinymce" class="editor form-control" cols="30" rows="15" placeholder="About Details-2 English ...">
                                            {!! $about->details_2_eng??'' !!}
                                        </textarea> 
                                      
                                    </div>         
                                                                  
                            </div>  
                            <div class="col-lg-12 mt-2"> 
                                <div class="form-group mb-3">
                                    <label for="long_des2_bng" class="form-label">About Details-2 Bangla</label>
                                    <textarea name="details_2_bng" id="tinymce" class="editor form-control" cols="30" rows="15" placeholder="About Details-2 Bangla ...">
                                        {!! $about->details_2_bng??'' !!}
                                    </textarea> 
                                             
                                </div>                                   
                            </div> 
                           
                          
                              
                            </div>

                            <!-- end row-->
                            <div class="text-center">
                            @if($about != true)
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
                $('#main_image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#main_image_show').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
                $('#banner_image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#banner_image_show').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });                
            });
        </script>
        
        {{-- js form validation rules --}}
       
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