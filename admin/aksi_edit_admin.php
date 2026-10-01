<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_admin=$_POST['id_admin'];
	$admin_id=$_POST['admin_id'];
	$password=$_POST['password'];
	
	$sql2 = "UPDATE admin SET id_admin = '$id_admin', admin_id = '$admin_id', password = '$password' WHERE admin_id = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:?url=bacaadmin');
	}
	else
	{
	echo "Edit admin gagal";
	}
?>