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
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Profile</a></li>
                  </ol>
               </div>
               <h4 class="page-title">Admin Profile</h4>
            </div>
         </div>
      </div>
      <!-- end page title -->
      <div class="row">
         
         <div class="col-lg-12 col-xl-12">
            <div class="card">
               <div class="card-body">                 
                  
                     <!-- end about me section content -->
    <div class="tab-pane" id="settings">
    <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name='id' value="{{ $adminData->id }}">
        
        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $adminData->name }}" placeholder="Enter name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $adminData->email }}" placeholder="Enter Email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $adminData->phone }}" placeholder="Enter Phone Number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="{{ $adminData->address }}" placeholder="Enter Address">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                <label for="photo" class="form-label">Admin Profile Image</label>
                <input type="file" id="image" class="form-control" name="photo" id="photo" >
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3"> 
                    @if($adminData->photo)
                    <img src="{{ asset('/upload/admin_image/'.$adminData->photo) }}" alt="" id="showImg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" style="width: 150px;height:150px"> 
                    @else
                    <img src="{{ url('upload/no_image.jpg') }}" alt="" id="showImg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" style="width: 150px;height:150px">
                    @endif

                {{-- <img src="{{ (!empty($adminData->photo))? url('upload/admin_image/'.$adminData->photo) : url('upload/no_image.jpg') }}" id="showImg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image"> --}}
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="text-center">
            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
        </div>
    </form>
    </div>
    <!-- end settings content-->
                  
               </div>
            </div>
            <!-- end card-->
         </div>
         <!-- end col -->
      </div>
      <!-- end row-->
   </div>
   <!-- container -->
</div>
<!-- content -->

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

@endsection