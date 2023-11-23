@extends('admin_dashboard')
@section('title') Admin @endsection
@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">General Setting</a></li>
                            
                        </ol>
                    </div>
                    <h4 class="page-title">General Setting</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

       

        

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">General Setting</h4>

                        <ul class="nav nav-pills navtab-bg">
                            <li class="nav-item">
                                <a href="#page_banner_and_title" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                    Page Banner and Title
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#logo_settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Logo Settings 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#website_links" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Websit Links
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#website_banners" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Websit Banners
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#payment_numbers" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                   Payment Number
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#footer" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Footer
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="page_banner_and_title">
                                @include('backend.general.banner_title')
                            </div>
                            <div class="tab-pane" id="logo_settings">
                                @include('backend.general.logo_setting')
                            </div>
                            <div class="tab-pane" id="website_links">
                                @include('backend.general.website_links')
                            </div>
                            <div class="tab-pane" id="website_banners">
                                @include('backend.general.website_banners')
                            </div>
                            <div class="tab-pane" id="payment_numbers">
                                @include('backend.general.payment_numbers')
                            </div>   
                            <div class="tab-pane" id="footer">
                                @include('backend.general.footer')
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->

           
        </div>
        <!-- end row -->

        
        
    </div> <!-- container -->

</div> <!-- content -->



@endsection