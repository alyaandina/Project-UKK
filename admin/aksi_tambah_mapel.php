<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_mapel=$_POST['id_mapel'];
	$nama_mapel=$_POST['nama_mapel'];
	$sql = "insert into mapel(id_mapel,nama_mapel) values('$id_mapel','$nama_mapel')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:?url=bacamapel');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>