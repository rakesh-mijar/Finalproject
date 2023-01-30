<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	if (!empty($Email) && !empty($Password)) {

		//read from database
		$query = "SELECT * FROM `admin` WHERE Email='$Email' and Password='$Password'";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['Password'] === $Password) {

					$_SESSION['Email'] = $user_data['Email'];
					header("Location: control.php");
					die;
				}
			}
		}
		echo "wrong username or password!";
	} else {
		echo "wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Login</title>
</head>

<body>
	<div class="container-fluid bg">
		<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
			<div class="container-fluid">
				<img src="mitelogo.png" alt="" width="60" height="40">
				<a class="navbar-brand" href="#"> EUPHORIA CLUBS</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home</a>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
									User
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="login.php">SignIN</a></li>
									<li><a class="dropdown-item" href="signup.php">SignUp</a></li>
								</ul>
							</div>
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
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container" action="admin.php" method="post">
					<h1 class="font-weight-bold text-center ">LogIn</h1>
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
			background-image: url(./images/ad.jpg);
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
	</style>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>