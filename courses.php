<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
</head>
<body>

<div class="super_container">

	<header class="header">

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_content d-flex flex-row align-items-end justify-content-start">
										<!--div class="logo_img"><img src="images/logo.png" alt=""></div-->
										<div class="logo_text">Papermind</div>
									</div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="#">home</a></li>
									<li><a href="#">courses</a></li>
									<li><button><a href="logout.php">Logout</a></button></li>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/courses.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">
							<?php echo "<div>Hello, " . $_SESSION['username'] . "</div>"; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="section_title text-center"><h2>Pilih Kelasmu</h2></div>
					<div class="section_subtitle">Lebih dari 10 Kelas dalam 5 kategori yaitu Self Improvement, Business Skill, Animasi, Ilustrasi, dan Desain Grafis yang siap untuk dipelajari dengan materi yang ringan dan mudah dipahami bagi para pelajar.
					</div>
				</div>
			</div>
			<!-- Featured Course -->
			<div class="row featured_row">
				<div class="col-lg-6 featured_col">
					<div class="featured_content">
						<div class="featured_header d-flex flex-row align-items-center justify-content-start">
							<div class="featured_tag"><a href="#">Business Skills</a></div>
						</div>
						<div class="featured_title"><h3><a href="kelas1.html">Membuat Ide Bisnis Yang Baik</a></h3></div>
						<div class="featured_text">Dalam kelas ini, terdapat materi mengenai bagaimana cara merencanakan ide dan memulai sebuah bisnis secara kreatif dengan model tertentu dengan 1 tugas yang harus diselesaikan di bagian akhir.</div>
						<div class="featured_footer d-flex align-items-center justify-content-start">
							<div class="featured_author_image"><img src="images/featured_author.jpg" alt=""></div>
							<div class="featured_author_name">Oleh <a href="#">Peter G. Arifin</a></div>
							<div class="featured_sales ml-auto"><span>1</span> Task </div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 featured_col">
					<div class="featured_background" style="background-image:url(images/featured.jpg)"></div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_1.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Business Skills</a></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Pricing Untuk Klien</a></h3></div>
							<div class="course_text">Dalam materi ini akan diajarkan bagaimana caranya memasang harga yang pas dan cocok pada klien.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Peter G. Arifin</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_2.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Animasi</a></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">3D Animation w/ Blender</a></h3></div>
							<div class="course_text">Kelas lengkap untuk para pelajar yang ingin belajar animasi menggunakan software Blender.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_2.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Asep Saipudin McLovin</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_3.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Desain Grafis</a></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Tipografi Dalam Desain</a></h3></div>
							<div class="course_text">Kelas yang berisi materi mengenai tipografi dan penerapannya dalam sebuah desain grafis.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_3.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Rahmana Flower</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_4.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Business Skills</a></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Membangun Kepercayaan</a></h3></div>
							<div class="course_text">Pada kelas ini akan diajarkan bagaimana caranya membangun sebuah relasi berdasarkan kepercayaan dengan klien</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Peter G. Arifin</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_5.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Animation</a></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">After Effects 101</a></h3></div>
							<div class="course_text">Berisi materi lengkap mengenai membuat sebuah animasi menggunakan software Adobe After Effects.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_2.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Asep Saipudin McLovin</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_6.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Graphic Design</a></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Wireframing & Prototyping</a></h3></div>
							<div class="course_text">Bagaimana Wireframe & Prototype mempengaruhi hasil sebuah desain atau produk?</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_3.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Rahmana Flower</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_7.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Self-Improvement</a></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">How-to-not : Procrastinate</a></h3></div>
							<div class="course_text">Kelas self-improvement mengenai bagaimana agar tetap produktif dan tidak bermalas-malasan dalam bekerja.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Peter G. Arifin</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_8.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Modelling</a></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Sculpt & Animate</a></h3></div>
							<div class="course_text">Di sini kalian akan belajar mengenai Scultping yang kemudian akan diterapkan ke dalam sebuah animasi.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_2.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Asep Saipudin McLovin</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_9.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Graphic Design</a></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Editorial Design 01</a></h3></div>
							<div class="course_text">Kelas lengkap yang membahas mengenai element Editorial Design dan pengaplikasiannya.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_3.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Rahmana Flower</a></div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Pagination -->
			<div class="row">
				<div class="col">
					<div class="courses_paginations">
						<ul>
							<li class="active"><a href="#">01</a></li>
							<li><a href="#">02</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer-a">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 text-lg-center site-logo order-1 order-lg-2 mb-3 mb-lg-0">
              <a href="#" class="m-0 p-0">PAPERMIND</a>
            </div>
            <div class="col-lg-4 order-2 order-lg-1 mb-3 mb-lg-0">
              <ul class="list-unstyled nav-links m-0 nav-left">
                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-lg-4 text-lg-right order-3 order-lg-3">
              <p class="m-0 text-muted"><small>&copy; 2021. Project Web oleh Farand Diy Dat M.</small></p>
            </div>
          </div>
        </div>
    </footer>
	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/courses.js"></script>
</body>
</html>