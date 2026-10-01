<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_kelas=$_POST['id_kelas'];
	$nama_kelas=$_POST['nama_kelas'];
    $jurusan_id=$_POST['jurusan_id'];
	$sql = "insert into kelas(id_kelas,nama_kelas,jurusan_id) values('$id_kelas','$nama_kelas','$jurusan_id')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:?url=bacakelas');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>