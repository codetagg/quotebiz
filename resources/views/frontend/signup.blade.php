@extends('frontend.layouts.master')
@section('styling')

@endsection
@section('content')
<section class="signup-area ptb-60">
  <div class="container">
    <div class="row justify-content-center d-flex">

      <div class="col-md-6">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {!!Session::get('message')!!}
        </div>
        @endif
        <div class="login-signup-header">
          <h2 class="text-center"><span class="dotsignup"></span> Complete the below form to get registered</h2>
        </div>
        <!-- <span class="social-error" style="display:none; color:red;">Please check I agree with terms and conditions</span> -->
        <div class="login-with-credentials">
          <div class="section-title">
                                  </div>
          <form class="signup-form" method="post" action="{{url('signup')}}" id="register-form">
            {{csrf_field()}}
            <div class="form-group">
              <label>First Name  <span class="steric">*</span></label>
              <input type="text" class="form-control" placeholder="Enter your first name" id="register-first-name" name="first_name" value="{{old('first_name')}}">
              <span class="text-danger">{{ $errors->first('first_name') }}</span>
            </div>
            <div class="form-group">
              <label>Last Name  <span class="steric">*</span></label>
              <input type="text" class="form-control" placeholder="Enter your last name" id="register-last-name" name="last_name" value="{{old('last_name')}}" required="">
              <span class="text-danger">{{ $errors->first('last_name') }}</span>
            </div>
            <div class="form-group">
              <label>Email <span class="steric">*</span></label>
              <input type="email" class="form-control" placeholder="Enter your email" id="register-email" name="email" value="{{old('email')}}" required="">
              <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>

          
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" class="form-control" placeholder="Enter your Phone" id="register-phone" name="phoneno" value="{{old('phoneno')}}">
              <span class="text-danger">{{ $errors->first('phoneno') }}</span>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" placeholder="Enter your Address" id="register-address" name="address" value="{{old('address')}}">
              <span class="text-danger">{{ $errors->first('address') }}</span>
            </div>
            <div class="col-md-6" style="padding: 0 15px 0 0;">
              <div class="form-group">
              <label>Country <span class="steric">*</span></label>
              <input type="text" class="form-control" placeholder="Enter your country" id="country"  name="country" value="{{old('country')}}" required="">
              <div id="message"></div>
            </div>
          </div>
            <div class="col-md-6" style="padding: 0 0 0 0;">
              <div class="form-group">
              <label>State <span class="steric">*</span></label>
                <select name="state" class="form-control"  required>
                      <option value="0">Select State</option>
                      @foreach (CityClass::states() as $state)
                          <option  value="{{ $state->name }}">{{ $state->name }}</option>
                      @endforeach


                  </select>
             
              <div id="message"></div>
            </div>
            </div>
            <div class="col-md-6" style="padding: 0 15px 0 0;">
              <div class="form-group">
              <label>City <span class="steric">*</span></label>
              <input type="text" class="form-control" placeholder="Enter your city" id="city"  name="city" value="{{old('city')}}" required="">
              <div id="message"></div>
            </div>
            </div>
              <div class="col-md-6" style="padding: 0 0 0 0;">
              <div class="form-group">
              <label>Zip Code <span class="steric">*</span></label>
              <input type="text" class="form-control" placeholder="Enter your zipcode" id="zipcode"  name="zipcode" value="{{old('zipcode')}}" required="">
              <div id="message"></div>
            </div>
            </div>
              <div class="form-group">
              <label>Password <span class="steric">*</span></label>
              <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password" value="" required="">
              <span class="text-danger">{{ $errors->first('password') }}</span>
            </div>
            <div class="form-group">
              <label>Re-Type Password <span class="steric">*</span></label>
              <input type="password" class="form-control" placeholder="Re-type your password" id="confirm_password" onkeyup="check();" name="password_confirmation" value="" required="">
              <div id="message"></div>
            </div>
            <button type="submit" class="btn btn-block bg-black">Create Account</button>
          </form>
          <p class="already-account">Already have an account?<a href="{{url('signin')}}"> Login</a></p>

    </div>
  </div>
  </div>
  </div>

</section>
@endsection
@section('script')
@endsection
