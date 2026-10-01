<?php
	include "../koneksi.php";
	$id_jurusan = $_GET['id_jurusan'];
	$sql = "DELETE FROM jurusan WHERE id_jurusan = '$id_jurusan'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:?url=bacajurusan');
	}
	else
	{
	echo "hapus admin Gagal";
	}
?>