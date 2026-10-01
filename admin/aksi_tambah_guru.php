<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_guru=$_POST['id_guru'];
	$nama_guru=$_POST['nama_guru'];
    $alamat=$_POST['alamat'];
	$password=$_POST['password'];
	$jk=$_POST['jk'];
	$sql = "insert into guru(id_guru,nama_guru,alamat,password,jk) values('$id_guru','$nama_guru','$alamat','$password','$jk')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:?url=bacaguru');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>