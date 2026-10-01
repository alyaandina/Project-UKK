<?php
	include "../koneksi.php";
	$nis=$_POST['nis'];
	$nama_siswa=$_POST['nama_siswa'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$kelas_id=$_POST['kelas_id'];
	$password=$_POST['password'];

	$sql = "insert into siswa(nis,nama_siswa,jk,alamat,kelas_id,password) values('$nis','$nama_siswa','$jk','$alamat','$kelas_id','$password')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:?url=bacasiswa');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>