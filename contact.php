<?php

include 'db/db_config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>
	<div class="super_container">

		<!-- Header -->
		<?php include 'header.php'; ?>

		<!-- Contact -->
		<div class="contact">

			<!-- Contact Info -->
			<div class="contact_info_container">
				<div class="container">
					<div class="row">

						<!-- Contact Form -->
						<div class="col-lg-6">
							<div class="contact_form">
								<div class="contact_info_title">Есть вопрос?</div>
								<form action="#" class="comment_form">
									<div class="mb-3">
										<div class="form_title">Имя</div>
										<input type="text" class="comment_input" required="required">
									</div>
									<div class="mb-3">
										<div class="form_title">Ваш email</div>
										<input type="text" class="comment_input" required="required">
									</div>
									<div>
										<div class="form_title">Обращение</div>
										<textarea class="comment_input comment_textarea" required="required"></textarea>
									</div>
									<div>
										<button type="submit" class="comment_button trans_200">отправить</button>
									</div>
								</form>
							</div>
						</div>

						<!-- Contact Info -->
						<div class="col-lg-6">
							<div class="contact_info">
								<div class="contact_info_title">Контактная информация</div>
								<div class="contact_info_text">
									<p>Если у Вас возникла техническая проблема или появилось интересное предложение, Вы можете отправить письмо в Службу технической поддержки или воспользоваться формой обратной связи.</p>
								</div>
								<div class="contact_info_location">
									<div class="contact_info_location_title">Алматы</div>
									<ul class="location_list">
										<li>Пн - Пт с 10:00 до 20:00</li>
										<li>info@erkinlance.kz</li>
									</ul>
								</div>
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
	<script src="js/contact.js"></script>
</body>
</html>