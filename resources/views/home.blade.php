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
              <button type="submit"><img src="img/arrow-right.png" alt="" /></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="slide-item">
    <img src="img/slide/slide-1.jpg" alt="slide 1" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-2.jpeg" alt="slide 1" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-3.jpg" alt="slide 1" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-4.jpg" alt="slide 1" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-5.jpg" alt="slide 1" />
  </div>
  <div class="slide-item">
    <img src="img/slide/slide-6.jpg" alt="slide 1" />
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
