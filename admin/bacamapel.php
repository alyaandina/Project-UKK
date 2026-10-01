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
   <h2>Data Mapel</h2>
      <hr>
      <input type="button" value="Tambah Data" class='btn btn-warning' onclick="location.href='?url=tambahmapel'">
      <table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	  <br><br>
	  <tr class="fw-bold" align="center" style="background-color: #24A5E8;">
            <td>No</td>
			<td>Id Mapel</td>
			<td>Nama Mapel</td>							
	    	<td>Aksi</td>
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM mapel";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr align="center">
					<td><?php echo "$no"; ?></td>
					<td><?php echo "$data[id_mapel]"; ?></td>
					<td><?php echo "$data[nama_mapel]"; ?></td>			
					<td align="center">
						<a href="?url=editmapel&id=<?php echo "$data[id_mapel]"; ?>" class='btn btn-warning'>EDIT</a>
						<a href="?url=hapusmapel&id_mapel=<?php echo "$data[id_mapel]"; ?>" class='btn btn-danger' onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>