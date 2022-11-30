@extends('admin.adminLayout')

@push('admin-title')
    Categories
@endpush


@section('admin-main')

    <section class="list-items">
        <div class="container">
            <div class="add-item-btn">
                <a href="{{route('admin.add.categories')}}" class="btn btn-primary">Add Category</a>
            </div>

            <table class="table table-striped table-hover border">
                <thead>
                    <tr>
                        <th scope="col">Sr#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count_category=1;
                    @endphp
                    @foreach ($categories as $category)   
                    <tr>
                        <th>{{$count_category}}</th>
                        <td>{{$category->name}}</td>
                        <td><a class="delete-btn" href="{{route('admin.category.delete',['id'=>$category->id])}}">Delete</a></td>
                    </tr>
                    @php $count_category+=1; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    @include('layout.footer')
@endsection