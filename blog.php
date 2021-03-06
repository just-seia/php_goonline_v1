<?php

include 'db/db_config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/blog.css">
	<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>
<body>
	<div class="super_container">

		<!-- Header -->
		<?php include 'header.php'; ?>

		<!-- Blog -->
		<div class="blog">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="blog_post_container">

							<!-- Blog Post -->
							<div class="blog_post trans_200">
								<div class="blog_post_image"><img src="images/blog_1.jpg" alt=""></div>
								<div class="blog_post_body">
									<div class="blog_post_title"><a href="blog_single.php">Here’s What You Need to Know About Online Testing</a></div>
									<div class="blog_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">november 11, 2017</a></li>
										</ul>
									</div>
									<div class="blog_post_text">
										<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
									</div>
								</div>
							</div>

							<!-- Blog Post -->
							<div class="blog_post trans_200">
								<div class="blog_post_body">
									<div class="blog_post_title"><a href="blog_single.php">With Changing Students and Times</a></div>
									<div class="blog_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">november 11, 2017</a></li>
										</ul>
									</div>
									<div class="blog_post_text">
										<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
									</div>
								</div>
							</div>

							<!-- Blog Post -->
							<div class="blog_post trans_200">
								<div class="blog_post_video_container">
									<video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_2.jpg"}'>
										<source src="images/mov_bbb.mp4" type="video/mp4">
										<source src="images/mov_bbb.ogg" type="video/ogg">
										Your browser does not support HTML5 video.
									</video>
								</div>
								<div class="blog_post_body">
									<div class="blog_post_title"><a href="blog_single.php">Building Skills Outside the Classroom With New Ways</a></div>
									<div class="blog_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">november 11, 2017</a></li>
										</ul>
									</div>
									<div class="blog_post_text">
										<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
									</div>
								</div>
							</div>

							<!-- Blog Post -->
							<div class="blog_post trans_200">
								<div class="blog_post_image"><img src="images/blog_3.jpg" alt=""></div>
								<div class="blog_post_body">
									<div class="blog_post_title"><a href="blog_single.php">Law Schools Debate a Contentious Testing Alternative</a></div>
									<div class="blog_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">november 11, 2017</a></li>
										</ul>
									</div>
									<div class="blog_post_text">
										<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
									</div>
								</div>
							</div>

							<!-- Blog Post -->
							<div class="blog_post trans_200">
								<div class="blog_post_video_container">
									<video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_4.jpg"}'>
										<source src="images/mov_bbb.mp4" type="video/mp4">
										<source src="images/mov_bbb.ogg" type="video/ogg">
										Your browser does not support HTML5 video.
									</video>
								</div>
								<div class="blog_post_body">
									<div class="blog_post_title"><a href="blog_single.php">Building Skills Outside the Classroom With New Ways</a></div>
									<div class="blog_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">november 11, 2017</a></li>
										</ul>
									</div>
									<div class="blog_post_text">
										<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
									</div>
								</div>
							</div>

							<!-- Blog Post -->
							<div class="blog_post trans_200">
								<div class="blog_post_image"><img src="images/blog_5.jpg" alt=""></div>
								<div class="blog_post_body">
									<div class="blog_post_title"><a href="blog_single.php">Here’s What You Need to Know About Online Testing</a></div>
									<div class="blog_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">november 11, 2017</a></li>
										</ul>
									</div>
									<div class="blog_post_text">
										<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
									</div>
								</div>
							</div>

							<!-- Blog Post -->
							<div class="blog_post trans_200">
								<div class="blog_post_body">
									<div class="blog_post_title"><a href="blog_single.php">With Changing Students and Times</a></div>
									<div class="blog_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">november 11, 2017</a></li>
										</ul>
									</div>
									<div class="blog_post_text">
										<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<div class="load_more trans_200"><a href="#">load more</a></div>
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
	<script src="plugins/masonry/masonry.js"></script>
	<script src="plugins/video-js/video.min.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/blog.js"></script>
</body>
</html>