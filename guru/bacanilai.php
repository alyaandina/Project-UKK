<?php
	if(isset($_SESSION['id_guru'])){
		include '../koneksi.php';
	}else{
	   header("location:../index.php");
	}
?>
<!DOCTYPE html>	
<html>
<body>
   <h2>Data Nilai</h2>
      <hr>
      <input type="button" value="Tambah Data" class='btn btn-warning' onclick="location.href='?url=tambahnilai'">
      <table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	  <br><br>
	  <tr class="fw-bold" align="center" style="background-color: #24A5E8;">
			<td>No</td>
			<td>Id Nilai</td>
			<td>Nis</td>
		    <td>Nama Jurusan</td>
			<td>Nama Guru</td>
			<td>Nama Mapel</td>							
	    	<td>Nama Kelas</td>
			<td>uh</td>	
			<td>uts</td>
			<td>uas</td>	
			<td>na</td>	
			<td>Aksi</td>	
		</tr>
		<?php
			$no=1;
			$sql = "SELECT * FROM nilai";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr align="center">
					<td><?php echo "$no"; ?></td>
					<td><?php echo $data['id_nilai']; ?></td>
					<td><?php echo $data['nis']; ?></td>
					<td><?php echo $data['nama_jurusan']; ?></td>
					<td><?php echo $data['nama_guru']; ?></td>
					<td><?php echo $data['nama_mapel']; ?></td>	
					<td><?php echo $data['nama_kelas']; ?></td>			
					<td><?php echo $data['uh']; ?></td>
					<td><?php echo $data['uts']; ?></td>
					<td><?php echo $data['uas']; ?></td>
					<td><?php echo $data['na']; ?></td>
					<td align="center">
						<a href="?url=editnilai&id=<?php echo "$data[id_nilai]"; ?>" class='btn btn-warning'>EDIT</a>
						<a href="?url=hapusnilai&id=<?php echo "$data[id_nilai]"; ?>" class='btn btn-danger'>HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>