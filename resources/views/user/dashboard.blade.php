@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')

<div class="dashboard-container">
  <div class="row">
    <div class="columns large-12 profile-quick">
      <div class="row align-justify align-middle">
        <div class="columns large-2">
          <div class="profile-image">
            <img src="img/profile.jpg" alt="profile picture" />
            <h2>BANYAN AIR SERVICE</h2>
            <span>LAST UPDATE:</span><br>
            <span>04/02/2016</span>
          </div>
        </div>
        <div class="columns large-3">
          <div class="today-sales">
            <h1>TODAY SALES</h1>
            <span>$0.00</span>
          </div>
        </div>
        <div class="columns large-3">
          <div class="total-sales">
            <h1>TOTAL SALES</h1>
            <span>$123.00</span>
          </div>
        </div>
        <div class="columns large-3">
          <div class="today-sales">
            <h1>INVENTORY COUNT</h1>
            <span>79, 345</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="columns large-12 inventory-listing-container">
      <div class="header">
        <div class="row">
          <div class="columns large-2">
            <h2>Inventory Listing</h2>
          </div>
          <div class="columns large-2">
            <h2>Selected Items: <span>0</span></h2>
          </div>
          <div class="columns large-3 align-self-middle">
            <div class="listing-options">
              <ul>
                <li><a href="#">ADD</a></li>
                <li><a href="#">EDIT</a></li>
                <li><a href="#">DELETE</a></li>
                <li><a href="#">UPLOAD</a></li>
                <li><a href="#">PDF</a></li>
              </ul>
            </div>
          </div>
          <div class="columns large-2 align-self-middle">
            <div class="listing-search">
              <form class="" action="dashboard/listing/search" method="post">
                <input type="text" name="q" value="{{ old('/q') }}" placeholder="Search an item...">
              </form>
            </div>
          </div>
          <div class="columns large-3 align-self-middle">
            <div class="listing-sort-container">
              <span>Sort by: </span>
              <select class="listing" id="listing">
                <option value="part_no">Part No.</option>
                <option value="price">Price</option>
                <option value="qty">Qty.</option>
                <option value="cond">Cond.</option>
                <option value="desc">Desc.</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <table>
        <tr>
          <th><input type="checkbox" name="item" id="all" value="all"></th>
          <th>#</th>
          <th>Part No.</th>
          <th>Alt. Part No.</th>
          <th>Price</th>
          <th>Qty.</th>
          <th>Cond.</th>
          <th>Desc.</th>
          <th>Options</th>
        </tr>
        @for($i = 0; $i < 50; $i++)
        <tr>
          <td><input type="checkbox" name="item" id="1" value="1"></td>
          <td>{{ $i + 1 }}</td>
          <td>4596</td>
          <td></td>
          <td>$129.10</td>
          <td>58</td>
          <td>NEW</td>
          <td>LAMP</td>
          <td><span class="item-options"><a href="#">Update</a><a href="#">Remove</a></span></td>
        </tr>
        @endfor
      </table>
    </div>
  </div>

  <div class="row">
    <div class="columns large-12 inventory-upload">
      <form action="/dashboard/upload/csv" method="POST" enctype="multipart/form-data">
        <div class="row align-middle">
          <div class="columns large-2">
            <h2>Update Listing</h2>
          </div>
          <div class="columns large-10 download-link">
            <a href="/download">Download CSV template</a>
          </div>
        </div>
        <div class="row">
          <div class="columns large-3">
            <input type="radio" name="method" id="replace"><label for="replace">Replace</label>
            <input type="radio" name="method" id="add"><label for="add">Add</label>
          </div>
          <div class="columns large-9">
            <span>Select CSV file to upload:</span>
            <input type="file" name="csv" id="file_csv" accept=".csv">
            <input type="submit" value="Upload" class="danger">
          </div>
        </div>
      </form>
    </div>
  </div>

</div>

@endsection
