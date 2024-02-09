@include('layouts.header')
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">



        <div class="row mt-5  vh-100">
            <div class="col-md-4">

            </div>
            <div class="col-md-4 ">
                <div class="text-center">
                <img src="{{ asset('assets/images/zebra_logo.PNG') }}" class="d-inline-block align-top" alt="Logo">
                <h3 class="section-title text-purple mt-5">Sign Up</h3>
                @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
                </div>

                <form action=""  method="post" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3 mt-5">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="first_name">
                    @if($errors->has("first_name")) <p style="color:red;font-size:14px;">{{ $errors->first('first_name') }}</p>@endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="last_name" >
                    @if($errors->has("last_name")) <p style="color:red;font-size:14px;">{{ $errors->first('last_name') }}</p>@endif
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"  name="email">
                    @if($errors->has("email")) <p style="color:red;font-size:14px;">{{ $errors->first('email') }}</p>@endif
                  </div>
                  <div class="mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1"  name="password">
                    @if($errors->has("password")) <p style="color:red;font-size:14px;">{{ $errors->first('password') }}</p>@endif
                  </div>
                  <div class="mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1"  name="password_confirmation">
                    @if($errors->has("password_confirmation")) <p style="color:red;font-size:14px;">{{ $errors->first('password_confirmation') }}</p>@endif
                  </div>
                  <div class="text-center">
                  <button type="submit" class="yellow-btn mt-4 ">Sign Up</button>
                </div>
            </form>
                <h3 class="small-link text-purple text-start mt-5">Already have a account ? <a href="{{url('sign-in')}}">Sign In</a></h3>
            </div>
            <div class="col-md-4">

            </div>
        </div>


    </div>
    </section>
@include('layouts.footer')
