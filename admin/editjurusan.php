<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM jurusan WHERE id_jurusan ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='?url=aksi_edit_jurusan&id=<?php echo "$id"; ?>' method='POST'>
			<tr>
			<div class="form-group mb-2">
			  <td>Id Jurusan</td>
			  <td><input name='id_jurusan' type='number' id="id_jurusan" readonly class="form-control" value="<?php echo $data['id_jurusan'] ?>"></td>
			  </tr>
			  </div>
			<tr>
			<div class="form-group mb-2">
			  <td>Nama Jurusan</td>
			  <td><input name='nama_jurusan' type='text' id="nama_jurusan" class="form-control" value="<?php echo $data['nama_jurusan'] ?>"></td>
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