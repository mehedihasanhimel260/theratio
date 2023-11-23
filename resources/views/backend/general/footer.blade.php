
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="text-white" style="font-size: 20px">Website Footer Setup</p>
                @php
                    $footer = App\Models\Footer::latest()->first();
                @endphp
               
                <form id="myForm" method="post" action="{{ route('footer.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">                  
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="footer_details_eng" class="form-label">Footer Details English </label>
                               <textarea name="footer_details_eng" class="form-control" id="" cols="30" rows="7">
{{ $footer->footer_details_eng??'' }}
                               </textarea>
                            </div>
                        </div>   
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="footer_details_bng" class="form-label">Footer Details Bangla </label>
                               <textarea name="footer_details_bng" class="form-control" id="" cols="30" rows="7">
{{ $footer->footer_details_bng??'' }}
                               </textarea>
                            </div>
                        </div> 
                        <div class="col-lg-12">                      
                            <div class="form-group mb-3">
                                <label for="copy_right_text" class="form-label">Copy Right Text</label>
                                <input type="text" name="copy_right_text" id="copy_right_text" class="form-control" placeholder="Copy Right Text..." value="{{ $footer->copy_right_text??'' }}" style="padding:10px 5px">
                            </div>
                        </div>    
                       
                        
                      <!-- end col --> 
                    </div>
                    <!-- end row-->
                    <div class="text-center ">
                        @if($footer != true)
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



