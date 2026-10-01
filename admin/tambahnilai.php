<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>
      <form action='?url=aksi_tambah_nilai' method='POST'>
	  <tr>
	 <div class="form-group mb-2">
	  </tr>
      </div>
	  <tr>
	 <div class="form-group mb-2">
	  <td>NIS</td>
	  <td>
	  	<select name="nis" class="form-control">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqlsiswa = "SELECT * FROM siswa";
	  			$querysiswa = mysqli_query($db_link,$sqlsiswa);
	  			while ($datasiswa = mysqli_fetch_array($querysiswa)) {
	  				echo "
	  					<option value='$datasiswa[nis]'>$datasiswa[nis]- $datasiswa[nama_siswa]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	  <tr>
	 <div class="form-group mb-2">
	  <td>Nama Jurusan</td>
	  <td>
	  	<select name="nama_jurusan" class="form-control">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqljurusan = "SELECT * FROM jurusan";
	  			$queryjurusan = mysqli_query($db_link,$sqljurusan);
	  			while ($datajurusan = mysqli_fetch_array($queryjurusan)) {
	  				echo "
	  					<option value='$datajurusan[nama_jurusan]'> $datajurusan[nama_jurusan]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	  <tr>
	 <div class="form-group mb-2">
	  <td>Nama Guru</td>
	  <td>
	  	<select name="nama_guru" class="form-control">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqlguru = "SELECT * FROM guru";
	  			$queryguru = mysqli_query($db_link,$sqlguru);
	  			while ($dataguru = mysqli_fetch_array($queryguru)) {
	  				echo "
	  					<option value='$dataguru[nama_guru]'>$dataguru[nama_guru]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	  <tr>
	 <div class="form-group mb-2">
	  <td>Nama Mapel</td>
	  <td>
	  	<select name="nama_mapel" class="form-control">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqlmapel = "SELECT * FROM mapel";
	  			$querymapel = mysqli_query($db_link,$sqlmapel);
	  			while ($datamapel = mysqli_fetch_array($querymapel)) {
	  				echo "
	  					<option value='$datamapel[nama_mapel]'> $datamapel[nama_mapel]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	  <tr>
	 <div class="form-group mb-2">
	  <td>Nama Kelas</td>
	  <td>
	  	<select name="nama_kelas" class="form-control">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqlkelas = "SELECT * FROM kelas";
	  			$querykelas = mysqli_query($db_link,$sqlkelas);
	  			while ($datakelas = mysqli_fetch_array($querykelas)) {
	  				echo "
	  					<option value='$datakelas[nama_kelas]'>$datakelas[nama_kelas]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	  <tr>
	  <div class="form-group mb-2">
		<td>Ujian Harian</td>
		<td><input type="text" name="uh" class="form-control"></td>
	</tr>
	  <tr>
	  <div class="form-group mb-2">
		<td>UTS</td>
		<td><input type="text" name="uts" class="form-control"></td>
	</tr>
	  <tr>
	  <div class="form-group mb-2">
		<td>UAS</td>
		<td><input type="text" name="uas" class="form-control"></td>
	</tr>
	<tr>
	<div class="form-group mb-2">
		<td></td>
		<td>
			<br>
	  <input type='submit' class="btn btn-success" value='simpan'>
	  </td></tr>
	</table>
</form>
</body>
</html>