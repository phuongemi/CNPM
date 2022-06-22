<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="row" style="margin-top: 50px">
	<div class="container col-md-4 offset-md-4 shadow-lg p-3 mb-5 rounded">
	  <h2>Register</h2>
	  <form action="" method="post">
		<div class="form-group">
		  <label for="yourname">Your Name:</label>
		  <input type="text" class="form-control" id="yourname" placeholder="Enter your name" name="name">
		</div>
		<div class="form-group">
		  <label for="yourphone">Your Phone:</label>
		  <input type="text" class="form-control" id="yourphone" placeholder="Enter your phone" name="phone">
		</div>
		<div class="form-group">
		  <label for="pwd">Password:</label>
		  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
		</div>
		<div class="form-group">
		  <label for="pwdc">Confirm Password:</label>
		  <input type="password" class="form-control" id="pwdc" placeholder="Enter confirm password" name="passc">
		</div>
		<button type="submit" class="btn btn-info" name="button" value="register">Register</button>
	  </form>
	</div>
</div>
<?php 
include("saveRegister.php");
?>
</body>
</html>