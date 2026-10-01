<?php
	session_start();
	if(isset($_SESSION['admin_id'])){
		include '../koneksi.php';
	}else{
	   header("location:../index.php");
	}
?>
<!DOCTYPE html>
<html>
<body>
   <h2>Data Admin</h2>
      <hr>
      <input type="button" value="Tambah Data" class='btn btn-warning' onclick="location.href='?url=tambahadmin'">
      <table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	  <br><br>
	  <tr class="fw-bold" align="center" style="background-color: #24A5E8;">
			<td>No</td>
			<td>ID Admin</td>
		    <td>Admin ID</td>
			<td>Password</td>						
	    	<td>Aksi</td>
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM admin";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr align="center">
					<td><?php echo "$no"; ?></td>
					<td><?php echo "$data[id_admin]"; ?></td>
					<td><?php echo "$data[admin_id]"; ?></td>
					<td><?php echo "$data[password]"; ?></td>				
					<td align="center">
						<a href="?url=editadmin&id=<?php echo "$data[admin_id]"; ?>" class='btn btn-warning'>EDIT</a>
						<a href="?url=hapusadmin&admin_id=<?php echo "$data[admin_id]"; ?>" class='btn btn-danger' onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>