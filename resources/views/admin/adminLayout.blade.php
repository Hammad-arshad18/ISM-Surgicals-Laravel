<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - @stack('admin-title')</title>
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-md-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{url('images/logo.png')}}" class="img-fluid" alt="ISM Surgicals"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasWithBackdrop"
                        aria-controls="offcanvasWithBackdrop">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="{{route('admin')}}" class="nav-link"> Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.logout')}}"><i class="fas fa-address-book"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
         aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header ">
            <a href="{{route('home')}}" ><h5 class="offcanvas-title shadow-sm" id="offcanvasWithBackdropLabel">ISM <span class="c_surgical">SURGICALS</span>

            </h5></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
                 <li class="nav-item">
                    <a href="{{route('admin')}}" class="nav-link"> Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.logout')}}"><i class="fas fa-address-book"></i> Logout</a>
                </li>
            </ul>
        </div>

        <div class="footer-canvas">
            <p>&copy Copyright 2021 - {{Date('Y')}} || <a href="">Hammad Arshad</a></p>
        </div>
    </div>


@yield('admin-main')


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

@stack('admin-js')

</body>
</html>