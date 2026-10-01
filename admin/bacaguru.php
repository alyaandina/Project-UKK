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
   <h2>Data Guru</h2>
      <hr>
      <input type="button" value="Tambah Data" class='btn btn-warning' onclick="location.href='?url=tambahguru'">
      <table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	  <br><br>
	  <tr class="fw-bold" align="center" style="background-color: #24A5E8;">
			<td>No</td>
			<td>ID Guru</td>
		    <td>Nama Guru</td>
			<td>Alamat</td>	
            <td>Password</td>
            <td>jk</td>								
	    	<td>Aksi</td>
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM guru";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr align="center">
					<td><?php echo "$no"; ?></td>
					<td><?php echo "$data[id_guru]"; ?></td>
					<td><?php echo "$data[nama_guru]"; ?></td>
					<td><?php echo "$data[alamat]"; ?></td>	
                    <td><?php echo "$data[password]"; ?></td>
                    <td><?php echo "$data[jk]"; ?></td>				
					<td align="center">
						<a href="?url=editguru&id=<?php echo "$data[id_guru]"; ?>" class='btn btn-warning'>EDIT</a>
						<a href="?url=hapusguru&id_guru=<?php echo "$data[id_guru]"; ?>" class='btn btn-danger' onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>