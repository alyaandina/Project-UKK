<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_admin=$_POST['id_admin'];
	$admin_id=$_POST['admin_id'];
	$password=$_POST['password'];
	$sql = "insert into admin(id_admin,admin_id,password) values('$id_admin','$admin_id','$password')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:?url=bacaadmin');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>