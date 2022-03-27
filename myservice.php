<?php

include 'db/myservice.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>services</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/services.css">
	<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
</head>
<body>
	<div class="super_container">

		<!-- Header -->
		<?php include 'header.php'; ?>

		<!-- services -->
		<div class="services">
			<div class="container">
				<div class="row">

					<!-- services Main Content -->
					<div class="col-lg-12																																																								§">
						<div class="services_search_container">
							<form action="#" id="services_search_form" class="col-12 services_search_form d-flex flex-row align-items-center justify-content-start">
								<div class="row col-12">
									<div class="col-md-6 col-lg-4 p-2">
										<input type="search" class="services_search_input" placeholder="Search services" required="required">
									</div>
									<div class="col-md-6 col-lg-4 p-2">
										<select id="services_search_select" class="services_search_select services_search_input">
											<option>All Categories</option>
											<option>Category</option>
											<option>Category</option>
											<option>Category</option>
										</select>
									</div>
									<div class="col-md-12 col-lg-4 p-2">
										<button action="submit" class="services_search_button ml-auto">search now</button>
									</div>
								</div>
							</form>
						</div>
						<div class="services_container">
							<div class="row services_row">
								
								<?php while($data = $result -> fetch_assoc()) { ?>
								<!-- service -->
								<div class="col-lg-6 service_col">
									<div class="service">
										<div class="service_image"><img src="images/<?php echo $data['service_img'] ?>" alt=""></div>
										<div class="service_body">
											<h3 class="service_title"><a href="service.php?service_id=<?php echo $data['service_id'] ?>"><?php echo $data['service_title'] ?></a></h3>
											<div class="service_teacher"><?php echo $data['user_fullname'] ?></div>
											<div class="service_text">
												<p><?php echo $data['service_description'] ?></p>
											</div>
										</div>
										<div class="service_footer">
											<div class="service_footer_content d-flex flex-row align-items-center justify-content-start">
												<div class="service_info">
													<i class="fa fa-star" aria-hidden="true"></i>
													<span>5</span>
												</div>
												<div class="service_price ml-auto">$<?php echo $data['service_cost'] ?></div>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>

							</div>
							<!-- <div class="row pagination_row">
								<div class="col">
									<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
										<ul class="pagination_list">
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div> -->
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
	<script src="js/services.js"></script>
</body>
</html>