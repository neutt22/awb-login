@extends('layouts.app')

@section('title', 'Login')

@section('contents')

<div class="row login-header">
  <div class="columns small-12">
    <div class="login-bg"></div>
    <h1>Login</h1>
    <p>Lorem ipsum dolor sit amed, consectetur elit.</p>
  </div>
</div>

<div class="row align-center">
  <div class="columns small-12 medium-6 large-4 login">
    <div class="login-container">
      <div class="login-arrow"></div>
      <form class="" action="index.html" method="post">
        <div class="row">
          <div class="columns small-12">
            <input type="text" name="email" placeholder="Email address">
          </div>
        </div>
        <div class="row">
          <div class="columns small-12">
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="row">
          <div class="columns small-12">
            <input type="checkbox" name="remember" id="remember"><label for="remember">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="columns small-12">
            <input type="submit" value="Sign In">
          </div>
        </div>
        <div class="row">
          <div class="columns small-12">
            <a href="#">Forgotten your password?</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row align-center">
  <div class="columns small-12 medium-8 login-now">
    <h1>No account yet? <a href="/register">Register now!</a></h1>
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