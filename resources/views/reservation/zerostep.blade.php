@extends('layouts.app')

@section('title')
	Step 1 Reservation Casa De Tobias Mountain Resort
@endsection

@section('content')
<div class="main-content">

</div>

<div class="jumbotron pads">
	<div class="rootwizard">
	  <div class="nav-inner">
	    <div class="container">
	      <ul class="nav nav-pills nav-fill">
	        <li class="nav-item"><a class="nav-link active" href="/reservation/zerostep">Search</a></li>
	        <li class="nav-item"><a class="nav-link" href="/reservation/step1">Select Room</a></li>
	        <li class="nav-item"><a class="nav-link" href="/reservation/booking">Enter Payment Details</a></li>
	        <li class="nav-item"><a class="nav-link" href="/reservation/zerostep">Confirmation</a></li>
	      </ul>
	    </div>
	  </div>
	</div>
</div>

<div class="container">
  <form class="jumbotron marge" method="POST/GET" action="/reservation/step1">
  		              	<div class="row">
  		                <div class="col-md-3">
  		                  <div class="form-group">
  		                    <label for="date">Check-in:</label>
  		                    <div class="form-field">
  		                      <i class="icon icon-calendar2"></i>
  		                      <input type="text" name="datein" id="datecheckin" class="form-control date" placeholder="Check-in date">
  		                    </div>
  		                  </div>
  		                </div>
  		                <div class="col-md-3">
  		                  <div class="form-group">
  		                    <label for="date">Check-out:</label>
  		                    <div class="form-field">
  		                      <i class="icon icon-calendar2"></i>
  		                      <input type="text" name="dateout" id="datecheckout" class="form-control date" placeholder="Check-out date">
  		                    </div>
  		                  </div>
  		                </div>
  		                <div class="col-md-2">
  		                  <div class="form-group">
  		                    <label for="adults">Adults</label>
  		                    <div class="form-field">
  		                      <i class="icon icon-arrow-down3"></i>
  		                      <select name="adult" id="adult" class="form-control">
                              <option value="0" selected>0</option>
  		                        <option value="1">1</option>
  		                        <option value="2">2</option>
  		                        <option value="3">3</option>
  		                        <option value="4">4</option>
  		                        <option value="5">5+</option>
  		                      </select>
  		                    </div>
  		                  </div>
  		                </div>
  		                <div class="col-md-2">
  		                  <div class="form-group">
  		                    <label for="children">Children</label>
  		                    <div class="form-field">
  		                      <i class="icon icon-arrow-down3"></i>
  													<select name="children" id="children" class="form-control">
                              <option value="0" selected>0</option>
  		                        <option value="1">1</option>
  		                        <option value="2">2</option>
  		                        <option value="3">3</option>
  		                        <option value="4">4</option>
  		                        <option value="5">5+</option>
  		                      </select>
  		                    </div>
  		                  </div>
  		                </div>
                      <div class="col-md-2 marge">
                        <input type="submit" href="/reservation/step1" value="Check Availability" class="btn btn-primary btn-block">
                      </div>
  		              </div>
  		            </form>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
  $( "#datecheckin" ).datepicker();
  } );
</script>
<script>
  $( function() {
  $( "#datecheckout" ).datepicker();
  } );
</script>
@endsection
