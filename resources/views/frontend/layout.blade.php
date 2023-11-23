<!DOCTYPE html>
<html lang="en">


@include('frontend.inc.head')

<body class="royal_preloader">
    <div id="page" class="site">
        @include('frontend.inc.header')

        @yield('content')

        @include('frontend.inc.footer')
    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>

    <!-- jQuery -->

    @include('frontend.inc.script')

</body>

</html>


