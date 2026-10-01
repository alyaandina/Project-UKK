<?php
	session_start();
	if(isset($_SESSION['admin_id'])){
		include '../koneksi.php';
	}else{
	   header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<body>
   <h2>Data Siswa</h2>
      <hr>
	  <input type="button" value="Tambah Data" class='btn btn-warning' onclick="location.href='?url=tambahsiswa'">
      <table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	  <br><br>
		<tr class="fw-bold" align="center" style="background-color: #24A5E8;">
			<td>No</td>
			<td>NIS</td>
		    <td>Nama Siswa</td>
		    <td>Jenis kelamin</td>
		    <td>Alamat</td>
			<td>Kelas ID</td>
			<td>Password</td>								
	    	<td>Aksi</td>
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM siswa";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
			{
			    ?>
				<tr align="center">
					<td><?php echo "$no"; ?></td>
					<td><?php echo "$data[nis]"; ?></td>
					<td><?php echo "$data[nama_siswa]"; ?></td>
					<td><?php echo "$data[jk]"; ?></td>
					<td><?php echo "$data[alamat]"; ?></td>
					<td><?php echo "$data[kelas_id]"; ?></td>
					<td><?php echo "$data[password]"; ?></td>
					<td align="center">
						<a href="?url=editsiswa&id=<?php echo "$data[nis]"; ?>" class='btn btn-warning'>EDIT</a>
						<a href="?url=hapussiswa&id=<?php echo "$data[nis]"; ?>" class='btn btn-danger'  onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
			}
		?>
		</table>
</body>
</html>