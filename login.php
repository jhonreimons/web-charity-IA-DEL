<?php
session_start();
require "config.php";
if (isset($_POST['submit'])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

     $result = mysqli_query($conn,"SELECT * FROM donatur WHERE username = '$username' AND password ='$password'");
	mysqli_num_rows($result);
	if (mysqli_num_rows($result) == 1) {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

		header("Location: users");
		exit;
		}
	elseif(mysqli_num_rows($result) == 0){
		$admin = mysqli_query($conn,"SELECT * FROM admin WHERE username= '$username' AND password = '$password'");
		if(mysqli_num_rows($admin) == 1 ){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
		header("Location: admin/index.php");
		exit; 
		
	}
	else{
			echo"<script>
			confirm('Username dan Password salah !');
		 </script>";
	}
}
}
elseif(isset($_POST['cencel']) && empty($_POST['username'] && empty($_POST['password']))){
	header("Location: index.php");
}




?>
<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: #c1c4e9;">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Web Charity IA Del</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5" style="background-color: #868ab2;">
						<div class="img d-flex align-items-center justify-content-center" style="background-image: url(gambar/gambar1.jpg);"></div>
						<h3 class="text-center mb-0">Login</h3>
						<p class="text-center">Masuk dengan akun anda yang sudah terdaftar</p>
						<form action="" method="POST" class="login-form">
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
								<input type="text" class="form-control" name="username" placeholder="Username">
							</div>
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-success mx-5" name="submit">Login</button>
								<button type="submit" class="btn btn-danger mx-2" name="cencel">Cencel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
