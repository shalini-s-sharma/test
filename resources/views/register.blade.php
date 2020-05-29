<!DOCTYPE html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <title>@yield('title')</title> -->
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <h2 class="text-center mb-4">Register</h2>
              <div class="auto-form-wrapper">
              <form method="POST" action="{{ route('register') }}">
                  @csrf
                <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="name" name="name">
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                    @error('name')
                      <span class="error">
                      {{ $message }}
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="email" class="form-control" placeholder="Email" name="email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                    @error('email')
                      <span class="error">
                      {{ $message }}
                      </span>
                    @enderror
                   
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="Password" name="password" id="password"  required autocomplete="new-password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                    @error('password')
                      <span class="error">
                      {{ $message }}
                      </span>
                    @enderror
                   
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"> 
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                    @error('confirm-password')
                      <span class="error">
                      {{ $message }}
                      </span>
                    @enderror
                  </div>
                  <div class="form-group d-flex justify-content-center">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> I agree to the terms </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button id="formSubmitUser" class="btn btn-primary submit-btn btn-block">{{ __('Register') }}</button>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Already have and account ?</span>
                    <a href="{{ url('login') }}" class="text-black text-small">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
    // $(document).ready(function(){
    //   $.ajaxSetup({
    //       headers: {
    //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //       }
    //   });
    //   $('#signUpForm').validate({
    //       rules:{
    //         name:{
    //           required:true,
    //         },
    //         email: {
    //           required:true,
    //           email:true
    //         },
    //         password:{
    //           required: true,
    //           minlength: 8
    //         },
    //         confirm_password: {
    //             required :true,
    //             equalTo : "#password"
    //           },
    //       },
    //       message:{
    //         name: { required: "This field is required.",},
    //         email: {  
    //                 required: "This field is required.",
    //                 email: "Please enter a valid email address."
    //         },
    //         password: {
    //             required: "This field is required.",
    //             minlength: "Password must be at least 8 characters long including an alphabet and a number."
    //         },
    //         confirm_password: {
    //             required :true,
    //             // equalTo : "#password"
    //           },
    //       },
    //       highlight: function (element) {
    //             $(element).closest('.form-group').removeClass('success').addClass('has-error control-label');
    //       },
    //       success: function (element) {
    //           element.addClass('valid').closest('.form-group').removeClass('has-error control-label').addClass('success');
    //       },
    //       submitHandler: function(form) {
    //         var formData = $('#signUpForm').serializeArray();
    //         var url = "{{ url('/register') }}";
    //         $.ajax({
    //           url:url,
    //           type:"POST",
    //           data:formData,
    //           success: function (response) {
    //             alert(response);
    //           }
    //         });

    //       }
    //     });

    // });
    </script>
  </body>
  <footer class="footer">
    <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">task manager</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
        </span>
    </div>
</footer>
 <!-- container-scroller -->
<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../assets/js/shared/off-canvas.js"></script>
<script src="../assets/js/shared/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../assets/js/demo_1/dashboard.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<!-- End custom js for this page-->
</html>