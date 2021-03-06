<div class="products-section">
  <div class="row">
    <div class="columns small-6 medium-9 product-header">
      <h1>Products</h1>
    </div>
    <div class="columns small-6 medium-3">
      <div class="sort-container">
        <div class="sort-cell">
          <span>Sort by: </span>
          <div>
            <span><a href="#">Relevance</a></span>
            <ul>
              <li><a href="#">Location</a></li>
              <li><a href="#">Price: High to Low</a></li>
              <li><a href="#">Price: Low to High</a></li>
              <li><a href="#">Rating: High to Low</a></li>
              <li><a href="#">Discount</a></li>
              <li><a href="#">Delivery Time</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="row small-collapse medium-uncollapse">

    @for($i = 0; $i < 12; $i++)
    <div class="columns small-6 medium-4 large-3">
      <div class="item-container">
        <div class="row">
          <div class="columns small-12 part-image">
            <img src="/img/logo.png" alt="item" />
          </div>
          <div class="columns small-12 part-number">
            <span>MS21921-8</span>
          </div>
          <div class="columns small-12 part-price">
            <span>$299.00</span>
            <div style="width: 80%; margin: auto; margin-top: 10px; border-bottom: 2px solid #696969;"></div>
          </div>
        </div>
        <div class="row">
          <div class="columns small-12 part-details">
            <table>
              <tr>
                <td>Description:</td>
                <td>Circuit Breaker</td>
              </tr>
              <tr>
                <td>Condition:</td>
                <td>New Surplus</td>
              </tr>
              <tr>
                <td>Model:</td>
                <td>N/A</td>
              </tr>
              <tr>
                <td>Manufacturer:</td>
                <td>PIAGGIO</td>
              </tr>
              <tr>
                <td>Core Deposit:</td>
                <td>N/A</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="columns small-12">
            <div class="add-to-cart">
              <button type="button" id="add-to-cart">ADD TO CART</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endfor
  </div>
  <div class="row align-center">
    <div class="columns small-12 medium-4 large-3">
      <div class="load-more">
        <div></div>
        <button type="button" id="load-more">LOAD MORE</button>
      </div>
    </div>
  </div>
</div>
