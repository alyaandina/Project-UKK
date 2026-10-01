<?php
	include "../koneksi.php";
	$id_guru = $_GET['id_guru'];
	$sql = "DELETE FROM guru WHERE id_guru = '$id_guru'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:?url=bacaguru');
	}
	else
	{
	echo "hapus admin Gagal";
	}
?>