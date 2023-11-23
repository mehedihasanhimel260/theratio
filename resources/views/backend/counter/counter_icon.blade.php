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
                                                       
                        </ol>
                    </div>
                    <h4 class="text-white py-1" style="font-size: 20px">Counter Icon Information</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                       <p class="text-white" style="font-size: 20px">Counter Icon</p>

                        <form id="myForm" method="post" action="{{ route('counter.icon.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row"> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label"> Coutner Title English 1 </label>
                                        <input type="text" id="title_english_1" name="title_english_1" class="form-control" placeholder="Coutner Title English 1..." value="{{ $counter_icon->title_english_1??'' }}">
                                    </div>
                                   
                                </div>                  
                                <div class="col-lg-3">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label"> Coutner Title Bangla 1  </label>
                                        <input type="text" name="title_bangla_1" id="title_bangla_1" class="form-control" placeholder="Coutner Title Bangla 1" value="{{ $counter_icon->title_bangla_1??'' }}">
                                    </div>
                                </div>    
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Counter Value 1 </label>
                                        <input type="number" id="value_1" name="value_1" class="form-control" placeholder="Counter Value..." value="{{ $counter_icon->value_1??'' }}">
                                    </div>
                                </div> 
                                <div class="col-lg-2"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Icon Class (font awesome icon) </label>
                                        <input type="text" id="incon_1" name="incon_1" class="form-control" placeholder="Icon class..." value="{{ $counter_icon->incon_1??'' }}">
                                    </div>
                                </div> 
                                <div class="col-lg-1"> 
                                    <div class="form-group mb-3">
                                       
                                       <div class="text-center border py-1" style="margin-top:40px;">
                                        <i class="{{ $counter_icon->incon_1 }} fs-3"></i>
                                       </div>
                                        
                                    </div>
                                </div> 
                               
                                
                            </div>

                            <!-- end row-->
                            <div class="row"> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label"> Coutner Title English 2 </label>
                                        <input type="text" id="title_english_2" name="title_english_2" class="form-control" placeholder="Coutner Title English ..." value="{{ $counter_icon->title_english_2??'' }}">
                                    </div>
                                   
                                </div>                  
                                <div class="col-lg-3">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label"> Coutner Title Bangla 2  </label>
                                        <input type="text" name="title_bangla_2" id="title_bangla_2" class="form-control" placeholder="Coutner Title Bangla " value="{{ $counter_icon->title_bangla_2??'' }}">
                                    </div>
                                </div>    
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Counter Value 2 </label>
                                        <input type="number" id="value_2" name="value_2" class="form-control" placeholder="Counter Value..." value="{{ $counter_icon->value_2??'' }}">
                                    </div>
                                </div> 
                                <div class="col-lg-2"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Icon Class (font awesome icon) </label>
                                        <input type="text" id="incon_2" name="incon_2" class="form-control" placeholder="Icon class..." value="{{ $counter_icon->incon_2??'' }}">
                                    </div>
                                </div> 
                                <div class="col-lg-1"> 
                                    <div class="form-group mb-3">
                                       
                                       <div class="text-center border py-1" style="margin-top:40px;">
                                        <i class="{{ $counter_icon->incon_2 }} fs-3"></i>
                                       </div>
                                        
                                    </div>
                                </div> 
                               
                                
                            </div>

                            <!-- end row-->
                            <div class="row"> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label"> Coutner Title English 3 </label>
                                        <input type="text" id="title_english_3" name="title_english_3" class="form-control" placeholder="Coutner Title English ..." value="{{ $counter_icon->title_english_3??'' }}">
                                    </div>
                                   
                                </div>                  
                                <div class="col-lg-3">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label"> Coutner Title Bangla 3  </label>
                                        <input type="text" name="title_bangla_3" id="title_bangla_3" class="form-control" placeholder="Coutner Title Bangla " value="{{ $counter_icon->title_bangla_3??'' }}">
                                    </div>
                                </div>    
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Counter Value 3 </label>
                                        <input type="number" id="value_3" name="value_3" class="form-control" placeholder="Counter Value..." value="{{ $counter_icon->value_3??'' }}">
                                    </div>
                                </div> 
                                <div class="col-lg-2"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Icon Class (font awesome icon) </label>
                                        <input type="text" id="incon_3" name="incon_3" class="form-control" placeholder="Icon class..." value="{{ $counter_icon->incon_3??'' }}">
                                    </div>
                                </div> 
                                <div class="col-lg-1"> 
                                    <div class="form-group mb-3">
                                       
                                       <div class="text-center border py-1" style="margin-top:40px;">
                                        <i class="{{ $counter_icon->incon_3 }} fs-3"></i>
                                       </div>
                                        
                                    </div>
                                </div> 
                               
                                
                            </div>

                            <!-- end row-->
                            <div class="row"> 
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="main_image" class="form-label"> Coutner Title English 4 </label>
                                        <input type="text" id="title_english_4" name="title_english_4" class="form-control" placeholder="Coutner Title English ..." value="{{ $counter_icon->title_english_4??'' }}">
                                    </div>
                                   
                                </div>                  
                                <div class="col-lg-3">                      
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label"> Coutner Title Bangla 4  </label>
                                        <input type="text" name="title_bangla_4" id="title_bangla_4" class="form-control" placeholder="Coutner Title Bangla " value="{{ $counter_icon->title_bangla_4??'' }}">
                                    </div>
                                </div>    
                                <div class="col-lg-3"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Counter Value 4 </label>
                                        <input type="number" id="value_4" name="value_4" class="form-control" placeholder="Counter Value..." value="{{ $counter_icon->value_4??'' }}">
                                    </div>
                                </div> 
                                <div class="col-lg-2"> 
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="form-label">Icon Class (font awesome icon) </label>
                                        <input type="text" id="incon_4" name="incon_4" class="form-control" placeholder="Icon class..." value="{{ $counter_icon->incon_4??'' }}">
                                    </div>
                                </div> 
                                <div class="col-lg-1"> 
                                    <div class="form-group mb-3">
                                       
                                       <div class="text-center border py-1" style="margin-top:40px;">
                                        <i class="{{ $counter_icon->incon_4 }} fs-3"></i>
                                       </div>
                                        
                                    </div>
                                </div> 
                               
                                
                            </div>

                            <!-- end row-->
                            <div class="text-center">  
                                @if($counter_icon != true)                         
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
       
        
      


@endsection