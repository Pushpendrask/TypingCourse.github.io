<!doctype html>
<html>
	<head>
		<title>Typing</title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<?php include 'header.php';?>


<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Typing Course</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses.php">Courses</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="enroll.php">Enroll Now</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="signin.php"><button class="btn btn-primary btn-sm" value="Sign in">Sign in</button></a>
      </li>
   
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>-->

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <img src="images/enroll.jpg" class="img-fluid img-center"></img>
  </div>
</div>


<div class="w-50 m-auto">
<h2 class="text-center bg-dark text-info m-5 p-3">Enter Details</h2>

<form action="userinfo.php" method="post" class="mb-5">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Name" required />
	</div>

	  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Email"/>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password" required />
  </div>
  <div class="form-group">
    <label class="form-check-label">Mobile No.</label>
      <input class="form-control" type="text" name="mobile" autocomplete="off" placeholder="Mobile No." required /> 
    
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>


<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
 <script src="javascript.js"></script>
<?php include 'footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>