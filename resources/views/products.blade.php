@extends('layout.master')
@push('title')
    <title>ISM Surgicals - Products </title>
@endpush
@section('main-content')


<div class="container-fluid">
    <!--Body Start-->
    <!--Online Shop-->
    <h1 class="text-center os-head">Online Shop</h1>
    <div class="online-shop">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-5 ">
                    <div class="categories container">
                        <h3>Categories</h3>
                        <h5>Products</h5>
                        <ul>
                            <li><a href="{{route('products')}}">All</a></li>

                            @foreach ($categories as $category)
                                <li id="{{$category->id}}"><a href="{{route('products')}}?category={{$category->id}}">{{$category->name}}</a> <!--<span>67</span>--></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7" id="c1">
                    <div class="row">
                         @foreach ($products as $product) 
                        <div data-aos="zoom-in-up" class="col-lg-3 shadow">
                            {{-- {{$product->get_category[0]->name}} --}}
                            <a href="{{$product->image}}" data-lightbox="image-1"><img src="{{$product->image}}" alt="Image" class="img-fluid"/></a>
                           <hr style="width: 90%; background-color: rgb(173, 173, 173); margin:10px auto;"/>
                            <div class="detail" style="float: left">
                                <h5>{{$product->name}}</h5>
                                @foreach ($product->category as $cat)
                                     <h6>{{$cat->name}}</h6>
                                @endforeach 
                            </div>
                            <div class="btn-sale" style="float: right">
                                <a href="{{route('products.item',['slug'=>$product->slug])}}" class="btn btn-success btn-sm">View</a>
                            </div> 
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="paginate d-flex justify-content-center">
                <ul>
                    <li><a href="{{$products->previousPageUrl()}}" class="left p-active"><i class="fas fa-caret-left"></i></a></li>
                        @for ($i=1;$i<=$products->lastPage();$i++)
                            <li><a href="{{$products->url($i)}}">{{$i}}</a></li>
                        @endfor
                    <li><a href="{{$products->nextPageUrl()}}" class="right p-active"><i class="fas fa-caret-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--Body End-->
</div>



@endsection