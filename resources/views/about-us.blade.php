@extends('layouts.app')

@section('title', 'About Us')

@section('contents')

<div class="about-us">
  <div class="row">
    <div class="columns small-12 medium-7">
      <h1>About Us</h1>
      <p>
        Login Services was founded to challenge a consistent shortage of aircraft parts,
        misinformation and lack of professionalism services in Florida and around the world.
        The Company’s founder noted that, while standard parts were easy to come by in the area,
        irregular pieces – from engine components to odds-and-ends – were harder to find in the area than at most major airports,
        several entities have critical inventory although is not publish to the market. Login Service developed an innovative
        online search engine to provide up front information and end user have ability to rate supplier.
      </p>
    </div>
    <div class="columns small-12 medium-5">
      <img class="jet" src="img/jet.png" alt="jet" />
      <img class="cloud" src="img/cloud.png" alt="cloud" />
      <img class="cloud-2" src="img/cloud.png" alt="cloud" />
    </div>
  </div>
  <div class="founder-section">
    <div style="border-bottom: 1px solid #333; width: 30%; margin: auto; opacity: .1;"></div>
    <div class="row align-middle">
      <div class="columns small-12 medium-3">
        <img class="founder" src="img/founder.jpg" alt="founder" />
      </div>
      <div class="columns small-12 medium-7">
        <p>
          Diana Hernandez has over 10 years of experience working in the aviation industry. Diana’st aviation expertise extends from technical knowledge to sales capabilities allowing her develop aircraft owners’ objectives and meet all airworthiness requirements. Ms. Hernandez’s combined passion, experience, knowledge, and professional network makes her naturally devoted to expand and enhanced aviation service around the world.
        </p>
      </div>
    </div>
    <div class="row align-middle">
      <div class="columns small-12 medium-3 founder-name">
        <span><strong>DIANA HERNANDEZ</strong>, FOUNDER</span>
      </div>
    </div>
  </div>
</div>
@endsection
