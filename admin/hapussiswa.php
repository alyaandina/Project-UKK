<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM siswa WHERE nis = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:?url=bacasiswa');
	}
	else
	{
	echo "hapus siswa Gagal";
	}
?>