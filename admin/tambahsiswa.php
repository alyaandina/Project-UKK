<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <form action='?url=aksi_tambah_siswa' method='POST'>
	  <tr>
	  <div class="form-group mb-2">
	  <td>NIS</td>
	  <td><input type='text' name='nis' class="form-control" id="nis"></td>
      </div>
	  </tr>
	<tr>
	<div class="form-group mb-2">
	  <td>Nama Siswa</td>
	  <td><input type='text' name='nama_siswa' class="form-control" id="nama_siswa"></td>
	  </div>
	  </tr>
	<tr>
	<div class="form-group mb-2">
	  <td>Jenis Kelamin</td>
	  <td><select name="jk" size="1" id="jk" class="form-control">
	    <option value="Laki-laki">Laki-laki</option>
	    <option value="Perempuan">Perempuan</option>
	    </select>
	  </td>
	  </div>
	  </tr>
	<tr>
	<div class="form-group mb-2">
	  <td>Alamat</td>
	  <td><input type='text' name='alamat' class="form-control" id="alamat"></td></tr>
	  </div>
	<tr>
	<div class="form-group mb-2">
	  <td>Kelas ID</td>
	  <td><input type='text' name='kelas_id' class="form-control" id="kelas_id"></td></tr>
	  </div>
	<tr>
	<div class="form-group mb-2">
	  <td>Password</td>
	  <td><input type='text' name='password' class="form-control" id="password"></td></tr>
	  </div>
	  <tr>
		<td></td>
		<div class="form-group">
		<td><input type='submit' class="btn btn-success" value='simpan'></td>
		</tr>
	</table>
</form>
</body>
</html>