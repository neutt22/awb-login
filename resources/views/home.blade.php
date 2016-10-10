@extends('layouts.app')

@section('title', 'Home')

@section('contents')

<div class="carousel-container">
  <div class="row align-center">
    <div class="columns small-12 medium-10 large-8">
      <div class="search-container">
        <form class="search-form" action="index.html" method="post">
            <span></span>
            <input type="text" name="q" placeholder="Enter part number...">
          <input type="submit" value="Search">
        </form>
      </div>
    </div>
    <div class="columns small-12 medium-10 large-8">
      <span class="example-search">Examples: AE706100-1, AE706477-24, AE70644-14</span>
    </div>
    <div class="columns small-12 medium-12 large-8 title">
      <h1>Welcome to LogIn</h1>
      <p>
        The online tool to search, buy, and sell aircraft parts.
      </p>
    </div>
  </div>

  <div class="slide-item">
    <img src="img/slide/slide-1.jpg" alt="slide 1" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-2.jpeg" alt="slide 2" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-3.jpg" alt="slide 3" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-4.jpg" alt="slide 4" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-5.jpg" alt="slide 5" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-6.jpg" alt="slide 6" />
  </div>
</div>
<div class="hero-footer">
  <div class="row">
    <div class="columns small-12">
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</span>
    </div>
  </div>
</div>


@include('home-products')

<div class="explore-container">
  <div class="row">
    <div class="columns small-12">
      <header>
        <h1>EXPLORE</h1>
        <img src="img/plane.png" alt="plane" />
      </header>
    </div>
  </div>
  <div class="membership">
    <div class="row">
      <div class="columns large-6">
        <h3>MEMBERSHIP BENEFITS</h3>
        <ul>
          <li>List your inventory to ship within 48 hours</li>
          <li>Sell all your inventory easily without increasing your personnel</li>
          <li>Ability to list your desire inventory and increase demand</li>
          <li>24/7 Customer support by phone, email and chat</li>
          <li>Create your own credit card services per transaction</li>
          <li>Complementary 3 users per account</li>
        </ul>
        <div style="text-align: center;">

          <div class="price">
            <div></div>
            <div>
              <span>$327</span><span>.00</span>
            </div>
            <h4>MONTHLY FEE</h4>
          </div>
          <div class="price">
            <div></div>
            <div>
              <span>$1,000</span><span>.00</span>
            </div>
            <h5>Initiation fee applies only to entities selling aircraft parts to the open market for first time.</h5>
          </div>
        </div>
      </div>
      <div class="columns large-6 align-self-middle">
        <p>
          Members glide on existing account for support<br> on all sale processes.
        </p>
        <div class="sign-up">
          <a href="/register">SIGN ME UP</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="events">
  <div class="row">
    <div class="columns large-4">
      <h1>Upcoming Events</h1>
      <ul>
        <li>
          <a target="_blank" href="http://www.sun-n-fun.org/sun-n-fun-intl-fly-in-expo/">
            <div class="row">
              <div class="columns small-3">
                <div class="event-date">
                  <span>4 - 9</span><br>
                  <span>OCT '17</span>
                </div>
              </div>
              <div class="columns small-9">
                <h3>SUN 'n FUN Int'l</h3>
                <span>LAKELAND UNDER REGIONAL AIRPORT</span>
              </div>
            </div>
          </a>
        </li>
        <li>
          <a target="_blank" href="https://www.nbaa.org/events/date/">
            <div class="row">
              <div class="columns small-3">
                <div class="event-date">
                  <span>14 - 16</span><br>
                  <span>FEB '17</span>
                </div>
              </div>
              <div class="columns small-9">
                <h3>NBAA 2017</h3>
                <span>MIAMI, FL</span>
              </div>
            </div>
          </a>
        </li>
        <li>
          <a target="_blank" href="https://www.eaa.org/en/airventure">
            <div class="row">
              <div class="columns small-3">
                <div class="event-date">
                  <span>14 - 16</span><br>
                  <span>FEB '17</span>
                </div>
              </div>
              <div class="columns small-9">
                <h3>OSHKOSH 2017</h3>
                <span>OSHKOSH, WI</span>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>


@endsection

@section('custom-js')

<script>

  $(document).ready(function (){

    var currentIndex = 0;
    var items = $('.carousel-container .slide-item');
    var itemLen = items.length;

    // Auto slide that triggers the cycle function
    var autoSlide = setInterval(function (){
      // Increment by 1
      currentIndex += 1;

      // Error checking
      if(currentIndex > itemLen - 1) currentIndex = 0;

      //Execute
      cycle();
    }, 2000);

    // Toggle each div to show
    function cycle() {
      // Get current index
      var item = $('.carousel-container .slide-item').eq(currentIndex);

      // Hide all images
      items.each(function(){
        $(this).css('opacity', 0);
      });

      // Show selected image
      item.css('opacity', 1);
    }

  });

</script>

@endsection
