<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="row" style="margin-top: 50px">
	<div class="container col-md-4 offset-md-4 shadow-lg p-3 mb-5 rounded">
	  <h2>Login</h2>
	  <form action="" method="post">
		<div class="form-group">
		  <label for="yourid">Your Phone:</label>
		  <input type="number" class="form-control" id="yourphone" placeholder="Enter your phone" name="phone">
		</div>
		<div class="form-group">
		  <label for="pwd">Password:</label>
		  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
		</div>
		<button type="submit" class="btn btn-info" name="button" value="login">Login</button>
		<a href="register.php" class="btn btn-info">Register</a>
	  </form>
	</div>
</div>

<?php 
include("checkLogin.php");
?>
</body>
</html>