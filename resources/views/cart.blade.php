@extends('layouts.app')

@section('title', 'Cart')

@section('contents')

<div class="row">
  <div class="columns small-12">
    <div class="cart-header">
      <div class="cart-bg"></div>
      <h1>My Cart</h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="columns small-12">
    <div class="continue-shopping">
      <a href="/">Continue Shopping</a>
    </div>
  </div>
</div>
<div class="row align-center">
  <div class="columns small-12">
    <div class="cart-container">
      <div class="cart-arrow"></div>
      <table>
        <tr>
          <th>PRODUCT</th>
          <th>PRICE</th>
          <th>QUANTITY</th>
          <th>TOTAL</th>
          <th></th>
        </tr>
        @for($i = 0; $i < 5; $i++)
          <tr>
            <td data-th="PRODUCT" class="co-col">
              <img src="http://lorempixel.com/200/20{{ $i }}/" alt="" />
              <div style="display: inline-block; vertical-align: middle;">
                <span><strong>COMPANY BRAND NAME</strong></span><br>
                <span><strong>MS21921-8</strong></span><br>
                <span style="font-size: 12px;">CIRCUIT BREAKER</span><br>
                <span style="font-size: 12px;">NEW SURPLUS</span><br>
              </div>
            </td>
            <td data-th="PRICE" >${{ 150 + ($i * 2)}}.20</td>
            <td data-th="QUANTITY" class="qty"><input type="number" min="1" id="qty" name="qty" required value="1"></td>
            <td data-th="TOTAL" >$599.40</td>
            <td data-th="DELETE" class="item-delete"><a href="#"><img src="img/close.png" alt="close" /></a></td>
          </tr>
        @endfor

      </table>
    </div>
  </div>
</div>

<div class="row">
  <div class="columns small-12 medium-4 small-order-3 medium-order-1">
    <div class="payment-methods">
      <h1>PAYMENT METHODS</h1>
      <a href="#"><img src="img/payment-options-colored.png" alt="payment options" /></a>
    </div>
  </div>
  <div class="columns small-12 medium-4 small-order-2 medium-order-2">
    <div class="need-assistance">
      <h1>NEED ASSISTANCE?</h1>
      <p>
        If you have any inquiries or need further
        assistance, please <strong><a href="/contact-us">Contact Us</a></strong>.
      </p>
    </div>
  </div>
  <div class="columns small-12 medium-4 small-order-1 medium-order-3">
    <div class="sub-total">
      <form class="" action="index.html" method="post">
        <span>SUBTOTAL</span>
        <span>$1,849.50</span>
        <input type="button" name="name" value="PROCEED TO CHECKOUT">
      </form>
    </div>
    <div class="checkout-notice">
      <span>By placing your order, you agree to LogIn's <a href="/privacy-policy">privacy notice</a> and <a href="/terms-conditions">conditions of use</a>.</span>
    </div>
  </div>
</div>

@endsection
