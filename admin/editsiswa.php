<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM siswa WHERE nis ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='?url=aksi_edit_siswa&id=<?php echo "$id"; ?>' method='POST'>
			<tr>
			<div class="form-group mb-2">
			  <td>NIS</td>
			  <td><input name='nis' type='text' id="nis" class="form-control" value="<?php echo $data['nis'] ?>"></td>
			  </tr>
              </div>
			<tr>
			<div class="form-group mb-2">
			  <td>Nama Siswa</td>
			  <td><input name='nama_siswa' type='text' id="nama_siswa" class="form-control" value="<?php echo $data['nama_siswa'] ?>"></td>
			  </tr>
			  </div>
			<tr>
			<div class="form-group mb-2">
			  <td>Alamat</td><td><input name='alamat' type='text' id="alamat" class="form-control" value="<?php echo $data['alamat'] ?>"></td></tr>
			  </div>
			<tr>  
			<div class="form-group mb-2">
			  <td>Kelas ID</td>
			  <td><input name='kelas_id' type='text' id="kelas_id" class="form-control" value="<?php echo $data['kelas_id'] ?>"></td></tr>
			  </div>
			<div class="form-group mb-2"> 
			  <td>Password</td>
			  <td><input name='password' type='text' id="password" class="form-control" value="<?php echo $data['password'] ?>"></td></tr></div>
			  <tr>
			  <div class="form-group mb-2">
              <label>Jenis Kelamin</label>
              <select name="jk" class="form-control" required>
			  <option value="<?=$data['jk'] ?>"> <?= $data['jk'] ?></option>
               <option value="laki-laki"> Laki-laki </option>
               <option value="perempuan"> Perempuan </option>
				<td></td>
				<tr><div class="form-group">
				<td><input type='submit' class="btn btn-success" value='simpan'></td></tr>
			</table>
		</form>
</body>
</html>