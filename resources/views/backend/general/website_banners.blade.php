

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">                
                <p class="text-white" style="font-size: 20px">Website Banner Setup</p>
                <form id="myForm" method="post" action="{{ route('website.banner.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">                  
                        <div class="col-lg-6">                      
                            <div class="form-group mb-3">
                                <label for="simpleinput" class="form-label">Banner English Title </label>
                                <input type="text" name="title_english" id="title_english" class="form-control" placeholder="English Title..." style="padding:10px 5px">
                            </div>
                        </div>    
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Banner Bangla Title </label>
                                <input type="text" id="title_bangla" name="title_bangla" class="form-control" placeholder="Bangla Title..." style="padding:10px 5px">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Short Details In English </label>
                                <input type="text" id="short_details_eng" name="short_details_eng" class="form-control" placeholder="Short Details English..." style="padding:10px 5px">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Short Details In Bangla </label>
                                <input type="text" id="short_details_bng" name="short_details_bng" class="form-control" placeholder="Short Details Bangla..." style="padding:10px 5px">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="banner_image" class="form-label">Banner Image</label>
                                <input type="file" id="banner_image" name="banner_image" class="form-control" style="padding:10px 5px" >
                            </div>
                            <img src="{{ url('upload/no_image.jpg') }}" alt="" id="banner_showImg" class="avatar-lg img-thumbnail" alt="profile-image" style="width: 120px;height:120px">
                             
                        </div>  
                        
                        <!-- end col --> 
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
                <h4 class="header-title text-center">Website Banner Information</h4>               
                @php
                    $website_banner = App\Models\WebsiteBanner::latest('id','DESC')->get();
                @endphp
                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th width="2%">SL</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Short Details</th>
                            <th>Status</th>
                            <th>Action</th>                            
                        </tr>
                    </thead>               
                    <tbody>
                        @foreach($website_banner as $key => $item)
                        <tr>
                            <td width="2%">{{ $key+1 }}</td>
                            <td><img src="{{ asset($item->banner_image) }}" alt="" style="width:50px;height:50px"></td>
                            <td>{{ $item->title_english }}</td>
                            <td>{{ $item->short_details_eng }}</td>
                            <td>@if($item->status=='1')
                                <a href="{{ route('website.banner.inactive',$item->id) }}" class="badge rounded-pill p-2 " style="background: green;color:white;font-size:12px">Active</a>
                                @else
                                <a href="{{ route('website.banner.active',$item->id) }}" class="badge rounded-pill bg-danger p-2" style="font-size:12px;color:white">Deactive</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edit.website.banner',$item->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('delete.website.banner',$item->id) }}" id="delete" class="btn btn-danger">Delete</a>
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
        $('#banner_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#banner_showImg').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

  



