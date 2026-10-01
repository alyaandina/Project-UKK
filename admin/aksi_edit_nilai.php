<?php
	include "../koneksi.php";
	$idnilai = $_POST['id_nilai'];
	$nis = $_POST['nis'];
	$idjurusan=$_POST['nama_jurusan'];
	$idguru=$_POST['nama_guru'];
	$idmapel=$_POST['nama_mapel'];
	$idkelas=$_POST['nama_kelas'];
	$uh=$_POST['uh'];
	$uts=$_POST['uts'];
	$uas=$_POST['uas'];
	$na = ($uh+$uts+$uas)/3;
	$na = round($na,2);
	
	$sql2 = "UPDATE nilai SET nama_jurusan='$idjurusan', nis='$nis', nama_guru='$idguru', nama_guru='$idmapel', nama_kelas = '$idkelas', uh='$uh', uts='$uts', uas='$uas', na='$na' WHERE id_nilai = '$idnilai'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:?url=bacanilai');
	}
	else
	{
	echo "Edit nilai gagal";
	}
?>