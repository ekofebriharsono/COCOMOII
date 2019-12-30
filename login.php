<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description"
		content="This is a calculation website for determining the total price of a project before the project is tendered using Cocomo II">
	<meta name="keywords"
		content="COCOMO tool, COCOMO Suite tool, COCOMO, COCOMO II - Constructive Cost Model, COCOMO Suite of Constructive Cost Models, Expert COSYSMO - Systems Engineering Cost Model Risk Advisor, ODC COQUALMO - Orthogonal Defect Classification Constructive Quality Model, COSYSMO, COSYSMO and COCOMO Cost Models with Monte Carlo Risk Analysis, software cost estimation, systems cost estimation, cost estimation, Ray Madachy, Raymond Madachy">
	<meta name="Author" content="Eko Febri Harsono">

	<title>Login Page - COCOMO II</title>

	<link rel="shortcut icon" href="image/logo_stikom_warna.png" type="image/png">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<link rel="stylesheet" type="text/css" href="style/css/loginstyle.css">

</head>

<body>
	<div class="container">

		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
					<h6>COCOMO II</h6>
					<?php if(isset($_GET['pesan'])){
						$pesan = $_GET['pesan'];
						if($pesan == "failed"){ ?>
					<center>
						<h6>Username or password incorrect</h6>
					</center>
					<?php	} if ($pesan == "logout"){ ?>
					<center>
						<h6>Logout Successfully</h6>
					</center>
					<?php	} if ($pesan == "register_successfully"){ ?>
					<center>
						<h6>Register Successfully</h6>
					</center>
					<?php }
					}
					?>
				</div>
				<div class="card-body">
					<form action="proses_php/loginProses.php" method="POST">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" aria-label="Username" placeholder="username"
								name="username" required>

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" aria-label="Password" placeholder="password"
								name="password" required>
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="register.php">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						&copy; 2019 LUG By <a href="https://github.com/ekofebriharsono">Maseko</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>