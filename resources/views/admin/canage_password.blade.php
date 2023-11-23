@extends('admin_dashboard')
@section('admin')
@section('title') Change Password @endsection
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
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Change Password</a></li>
                  </ol>
               </div>
               <h4 class="page-title">Admin Change Password</h4>
            </div>
         </div>
      </div>
      <!-- end page title -->
      <div class="row">
        
         <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
               <div class="card-body">                 
                  
                     <!-- end about me section content -->
    <div class="tab-pane" id="settings">

    <form action="{{ route('admin.password.update') }}" method="post" enctype="multipart/form-data">
        @csrf        
        
        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Change Password</h5>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                <label for="old_password" class="form-label">Old Password</label>
                <input type="password" class="form-control @error('old_password') is-invalid                    
                @enderror" name="old_password" id="current_password" placeholder="Enter Old Password">
                @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <input type="password" class="form-control @error('new_password') is-invalid                    
                @enderror" name="new_password" id="new_password" placeholder="Enter New Password">
                @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" placeholder="Enter Confirm Password">
                </div>
            </div>         
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="text-center">
            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>Save</button>
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



@endsection