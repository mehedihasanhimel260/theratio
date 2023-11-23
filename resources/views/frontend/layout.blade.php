<!DOCTYPE html>
<html lang="en">

@include('frontend.inc.head')

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        @include('frontend.inc.header')
        <!-- header close -->


        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            @yield('content')

            <!-- footer begin -->
            @include('frontend.inc.footer')
            <!-- footer close -->
        </div>
    </div>



    <!-- Javascript Files-->
    @include('frontend.inc.script')

</body>


</html>
