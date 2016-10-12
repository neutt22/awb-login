@extends('layouts.app')

@section('title', 'Checkout')

@section('contents')

  <div class="checkout-container">
    <div class="row">
      <div class="columns small-12">
        <h1>Checkout</h1>
      </div>
    </div>

    <form class="" action="index.html" method="post">
      <div class="row">
        {{-- BILLING AND SHIPPING INFO --}}
        <div class="columns small-12 medium-6 large-4">
          <div class="billing-shipping-info">
            <h3>Billing Information</h3>
            <p>
              Please enter your name and address exactly as they appear on your credit card statement.
            </p>
            <span>Required information</span>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-first-name" class="required">First Name:</label><br>
                <input id="billing-first-name" type="text" name="billing-first-name">
              </div>
            </div>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-middle-name" class="required">Middle Name:</label><br>
                <input id="billing-middle-name" type="text" name="billing-middle-name">
              </div>
            </div>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-last-name" class="required">Last Name:</label><br>
                <input id="billing-last-name" type="text" name="billing-last-name">
              </div>
            </div>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-address-1" class="required">Address 1:</label><br>
                <input id="billing-address-1" type="text" name="billing-address-1">
              </div>
            </div>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-address-2">Address 2:</label><br>
                <input id="billing-address-2" type="text" name="billing-address-2">
              </div>
            </div>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-city" class="required">City:</label><br>
                <input id="billing-city" type="text" name="billing-city">
              </div>
            </div>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-state" class="required">State:</label><br>
                <input id="billing-state" type="text" name="billing-state">
              </div>
            </div>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-zip-code" class="required">Zip Code:</label><br>
                <input id="billing-zip-code" type="text" name="billing-zip-code">
              </div>
            </div>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-country" class="required">Country:</label><br>
                <select class="" id="billing-country" name="billing-country">
                  <option value="us">United States</option>
                  <option value="ph">Philippines</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="columns small-12">
                <label for="billing-company">Company:</label><br>
                <input id="billing-company" type="text" name="billing-company">
              </div>
            </div>
            <div class="separator"></div>
            <h3>Shipping Information</h3>
            <input type="checkbox" id="same-as-billing" checked>
            <label for="same-as-billing">Same as Billing Information</label>
            <div class="shipping-content" style="display: none;">
              <p></p>
              <span>Required information</span>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-first-name" class="required">First Name:</label><br>
                  <input id="shipping-first-name" type="text" name="shipping-first-name">
                </div>
              </div>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-middle-name" class="required">Middle Name:</label><br>
                  <input id="shipping-middle-name" type="text" name="shipping-middle-name">
                </div>
              </div>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-last-name" class="required">Last Name:</label><br>
                  <input id="shipping-last-name" type="text" name="shipping-last-name">
                </div>
              </div>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-address-1" class="required">Address 1:</label><br>
                  <input id="shipping-address-1" type="text" name="shipping-address-1">
                </div>
              </div>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-address-2">Address 2:</label><br>
                  <input id="shipping-address-2" type="text" name="shipping-address-2">
                </div>
              </div>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-city" class="required">City:</label><br>
                  <input id="shipping-city" type="text" name="shipping-city">
                </div>
              </div>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-state" class="required">State:</label><br>
                  <input id="shipping-state" type="text" name="shipping-state">
                </div>
              </div>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-zip-code" class="required">Zip Code:</label><br>
                  <input id="shipping-zip-code" type="text" name="shipping-zip-code">
                </div>
              </div>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-country" class="required">Country:</label><br>
                  <select class="" id="shipping-country" name="shipping-country">
                    <option value="us">United States</option>
                    <option value="ph">Philippines</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="columns small-12">
                  <label for="shipping-company">Company:</label><br>
                  <input id="shipping-company" type="text" name="shipping-company">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="columns small-12 medium-6 large-4">
          <div class="row">
            <div class="columns small-12">
              {{-- SHIPPING METHOD --}}
              <div class="shipping-method">
                <h3>Shipping Method</h3>
                <p>
                  We offer varities of method to ship your items, please select one below.
                </p>
                <div class="row">
                  <div class="columns small-12">
                    <label for="shipping-method">Courier:</label><br>
                    <select class="" id="shipping-method" name="shipping-method">
                      <option value="fedex">FedEx</option>
                      <option value="ups">UPS</option>
                      <option value="usps">USPS</option>
                      <option value="dhl">DHL</option>
                    </select>
                  </div>
                </div>
                <div class="separator"></div>
                <div class="row">
                  <div class="columns small-12">
                    <label for="shipping-xptd-del-date">Expected Delivery Date:</label><br>
                    <input id="shipping-xptd-del-date" type="text" name="shipping-xptd-del-date" disabled>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns small-12">
              {{-- PAYMENT METHOD --}}
              <div class="payment-method">
                <h3>Payment Method</h3>
                <p></p>
                <span>Required information</span>
                <input id="paypal" type="radio" name="payment-method" value="paypal" checked>
                <label for="paypal">Paypal Express Checkout</label>
                <span><a target="_blank" href="https://www.paypal.com/ph/webapps/mpp/paypal-popup" class="what-is">What is Paypal?</a></span>
                <div class="row">
                  <div class="columns large-6 large-offset-1">
                    <div class="paypal">
                      <a href="#"><img src="img/paypal-button.png" alt="paypal button" /></a>
                    </div>
                  </div>
                </div>
                <input id="credit-card" type="radio" name="payment-method" value="cc">
                <label for="credit-card">Credit Card</label><img src="/img/cc.png" alt="credit cards" />
                <div class="row">
                  <div class="columns large-11 large-offset-1">
                    <label for="credit-card-type" class="required">Credit Card Type:</label>
                    <select class="" id="credit-card-type" name="credit-card-type">
                      <option value="visa">Visa</option>
                      <option value="master-card">MasterCard</option>
                      <option value="american-express">American Express</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="columns large-11 large-offset-1">
                    <label for="credit-card-number" class="required">Credit Card Number:</label><br>
                    <input id="credit-card-number" type="text" name="credit-card-number">
                  </div>
                </div>
                <div class="row">
                  <div class="columns large-6 large-offset-1">
                    <label for="card-month" class="required">Expiration Date:</label>
                    <select class="" id="card-month" name="card-month">
                      <option value="01">January</option>
                      <option value="02">February</option>
                    </select>
                  </div>
                  <div class="columns large-5 align-self-bottom">
                    <select class="" id="card-year" name="card-year">
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="columns large-12">
                    <div class="row">
                      <div class="columns small-6 large-offset-1">
                        <label for="security-code" class="required">Security Code:</label><br>
                        <input id="security-code" type="text" name="security-code">
                      </div>
                      <div class="columns small-5 align-self-middle">
                        <span><a target="_blank" href="https://www.paypal.com/ph/webapps/mpp/paypal-popup" class="what-is sec-code">What is this?</a></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="columns large-4">
          <div class="row">
            <div class="columns small-12">
              {{-- ORDER SUMMARY --}}
              <div class="order-summary">
                <h3>Order Summary</h3>
                <p>
                  You have <span class="cart-count">2</span> item(s) currently in your cart.
                </p>
                @for($i = 0; $i < 3; $i++)
                <table>
                  <tr>
                    <td><label>Product:</label></td>
                    <td><img src="img/logo.png" alt="product" /></td>
                    <td>
                      <span class="item"><strong>MS21921-8</strong> / NEW SURPLUS</span>
                    </td>
                  </tr>
                  <tr>
                    <td><label>Quantity:</label></td>
                    <td><span class="item">1</span></td>
                  </tr>
                  <tr>
                    <td><label>Price:</label></td>
                    <td><span class="item">$150.20</span></td>
                  </tr>
                </table>
                <div style="margin: 10px 0; border-bottom: 1px solid #c5c5c5"></div>
                @endfor
              </div>
            </div>
            <div class="columns small-12">
              {{-- TOTAL CHARGES --}}
              <div class="total-charges">
                <h3>Total Charges</h3>
                <p>
                  Total charges for this portion of your order
                </p>
                <div class="computation">
                  <div class="row">
                    <div class="columns small-9 subtotal">
                      <span><strong>SUBTOTAL:</strong></span>
                    </div>
                    <div class="columns small-3">
                      <span>$300.40</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="columns small-9 shipping">
                      <span><strong>SHIPPING:</strong></span>
                    </div>
                    <div class="columns small-3">
                      <span>$30.00</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="columns small-9 total">
                      <span><strong>TOTAL:</strong></span>
                    </div>
                    <div class="columns small-3">
                      <span>$330.40</span>
                    </div>
                  </div>
                  <div class="separator"></div>
                  <div class="row align-right">
                    <div class="columns small-8">
                      <input type="submit" value="PLACE ORDER">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="columns small-12">
              <p class="order-agree">
                By placing your order, you agree to Login's <a href="/privacy-policy">privacy note</a>
                and <a href="/terms-conditions">conditions of use</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

@endsection

@section('custom-js')

<script>
  $(document).ready(function() {

    $('#same-as-billing').click(function() {
      if($(this).is(':checked')){
        $('.shipping-content').css('display', 'none');
      }else{
        $('.shipping-content').css('display', 'block');
      }
    });

  });
</script>

@endsection
