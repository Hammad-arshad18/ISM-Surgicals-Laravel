@extends('admin.adminLayout')
@push('admin-title')
    Info
@endpush

@section('admin-main')

<section class="basic-info">
    <div class="container">
        <h1 class="text-center mb-3">BASIC INFO</h1>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{url('')}}/admin/update/info" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email" class="form-text">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{$info->email}}" 
                                placeholder="Email Address" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-text">Phone</label>
                            <input type="text" class="form-control" name="phone_no" id="phone" value="{{$info->phone_no}}" 
                            placeholder="Phone" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="address" class="form-text">Address</label>
                            <input type="text" class="form-control" name="address" id="address" value="{{$info->address}}" 
                                placeholder="Address" required>
                        </div>
                        <div class="col-md-6">
                            <label for="facebook" class="form-text">Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="facebook" value="{{$info->facebook}}" 
                                placeholder="Facebook Link" required> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="instagram" class="form-text">Instagram</label>
                            <input type="text" class="form-control" name="instagram" id="instagram" value="{{$info->instagram}}" 
                                placeholder="Instagram Link" required>   
                        </div>
                        <div class="col-md-6">
                            <label for="twitter" class="form-text">Twitter</label>
                            <input type="text" class="form-control" name="twitter" id="twitter" value="{{$info->twitter}}" 
                                placeholder="Twitter Link" required>   
                        </div>
                    </div>
                    <label for="description" class="form-text">Description</label>
                <textarea  type="text" rows="5" class="form-control" name="description" id="description" 
                           placeholder="Description" required>{{$info->description}}</textarea>

                    <div class="submit-btn">
                        <button class="btn btn-danger">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('layout.footer')
@endsection