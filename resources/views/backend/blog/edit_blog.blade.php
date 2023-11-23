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
                            <a href="{{ route('all.blogs') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="fe-arrow-left"></i>All Blogs</a>                            
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Blogs/News</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Edit Blogs Main Informantion</p>

                    <form id="myForm" method="post" action="{{ route('update.blogs') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $edit_blog->id }}">
                            <div class="row">                  
                                <div class="col-lg-6">                      
                                    <div class="form-group mb-3">
                                        <label for="title_english" class="form-label">Blogs Title In English </label>
                                        <input type="text" name="title_english" id="title_english" class="form-control" placeholder="Blogs Title In English..." value="{{ $edit_blog->title_english }}">
                        
                                    </div>
                                </div>    
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Blogs Title In Bangla </label>
                                        <input type="text" id="title_bangla" name="title_bangla" class="form-control" placeholder="Blogs Title In Bangla ..." value="{{ $edit_blog->title_bangla }}">
                                    </div>
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label">Main Image</label>
                                        <input type="file" id="main_image" name="main_image" class="form-control" >
                                    </div>
                                    <img src="{{ (!empty($edit_blog->main_image)) ? asset($edit_blog->main_image) : url('upload/no_image.jpg') }}" alt="" id="main_image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                     
                                </div> 
                                <div class="col-lg-6"> 
                                    <div class="form-group mb-3">
                                        <label for="banner_image" class="form-label">Banner Image</label>
                                        <input type="file" id="banner_image" name="banner_image" class="form-control" >
                                    </div>
                                    <img src="{{ (!empty($edit_blog->banner_image)) ? asset($edit_blog->banner_image) : url('upload/no_image.jpg') }}" alt="" id="banner_image_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                     
                                </div>   
                                
                                <div class="col-lg-12 mt-2"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Blogs Short Description in English </label>
                                        <textarea name="short_des_eng" class="form-control" id="short_des_eng" cols="30" rows="5" placeholder="Service Short Description English ...">
                                            {!! $edit_blog->short_des_eng !!}
                                      </textarea>
                                    </div>
                                </div> 
                                <div class="col-lg-12 "> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Blogs Short Description in Bangla </label>
                                        <textarea name="short_des_bng" class="form-control" id="short_des_bng" cols="30" rows="5" placeholder="Service Short Description Bangla..." >
                                            {!! $edit_blog->short_des_bng !!}
                                        </textarea>                                      
                                    </div>
                                </div> 

                                <p class="text-white" style="font-size: 20px">Blogs Details  Informantion</p>

                                
                                <div class="col-lg-4"> 
                                    <div class="form-group mb-3">
                                        <label for="details_image1" class="form-label">Details Image 1</label>
                                        <input type="file" id="details_image1" name="details_image1" class="form-control" >
                                    </div>
                                    <img src="{{ (!empty($edit_blog->details_image1)) ? asset($edit_blog->details_image1) : url('upload/no_image.jpg') }}" alt="" id="details_image1_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                     
                                </div>  
                                <div class="col-lg-4"> 
                                    <div class="form-group mb-3">
                                        <label for="details_image2" class="form-label">Details Image 2</label>
                                        <input type="file" id="details_image2" name="details_image2" class="form-control" >
                                    </div>
                                    <img src="{{ (!empty($edit_blog->details_image2)) ? asset($edit_blog->details_image2) : url('upload/no_image.jpg') }}" alt="" id="details_image2_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                     
                                </div>  
                                <div class="col-lg-4"> 
                                    <div class="form-group mb-3">
                                        <label for="details_image3" class="form-label">Details Image 3</label>
                                        <input type="file" id="details_image3" name="details_image3" class="form-control" >
                                    </div>
                                    <img src="{{ (!empty($edit_blog->details_image3)) ? asset($edit_blog->details_image3) : url('upload/no_image.jpg') }}" alt="" id="details_image3_show" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                                     
                                </div>
                              
                                <div class="col-lg-12 mt-2">                                    
                                        <div class="form-group">
                                            <label for="long_des1_eng" class="form-label">Blog Long Details-1 English</label>                                            
                                            <textarea id="tinymce" class="editor form-control" col="10" row="15" name="long_des1_eng">
                                                {!! $edit_blog->long_des1_eng !!}
                                            </textarea>
                                                                                    
                                        </div>        
                                                                      
                                </div>  
                                <div class="col-lg-12 mt-2"> 
                                    <div class="form-group mb-3">
                                        <label for="long_des1_bng" class="form-label">Blog Long Details-1 Bangla</label>
                                        <textarea name="long_des1_bng" id="tinymce" class="editor form-control" cols="30" rows="15" placeholder="Service Long Details-1 Bangla...">
                                            {!! $edit_blog->long_des1_bng??null !!}
                                        </textarea> 
                                                  
                                    </div>                                   
                                </div> 
                                <div class="col-lg-12 mt-2">                                    
                                    <div class="form-group">
                                        <label for="long_des2_eng" class="form-label">Blog Long Details-2 English</label>
                                        <textarea name="long_des2_eng" id="tinymce" class="editor form-control" cols="30" rows="15" placeholder="Service Long Details-2 English ...">
                                            {!! $edit_blog->long_des2_eng !!}
                                        </textarea> 
                                      
                                    </div>         
                                                                  
                            </div>  
                            <div class="col-lg-12 mt-2"> 
                                <div class="form-group mb-3">
                                    <label for="long_des2_bng" class="form-label">Blog Long Details-2 Bangla</label>
                                    <textarea name="long_des2_bng" id="tinymce" class="editor form-control" cols="30" rows="15" placeholder="Service Long Details-2 Bangla ...">
                                        {!! $edit_blog->long_des2_bng !!}
                                    </textarea> 
                                             
                                </div>                                   
                            </div> 
                            <div class="col-lg-12 mt-2">                                    
                                <div class="form-group">
                                    <label for="long_des3_eng" class="form-label">Blog Long Details-3 English</label>
                                    <textarea name="long_des3_eng" id="tinymce" class="editor form-control" cols="30" rows="15" placeholder="Blog Long Details-3 English ...">
                                        {!! $edit_blog->long_des3_eng !!}
                                    </textarea> 
                                      
                                </div>         
                                                              
                        </div>  
                        <div class="col-lg-12 mt-2"> 
                            <div class="form-group mb-3">
                                <label for="long_des3_bng" class="form-label">Blog Long Details-3 Bangla</label>
                                <textarea name="long_des3_bng" id="tinymce" class="editor form-control" cols="30" rows="15" placeholder="Service Long Details-3 Bangla ...">
                                    {!! $edit_blog->long_des3_bng !!}
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
                $('#details_image1').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#details_image1_show').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
                $('#details_image2').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#details_image2_show').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
                $('#details_image3').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#details_image3_show').attr('src',e.target.result);
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