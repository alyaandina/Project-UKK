<?php
	include "../koneksi.php";
	$admin_id = $_GET['admin_id'];
	$sql = "DELETE FROM admin WHERE admin_id = '$admin_id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:?url=bacaadmin');
	}
	else
	{
	echo "hapus admin Gagal";
	}
?>