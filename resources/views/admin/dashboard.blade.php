@extends('admin.adminLayout')

@push('admin-title')
    Dashboard
@endpush


@section('admin-main')
    <section class="db-tables">
        <div class="container">
            <h1 class="text-center mb-3">DASHBOARD</h1>
            <div class="row justify-content-center">
                <div class="col-md-3 col-10">
                    <a href="{{route('admin.list.products')}}">
                        <div class="whole-column">
                             <div class="image-portion">
                                <img src="{{url('')}}/images/products.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="details-portion">
                                    <h3 class="heading">Products</h3>
                            </div>
                        </div>
                    </a>
                </div>
               
                <div class="col-md-3 col-10">
                    <a href="{{route('admin.list.categories')}}">
                        <div class="whole-column">
                             <div class="image-portion">
                                <img src="{{url('')}}/images/categories.jpg" alt="Image" class="img-fluid">
                            </div>
                             <div class="details-portion">
                                    <h3 class="heading">Categories</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 col-10">
                    <a href="{{route('admin.update.info')}}">
                        <div class="whole-column">
                             <div class="image-portion">
                                <img src="{{url('')}}/images/info.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="details-portion">
                                <h3 class="heading">Info</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@include('layout.footer')

@endsection
    
