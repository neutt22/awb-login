@extends('layouts.app')

@section('title', 'Home')

@section('contents')

<div class="carousel-container">
  <div class="row align-center">
    <div class="columns small-12 medium-10 large-8">
      <div class="search-container">
        <form class="" action="index.html" method="post">
          <div class="row">
            <div class="columns small-12 medium-9 large-10">
              <input type="text" name="q" placeholder="Enter part number...">
            </div>
            <div class="columns small-12 medium-3 large-2">
              <button type="submit"><img src="img/search.png" alt="" /></button>
            </div>
          </div>
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
