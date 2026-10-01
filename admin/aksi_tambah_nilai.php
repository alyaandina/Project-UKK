<?php
	include "../koneksi.php";
	$idnilai = $_POST['id_nilai'];
	$nis = $_POST['nis'];
	$namajurusan=$_POST['nama_jurusan'];
	$namaguru=$_POST['nama_guru'];
	$namamapel=$_POST['nama_mapel'];
	$namakelas=$_POST['nama_kelas'];
	$uh=$_POST['uh'];
	$uts=$_POST['uts'];
	$uas=$_POST['uas'];
	$na = ($uh+$uts+$uas)/3;
	$na = round($na,2);
	$sql = "INSERT INTO nilai (id_nilai,nis,nama_jurusan,nama_guru,nama_mapel,nama_kelas,uh,uts,uas,na) VALUES('$idnilai','$nis','$namajurusan','$namaguru','$namamapel','$namakelas','$uh','$uts','$uas','$na')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:?url=bacanilai');
	}
	else
	{
	echo"Gagal Disimpan";
	echo mysqli_error($db_link);
	}
?>