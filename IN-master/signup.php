<?php
session_start();

include("connection.php");
//include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$USN = $_POST['USN'];
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	if (!empty($Name) && !empty($Email) && !empty($Password) && !is_numeric($Name)) {

		//save to database
		//$user_id = random_num(20);
		$query = "INSERT INTO `log` (`USN`,`Name`, `Email`, `Password`) VALUES ('$USN','$Name', '$Email', '$Password')";
		if ($query) {
			echo '<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Registered Succesfully</h4>
			<p>You Can Now LogIn</p>
			</div>';
		}

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="/login/app.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<title>Signup</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
		<div class="container-fluid">
			<img src="mitelogo.png" alt="" width="60" height="40">
			<a class="navbar-brand" href="#">EUPHORIA CLUBS</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">SignIn</a>
					</li>
				</ul>
			</div>
			<nav class="navbar navbar-light bg-light">
				<div class="container-fluid">
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</nav>
		</div>
	</nav>
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container" action="signup.php" method="post">
					<h1 class="font-weight-bold text-center ">SignUp</h1>
					<div class="form-group">
						<label for="USN">USN</label>
						<input type="text" name="USN" class="form-control" id="USN" placeholder="USN">
					</div>
					<div class="form-group">
						<label for="Name">Name</label>
						<input type="text" name="Name" class="form-control" id="Name" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="Email">Email</label>
						<input type="Email" name="Email" class="form-control" id="Email" placeholder="Email">
					</div>
					<div class="form-group mb-3">
						<label for="Password">Password</label>
						<input type="password" name="Password" class="form-control" id="Password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success btn-block" value="signup">Submit</button>
					<hr>

				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
	<style>
		* {
			color: #fff;
		}

		.bg {
			background: url(./images/cg1.png);
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 100vh;
		}

		h1 {
			color: black;
		}

		.form-container {
			border: 3px solid #fff;
			padding: 60px 40px;
			margin-top: 25vh;
			-webkit-box-shadow: 1px 6px 27px 11px rgba(0, 0, 0, 0.82);
			-moz-box-shadow: 1px 6px 27px 11px rgba(0, 0, 0, 0.82);
			box-shadow: 1px 6px 27px 11px rgba(0, 0, 0, 0.82);
		}

		.forgot-password {
			text-align: right;
			float: right;
			font-size: 15px;
			margin-top: 0.01em;
			font-size: medium;

		}
	</style>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>