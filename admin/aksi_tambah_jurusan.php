<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_jurusan=$_POST['id_jurusan'];
	$nama_jurusan=$_POST['nama_jurusan'];
	$sql = "insert into jurusan(id_jurusan,nama_jurusan) values('$id_jurusan','$nama_jurusan')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:?url=bacajurusan');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>