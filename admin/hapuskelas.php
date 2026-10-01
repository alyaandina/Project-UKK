<?php
	include "../koneksi.php";
	$id_kelas = $_GET['id_kelas'];
	$sql = "DELETE FROM kelas WHERE id_kelas = '$id_kelas'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:?url=bacakelas');
	}
	else
	{
	echo "hapus admin Gagal";
	}
?>