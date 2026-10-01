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
   <h2>Data Kelas</h2>
      <hr>
      <input type="button" value="Tambah Data" class='btn btn-warning' onclick="location.href='?url=tambahkelas'">
      <table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	  <br><br>
	  <tr class="fw-bold" align="center" style="background-color: #24A5E8;">
            <td>No</td>
			<td>Id Kelas</td>
			<td>Nama Kelas</td>		
            <td>Jurusan Id</td>						
	    	<td>Aksi</td>
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM kelas";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr align="center">
					<td><?php echo "$no"; ?></td>
					<td><?php echo "$data[id_kelas]"; ?></td>
					<td><?php echo "$data[nama_kelas]"; ?></td>
                    <td><?php echo "$data[jurusan_id]"; ?></td>			
					<td align="center">
						<a href="?url=editkelas&id=<?php echo "$data[id_kelas]"; ?>" class='btn btn-warning'>EDIT</a>
						<a href="?url=hapuskelas&id_kelas=<?php echo "$data[id_kelas]"; ?>" class='btn btn-danger' onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>