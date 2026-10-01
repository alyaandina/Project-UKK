<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <form action='?url=aksi_tambah_guru' method='POST'>
	  <tr>
	  <div class="form-group mb-2">
	  <td>Nama Guru</td>
	  <td><input type='text' name='nama_guru' class="form-control" id="nama_guru"></td>
	  </tr>
      </div>
	<tr>
       <div class="form-group mb-2">
	  <td>Alamat</td>
	  <td><input type='text' name='alamat' class="form-control" id="alamaat"></td>
	  </tr>
	  </div>
	 <div class="form-group mb-2">
	  <td>Password</td>
	  <td><input type='text' name='password' class="form-control" id="password"></td>
	  </tr>
	  </div>
      <div class="form-group mb-2">
      <label>Jenis Kelamin</label>
      <select name="jk" class="form-control" required>
         <option value="laki-laki"> laki-laki </option>
         <option value="perempuan"> perempuan </option>
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