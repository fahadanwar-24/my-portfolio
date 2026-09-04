<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Stylesheet, Meta Tag, Title -->
    @include('frontend.includes.partials.head')
    @yield('css')
</head>

<body class="{{ $bodyClass ?? '' }}">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    
    <!-- Start Contenet Area-->
    @yield('content')
    <!-- End Contenet Area -->

    <!-- Start Script Area -->
    @include('frontend.includes.partials.scripts')
    @yield('script')
    <!-- End Script Area -->
</body>

</html>
