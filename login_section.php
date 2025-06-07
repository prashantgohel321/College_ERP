

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Marwadi College</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="javascript/login.js"></script>

</head>

<body>
	
<?php include 'header.php' ?>
	<section class="section">
		<div class="wrapper">
			<span class="icon-close">
				<i class="fa fa-close"></i>
			</span>
			<div class="logreg-box">
				<!-- login -->
				<div class="form-box login">
					<div class="logreg-title">
						<h2>Login</h2>
						<p>Please login to use this platform</p>
					</div>

					<form action="login.php" method="post">
						<div class="input-box">
							<span class="icon">
								<i class='fa fa-envelope'></i></span>
							<input type="email" name="email"required>
							<label>Email</label>
						</div>

						<div class="input-box">
							<span class="icon">
								<i class='fa fa-lock'></i>
							</span>
							<input type="Password" name="password" required>
							<label>Password</label>
						</div>

						<div class="remember-forgot">
							<label>
								<input type="checkbox">Remember me
							</label>

							<a href="#">Forgot password?</a>
						</div>

						<button type="submit" class="btn">Login</button>

						<div class="logreg-link">
							<p>Don't have an account?
								<a href="#" class="register-link">Register</a>
							</p>
						</div>

					</form>
				</div>

				<!-- register -->
				<div class="form-box register">
					<div class="logreg-title">
						<h2>Registration</h2>
						<p>Please provide following to verify your identity</p>
					</div>

					<form action="register.php" method="post">
						<div class="input-box">
							<span class="icon">
								<i class='bx bxs-envelope'></i></span>
							<input type="text" name="full_name" required>
							<label>Full Name</label>
						</div>

						<div class="input-box">
							<span class="icon">
								<i class='bx bxs-envelope'></i></span>
							<input type="email" name="email" required >
							<label>Email</label>
						</div>

						<div class="input-box">
							<span class="icon">
								<i class='bx bxs-lock'></i>
							</span>
							<input type="Password" name="password" required >
							<label>Password</label>
						</div>

						<div class="remember-forgot">
							<label>
								<input type="checkbox">I agree to the terms and condition
							</label>
						</div>

						<button type="submit" class="btn">Register</button>

						<div class="logreg-link">
							<p>Already have an account?
								<a href="#" class="login-link">Login</a>
							</p>
						</div>

					</form>
				</div>
			</div>

			<div class="media-options">
				<a href="#">
					<i class="fa fa-google-plus"></i>
					<span>Login with Google</span>
				</a>

				<a href="#">
					<i class="fa fa-facebook-f"></i>
					<span>Login with Facebook</span>
				</a>
			</div>
		</div>
	</section>
	<?php include 'footer.php' ?>
</body>
</html>

