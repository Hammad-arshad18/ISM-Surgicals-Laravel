@extends('layout.master')
@push('title')
    <title>ISM Surgicals - Product</title>
@endpush

@section('main-content')

    <section class="product-item">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-md-6 text-center align-self-center">
                    <img src="{{url('')}}/storage/{{$product[0]->image}}" alt="{{$product[0]->image}}" class="product-image">
                </div>
                <div class="col-11 col-md-6 align-self-center">
                    <p class="category">Category: {{$product[0]->category_id}}</p>
                    <h1 class="product-name">{{$product[0]->name}}</h1>
                    <p class="product-description">{{$product[0]->description}}</p>
                    <div class="get-in-btn text-end">
                        <button class="get-in-bulk btn btn-danger">Get In Bulk</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('js_custom')
    <script src="{{url('js/zoomsl.min.js')}}"></script>
    <script>
    $(document).ready(function () {
            $(".product-image").imagezoomsl({
                zoomrange: [2, 2]
            });
        });    
    </script>
@endpush