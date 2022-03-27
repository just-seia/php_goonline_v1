<?php

include 'db/db_config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unicat</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
    <div class="super_container">

		<!-- Header -->
		<?php include 'header.php'; ?>

		<!-- Home -->
		<div class="home">
			<div class="home_slider_container">
				
				<!-- Home Slider -->
				<div class="owl-carousel owl-theme home_slider owl-loaded owl-drag">

					<div class="owl-stage-outer">
						<div class="owl-stage">
							<div class="owl-item active">
								<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
								<div class="home_slider_content">
									<div class="container">
										<div class="row">
											<div class="col text-center">
												<div class="home_slider_title">Исполнители готовы помочь вам</div>
												<div class="home_slider_subtitle">выполнить любую задачу</div>
												<div class="home_slider_form_container">
													<form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
														<!-- <div class="row col_lg_12"></div> -->
														<div class="d-flex flex-row align-items-center justify-content-start">
															<input type="search" class="home_search_input" placeholder="Ключевые слова" required="required">
															<select class="dropdown_item_select home_search_input">
																<option>Категория услуг</option>
																<option>Маркетинг</option>
																<option>Учеба</option>
															</select>
															<select class="dropdown_item_select home_search_input">
																<option>Выберите вид услуг</option>
																<option>Платный</option>
																<option>Бесплатный</option>
															</select>
														</div>
														<button type="submit" class="home_search_button">Искать</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>

				</div>

			</div>
		</div>

		<!-- Features -->
		<div class="features">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Добро пожаловать в ErkinLance</h2>
							<div class="section_subtitle"><p>ErkinLance - это потрясающе удобная платформа, которая включает в себя различные услуги от профессиональных исполнителей</p></div>
						</div>
					</div>
				</div>
				<div class="row features_row">
					
					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
							<h3 class="feature_title">Найдите услугу</h3>
							<div class="feature_text"><p>На нашем сайте представлен большой выбор услуг</p></div>
						</div>
					</div>

					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
							<h3 class="feature_title">Свяжитесь с автором</h3>
							<div class="feature_text"><p>Контакты авторов услуг укажен в каждом услуге</p></div>
						</div>
					</div>

					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
							<h3 class="feature_title">Получайте решение</h3>
							<div class="feature_text"><p>Исполнитель в ближайшем времени поможет вам</p></div>
						</div>
					</div>

					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
							<h3 class="feature_title">Оплатите автору</h3>
							<div class="feature_text"><p>Вы сами договоритесь с автором</p></div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Counter -->
		<div class="counter">
			<div class="counter_background" style="background-image:url(images/counter_background.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="counter_content">
							<h2 class="counter_title">Закажите услуги исполнителей прямо сейчас</h2>
							<div class="counter_text"><p>ErkinLance – это простой, быстрый и бесплатный способ найти хорошего исполнителя работы в интернете. Наша система репутации облегчит поиск квалифицированного и надежного фрилансера, идеально подходящего для выполнения вашего проекта.</p></div>
						</div>
					</div>
				</div>

				<div class="counter_form">
					<div class="row fill_height">
						<div class="col fill_height">
							<div class="counter_form_content d-flex flex-column align-items-center justify-content-center">
								<a href="#" class="counter_form_button">Зарегистрироваться</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Team -->
		<div class="team" style="display: none;">
			<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Лучшие исполнители</h2>
							<div class="section_subtitle"><p>в различных сферах</p></div>
						</div>
					</div>
				</div>
				<div class="row team_row">
					
					<!-- Team Item -->
					<div class="col-lg-3 col-md-6 team_col">
						<div class="team_item">
							<div class="team_image"><img src="images/team_1.jpg" alt=""></div>
							<div class="team_body">
								<div class="team_title"><a href="#">Jacke Masito</a></div>
								<div class="team_subtitle">Маркетинг</div>
								<div class="social_list">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Team Item -->
					<div class="col-lg-3 col-md-6 team_col">
						<div class="team_item">
							<div class="team_image"><img src="images/team_2.jpg" alt=""></div>
							<div class="team_body">
								<div class="team_title"><a href="#">William James</a></div>
								<div class="team_subtitle">IT и разработка</div>
								<div class="social_list">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Team Item -->
					<div class="col-lg-3 col-md-6 team_col">
						<div class="team_item">
							<div class="team_image"><img src="images/team_3.jpg" alt=""></div>
							<div class="team_body">
								<div class="team_title"><a href="#">John Tyler</a></div>
								<div class="team_subtitle">Учеба</div>
								<div class="social_list">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Team Item -->
					<div class="col-lg-3 col-md-6 team_col">
						<div class="team_item">
							<div class="team_image"><img src="images/team_4.jpg" alt=""></div>
							<div class="team_body">
								<div class="team_title"><a href="#">Veronica Vahn</a></div>
								<div class="team_subtitle">Видео, аудио, съемка</div>
								<div class="social_list">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
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
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>