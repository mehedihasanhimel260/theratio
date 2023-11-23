<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('dashboard') }}" data-bs-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">4</span>
                        <span> Dashboards </span>
                    </a>

                </li>

                <li class="menu-title mt-2">Apps</li>



                <li>
                    <a href="#sidebarGeneral" data-bs-toggle="collapse">
                        <i class="fe-settings me-1"></i>
                        <span>General Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarGeneral">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('general.setting') }}">General Setting</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarSlider" data-bs-toggle="collapse">
                        <i class="fe-settings me-1"></i>
                        <span>Slider Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSlider">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.slider') }}">All Slider</a>
                            </li>
                            <li>
                                <a href="{{ route('add.slider') }}">Add Slider</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarService" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Service Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarService">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.services') }}">All Services</a>
                            </li>
                            <li>
                                <a href="{{ route('add.services') }}">Add Services</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarService" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Project Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarService">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('project.index') }}">All Project</a>
                            </li>
                            <li>
                                <a href="{{ route('project.create') }}">Add Project</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarAbout" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>About Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAbout">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('about.setting') }}">About </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTeacher" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Team/Teacher Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTeacher">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.team') }}">All Teachers</a>
                            </li>
                            <li>
                                <a href="{{ route('add.team') }}">Add Teachers</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarBlog" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Blog Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBlog">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.blogs') }}">All Blogs</a>
                            </li>
                            <li>
                                <a href="{{ route('add.team') }}">Add Blogs</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTestimonial" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Testimonial Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTestimonial">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.testimonial_1') }}">All Testimonial 1</a>
                            </li>
                            <li>
                                <a href="{{ route('all.testimonial_2') }}">All Testimonial 2</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarGallery" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Gallery Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarGallery">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.image') }}">Image Gallery</a>
                            </li>
                            <li>
                                <a href="{{ route('all.video') }}">Video Gallery</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarNotice" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Notice Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarNotice">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.notice') }}">Notice</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarSponsor" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Sponsor Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSponsor">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.sponsor') }}">Sponsor</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCounter" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Counter Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCounter">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('counter.icon') }}">Counter Icon</a>
                            </li>
                            <li>
                                <a href="{{ route('counter.image') }}">Counter Image</a>
                            </li>
                        </ul>
                    </div>
                </li>











            </ul>
        </div>
        </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
