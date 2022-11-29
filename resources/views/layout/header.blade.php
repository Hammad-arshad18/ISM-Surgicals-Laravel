     <!--News Messsage For Users-->
    <div class="news shadow-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md col-5"><p><a href="tel:{{$basic_info->phone_no}}"><i class="far fa-phone"></i> Mob: {{$basic_info->phone_no}}</a></p>
                </div>
                <div class="col-md col-7"><p><a href="mailto:{{$basic_info->email}}"><i class="far fa-envelope"></i>
                    E-mail:
                    {{$basic_info->email}}</a></p></div>
            </div>
        </div>
    </div>
 
 <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-md-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{url('images/logo.png')}}" class="img-fluid" alt="ISM Surgicals"></a>
            <!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"-->
            <!--                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBackdrop"
                    aria-controls="offcanvasWithBackdrop">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}"><i class="fas fa-shopping-bag"></i> Shop Now</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown hover" aria-expanded="false">
                            <i class="fas fa-list"></i> Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             @foreach ($categories_global as $cat)
                                 <li><a class="dropdown-item" href="{{route('products')}}?category={{$cat->id}}">{{$cat->name}}</a></li>
                             @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}"><i class="fas fa-address-book"></i> Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
         aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header ">
            <a href="/" ><h5 class="offcanvas-title shadow-sm" id="offcanvasWithBackdropLabel">ISM <span class="c_surgical">SURGICALS</span>

            </h5></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('products')}}"><i class="fas fa-shopping-bag"></i> Shop Now</a>
                </li>
                <li>
                    <a class="nav-link" href="#" dropdown-toggle type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-list"></i> Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @foreach ($categories_global as $cat)
                        <li><a href="{{route('products')}}?category={{$cat->id}}" class="dropdown-item">{{$cat->name}}</a></li>
                        @endforeach
                        {{-- <li><a class="dropdown-item" href="#">Category2</a></li>
                        <li><a class="dropdown-item" href="#">Category3</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="{{route('contact')}}"><i class="fas fa-address-book"></i> Contact Us</a>
                </li>
            </ul>
        </div>

        <div class="footer-canvas">
            <p>&copy Copyright 2021 - {{Date('Y')}} || <a href="">Hammad Arshad</a></p>
        </div>
    </div>