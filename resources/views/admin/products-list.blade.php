@extends('admin.adminLayout')

@push('admin-title')
    Products
@endpush


@section('admin-main')

    <section class="list-items">
        <div class="container">
            <div class="add-item-btn">
                <a href="{{route('admin.add.proudct')}}" class="btn btn-primary">Add Product</a>
            </div>

            <table class="table table-striped table-hover border">
                <thead>
                    <tr>
                        <th scope="col">Sr#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count_product=1;
                    @endphp
                    @foreach ($products as $product)   
                    <tr>
                        <th>{{$count_product}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category_id}}</td>
                        <td><a class="delete-btn" href="{{route('admin.product.delete',['id'=>$product->id])}}">Delete</a></td>
                    </tr>
                    @php $count_product+=1; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    @include('layout.footer')
@endsection