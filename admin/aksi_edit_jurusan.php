<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_jurusan=$_POST['id_jurusan'];
	$nama_jurusan=$_POST['nama_jurusan'];
	
	$sql2 = "UPDATE jurusan SET id_jurusan = '$id_jurusan', nama_jurusan = '$nama_jurusan' WHERE id_jurusan = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:?url=bacajurusan');
	}
	else
	{
	echo "Edit admin gagal";
	}
?>