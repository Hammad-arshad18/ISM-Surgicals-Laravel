@extends('layout.master')
@push('title')
    <title>ISM Surgicals - Contact US </title>
@endpush
@section('main-content')

<section class="contact-us">
    <div class="container">
        <div class="form-heading">
            <h1>Contact Us</h1>
        </div>
        <div class="row">
            <div class="col-md align-self-center text-center order-md-0 order-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107712.90766818172!2d74.3929717132843!3d32.47193308484005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eeb975f52458f%3A0x2f1a7608ff57ec69!2sISM%20Surgicals!5e0!3m2!1sen!2s!4v1662835883267!5m2!1sen!2s" width="100%" height="450"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md order-md-1 order-0">
                <div id="success-msg"></div>
                <form action="{{route('contact')}}" id="contactForm" method="post" class="user-select-none" autocomplete="off">
                    @csrf
                    <label for="uname" class="form-text">Full Name</label>
                    <input type="text" class="form-control" name="name" id="uname" value="{{old('name')}}" 
                           placeholder="Hammad Arshad" required>
                           @error('name')
                               <span style="display: block" class="text-danger">{{$message}}</span>
                           @enderror       
                    <label for="uemail" class="form-text">Email</label>
                    <input type="text" class="form-control" name="email" id="uemail" value="{{old('email')}}" 
                           placeholder="xyz@example.com" required>
                              @error('email')
                               <span style="display: block" class="text-danger">{{$message}}</span>
                              @enderror  
                    <label for="uphone" class="form-text">Phone No</label>
                    <input type="text" class="form-control" name="phone" id="uphone" value="{{old('phone')}}" 
                           placeholder="xxx-xxxxxxx" required>
                              @error('phone')
                               <span style="display: block" class="text-danger">{{$message}}</span>
                           @enderror  
                    <label for="comment" class="form-text">Comment</label>
                    <textarea  name="comment" id="comment" required cols="30" rows="4" class="form-control" value="{{old('comment')}}" placeholder="Enter Your Queries/Reviews"></textarea>
                      @error('comment')
                               <span style="display: block" class="text-danger">{{$message}}</span>
                           @enderror  
                    <input type="checkbox" name="agreement" class="form-check-input" id="agreement">
                    <label for="agreement" class="form-check-label">Do You Want To Submit This Form</label>
                    <div class="submit-btn">
                        <button type="submit" id="contact-submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@push('js_custom')
    <script>

    $(document).ready(function () {

        $("#contact-submit").on('click', function (e) {
            // alert("Hello World");
            const name = $("#uname").val();
            const email = $("#uemail").val();
            const phone = $("#uphone").val();
            const comment = $("#comment").val();
            if (name == "" || email == "" || phone == "" || comment == "") {
                swal("Please Fill All The Fields To Submit Form!",{
                    icon: "error",
                });
                   $(window).scrollTop(0);
            } else {
                        swal("Your Form Has Been Submitted Successfully", {
                            icon: "success",
                        });
            }
         
        })
    })
</script>
@endpush

@endsection