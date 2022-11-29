<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Login</title>
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


 <section class="login_screen">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-9 col-md-5 col-lg-4 shadow-lg">
                    <h1>Login</h1>
                    <p>Register New Admin</p>
                    <form action="{{url('/admin/register')}}" method="post">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                            <input type="email" class="form-control" placeholder="Email" name="email"  value="{{old('email')}}">
                            
                        </div>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                    value="{{old('password')}}">                               
                        </div>
                        @error('password')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                        {{-- <div class="sign-up-portion">
                            <p>Are You New Here ? <a href="register.php">Register Here</a></p>
                        </div> --}}
                        <div class="submit_btn">
                            <button class="btn btn-success">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


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

</body>
</html>