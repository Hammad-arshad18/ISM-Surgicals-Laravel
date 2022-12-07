@extends('layout.master')
@push('title')
    <title>ISM Surgicals - Cart</title>
@endpush


@section('main-content')
    
    <section class="list-items">
        <div class="container">
            <div class="add-item-btn">
                <a id="clear-cart-btn" class="btn btn-primary">Clear Cart</a>
            </div>

            <table class="table table-striped table-hover border">
                <thead>
                    <tr>
                        <th scope="col">SR#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="list-cart">
                    {{-- Will Load Dynamiclly --}}
                </tbody>
            </table>
        </div>
    </section>
    
@endsection


@push('js_custom')
    <script>
        loadItems=()=>{
            const productList=JSON.parse(localStorage.getItem('cart')) ?? [];
            listProducts="";
            let count=1;
            productList.forEach(product => {
                  listProducts+=`<tr>
                        <th>${count}</th>
                        <td>${product.name}</td>
                        <td>${product.category}</td>
                        <td>${product.category}</td>
                    </tr>`
                    count++;
            });
            $("#list-cart").html(listProducts);
        }
        updateTable=()=>{
            $("#list-cart").html('');
        }
        $(document).ready(function(){
            loadItems();
            $("#clear-cart-btn").on('click',function(){
                clearCart();
                updateTable();
            });
        });
    </script>
@endpush