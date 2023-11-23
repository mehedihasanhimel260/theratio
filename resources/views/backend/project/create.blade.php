@extends('admin_dashboard')
@section('title')
    Admin
@endsection
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
                                <a href="{{ route('project.index') }}"
                                    class="btn btn-primary rounded-pill waves-effect waves-light"><i
                                        class="fe-arrow-left"></i>All project</a>
                            </ol>
                        </div>
                        <h4 class="page-title">Add project</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <p class="text-white" style="font-size: 20px">Project Main Informantion</p>

                            <form id="myForm" method="post" action="{{ route('project.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Project Title In English </label>
                                            <input type="text" name="title_english" id="title_english"
                                                class="form-control" placeholder="Project Title In English...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Project Title In Bangla </label>
                                            <input type="text" id="title_bangla" name="title_bangla" class="form-control"
                                                placeholder="Project Title In Bangla ...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="main_image" class="form-label">Main Image</label>
                                            <input type="file" id="main_image" name="main_image" class="form-control">
                                        </div>
                                        <img src="{{ url('upload/no_image.jpg') }}" alt="" id="main_image_show"
                                            class="avatar-lg img-thumbnail" alt="profile-image"
                                            style="width: 120px;height:120px">

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Project Price </label>
                                            <input type="number" id="price" name="price" class="form-control"
                                                placeholder="Course Price ...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Project Short Description in
                                                English </label>
                                            <textarea name="des_sm_eng" class="form-control" id="" cols="30" rows="5"
                                                placeholder="Project Short Description English ...">
                                      </textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Project Short Description in
                                                English </label>
                                            <textarea name="des_sm_bng" class="form-control" id="" cols="30" rows="5"
                                                placeholder="Project Short Description Bangla ...">
                                        </textarea>
                                        </div>
                                    </div>

                                    <p class="text-white my-3" style="font-size: 20px">Project Details Informantion</p>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="banner_image" class="form-label">Banner Image</label>
                                            <input type="file" id="banner_image" name="banner_image"
                                                class="form-control">
                                        </div>
                                        <img src="{{ url('upload/no_image.jpg') }}" alt="" id="banner_image_show"
                                            class="avatar-lg img-thumbnail" alt="profile-image"
                                            style="width: 120px;height:120px">

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="detais_image_1" class="form-label">Details Image 1</label>
                                            <input type="file" id="detais_image_1" name="detais_image_1"
                                                class="form-control">
                                        </div>
                                        <img src="{{ url('upload/no_image.jpg') }}" alt=""
                                            id="detais_image_1_show" class="avatar-lg img-thumbnail" alt="profile-image"
                                            style="width: 120px;height:120px">

                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <div class="form-group mb-3">
                                            <label for="detais_image_2" class="form-label">Details Image 2</label>
                                            <input type="file" id="detais_image_2" name="detais_image_2"
                                                class="form-control">
                                        </div>
                                        <img src="{{ url('upload/no_image.jpg') }}" alt=""
                                            id="detais_image_2_show" class="avatar-lg img-thumbnail" alt="profile-image"
                                            style="width: 120px;height:120px">

                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <div class="form-group mb-3">
                                            <label for="detais_image_3" class="form-label">Details Image 3</label>
                                            <input type="file" id="detais_image_3" name="detais_image_3"
                                                class="form-control">
                                        </div>
                                        <img src="{{ url('upload/no_image.jpg') }}" alt=""
                                            id="detais_image_3_show" class="avatar-lg img-thumbnail" alt="profile-image"
                                            style="width: 120px;height:120px">

                                    </div>

                                    <div class="col-lg-12 mt-2">
                                        <div class="form-group">
                                            <label for="long_des1_eng" class="form-label">Project Long Details-1
                                                English</label>
                                            <textarea id="tinymce" class="editor form-control" col="10" row="15" name="long_des1_eng"></textarea>

                                        </div>

                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <div class="form-group mb-3">
                                            <label for="long_des1_bng" class="form-label">Project Long Details-1
                                                Bangla</label>
                                            <textarea name="long_des1_bng" id="tinymce" class="editor form-control" cols="30" rows="15"
                                                placeholder="Project Long Details-1 Bangla...">
                                        </textarea>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <div class="form-group">
                                            <label for="long_des2_eng" class="form-label">Project Long Details-2
                                                English</label>
                                            <textarea name="long_des2_eng" id="tinymce" class="editor form-control" cols="30" rows="15"
                                                placeholder="Project Long Details-2 English ...">
                                        </textarea>

                                        </div>

                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <div class="form-group mb-3">
                                            <label for="long_des2_bng" class="form-label">Project Long Details-2
                                                Bangla</label>
                                            <textarea name="long_des2_bng" id="tinymce" class="editor form-control" cols="30" rows="15"
                                                placeholder="Project Long Details-2 Bangla ...">
                                    </textarea>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <div class="form-group">
                                            <label for="long_des3_eng" class="form-label">Project Long Details-3
                                                English</label>
                                            <textarea name="long_des3_eng" id="tinymce" class="editor form-control" cols="30" rows="15"
                                                placeholder="Project Long Details-3 English ...">
                                    </textarea>

                                        </div>

                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <div class="form-group mb-3">
                                            <label for="long_des3_bng" class="form-label">Project Long Details-3
                                                Bangla</label>
                                            <textarea name="long_des3_bng" id="tinymce" class="editor form-control" cols="30" rows="15"
                                                placeholder="Project Long Details-3 Bangla ...">
                                </textarea>

                                        </div>
                                    </div>

                                </div>

                                <!-- end row-->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success waves-effect waves-light "><i
                                            class="mdi mdi-content-save"></i>Submit</button>
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                </div><!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->


    {{-- image view js  --}}
    <script>
        $(document).ready(function() {
            $('#main_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#main_image_show').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#banner_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#banner_image_show').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#detais_image_1').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#detais_image_1_show').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#detais_image_2').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#detais_image_2_show').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#detais_image_3').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#detais_image_3_show').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    {{-- js form validation rules --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    title_english: {
                        required: true,
                    },
                    banner_image: {
                        required: true,
                    },
                    main_image: {
                        required: true,
                    },
                    price: {
                        required: true,
                    },
                },

                messages: {
                    title_english: {
                        required: 'Please Enter Project Title',
                    },
                    banner_image: {
                        required: 'Please Select Banner Image',
                    },
                    main_image: {
                        required: 'Please Select Mian Image',
                    },
                    price: {
                        required: 'Please Give Project Price',
                    },

                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
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
