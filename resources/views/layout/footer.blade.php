<!--Footer Portion-->
    <section class="footer-p">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 offset-md-1">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="{{route('home')}}"><i class="far fa-chevron-right"></i> Home</a></li>
                        <li><a href="{{route('contact')}}"><i class="far fa-chevron-right"></i> Contact us</a></li>
                        <li><a href="{{route('products')}}"><i class="far fa-chevron-right"></i> Shop</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 offset-md-1">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="{{$basic_info->facebook}}" target="_blank"><i class="far fa-chevron-right"></i> Facebook</a></li>
                        <li><a href="{{$basic_info->instagram}}" target="_blank"><i class="far fa-chevron-right"></i> Instagram</a></li>
                        <li><a href="{{$basic_info->twitter}}" target="_blank"><i class="far fa-chevron-right"></i> Twitter</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 offset-md-1">
                    <h4>Contact us</h4>
                    <ul>
                        <li><a><i class="far fa-chevron-right"></i> {{$basic_info->address}}</a></li>
                        <li><a href="tel:+923328432678"> <i class="far fa-chevron-right"></i> Hammad Arshad</a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/hammad-arshad18/"><i class="far fa-chevron-right"></i> Developer Contact</a></li>
                    </ul>
                </div>

            </div>
            <div class="text-center copyright-portion">
                <p>&copy; Copyright 2018 - {{Date("Y")}} - ISM SURGICALS</p>
            </div>
        </div>
    </section>

</div>