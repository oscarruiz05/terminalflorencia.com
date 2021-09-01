<!DOCTYPE html>
<html lang="es">
@include('layouts.src.head')
<body>

    <!-- header -->
    @include('layouts.src.header')

    <!-- main content -->
    @yield('content')

    <!-- footer-->
    @include('layouts.src.footer')

    <!--Scroll to top-->
    <a href="#" class="scrollToTop">
        <img src="assets/images/scroll.svg" alt="">
    </a>

    <!-- scripts -->
    @include('layouts.src.scripts')
</body>
</html>
