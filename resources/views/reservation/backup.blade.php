@extends('layouts.app')

@section('title')
    Gallery of Photos of Casa De Tobias Mountain Resort - Contact Us
@endsection

@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Casa de Tobias</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="assets/css/jquery-ui-1.12.1.css">
  <link rel="stylesheet" href="css/sweetalert.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <div class="row"><br /><br />
        <div class="col-md-2"></div>
        <div class="col-md-8 .offset-md-2">
          <div class="box box-primary">
            <div class="box-header with-border"><center>
              <h1 class="box-title">Guest Information</h1></center>
            </div>

              <div class="box-body" onpaste="return false">
                <form action="invoice.php">


                  <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="date">First Name</label>
                      <input type="text" name="fname" class="form-control" onkeypress="return isAlphaKey(event)" id="fname" placeholder="First Name" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="date">Last Name</label>
                      <input type="text" name="lname" class="form-control" id="lname" onkeypress="return isAlphaKey(event)" placeholder="Last Name" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="date">Phone Number</label>

                        <div style="width:25%;" >
                          <input type="text" name="phonenumber" value="+639" tabindex="-1" style="cursor: context-menu;" class="form-control" readonly>
                        </div>
                        <div style="width:72%; margin: -34px 0px 0px 60px;">
                          <input type="text" name="phonenumber1" class="form-control" maxlength="9" onkeypress="return isNumberKey(event)" placeholder="Phone Number" id="phonenumber">
                        </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="date">Address</label>
                      <textarea name="address" id="address" autocomplete="off" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="date">E-Mail</label>
                      <input type="text" name="email" onblur="validateEmail(this);" class="form-control" id="email" placeholder="E-Mail" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="date">No. Room(s)</label>
                      <select name="nroom" class="form-control" id="newroom" required>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="date">Guest(s)</label>
                      <select name="guest" class="form-control" id="guest" required>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="date">Additional</label>
                      <select name="aguest" class="form-control" id="aguest">
                      </select>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="date">Senior(s)</label>
                      <select name="senior" class="form-control" id="senior">

                      </select>
                    </div>
                  </div>

                   <div class="col-md-3">
                    <div class="form-group">
                      <label for="date">Payment</label>
                      <select name="payment" class="form-control" required>
                        <option value="cash">Cash</option>
                        <option value="bankdep">Bank Deposit</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="date">Payment Type</label>
                      <select name="paymenttype" class="form-control" required>
                        <option value="full">Full Payment</option>
                        <option value="down">Down Payment</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12"><br /></div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </div>
                </form>
              </div>

          </div>
        </div>

      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->
<script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>

<script src="js/sweetalert.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
@endsection
