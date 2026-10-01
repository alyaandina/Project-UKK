<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$nis=$_POST['nis'];
	$nama_siswa=$_POST['nama_siswa'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$kelas_id=$_POST['kelas_id'];
	$password=$_POST['password'];
	
	$sql2 = "UPDATE siswa SET nis = '$nis', nama_siswa = '$nama_siswa', jk = '$jk', alamat = '$alamat', kelas_id = '$kelas_id', password = '$password' WHERE nis = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:?url=bacasiswa');
	}
	else
	{
	echo "Edit siswa gagal";
	}
?>