@extends('layouts.app')

@section('title', 'Contact Us')

@section('contents')

<div class="contact-us-container">
  <div class="contact-us-bg"></div>
  <div class="row">
    <div class="columns small-12">
      <h1>Contact Us</h1>
    </div>
  </div>
  <div class="row">
    <div class="columns small-12 medium-6 large-4">
      <p class="contact-form-sub-text">
        Email us with any questions. We are happy
        to answer your questions and set up a meeting
        with you.
      </p>
      <div class="contact-form">
        <div class="contact-us-arrow"></div>
        <form class="" action="index.html" method="post">
          <div class="row">
            <div class="columns small-12">
              <input type="text" name="name" placeholder="Name">
            </div>
          </div>
          <div class="row">
            <div class="columns small-12">
              <input type="text" name="email" placeholder="Email address">
            </div>
          </div>
          <div class="row">
            <div class="columns small-12">
              <textarea name="message" rows="7" cols="40" placeholder="Type a message..."></textarea>
            </div>
          </div>
          <div class="row">
            <div class="columns small-12">
              <script src="https://www.google.com/recaptcha/api.js" async defer></script>
              <div class="g-recaptcha" data-sitekey="6Le1LwgUAAAAAI0sfM3xUAzJJ17Gs0H1m-oWO_vf" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
            </div>
            <div class="columns small-12">
              <input type="submit" name="name" value="Send">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="columns medium-6 large-7 large-offset-1">
      <div class="row">
        <div class="columns small-5">
          <h4>Login Service Corp</h4>
          <span>
            Fort Lauderdale<br>
            Executive Airport - FKXE<br>
            PO BOX 772606, <br>
            Coral Springs, <br>
            FL 33077
          </span>
        </div>
        <div class="columns small-7">
          <p>
            Below you can find contact info and a quick roadmap to get in our office.
          </p>
          <p>
            Tel.: 954.235.0693<br>
            Email: <a href="mailto:info@loginsvc.com?Subject=Login Service" target="_top">info@loginsvc.com</a><br>
            Live Chat: <a href="#">Connect now</a>
          </p>
          <p>
            Please use the contact form on the left side if you have any questions or requests concerning our services.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="columns small-12">
          <iframe
            width="100%"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD-nwfdRODbIw8GhghZxcVeW8-q8LAa7do&q=Achieve+Without+Borders,+Inc." allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
