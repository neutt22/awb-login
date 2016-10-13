@extends('layouts.app')

@section('title', 'Registration')

@section('contents')

<div class="row align-center">
  <div class="columns small-12 medium-11 large-8 registration">
    <h1>Register</h1>
    @foreach($errors->all() as $err)
      {{ $err }}
    @endforeach
    <p>Lorem ipsum dolor sit amed, consectetur elit.</p>
    <div class="form-container">
      <div class="registration-arrow"></div>
      <form id="registration" class="" action="{{ url('/register') }}" method="POST">
        {{ csrf_field() }}
        <div class="row align-center">
          <div class="columns small-12 medium-6">
            <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required>
          </div>
          <div class="columns small-6 medium-3">
            <input type="radio" name="type" value="buyer" id="buyer" checked><label for="buyer">I'm a buyer</label>
          </div>
          <div class="columns small-6 medium-3">
            <input type="radio" name="type" value="seller" id="supplier"><label for="supplier">I'm a supplier</label>
          </div>
        </div>
        <div class="row">
          <div class="columns small-12 medium-3">
            <input type="text" name="first_name" placeholder="First name" value="{{ old('first_name') }}" required>
          </div>
          <div class="columns small-12 medium-3">
            <input type="text" name="middle_name" placeholder="Middle name" value="{{ old('middle_name') }}" required>
          </div>
          <div class="columns small-12 medium-6">
            <input type="text" name="last_name" placeholder="Last name" value="{{ old('last_name') }}" required>
          </div>
        </div>
        <div class="row">
          <div class="columns small-12 medium-3 small-order-3">
            <input type="text" name="company" placeholder="Company">
          </div>
          <div class="columns small-12 medium-3 small-order-2">
            <input type="text" name="job_title" placeholder="Job Title">
          </div>
          <div class="columns small-12 medium-6 small-order-1 medium-order-3">
            <div id="setup-call-field" style="display: none;">
              <i><span style="margin-right: 10px;">Setup a call: </span></i>
              <input type="date" id="call-date" name="supplier_call_date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" style="width: 65%;">
            </div>
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 medium-6">
            <input type="text" name="address_1" placeholder="Address 1" value="{{ old('address_1') }}" required>
          </div>
          <div class="columns small-12 medium-6">
            <input type="text" name="address_2" placeholder="Address 2" value="{{ old('address_2') }}">
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 medium-6">
            <input type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}">
          </div>
          <div class="columns small-12 medium-6">
            <input type="text" name="company_phone_number" placeholder="Company phone number" value="{{ old('phone_work') }}">
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 medium-6">
            <div class="row">
              <div class="columns small-12">
                <input type="password" name="password" placeholder="Password" required>
              </div>
              <div class="columns small-12">
                <input type="password" name="password_confirmation" placeholder="Re-password" required>
              </div>
            </div>
          </div>
          <div class="columns small-12 medium-6">
            <textarea name="comments" rows="4" cols="40" placeholder="Your comments..."></textarea>
          </div>
          <div class="columns small-12">
            {{-- {!! app('captcha')->display(); !!} --}}
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <div class="g-recaptcha" data-sitekey="6Le1LwgUAAAAAI0sfM3xUAzJJ17Gs0H1m-oWO_vf" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 tac">
            <input type="checkbox" name="agree" value="yes" id="agree"><label for="agree">I agree to the <a href="/terms-and-conditions">Terms of use</a>.</label>
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 medium-5 large-4">
            <input type="submit" name="submit" value="Create an account">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row align-center">
  <div class="columns small-12 medium-8 login-now">
    <h1>Already signed up? <a href="/login">Login now!</a></h1>
  </div>
</div>

<div class="" style="width: 40%; margin: auto; border-bottom: 1px solid #ccc;"></div>

<div class="row align-center download-apps">
  <div class="columns small-12">
    <h1>Download our apps:</h1>
  </div>
  <div class="columns small-6 medium-3">
    <a href="#"><img src="img/app-store.png" alt="app-store" /></a>
  </div>
  <div class="columns small-6 medium-3">
    <a href="#"><img src="img/play-store.png" alt="app-store" /></a>
  </div>
</div>

@endsection

@section('custom-js')
<script>
  $(document).ready(function() {
    $('input[name="type"]').click(function() {
      $('#setup-call-field').toggle();
    });
  });
</script>
@endsection
