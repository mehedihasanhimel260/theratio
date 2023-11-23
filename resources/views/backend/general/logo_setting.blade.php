<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="text-white" style="font-size: 20px">Website Logo Setup</p>
               @php
                   $logo = App\Models\Logo::latest()->first();
               @endphp
                <form id="myForm" method="post" action="{{ route('logo.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">                  
                        <div class="col-lg-6">                      
                            <div class="form-group mb-3">
                                <label for="simpleinput" class="form-label">Website Name English</label>
                                @if($logo->site_name_english??null)
                                <input type="text" name="site_name_english" id="site_name_english" class="form-control" value="{{ $logo->site_name_english??null }}">
                                @else
                                <input type="text" name="site_name_english" id="site_name_english" class="form-control" placeholder="Website Name...">
                                @endif
                            </div>
                        </div>    
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Website Name Bangla  </label>
                                @if($logo->site_name_bangla??null)
                                <input type="text" id="site_name_bangla" name="site_name_bangla" class="form-control" value="{{ $logo->site_name_bangla??null }}">
                                @else
                                <input type="text" id="site_name_bangla" name="site_name_bangla" class="form-control" placeholder="Website Name Bangla...">
                                @endif
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="banner_image" class="form-label">Admin Logo Image(300X80)</label>
                                <input type="file" id="admin_logo_image" name="admin_logo_image" class="form-control">
                            </div>
                            @if($logo->admin_logo_image??null)
                            <img src="{{ asset( $logo->admin_logo_image??null ) }}" alt="" id="admin_logo_showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 300px;height:80px">
                            @else
                            <img src="{{ url('upload/no_image.jpg') }}" alt="" id="admin_logo_showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 300px;height:80px">
                            @endif
                        </div>  
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                            <label for="frontend_logo_image" class="form-label">Frontend Top Logo Image(300X80)</label>
                            <input type="file" id="frontend_logo_image" name="frontend_logo_image" class="form-control">
                            </div>
                            @if($logo->frontend_logo_image??null)
                            <img src="{{ asset( $logo->frontend_logo_image??null ) }}" alt="" id="frontend_logo_showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 300px;height:80px">
                            @else
                            <img src="{{ url('upload/no_image.jpg') }}" alt="" id="frontend_logo_showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 300px;height:80px">
                            @endif
                        </div>  

                        <div class="col-lg-6 mt-3"> 
                            <div class="form-group mb-3">
                            <label for="frontend_footer_image" class="form-label">Frontend Footer Image(300X80)</label>
                            <input type="file" id="frontend_footer_image" name="frontend_footer_image" class="form-control">
                            </div>
                            @if($logo->frontend_footer_image??null)
                            <img src="{{ asset( $logo->frontend_footer_image??null ) }}" alt="" id="frontend_footer_showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 300px;height:80px">
                            @else
                            <img src="{{ url('upload/no_image.jpg') }}" alt="" id="frontend_footer_showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 300px;height:80px">
                            @endif
                        </div>  

                        <div class="col-lg-6 mt-3"> 
                            <div class="form-group mb-3">
                                <label for="favicon_image" class="form-label">Favicon Icon Image(32X32)</label>
                                <input type="file" id="favicon_image" name="favicon_image" class="form-control">
                            </div>
                            @if($logo->favicon_image??null)
                            <img src="{{ asset( $logo->favicon_image??null ) }}" alt="" id="favicon_showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 100px;height:100px">
                            @else
                            <img src="{{ url('upload/no_image.jpg') }}" alt="" id="favicon_showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 100px;height:100px">
                            @endif
                        </div>  

                    </div>                        
                    <!-- end row-->
                    <div class="text-center mt-3">
                        @if($logo != true) 
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

{{-- image view js  --}}
<script>
    $(document).ready(function(){
        $('#admin_logo_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#admin_logo_showImg').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        }); 
        $('#frontend_logo_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#frontend_logo_showImg').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });  
        $('#frontend_footer_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#frontend_footer_showImg').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        }); 
        $('#favicon_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#favicon_showImg').attr('src',e.target.result);
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
                site_name_english: {
                    required : true,
                },  
                admin_logo_image: {
                    required : true,
                },                
                favicon_image: {
                    required : true,
                },                
            },
           
            messages :{
                site_name_english: {
                    required : 'Please Enter Banner Title in Eglish',
                }, 
                admin_logo_image: {
                    required : 'Please Select Banner Image',
                },               
                favicon_image: {
                    required : 'Please Select Banner Page',
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



