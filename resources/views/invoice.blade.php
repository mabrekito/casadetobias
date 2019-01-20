<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invoice</title>
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
  <link rel="stylesheet" href="css/sweetalert.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="container">

<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
           CASA DE TOBIAS MOUNTAIN RESORT
          <small class="pull-right">Date: 16/01/19</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Casa de Tobias Mountain Resort</strong><br>
          Alibungbungan, Nagcarlan, Laguna<br>
          Phone: (02) 794 3471<br>
          Email: casadetobias@gmail.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong></strong><br>
        <br>
          Phone:
          Email:
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">

        <b>Check In:</b>
        <b>Check Out:</b>
        <hr />
        <p class="lead">Payment Methods:</p>

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->



    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-2">
      <p class="lead">Policy :</p>

      </div>
      <!-- /.col -->
      <div class="col-xs-8 col-xs-offset-2">
        <p class="lead">Room Details</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Rooms to Reserve:</th>
              <td>Per Night</td>
            </tr>
            <tr>
              <th></th>
              <td><b>₱ </b> For Nights(s)</td>
            </tr>
              <form method="POST">
              <td colspan="2" align="right"><b><input type="submit" class="btn btn-success" name="confirm" value="CONFIRM"></td>
              </form>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</div>
<script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="js/sweetalert.js"></script>

</body>
</html>
