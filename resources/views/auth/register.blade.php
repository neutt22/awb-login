@extends('layouts.app')

@section('title', 'Registration')

@section('contents')

<div class="row align-center">
  <div class="columns small-12 medium-11 large-8 registration">
    <h1>Register</h1>
    <p>Lorem ipsum dolor sit amed, consectetur elit.</p>
    <div class="form-container">
      <div class="registration-arrow"></div>
      <div class="row">
        <div class="columns small-12">
          @if(count($errors) > 0)
            <div class="error-container">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
      </div>
      <form id="registration" class="" action="{{ url('/register') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
          <div class="columns large-6">
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email address" required>
            <div class="row">
              <div class="columns large-6">
                <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First name" required>
              </div>
              <div class="columns large-6">
                <input type="text" name="middle_name" value="{{ old('middle_name') }}" placeholder="Middle name" required>
              </div>
            </div>
            <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last name" required>
            <input type="text" name="address_1" value="{{ old('address_1') }}" placeholder="Address 1" required>
            <input type="text" name="address_2" value="{{ old('address_2') }}" placeholder="Address 2">
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Password confirm" required>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <div class="g-recaptcha" data-sitekey="6Le1LwgUAAAAAI0sfM3xUAzJJ17Gs0H1m-oWO_vf" style="margin-top: 5px; transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
          </div>
          <div class="columns large-6">
            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone number" required>
            <input type="text" name="co_phone" value="{{ old('co_phone') }}" placeholder="Company phone number">
            <div class="row">
              <div class="columns large-6">
                <input type="text" name="company" value="{{ old('company') }}" placeholder="Company">
              </div>
              <div class="columns large-6">
                <input type="text" name="job_title" value="{{ old('job_title') }}" placeholder="Job title">
              </div>
            </div>
            <textarea name="comments" rows="3" cols="40" placeholder="Your comments..."></textarea>
            <div class="row">
              <div class="columns large-6">
                <input type="radio" name="type" value="buyer" id="buyer" checked><label for="buyer">I'm a buyer</label>
              </div>
              <div class="columns large-6">
                <input type="radio" name="type" value="seller" id="supplier"><label for="supplier">I'm a supplier</label>
              </div>
            </div>
            <div id="setup-call-field" style="visibility: hidden;">
              <span style="margin-right: 10px;">Setup a call: </span>
              <input type="date" name="supplier_call_date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" style="width: 65%;">
            </div>
            <div class="tac">
              <input type="checkbox" name="agree" value="true" id="agree"><label for="agree">I agree to the <a href="/terms-and-conditions">Terms of use</a>.</label>
            </div>
          </div>
        </div>
        <div class="row align-center">
          <div class="columns large-4">
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
      if($(this).val() == 'buyer') {
        $('#setup-call-field').css('visibility', 'hidden');
      } else {
        $('#setup-call-field').css('visibility', 'visible');
      }
    });
  });
</script>
@endsection
