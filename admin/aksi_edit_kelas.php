<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_kelas=$_POST['id_kelas'];
	$nama_kelas=$_POST['nama_kelas'];
    $jurusan_id=$_POST['jurusan_id'];
	
	$sql2 = "UPDATE kelas SET id_kelas = '$id_kelas', nama_kelas = '$nama_kelas', jurusan_id='$jurusan_id'WHERE id_kelas = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:?url=bacakelas');
	}
	else
	{
	echo "Edit admin gagal";
	}
?>