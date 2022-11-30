@extends('admin.adminLayout')
@push('admin-title')
    Add Product
@endpush

@section('admin-main')

<section class="basic-info">
    <div class="container">
        <h1 class="text-center mb-3">ADD PRODUCT</h1>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{url('')}}/admin/add/product" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="productname" class="form-text">Name</label>
                            <input type="text" class="form-control" name="name" id="productname" value="" 
                                placeholder="Product Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="slug" class="form-text">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" 
                            placeholder="Slug" disabled required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="address" class="form-text">Category</label>
                            <select class="form-control" name="category" id="category">
                                <option selected disabled>Select Category</option>
                                @foreach ($cat as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-text">Image</label>
                            <input type="file" accept="image/*" class="form-control" name="image" id="image" 
                                 required> 
                        </div>
                    </div>
        
                    <label for="description" class="form-text">Description</label>
                    <textarea  type="text" rows="5" class="form-control" name="description" id="description" 
                            placeholder="Description" required></textarea>

                    <div class="submit-btn">
                        <button class="btn btn-danger">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('layout.footer')
@endsection

@push('admin-js')
    <script>
        $(document).ready(function(){
            $("#productname").on('change',function(){
                valueProduct=$("#productname").val();
                valueProduct=valueProduct.toLowerCase().replace(" ","-");
                $("#slug").val(valueProduct);
            });
        });
    </script>
@endpush