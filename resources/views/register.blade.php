<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register Account</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="login-logo">
      <a href="/login"><img src="/images/mini-logo.jpg" width="30%"></a>
    </div>
    <p class="login-box-msg">Register</p>

    @if(\Session::has ('success'))
      <div class="alert alert-success">
        <p>{{\success::get('success')}}</p>
      </div>
    @endif
    <!-- <form method="post" action="{{url('login')}}"> -->
    {!! Form::open(['url' => '/register/submit']) !!}
      <div class="form-group has-feedback">
        <!-- <input type="first" class="form-control" name="firstName" placeholder="Firstname" required> -->
        {{Form::text('firstName', '',['class'=> 'form-control has-feedback','placeholder' => 'Enter First Name'])}}
        <span class="glyphicon glyphicon-equalizer form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {{Form::text('lastName', '',['class'=> 'form-control','placeholder' => 'Enter Last Name'])}}
        <!-- <input type="last" class="form-control" name="lastName" placeholder="Lastname" required> -->
        <span class="glyphicon glyphicon-equalizer form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <!-- <input type="address" class="form-control" name="address" placeholder="Address" required> -->
        {{Form::text('address', '',['class'=> 'form-control','placeholder' => 'Enter Address'])}}
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <!-- <input type="email" class="form-control" name="email" placeholder="Email"> -->
        {{Form::text('email', '',['class'=> 'form-control','placeholder' => 'Enter email'])}}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <!-- <input type="text" class="form-control" name="username" placeholder="Username" required> -->
        {{Form::text('username', '',['class'=> 'form-control','placeholder' => 'Enter username'])}}
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <!-- <input type="password" class="form-control" name="password" placeholder="Password" required> -->
        {{Form::text('password', '',['class'=> 'form-control','placeholder' => 'Enter password'])}}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="radio" name="userType" value="Admin" required/> Admin <input type="radio" name="type" value="Receptionist"/> Receptionist
      </div>
        <div class="form-group">
          {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
        </div>
    <!-- </form> -->
    {!! Form::close() !!}

  </div>
</div>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
