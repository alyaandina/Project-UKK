<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <form action='?url=aksi_tambah_kelas' method='POST'>
	  <tr>
	  <div class="form-group mb-2">
	  <td>Nama Kelas</td>
	  <td><input type='text' name='nama_kelas' class="form-control" id="nama_kelas"></td>
	  </tr>
      </div>
      <div class="form-group mb-2">
	  <td>Jurusan id</td>
	  <td><input type='text' name='jurusan_id' class="form-control" id="jurusan_id"></td>
	  </tr>
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