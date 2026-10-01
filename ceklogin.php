<?php
	session_start();
	include "koneksi.php";	
	$nis = $_POST["nis"];
	$nama_siswa = $_POST["nama_siswa"];	
	$sql= "SELECT * FROM siswa where nis = '$nis' and nama_siswa = '$nama_siswa'";	
	$query = mysqli_query($db_link,$sql);		
	if(mysqli_num_rows($query)!=0)
	{
		echo "<br>Login sukses";
			$data = mysqli_fetch_array($query);
			$_SESSION['nis'] = $data['nis']; 
			$_SESSION['nama_siswa'] = $data['nama_siswa'];			
			header("location:siswa/siswa.php");
	}
	else
	{
		 echo "<br>Login gagal ";
		 echo "<a href=index.php>Kembali</a>";
	}

?>