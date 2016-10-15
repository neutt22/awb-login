<div class="menu-container">
  <div class="top-menu">
    <div class="row">
      <div class="columns small-12">
        <ul>
          <li><a href="/explore">EXPLORE</a></li>
          <li><a href="/about-us">ABOUT US</a></li>
          <li><a href="/contact-us">CONTACT US</a></li>
          <li><a href="#">ENG / USD</a></li>
        </ul>
      </div>
    </div>
  </div>
  <nav>
    <div class="row">
      <div class="columns small-12">
        <a href="/"><img class="logo" src="img/logo.png" alt="logo" /></a>
        <ul>
          <li>
            <a href="/">HOME</a><span class="home"></span>
          </li>
          <li>
            <span class="get-support">GET SUPPORT</span>
            <div class="sub-menu">
              <ul>
                <li><span class="live-chat">Live Chat</span></li>
                <li><span class="telephone">954.235.0693</span></li>
                <li><span class="email">info@loginsvc.com</span></li>
              </ul>
            </div>
          </li>
          <li>
            @if( Auth::check() )
              <a href="/dashboard">MY ACCOUNT</a>
              <span class="my-account"></span>
              <div class="sub-menu">
                <ul>
                  <li><a href="/dashboard">Dashboard</a></li>
                  <li><a href="#">History</a></li>
                  <li><a href="#">Settings</a></li>
                  <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </div>
            @else
              <a href="/login">LOGIN</a>  / <a href="/register">REGISTER</a>
              <span class="my-account"></span>
            @endif
          </li>
          <li><a href="/cart"><img class="cart" src="img/cart.png" alt="cart" /><span>3</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  {{--
  <nav class="row menu">
    <div class="columns small-12 medium-5 large-7 logo">
      <a href="/"><img src="img/logo.png" alt="logo" /></a>
    </div>
    <div class="columns small-4 medium-3 large-2 align-middle m-util get-support">
      <div>
          <span>Get Support</span>
          <ul class="support-sub-menu">
            <li><a href="/live-chat">Live Chat <img src="img/live-chat-2.png" alt="live chat" /></a></li>
            <li><a href="/email">admin@loginsvc.com <img src="img/email.png" alt="email" /></a></li>
            <li><a href="/phone">954.235.0693 <img src="img/phone-2.png" alt="phone" /></a></li>
          </ul>
      </div>
    </div>
    <div class="columns small-4 medium-3 large-2 align-middle m-util my-account">
      <!-- <a href="/register"><span>My Account</span></a> -->
      <span><a href="/login">Login</a> / <a href="/register">Register</a></span>
    </div>
    <div class="columns small-4 medium-1 large-1 align-middle m-util my-cart">
      <a href="/cart"><img src="img/cart.png" alt="cart" /><span class="cart-notif">3</span></a>
    </div>
  </nav>
  --}}
</div>
