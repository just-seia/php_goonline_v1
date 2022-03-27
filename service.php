<?php

include 'db/service.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>service Details</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/service.css">
	<link rel="stylesheet" type="text/css" href="styles/service_responsive.css">
</head>
<body>
	<div class="super_container">

		<!-- Header -->
		<?php include 'header.php'; ?>

		<!-- service -->
		<div class="service">
			<div class="container">
				<div class="row">

					<!-- service -->
					<div class="col-lg-8">
						
						<div class="service_container">
							<div class="service_title"><?php echo $result['service_title'] ?></div>

							<!-- service Image -->
							<div class="service_image"><img src="images/service_image.jpg" alt=""></div>

							<!-- service Tabs -->
							<div class="service_tabs_container">
								<div class="tabs d-flex flex-row align-items-center justify-content-start">
									<div class="tab active">description</div>
								</div>
								<div class="tab_panels">

									<!-- Description -->
									<div class="tab_panel active">
										<div class="tab_panel_title">Software Training</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												<p><?php echo $result['service_description'] ?></p>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- service Sidebar -->
					<div class="col-lg-4">
						<div class="sidebar">

							<!-- Feature -->
							<div class="sidebar_section">
								<div class="sidebar_section_title">service Feature</div>
								<div class="sidebar_feature">
									<div class="service_price">$<?php echo $result['service_cost'] ?></div>
								</div>
							</div>

							<!-- Feature -->
							<div class="sidebar_section">
								<div class="sidebar_section_title">Teacher</div>
								<div class="sidebar_teacher">
									<div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_image"><img src="images/teacher.jpg" alt=""></div>
										<div class="teacher_title">
											<div class="teacher_name"><a href="#"><?php echo $result['user_fullname'] ?></a></div>
											<div class="teacher_position"><?php echo $result['user_telegram_id'] ?></div>
										</div>
									</div>
									<!-- <div class="teacher_meta_container">
										<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
											<div class="teacher_meta_title">Average Rating:</div>
											<div class="teacher_meta_text ml-auto"><span>4.7</span><i class="fa fa-star" aria-hidden="true"></i></div>
										</div>
										<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
											<div class="teacher_meta_title">Review:</div>
											<div class="teacher_meta_text ml-auto"><span>12k</span><i class="fa fa-comment" aria-hidden="true"></i></div>
										</div>
										<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
											<div class="teacher_meta_title">Quizzes:</div>
											<div class="teacher_meta_text ml-auto"><span>600</span><i class="fa fa-user" aria-hidden="true"></i></div>
										</div>
									</div> -->
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
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
	<script src="js/service.js"></script>
</body>
</html>