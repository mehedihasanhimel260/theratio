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
                            <a href="{{ route('all.notice') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="fe-arrow-left"></i>All Notice</a>                            
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Notice</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Notice Main Informantion</p>

                        <form id="myForm" method="post" action="{{ route('notice.update') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $edit_notice->id }}">

                            <div class="row">  
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="image" class="form-label">Upload PDF</label>
                                        <input type="file" id="pdf_file" name="pdf_file" class="form-control" >
                                    </div>                                   
                                     
                                </div>                 
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="short_des_eng" class="form-label">Short Description In English </label>
                                        <textarea name="short_des_eng" class="form-control" id="" cols="30" rows="5" placeholder="Short Description In English..." value="">
                                            {!! $edit_notice->short_des_eng !!}
                                      </textarea>
                                    </div>
                                </div> 
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="short_des_bng" class="form-label">Short Description In Bangla </label>
                                        <textarea name="short_des_bng" class="form-control" id="" cols="30" rows="5" placeholder="Short Description In Bangla ..." value="">
                                            {!! $edit_notice->short_des_bng !!}
                                      </textarea>
                                    </div>
                                </div> 

                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="long_des_eng" class="form-label">Long Description In English </label>
                                        <textarea name="long_des_eng" class="form-control" id="" cols="30" rows="5" placeholder="Long Description In English..." value="">
                                            {!! $edit_notice->long_des_eng !!}
                                      </textarea>
                                    </div>
                                </div> 
                                <div class="col-lg-12"> 
                                    <div class="form-group mb-3">
                                        <label for="long_des_bng" class="form-label">Long Description In Bangla </label>
                                        <textarea name="long_des_bng" class="form-control" id="" cols="30" rows="5" placeholder="Long Description In Bangla ..." value="">
                                            {!! $edit_notice->long_des_bng !!}
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