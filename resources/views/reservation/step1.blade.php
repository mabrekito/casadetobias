@extends('layouts.app')

@section('title')
	Step 1 Reservation Casa De Tobias Mountain Resort
@endsection

@section('content')
<style>
  .step1{
    background-color: #f3f3f3;
    padding: 10px;
    text-align: left-bottom ;
    font-size: 35px;
    color: black;
  }
</style>
<div class="main-content">

</div>
<div class="jumbotron pads">
	<div class="rootwizard">
	  <div class="nav-inner">
	    <div class="container">
	      <ul class="nav nav-pills nav-fill">
	        <li class="nav-item"><a class="nav-link" href="/reservation/zerostep">Search</a></li>
	        <li class="nav-item"><a class="nav-link active" href="/reservation/step1">Select Room</a></li>
	        <li class="nav-item"><a class="nav-link" href="/reservation/booking">Enter Payment Details</a></li>
	        <li class="nav-item"><a class="nav-link" href="/reservation/zerostep">Confirmation</a></li>
	      </ul>
	    </div>
	  </div>
	</div>
</div>


<div class="main-content">
  <div class="container" id="bigkubo">
      <div class="step1">
        <h2>Big Kubo House</h2>
      </div>
    <div class="row">
      <div class="col-lg-6 justify-align-center">
          <img src="/images/bigkuboimg/bigkubo8.jpg" style="width:100%" class="hover-shadow cursor">
      </div>
      <div class="col-lg-6 justify-align-center">
        	<h2>Summary</h2>
        <ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
          <li>4 - 6 Person Capacity</li>
          <li>4 Bed(s)</li>
          <li>Family size</li>
          <li>2,000php per day</li>
        </ul>
        <a href="/rooms" class="btn btn-primary">Go Back</a>
        Rooms:
        <select name="Rooms">
					<option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
		</div>
  </div>
</div>

<div class="main-content">
  <div class="container" id="smallkubo">
      <div class="step1">
        <h2>Small Kubo House</h2>
      </div>
    <div class="row">
      <div class="col-lg-6 justify-align-center">
          <img src="/images/smallkuboimg/kubo3.jpg" style="width:100%" class="hover-shadow cursor">
      </div>
      <div class="col-lg-6 justify-align-center">
        	<h2>Summary</h2>
        <ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
          <li>4 - 6 Person Capacity</li>
          <li>4 Bed(s)</li>
          <li>Family size</li>
          <li>2,000php per day</li>
        </ul>
        <a href="/rooms" class="btn btn-primary">Go Back</a>
        Rooms:
        <select name="Rooms">
					<option value="0" selected>0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
		</div>
  </div>
</div>


<div class="main-content">
  <div class="container" id="clubhouse">
      <div class="step1">
        <h2>Small Kubo House</h2>
      </div>
    <div class="row">
      <div class="col-lg-6 justify-align-center">
          <img src="/images/dormitory/dormitory4.jpg" style="width:100%" class="hover-shadow cursor">
      </div>
      <div class="col-lg-6 justify-align-center">
        	<h2>Summary</h2>
        <ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
          <li>4 - 6 Person Capacity</li>
          <li>4 Bed(s)</li>
          <li>Family size</li>
          <li>2,000php per day</li>
        </ul>
        <a href="/rooms" class="btn btn-primary">Go Back</a>
        Rooms:
        <select name="Rooms">
					<option value="0" selected>0</option>
					<option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
		</div>
  </div>
</div>
<div class="main-content">
	<div class="container">
	  <div align="right">
	    <a href="/reservation/booking" class="btn btn-success">Next</a>
	  </div>
	</div>
</div>


@endsection
