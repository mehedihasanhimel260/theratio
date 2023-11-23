
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="text-white" style="font-size: 20px">Website Links Setup</p>
                @php
                    $website = App\Models\WebsiteLink::latest()->first();
                @endphp
               
                <form id="myForm" method="post" action="{{ route('websitelink.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">                  
                        <div class="col-lg-6">                      
                            <div class="form-group mb-3">
                                <label for="simpleinput" class="form-label">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email..." value="{{ $website->email??'' }}">
                            </div>
                        </div>    
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Phone </label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone..." value="{{ $website->phone??'' }}">
                            </div>
                        </div> 
                        <div class="col-lg-6">                      
                            <div class="form-group mb-3">
                                <label for="simpleinput" class="form-label">Address English</label>
                                <input type="text" name="address_english" id="address_english" class="form-control" placeholder="Address English..." value="{{ $website->address_english??'' }}">
                            </div>
                        </div>    
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Address Bangla </label>
                                <input type="text" name="address_bangla" id="address_bangla" class="form-control" placeholder="Address Bangla..." value="{{ $website->address_bangla??'' }}">
                            </div>
                        </div> 
                        <div class="col-lg-6">                      
                            <div class="form-group mb-3">
                                <label for="simpleinput" class="form-label">Website Link </label>
                                <input type="text" name="website_link" id="website_link" class="form-control" placeholder="Website link..." value="{{ $website->website_link??'' }}">
                            </div>
                        </div>    
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Facebook </label>
                                <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Facebook..." value="{{ $website->facebook??'' }}">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Instagram </label>
                                <input type="text" id="instagram" name="instagram" class="form-control" placeholder="Instagram..." value="{{ $website->instagram??'' }}">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">LinkedIn </label>
                                <input type="text" id="linkedIn" name="linkedIn" class="form-control" placeholder="LinkedIn..." value="{{ $website->linkedIn??'' }}">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Twitter</label>
                                <input type="text" id="facebook" name="twitter" class="form-control" placeholder="Twitter..." value="{{ $website->twitter??'' }}">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Telegram </label>
                                <input type="text" id="telegram" name="telegram" class="form-control" placeholder="Telegram..." value="{{ $website->telegram??'' }}">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Youtube </label>
                                <input type="text" id="youtube" name="youtube" class="form-control" placeholder="Youtube..." value="{{ $website->youtube??'' }}">
                            </div>
                        </div> 
                        <div class="col-lg-6"> 
                            <div class="form-group mb-3">
                                <label for="example-email" class="form-label">Map link </label>
                               <textarea name="map_link" class="form-control" id="" cols="30" rows="7">
{{ $website->map_link??'' }}
                               </textarea>
                            </div>
                        </div> 
                        
                      <!-- end col --> 
                    </div>
                    <!-- end row-->
                    <div class="text-center ">
                        @if($website != true)
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



