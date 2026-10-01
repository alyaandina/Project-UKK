<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <form action='?url=aksi_tambah_admin' method='POST'>
	  <tr>
	  <div class="form-group mb-2">
	  <td>Admin ID</td>
	  <td><input type='text' name='admin_id' class="form-control" id="admin_id"></td>
	  </tr>
      </div>
	<tr>
	 <div class="form-group mb-2">
	  <td>Password</td>
	  <td><input type='text' name='password' class="form-control" id="password"></td>
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