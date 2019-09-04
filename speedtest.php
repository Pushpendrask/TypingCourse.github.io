<html>
<head>
<title>SpeedTest</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

<?php include 'header.php';?>



<div id="startWindow">
			<div class="modalBox">
				<h1>Typing Test</h1>
				<p>It just takes a minute to test your typing speed! Timer will only start after you begin typing. It's a simple app which you can easily fool to get a good score.</p>
				<button id="startButton">Start Test</button>
			</div>
		</div>

		<div id="timer">
		</div>
<div class="container">
<nav aria-label="page">
  <ul class="pagination pagination-sm">
    <li class="page-item"><a class="page-link text-dark" href="test.php" tabindex="-1">Back to Test</a></li>
    <li class="page-item"><a class="page-link text-dark" href="logout.php">Logout</a></li>
    <!--<li class="page-item text-white"><a class="page-link" href="#">3</a></li>
	<li class="page-item text-white"><a class="page-link" href="#">4</a></li>
    <li class="page-item text-white"><a class="page-link" href="#">5</a></li>-->

  </ul>
</nav>
</div>
		<div id="wrapper">

		<div id="paraContainer">
			<p id="testPara"></p>
		</div>

		​<textarea id="textArea" name="textarea" rows="5" cols="50" onPaste="return false" placeholder="Timer will only start after you begin typing."></textarea>

		</div>

		<div id="newTestWindow">
			<div class="modalBox">
				<h1>Time's Up!</h1>
				<p id="finalScore"></p>
				<button id="newTestButton">Click to try again!</button>
			</div>
		</div>

			
		

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="test.js"></script>
	

<?php include 'footer.php';?>



</body>
</html>