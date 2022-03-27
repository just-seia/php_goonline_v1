<?php

include 'db/db_config.php';

if(isset($_SESSION['user'])) {
	header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<link rel="stylesheet" type="text/css" href="styles/login_responsive.css">
</head>
<body>
	<div class="super_container">

		<!-- Header -->
		<?php include 'header.php'; ?>

		<!-- login -->
		<div class="login">

			<!-- login Info -->
			<div class="login_info_container">
				<div class="container">
					<div class="row justify-content-center">

						<!-- login Form -->
						<div class="col-lg-6">
							<div class="login_form">
								<div class="login_info_title">Login Form</div>
								<form action="db/login.php" class="comment_form" method="post">
									<div>
										<div class="form_title">Email</div>
										<input type="text" class="comment_input" name="email" required="required">
									</div>
									<div>
										<div class="form_title">Password</div>
										<input type="password" class="comment_input" name="password" required="required">
									</div>

									<?php
									if(isset($_GET['auth_error'])) {
									?>
									<div class="alert bg-danger text-white">
										<?php echo $_GET['auth_error'] ?>
									</div>
									<?php
									}
									?>
									
									<div>
										<button type="submit" class="comment_button trans_200">Login</button>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php include 'footer.php'; ?>

	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="plugins/marker_with_label/marker_with_label.js"></script>
	<script src="js/login.js"></script>
</body>
</html>