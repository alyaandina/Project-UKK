<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <form action='?url=aksi_tambah_jurusan' method='POST'>
	  <tr>
	  <div class="form-group mb-2">
	  <td>Nama Jurusan</td>
	  <td><input type='text' name='nama_jurusan' class="form-control" id="nama_jurusan"></td>
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