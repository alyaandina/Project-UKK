<?php
	session_start();
	include "koneksi.php";	
	$id_guru = $_POST["id_guru"];
	$nama_guru = $_POST["nama_guru"];	
	$sql= "SELECT * FROM guru where id_guru = '$id_guru' and nama_guru = '$nama_guru'";	
	$query = mysqli_query($db_link,$sql);		
	if(mysqli_num_rows($query)!=0)
	{
		echo "<br>Login sukses";
			$data = mysqli_fetch_array($query);
			$_SESSION['id_guru'] = $data['id_guru']; 
			$_SESSION['nama_guru'] = $data['nama_guru'];			
			header("location:guru/guru.php");
	}
	else
	{
		 echo "<br>Login gagal ";
		 echo "<a href=index.php>Kembali</a>";
	}

?>