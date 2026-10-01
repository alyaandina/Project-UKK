<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM mapel WHERE id_mapel ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='?url=aksi_edit_mapel&id=<?php echo "$id"; ?>' method='POST'>
			<tr>
			<div class="form-group mb-2">
			  <td>Id Mapel</td>
			  <td><input name='id_mapel' type='number' id="id_mapel" readonly class="form-control" value="<?php echo $data['id_mapel'] ?>"></td>
			  </tr>
			  </div>
			<tr>
			<div class="form-group mb-2">
			  <td>Nama Mapel</td>
			  <td><input name='nama_mapel' type='text' id="nama_mapel" class="form-control" value="<?php echo $data['nama_mapel'] ?>"></td>
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