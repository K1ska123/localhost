<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="css\style_login.css">
	<title>Login Page</title>
</head>

<body>
	<?php
		if($_COOKIE['user'] == ""):
		?>
	<div class="container" id="container">
		<div class="form-container sign-up">
			<form action="register.php" method="post">
				<h1>Sign Up</h1>
				<div class="social-icons">
					<a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
					<a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
					<a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>
				<span>Или воспользуйтесь своим email для регистрации</span>
				<div class="input-box">
					<input type="text" class="form-control" name="name-reg" id="name-reg" placeholder="Name">
				</div>
				<div class="input-box">
					<input type="text" class="form-control" name="surname" id="surname" placeholder="Surname">
				</div>
				<div class="input-box">
					<input type="text" class="form-control" name="email-reg" id="email-reg" placeholder="Email">
				</div>
				<div class="input-box">
					<input type="password" class="pass" name="password-reg" id="password-reg" placeholder="Password">
				</div>
				<i class="fa-solid fa-eye pass icon-eye" id="eyeicon" onclick="togglePasswordVisibility()"></i>
				<i class="fa-solid fa-eye-slash pass icon-eye-slash" id="eyeicon-slash" onclick="togglePasswordVisibility()"></i>
				<div class="input-box">
					<input type="text" class="form-control" name="organization-reg" id="organization-reg"
						placeholder="Organization Name">
				</div>
				<div class="input-box">
					<input type="text" class="form-control" name="qualification" id="qualification"
						placeholder="Qualification">
				</div>
				<button class="btn btn-success" type="submit">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in">
			<form action="auth.php" method="post">
				<h1>Sign In</h1>
				<div class="social-icons">
					<a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
					<a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
					<a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></i></a>
				</div>
				<span>Или войдите с помощью электронной почты</span>
				<div class="input-box">
					<input type="text" class="form-control" name="email-log" id="email-log" placeholder="Email">
				</div>
				<div class="input-box">
					<input type="password" class="pass" name="password-log" id="password-log" placeholder="Password">
				</div>
				<i class="fa-solid fa-eye pass icon-eye" id="eyeicon-log" onclick="togglePasswordVisibility()"></i>
				<i class="fa-solid fa-eye-slash pass icon-eye-slash" id="eyeicon-slash-log"
					onclick="togglePasswordVisibility()"></i>
				<a href="#">Forget Your Password?</a>
				<button class="btn btn-success" type="submit">Sign In</button>
			</form>
		</div>
		<div class="toggle-container">
			<div class="toggle">
				<div class="toggle-panel toggle-left">
					<h1>Welcome!</h1>
					<p>Введите свои персональные данные, чтобы воспользоваться всеми возможностями сайта
					</p>
					<button class="hidden" id="login">Sign In</button>
				</div>
				<div class="toggle-panel toggle-right">
					<h1>Hello</h1>
					<p>Зарегестрируйся, используя, свои персональные данные, чтобы воспользоваться всеми возможностями
						сайта</p>
					<button class="hidden" id="register">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<?php else:
		header('Location: main.php');
		?>
	<?php endif;?>
	<script src="js\script.js"></script>
</body>

</html>