<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM guru WHERE id_guru ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='?url=aksi_edit_guru&id=<?php echo "$id"; ?>' method='POST'>
			<tr>
			<div class="form-group mb-2">
			  <td>ID Guru</td>
			  <td><input name='id_guru' type='text' id="id_guru" readonly class="form-control" value="<?php echo $data['id_guru'] ?>"></td>
			  </tr>
			  </div>
			<tr>
			<div class="form-group mb-2">
			  <td>Nama Guru</td>
			  <td><input name='nama_guru' type='text' id="nama_guru" class="form-control" value="<?php echo $data['nama_guru'] ?>"></td>
			  </tr>
			  </div>
              <tr>
			<div class="form-group mb-2">
			  <td>Alamat</td>
			  <td><input name='alamat' type='text' id="alamat" class="form-control" value="<?php echo $data['alamat'] ?>"></td>
			  </tr>
			  </div>
			<tr>
			<div class="form-group mb-2">
			  <td>Password</td>
			  <td><input name='password' type='text' id="password" class="form-control" value="<?php echo $data['password'] ?>"></td>
			  </tr>
			  </div>
			  <div class="form-group mb-2">
              <label>Jenis Kelamin</label>
              <select name="jk" class="form-control" required>
			  <option value="<?=$data['jk'] ?>"> <?= $data['jk'] ?></option>
               <option value="laki-laki"> Laki-laki </option>
               <option value="perempuan"> Perempuan </option>
				<tr>
				<td></td>
				<div class="form-group">
				<td><input type='submit' class="btn btn-success" value='simpan'></td>
				</tr>
			</table>
		</form>
</body>
</html>