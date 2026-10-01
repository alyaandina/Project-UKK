<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$id_guru=$_POST['id_guru'];
	$nama_guru=$_POST['nama_guru'];
    $alamat=$_POST['alamat'];
	$password=$_POST['password'];
	$jk = $_POST['jk'];
	
	$sql2 = "UPDATE guru SET id_guru = '$id_guru', nama_guru = '$nama_guru', alamat = '$alamat', password= '$password', jk= '$jk' WHERE id_guru = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:?url=bacaguru');
	}
	else
	{
	echo "Edit admin gagal";
	}
?>