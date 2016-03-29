<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>KPMG - AR Cloud</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/register.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
  </head>

  <body>

    <div class="container">
      <form class="form-signin" method="post">
        {!! csrf_field() !!}
      	<div class="form-signin-heading text-center">
      		<img src="img/login-logo.png">
      	</div>
        @if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul style="padding-left: 0 !important;" class="text-center">
							@foreach ($errors->all() as $error)
							  <li style="list-style: none;">{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
        <label for="inputName" class="sr-only">Full name</label>
        <input name="name" type="text" id="inputName" class="form-control" placeholder="Full name" autocomplete="off">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" autocomplete="off">
        <label for="inputPassword" class="sr-only">Create password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Create password" autocomplete="off">
        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input name="password_confirmation" type="password" id="inputPassword" class="form-control" placeholder="Create password" autocomplete="off">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Create Account</button>
      </form>

    </div> 
    <!-- /container -->
  </body>
</html>
