<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM kelas WHERE id_kelas ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='?url=aksi_edit_kelas&id=<?php echo "$id"; ?>' method='POST'>
			<tr>
			<div class="form-group mb-2">
			  <td>Id Kelas</td>
			  <td><input name='id_kelas' type='number' id="id_kelas" readonly class="form-control" value="<?php echo $data['id_kelas'] ?>"></td>
			  </tr>
			  </div>
			<tr>
			<div class="form-group mb-2">
			  <td>Nama Kelas</td>
			  <td><input name='nama_kelas' type='text' id="nama_kelas" class="form-control" value="<?php echo $data['nama_kelas'] ?>"></td>
			  </tr>
			  </div>
              <tr>
			<div class="form-group mb-2">
			  <td>Jurusan Id</td>
			  <td><input name='jurusan_id' type='text' id="jurusan_id" class="form-control" value="<?php echo $data['jurusan_id'] ?>"></td>
			  </tr>
			  </div>
				<td></td>
				<div class="form-group">
				<td><input type='submit' class="btn btn-success" value='simpan'></td>
				</tr>
			</table>
		</form>
</body>
</html>