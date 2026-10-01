<?php
	session_start();
	include "koneksi.php";	
	$admin_id = $_POST["admin_id"];
	$password = $_POST["password"];	
	$sql= "SELECT * FROM admin where admin_id = '$admin_id' and password = '$password'";	
	$query = mysqli_query($db_link,$sql);		
	        if(mysqli_num_rows($query)!=0){
	        $data = mysqli_fetch_array($query);
            session_start();
	 		$_SESSION['admin_id'] = $data['admin_id']; 
			$_SESSION['password'] = $data['password'];	
			header("location:admin/admin.php");
		}
		else
		{
		 echo "<br>Login gagal ";
		 echo "<a href=index2.php>Kembali</a>";
	}

?>