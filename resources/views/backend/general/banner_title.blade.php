<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
               <p class="text-white" style="font-size: 20px">Page Banner and Title Setup</p>
                <form id="myForm" method="post" action="{{ route('banner.title.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">                  
                        <div class="col-lg-6">                      
                            <div class="form-group mb-3">
                                <label for="simpleinput" class="form-label">English Title </label>
                                <input type="text" name="title_english" id="title_english" class="form-control" placeholder="English Title...">
                            </div>
                        </div>    
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Bangla Title </label>
                                <input type="text" id="title_bangla" name="title_bangla" class="form-control" placeholder="Bangla Title...">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="banner_image" class="form-label">Banner Image</label>
                                <input type="file" id="image" name="banner_image" class="form-control" >
                            </div>
                            <img src="{{ url('upload/no_image.jpg') }}" alt="" id="showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                             {{-- <img src="{{ (!empty($adminData->photo))? url('upload/admin_image/'.$adminData->photo) : url('upload/no_image.jpg') }}" id="showImg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image"> --}}
                        </div>  
                        
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                            <label for="example-select" class="form-label">Select Page for the title and banner</label>
                                <select class="form-select" name="page" id="page">
                                    <option value="" disabled selected>Select Page</option>
                                    <option value="courses">Courses</option>
                                    <option value="instructor">Instructor</option>
                                    <option value="testimonial">Testimonial</option>
                                    <option value="blogs">Blogs</option>
                                    <option value="research">Research</option>
                                    <option value="contacts">Contacts</option>
                                    <option value="gallery">Image Gallery</option>
                                    <option value="video-gallery">Video Gallery</option>
                                    <option value="sponsor">Sponsor</option>
                                    <option value="enrollment">Enrollment</option>
                                    <option value="login">Login</option>
                                    <option value="register">Register</option>
                                </select>
                            </div>
                        </div>  <!-- end col --> 
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
<div class="row">
    <div class="col-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <p class="text-white text-center" style="font-size: 20px">Website Banner and Title Information</p>              

                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th width="2%">SL</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Page</th>
                            <th>Status</th>
                            <th>Action</th>                            
                        </tr>
                    </thead>               
                    <tbody>
                        @foreach($banner_info as $key => $item)
                        <tr>
                            <td width="2%">{{ $key+1 }}</td>
                            <td><img src="{{ asset($item->banner_image) }}" alt="" style="width:50px;height:50px"></td>
                            <td>{{ $item->title_english }}</td>
                            <td>{{ $item->page }}</td>
                            <td>
                                @if($item->status=='1')
                                <a href="{{ route('banner.title.inactive',$item->id) }}" class="badge rounded-pill p-2 " style="background: green;color:white;font-size:12px">Active</a>
                                @else
                                <a href="{{ route('banner.title.active',$item->id) }}" class="badge rounded-pill bg-danger p-2" style="font-size:12px;color:white">Deactive</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edit.banner.title',$item->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('delete.banner.title',$item->id) }}" id="delete" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->

{{-- image view js  --}}
<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImg').attr('src',e.target.result);
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
                title_english: {
                    required : true,
                },  
                banner_image: {
                    required : true,
                },                
                page: {
                    required : true,
                },                
            },
           
            messages :{
                title_english: {
                    required : 'Please Enter Banner Title in Eglish',
                }, 
                banner_image: {
                    required : 'Please Select Banner Image',
                },               
                page: {
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