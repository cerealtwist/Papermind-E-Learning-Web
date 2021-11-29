<?php 

include 'config.php';

$link = "";
$link_status = "display: none;";

if (isset($_POST['upload'])) { 
	$location = "uploads/";
	$file_new_name = date("dmy") . time() . $_FILES["file"]["name"];
	$file_name = $_FILES["file"]["name"]; 
	$file_temp = $_FILES["file"]["tmp_name"]; 
	$file_size = $_FILES["file"]["size"]; 
	if ($file_size > 10485760) { 
		echo "<script>alert('File terlalu besar!. Ukuran maksimal untuk upload file adalah 10 MB.')</script>";
	} else {
		$sql = "INSERT INTO uploaded_files (name, new_name)
				VALUES ('$file_name', '$file_new_name')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			move_uploaded_file($file_temp, $location . $file_new_name);
			echo "<script>alert('File berhasil di upload.')</script>";
			$sql = "SELECT id FROM uploaded_files ORDER BY id DESC";
			$result = mysqli_query($conn, $sql);
			if ($row = mysqli_fetch_assoc($result)) {
				$link = $base_url . "download.php?id=" . $row['id'];
				$link_status = "display: block;";
			}
		} else {
			echo "<script>alert('Terjadi Kesalahan.')</script>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<title>News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/kelas4.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<!-- Header Content -->
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
										<li><a href="courses.php">courses</a></li>
										<li><button><a href="logout.php">Logout</a></button></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</header>
	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-8">
					<div class="news_posts">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="images/news_5.jpg" alt=""></div>
							<div class="news_post_body">
								<div class="news_post_date"><a href="#">Kategori : Business Skills</a></div>
								<div class="news_post_title"><a href="#">Membuat Ide Bisnis yang Baik</a></div>
								<div class="news_post_meta d-flex flex-row align-items-start justify-content-start">
									<div class="news_post_author">By <a href="#">Peter G. Arifin</a></div>
									<div class="news_post_comments"><a href="#">Bab 4 : Penugasan Membuat Bisnis Ide Kreatif</a></div>
								</div>
								<div class="news_post_text">
									<p>Pada bab 4, yaitu bab terakhir ini adalah sekaligus sebagai penugasan tentang membuat sebuah bisnis ide kreatif dan sebagai tanda bahwa para pelajar sudah menguasai kelas mengenai membuat sebuah bisnis ide kreatif.
                                    <br><br>Kemudian ketentuan yang harus diikuti dalam penugasan kali ini adalah:
                                    <br><br>1. Tugas wajib dikumpulkan dengan format DOCX (Word) atau PDF
                                    <br>2. Tugas minimal memiliki 2 page penuh, menggunakan font Calibri dengan ukuran 12-14
                                    <br>3. Dilarang mengambil dan mencuri konten dari internet (makalah, artikel, dan lainnya) kec. sebagai referensi
                                    <br>4. Tugas paling lambat dikumpulkan pada tanggal 32 November 2021
                                    <br>5. Diperbolehkan menggunakan lebih dari 1 analisis pada ide bisnis.
                                    <br><br>Yang terakhir, yaitu kriteria penilaian pada tugas akhir ini adalah sebagai berikut:
                                    <br><br>1. Kerapihan dan kelengkapan makalah tugas (tidak kurang dari 2 pages) - 20%
                                    <br>2. Kesesuaian, keunikan, detail dan kreatifitas konten dari makalah - 60%
                                    <br>3. Waktu pengumpulan tugas (tidak lebih dari 32 November 2021) - 15%
                                    <br>4. Referensi yang digunakan (sumber valid atau tidak) - 5%
                                    </p>
								</div>
							</div>
						</div>
						<!-- Form Upload -->
						<div class="file__upload">
							<form action="" method="POST" enctype="multipart/form-data" class="body">
								<!-- Sharable Link Code -->
								<input type="checkbox" id="link_checkbox">
								<input type="text" value="<?php echo $link; ?>" id="link" readonly>
								<label for="link_checkbox" style="<?php echo $link_status; ?>">File Uploaded (Click To Review)</label>

								<input type="file" name="file" id="upload" required>
								<label for="upload">
									<i class="fa fa-file-text-o fa-3x"></i>
									<p>
										<strong>Drag and drop</strong> files here<br>
										or <span>browse</span> to begin the upload
									</p>
								</label>
								<button name="upload" class="btn">Upload</button>
							</form>
						</div>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar_latest_posts">
							<div class="sidebar_title">Bab Materi</div>
							<div class="latest_posts">
						
								<!-- News Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="images/news_1.jpg" alt="https://unsplash.com/@beccatapert"></div></div>
									<div class="latest_post_body">
										<div class="latest_post_date">Bagian 1</div>
										<div class="latest_post_title"><a href="news.html">Seperti Apa Ide Bisnis yang Baik?</a></div>
									</div>
								</div>

								<!-- News Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="images/news_2.jpg" alt="https://unsplash.com/@nbb_photos"></div></div>
									<div class="latest_post_body">
										<div class="latest_post_date">Bagian 2</div>
										<div class="latest_post_title"><a href="news.html">Persiapan Untuk Memulai Sebuah Bisnis</a></div>
									</div>
								</div>

								<!-- News Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="images/news_3.jpg" alt="https://unsplash.com/@rawpixel"></div></div>
									<div class="latest_post_body">
										<div class="latest_post_date">Bagian 3</div>
										<div class="latest_post_title"><a href="news.html">Bagaimana Cara Agar Bisnis Bertahan Di Pasar Persaingan?</a></div>
									</div>
								</div>

								<!-- News Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="images/news_4.jpg" alt="https://unsplash.com/@jtylernix"></div></div>
									<div class="latest_post_body">
										<div class="latest_post_date">Bagian 4</div>
										<div class="latest_post_title"><a href="news.html">Task: Membuat Ide Bisnis Kreatif</a></div>
									</div>
								</div>
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
<script src="js/news.js"></script>
</body>
</html>