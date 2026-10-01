<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
   <h2>Edit - Manajemen Nilai</h2>
      <hr>
      <?php
      	$id = $_GET['id'];
	    $sql = "SELECT * FROM nilai WHERE id_nilai='$id'";
      	$query = mysqli_query($db_link,$sql);
      	$data = mysqli_fetch_array($query);
      ?>
      <form action='?url=aksi_edit_nilai&id=<?php echo "$id"; ?>' method='POST'>
	  <tr>
	 <div class="form-group mb-2">
	  <td>Id Nilai</td>
	  <td><input type='number' name='id_nilai' id="id_nilai" class="form-control" value="<?php echo $data['id_nilai'] ?>"></td>
	  </div>
	  </tr>
	  <tr>
	 <div class="form-group mb-2">
	  <td>Nis</td>
	  <td><input type='number' name='nis' id="nis" class="form-control" readonly value="<?php echo $data['nis'] ?>"></td>
	  </div>
	  </tr>
	 <tr>
	 <div class="form-group mb-2">
	  <td>ID Jurusan</td>
	  <td><input type='text' name='nama_jurusan' id="nama_jurusan" class="form-control" value="<?php echo $data['nama_jurusan'] ?>"></td>
	  </div>
	  </tr>
	 <tr>
	 <div class="form-group mb-2">
	  <td>ID Guru</td>
	  <td><input type='text' name='nama_guru' id="nama_guru" class="form-control" value="<?php echo $data['nama_guru'] ?>"></td>
	  </div>
	  </tr>
	 <tr>
	 <div class="form-group mb-2">
	  <td>ID Mapel</td>
	  <td><input type='text' name='nama_mapel' id="nama_mapel" class="form-control" value="<?php echo $data['nama_mapel'] ?>"></td>
	  </div>
	  </tr>
	 <tr>
	 <div class="form-group mb-2">
	  <td>ID Kelas</td>
	  <td><input type='text' name='nama_kelas' id="nama_kelas" class="form-control" value="<?php echo $data['nama_kelas'] ?>"></td>
	  </div>
	  </tr>
	  <tr>
	  <div class="form-group mb-2">
		<td>Ujian Harian</td>
		<td><input type="text" name="uh" class="form-control" value="<?php echo $data['uh'] ?>"></td>
	</tr>
	  <tr>
	  <div class="form-group mb-2">
		<td>UTS</td>
		<td><input type="text" name="uts" class="form-control" value="<?php echo $data['uts'] ?>"></td>
	</tr>
	  <tr>
	  <div class="form-group mb-2">
		<td>UAS</td>
		<td><input type="text" name="uas" class="form-control" value="<?php echo $data['uas'] ?>"></td>
	</tr>
	<tr>
	<div class="form-group mb-2">
		<td></td>
		<td>
			<br>
	  <input type='submit' class="btn btn-success" value='simpan'>
	  </td></tr>
	</table>
</form>
</body>
</html>