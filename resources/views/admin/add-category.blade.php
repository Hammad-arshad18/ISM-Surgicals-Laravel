@extends('admin.adminLayout')
@push('admin-title')
    Add Category
@endpush

@section('admin-main')

<section class="basic-info">
    <div class="container">
        <h1 class="text-center mb-3">ADD PRODUCT</h1>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{url('')}}/admin/add/category" method="post">
                    @csrf
                    <label for="productname" class="form-text">Name</label>
                    <input type="text" class="form-control" name="name" id="productname" value="" 
                        placeholder="Category Name" required>
                    <label for="slug" class="form-text">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" 
                    placeholder="Slug" disabled required>
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