<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('title')
    <link rel="stylesheet" href="{{url('css/Bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="icon" href="{{url('images/ism.png')}}" >
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="{{url('js/jQuery.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
</head>
<body>
<div class="loader">
    <div class="circle"></div>
</div>
 
@include('layout.header')


@yield('main-content')



@include('layout.footer')



<!--JS-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{url('js/Bootstrap.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{url('js/lightbox-plus-jquery.min.js')}}"></script>
<script>
    AOS.init();
    document.addEventListener("contextmenu", e => e.preventDefault());
    $(window).on('load', function () {
        $(".loader").fadeOut(1000);
        $(".main-content").fadeIn(1000);
    });
    
</script>
@stack('js_custom')

</body>
</html>