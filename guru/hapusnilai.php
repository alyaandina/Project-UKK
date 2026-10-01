<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM nilai WHERE id_nilai = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:?url=bacanilai');
	}
	else
	{
	echo "hapus nilai Gagal";
	}
?>