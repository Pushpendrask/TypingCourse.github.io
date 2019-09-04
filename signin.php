<!doctype html>
<html>
	<head>
		<title></title>
				 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body class="s">
<?php include 'header.php';?>

<div class="container">
<div class="login-box">
	<div class="row">
		
		<div class="col-lg-6 col-md-6 col-12 login-left">
			<h2>Signin Here</h2>
				<form method="post" action="validation.php" >
					<div class="form-group">
						<label>Username</label>
							<input type="text" name="user" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Password</label>
							<input type="password" name="password" class="form-control" required />
					</div>
				<input type="submit" value="signin" class="btn btn-primary">
				</form>
		</div>
		<div class="col-lg-6 col-md-6 col-12 login-right">
			<h2>Register Here</h2>
				<form method="post" action="register.php" >
					<div class="form-group">
						<label>Username</label>
							<input type="text" name="user" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Mobile No.</label>
							<input type="text" name="mobile" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Password</label>
							<input type="password" name="password" class="form-control" required />
					</div>
				<input type="submit" value="Register" class="btn btn-primary">
				</form>
		</div>
	</div>
</div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
 <script src="javascript.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php include 'footer.php';?>
  </body>
  </html>