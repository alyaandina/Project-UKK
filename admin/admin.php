<!DOCTYPE html>
<html>
<head >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Admin- Aplikasi Rekap Nilai.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
</head>
<body style="background-color: skyblue;">
<div class="container mt-5" style="color:black;">

<marquee behavior="alternate" direction="right"><h3>Aplikasi Rekap Nilai</h3></marquee>
	<div class="alert alert-info">
	<a style="color:black;">Anda Login Sebagai <b>ADMIN</b> Aplikasi Rekap Nilai.</a>
</div>
<a href="admin.php" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Admin</a>
<a href="admin.php?url=bacaadmin" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Data Admin</a>
<a href="admin.php?url=bacasiswa" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Data Siswa</a>
<a href="admin.php?url=bacanilai" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Data Nilai</a>
<a href="admin.php?url=bacamapel" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Data Mapel</a>
<a href="admin.php?url=bacajurusan" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Data Jurusan</a>
<a href="admin.php?url=bacaguru" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Data Guru</a>
<a href="admin.php?url=bacakelas" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Data Kelas</a>
<a href="logout.php" class="btn btn-outline-light" style= "background-color: #24A5E8; margin-left:205px"> Logout</a>
 
<div class="card mt-2">
	<div class="card-body" style="background-color: #CFF4FC;">
	<!-- ini web kita-->
		<?php
		$file = @$_GET['url'];
		if(empty($file)){
			echo"<h4>Selamat Datang Di Halaman Admin.</h4>";
			echo"Aplikasi Rekap Nilai digunakan untuk mempermudah dalam mencatat nilai Siswa / Siswi secara tersistematis.";
		}else{
			include $file.'.php';
		}
	    ?>

	</div>
</div>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>