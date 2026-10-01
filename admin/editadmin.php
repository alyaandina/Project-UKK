<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM admin WHERE admin_id ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='?url=aksi_edit_admin&id=<?php echo "$id"; ?>' method='POST'>
			<tr>
			<div class="form-group mb-2">
			  <td>ID Admin</td>
			  <td><input name='id_admin' type='text' id="id_admin" readonly class="form-control" value="<?php echo $data['id_admin'] ?>"></td>
			  </tr>
			  </div>
			<tr>
			<div class="form-group mb-2">
			  <td>Admin ID</td>
			  <td><input name='admin_id' type='text' id="admin_id" class="form-control" value="<?php echo $data['admin_id'] ?>"></td>
			  </tr>
			  </div>
			<tr>
			<div class="form-group mb-2">
			  <td>Password</td>
			  <td><input name='password' type='text' id="password" class="form-control" value="<?php echo $data['password'] ?>"></td>
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