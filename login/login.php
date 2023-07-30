<!-- the main login form / page -->
<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: index.php");
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
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<!-- Java Script links -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#7952b3">
	<link rel="stylesheet" href="css/signup_login.css" />
	<title>Document</title>
</head>

<body class="text-center">

	<div class="outbox">
		<form action="" method="post">

			<section class="vh-100 gradient-custom">
				<div class="container py-5 h-100">
					<div class="row d-flex justify-content-center align-items-center h-100">
						<div class="col-12 col-md-8 col-lg-6 col-xl-5">
							<div class="card bg-dark text-white" style="border-radius: 1rem;">
								<div class="card-body p-5 text-center">

									<div class="mb-md-5 mt-md-4 pb-5">

										<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
										<p class="text-white-50 mb-5">Please enter your login and password!</p>

										<div class="form-outline form-white mb-4">
											<input type="text" name="user_name" id="text" class="form-control form-control-lg" />
											<label class="form-label" for="email">Username</label>
											<!-- <input id="text" type="text" name="user_name">username<br><br> -->

										</div>

										<div class="form-outline form-white mb-3">
											<input type="password" name="password" id="text" class="form-control form-control-lg" />
											<label class="form-label">Password</label>
											<!-- <input id="text" type="password" name="password">password<br><br> -->

										</div>

										<button id="button" class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

										<!-- <input id="button" type="submit" value="Login"><br><br> -->

									</div>

									<div>
										<p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign up
											</a>
										</p>
										<br>
										<p class="mb-0">Go to Home page!
											<a href="/Final/backend/home/" class="text-white-50 fw-bold">Home</a>
										</p>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</form>
	</div>
</body>

</html>