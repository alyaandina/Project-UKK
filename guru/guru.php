<?php
session_start();
if(empty($_SESSION['nisn']))
?>
<!DOCTYPE html>
<html>
<head >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Guru- Aplikasi Rekap Nilai.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
</head>
<body style="background-color: skyblue;">
<div class="container mt-5" style="color:black;">

<marquee behavior="alternate" direction="right"><h3>Aplikasi Rekap Nilai</h3></marquee>
	<div class="alert alert-info">
	<a style="color:black;">Anda Login Sebagai <b><?= $_SESSION['nama_guru']?></b> Aplikasi Pembayaran SPP.</a>
</div>
<a href="guru.php" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Home</a>
<a href="guru.php?url=bacanilai" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Data nilai</a>
<a href="logout.php" class="btn btn-outline-light" style= "background-color: #24A5E8; margin-left:865px"> Logout</a>
 
<div class="card mt-2">
	<div class="card-body" style="background-color: #CFF4FC;">
	<!-- ini web kita--> 
		<?php
		$file = @$_GET['url'];
		if(empty($file)){
			echo"<h4>Selamat Datang Di Halaman Guru.</h4>";
			echo"Aplikasi Rekap Nilai digunakan untuk mempermudah dalam mencatat nilai Siswa / Siswi secara tersistematis.";
		}else{
			include $file.'.php';
		}
	    ?>

	</div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>