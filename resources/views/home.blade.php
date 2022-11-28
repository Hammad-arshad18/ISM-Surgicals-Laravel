@extends('layout.master')
@push('title')
    <title>ISM Surgicals - HomePage </title>
@endpush
@section('main-content')


<div class="main-content">

    <!--Slider Carousal-->
    <section class="slider-portion">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1_banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/2_banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/3_banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/4_banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/5_banner.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                <i class="fas fa-arrow-circle-left fa-2x"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                <i class="fas fa-arrow-circle-right fa-2x"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!--About ISM-->
    <section class="about-ism">
        <div class="container">
            <div class="text-center">
                <h1>About ISM</h1>
            </div>
            <div class="row">
                <div class="col-md" data-aos="fade-right">
                    <h3>Description</h3>
                    <p>
                        ISM Surgical is a group of younger professionals engaged in the manufacturing and export of
                        Surgical, Dental and Beauty Care Instruments. ISM Surgical serving valued business colleagues
                        all
                        over the world. Keeps continuous grip over the quality and service standards as we believe in
                        the
                        best, therefore striving every moment to improve every aspect.
                        To achieve the goals we provide our honorable clients quality products delivery within
                        stipulated
                        time limit ensured at any cost.
                        We assure you our best service at all time with top quality, best price and on time delivery.
                        Samples and prices can be obtained on demand.
                        Deliveries of the orders are ensured within time. Although this website doesnot cover all the
                        range
                        of our products yet it assures you that we can make every type of Surgical Instruments, So we
                        will
                        welcome your all inquiries, also for your required designs which have not been listed in this
                        website.
                        Thanking in advance for visiting our website.
                        Best Compliments From, ISM Surgical
                    </p>
                </div>
                <div class="col-md align-self-center" data-aos="fade-left">
                    <img src="images/about-image.png" alt="About Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!--Feature Products-->
    <section class="feature-products" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="text-center">
                <h1>Feature Products</h1>
            </div>
            
            
        {{-- <section class="container text-center">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item"><img src="images/Products/Surgical/Scissors/1176.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/s4.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Surgical/Scissors/1179.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Surgical/Scissors/1185.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Surgical/Scissors/1192.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Barber-Scissors-Shears/Professional-Barber/1005.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Barber-Scissors-Shears/Professional-Barber/1011_.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Barber-Scissors-Shears/Professional-Barber/1015.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Surgical/Scissors/1188.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Barber-Scissors-Shears/Professional-Barber/1001.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Surgical/Scissors/1186.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Surgical/Scissors/1190.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Barber-Scissors-Shears/Professional-Barber/1020.jpg" class="img-fluid" alt="Product"></div>
                        <div class="owl-item"><img src="images/Products/Barber-Scissors-Shears/Professional-Barber/1028.jpg" class="img-fluid" alt="Product"></div>
                    </div>
                </div>
            </div>
        </section> --}}

            <div class="row justify-content-center">
                @foreach ($products as $product)     
                <div class="col-md-2 shadow-sm">
                    <div class="product-image border border-2 text-center">
                        <img src="storage/{{$product->image}}" alt="Products" class="img-fluid home-product">
                    </div>
                    <p>{{$product->name}}</p>
                    <div class="view-details-btn">
                        <a href="{{route('products.item',['slug'=>$product->slug])}}" class="btn btn-outline-success">View Details</a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>



@endsection



@push('js_custom')
    <script>
        $(".owl-carousel").owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1000,
            autoplay: true,
            dots: true,
            pauseOnHover: false,

            responsive:{
                0:{
                    items:1,
                    nav:false,
                    dots: false,
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    loop:false
                }
            }
        });
    </script>
@endpush