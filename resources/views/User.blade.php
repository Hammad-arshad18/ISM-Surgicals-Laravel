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
                    <div class="token-group" id="token-section" style="display: none">
                        <h1 class="text-center">Token</h1>
                        <p>Use This Access Token For Making API Request</p>
                        <label for="" class="form-text">Your Access Token</label>
                        <input type="text" class="form-control" id="access_token" disabled>
                    </div>
                    <div id="login-section">
                        <h1>Developer Login</h1>
                        <p>Sign in to your account</p>
                    <form action="#" method="post">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email"  value="">
                            
                        </div>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password"
                                    value="">                               
                        </div>
                        <div class="submit_btn">
                            <button id="login" class="btn btn-success">Login</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
<!--JS-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
    if(localStorage.getItem('access-token')!=null){
            $("#login-section").hide();
            $("#token-section").show();
            $("#access_token").val(localStorage.getItem('access-token'));
        }
    
</script>
    <script>
            $("#login").on('click',function(e){
                const email=$("#email").val();
                const password=$("#password").val();
                e.preventDefault();
                if(email!=="" && password!==""){
                    axios.post('http://127.0.0.1:8000/api/login',{
                        'email': email,
                        'password':password,
                    },{
                        headers:{
                            'Accept':'application/json',
                        }
                    }).then((res)=>{
                    $("#login-section").hide();
                    $("#token-section").show();
                    $("#access_token").val(res.data.token);
                    localStorage.setItem('access-token',res.data.token);
                    }).catch((err)=>{
                        console.log(`Error: ${err}`);
                    });
                }else{
                    alert("Email & Password Are Required")
                }
            });
    </script>

</body>
</html>