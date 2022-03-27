<?php

include 'db/db_config.php';

if(!isset($_SESSION['user'])) {
	header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Профиль</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/profile.css">
	<link rel="stylesheet" type="text/css" href="styles/profile_responsive.css">
</head>
<body>
	<div class="super_container">

		<!-- Header -->
		<?php include 'header.php'; ?>

		<!-- profile -->
		<div class="profile">

			<!-- profile Info -->
			<div class="profile_info_container">
				<div class="container">
					<div class="row">

						<!-- profile Info -->
						<div class="col-lg-4">
							<div class="col">
								<div class="col-12 row rounded bg-white p-3 profile_info_img">
									<img class="rounded mb-3 w-100 col-md-4 col-lg-12" src="images/gallery_1.jpg" alt="profile">
									<div class="col-md-8 col-lg-12">
										<div class="col-12 col-sm banner_button mb-3 bg-info">
											<a class="a" href="db/logout.php">Загрузить картинку</a>
										</div>
										<div class="col-12 banner_button">
											<a class="" href="db/logout.php">Выйти</a>
										</div>
									</div>
									
								</div>
								
							</div>
						</div>

						<!-- profile Form -->
						<div class="col-lg-8">
							<div class="profile_form">
								<div class="profile_info_title">Профиль</div>
								<form action="#" class="profile_form" method="post">
									<div>
										<div class="form_title">ФИО</div>
										<input type="text" class="profile_input" value="<?php echo $_SESSION['user']['user_fullname'] ?>" required="required">
									</div>
									<div>
										<div class="form_title">Telegram ID</div>
										<input type="text" class="profile_input" value="<?php echo $_SESSION['user']['user_telegram_id'] ?>" required="required">
									</div>
									<div>
										<div class="form_title">Email</div>
										<input type="text" class="profile_input" value="<?php echo $_SESSION['user']['user_email'] ?>" required="required">
									</div>
									<div>
										<button type="submit" class="profile_button trans_200">Сохранять</button>
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
</body>
</html>