@extends('layout.master')
@push('title')
    <title>ISM Surgicals - Product</title>
@endpush

@section('main-content')

    <section class="product-item">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-md-6 text-center align-self-center">
                    <img id="product-image" src="{{$product[0]->image}}" alt="{{$product[0]->image}}" class="product-image">
                </div>
                <div class="col-11 col-md-6 align-self-center">
                    @foreach ($product[0]->category as $cat)
                    <p id="category" class="category">Category: {{$cat->name}}</p>
                    @endforeach
                    <h1 id="product-name" class="product-name">{{$product[0]->name}}</h1>
                    <p class="product-description">{{$product[0]->description}}</p>
                    <div class="get-in-btn text-end">
                        <input type="hidden" id="product-id" value="{{$product[0]->id}}">
                        <button id="bulk-btn" class="get-in-bulk btn btn-danger">Get In Bulk</button>
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

            // Add To Cart/Bulk Logic
            $("#bulk-btn").on('click',function(){
                const productId=$("#product-id").val();
                const productName=$("#product-name").html();
                const Category=$("#category").html();
                const productCategory=Category.replace("Category: ","")
                const ImageUrl=$("#product-image").attr('src');
                const productDetails={
                    'id':productId,
                    'name':productName,
                    'category':productCategory,
                    'image':ImageUrl,
                };
                const localStorageList=JSON.parse(localStorage.getItem('cart')) ?? [];
                const productsList=[
                    ...localStorageList,
                    productDetails
                ];
                if(localStorage.getItem('cart')!==null){
                    localStorageList.forEach(item => {
                        if(item.id==productDetails.id){
                            swal("Item Already Exist Cart",{
                                icon:"info"
                            });
                        }else{
                            localStorage.setItem('cart',JSON.stringify(productsList));
                            swal("Item Added To Cart",{
                                icon:"success"
                            });
                            cartUpdate();
                        }
                    });
                }else{
                    localStorage.setItem('cart',JSON.stringify(productsList));
                    swal(`${productDetails.name} Added To Cart`,{
                        icon:"success"
                    });
                    cartUpdate();
                }
        });    
    });    
    </script>
@endpush