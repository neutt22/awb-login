@extends('layouts.app')

@section('title', 'Registration')

@section('contents')

<div class="row align-center">
  <div class="columns small-12 medium-9 large-8 registration">
    <div class="registration-bg"></div>
    <h1>Register</h1>
    <p>Lorem ipsum dolor sit amed, consectetur elit.</p>
    <div class="form-container">
      <div class="registration-arrow"></div>
      <form class="" action="index.html" method="post">
        <div class="row align-center">
          <div class="columns small-12 medium-6">
            <input type="text" name="email" placeholder="Email address">
          </div>
          <div class="columns small-6 medium-3">
            <input type="radio" name="type" value="buyer" id="buyer"><label for="buyer">I'm a buyer</label>
          </div>
          <div class="columns small-6 medium-3">
            <input type="radio" name="type" value="seller" id="supplier"><label for="supplier">I'm a supplier</label>
          </div>
        </div>
        <div class="row">
          <div class="columns small-12 medium-3">
            <input type="text" name="first_name" placeholder="First name">
          </div>
          <div class="columns small-12 medium-3">
            <input type="text" name="middle_name" placeholder="Middle name">
          </div>
          <div class="columns small-12 medium-6">
            <input type="text" name="last_name" placeholder="Last name">
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 medium-6">
            <input type="text" name="address1" placeholder="Address 1">
          </div>
          <div class="columns small-12 medium-6">
            <input type="text" name="address2" placeholder="Address 2">
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 medium-6">
            <input type="text" name="phone" placeholder="Phone number">
          </div>
          <div class="columns small-12 medium-6">
            <input type="text" name="phone_work" placeholder="Company phone number">
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 medium-6">
            <div class="row">
              <div class="columns small-12">
                <input type="password" name="password" placeholder="Password">
              </div>
              <div class="columns small-12">
                <input type="repassword" name="repassword" placeholder="Re-password">
              </div>
            </div>
          </div>
          <div class="columns small-12 medium-6">
            <textarea name="comments" rows="4" cols="40" placeholder="Your comments..."></textarea>
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 tac">
            <input type="checkbox" name="name" value="agree" id="agree"><label for="agree">I agree to the <a href="/terms-and-conditions">Terms of use</a>.</label>
          </div>
        </div>
        <div class="row align-center">
          <div class="columns small-12 medium-4">
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
