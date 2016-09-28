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
              <div style="display: inline-block">
                <span>COMPANY BRAND NAME</span><br>
                <span>Description content</span>
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
  <div class="columns small-12">
    <div class="checkout-header">
      <h1>Checkout</h1>
    </div>
  </div>
</div>
<div class="row align-center">
  <div class="columns small-12">
    <div class="checkout-container">
      <div class="checkout-arrow"></div>
      <div class="sub-total">
        <div class="row">
          <div class="columns small-6">
            <span>SUBTOTAL</span>
          </div>
          <div class="columns small-6">
            <span>$1243.56</span>
          </div>
        </div>
      </div>
      <div class="shipping">
        <div class="row">
          <div class="columns small-6">
            <span>SHIPPING</span>
          </div>
          <div class="columns small-6">
            <span><i>Free shipping</i></span>
          </div>
        </div>
      </div>
      <div class="total">
        <div class="row">
          <div class="columns small-6">
            <span><strong>TOTAL</strong></span>
          </div>
          <div class="columns small-6">
            <span><strong>$1234.56</strong></span>
          </div>
        </div>
      </div>
      <div class="checkout">
        <div class="row align-right">
          <div class="columns small-12 medium-4">
            <input type="submit" name="name" value="PROCEED TO CHECKOUT">
          </div>
        </div>
      </div>
      <div class="order-notice">
        <div class="row align-right">
          <div class="columns small-12">
            <span>
              By placing your order, you agree to LogIn's <a href="#">privacy notice</a> and <a href="#">conditions of use</a>.
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
