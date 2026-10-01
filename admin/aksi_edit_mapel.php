<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_mapel=$_POST['id_mapel'];
	$nama_mapel=$_POST['nama_mapel'];
	
	$sql2 = "UPDATE mapel SET id_mapel = '$id_mapel', nama_mapel = '$nama_mapel' WHERE id_mapel = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:?url=bacamapel');
	}
	else
	{
	echo "Edit admin gagal";
	}
?>