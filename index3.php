<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Guru - Rekap Nilai.</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <body style="background-image: linear-gradient(to bottom right, #00AFFF,#CAEEFF); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    <div class="center">
	<form class="user" action="ceklogin3.php" method="post">
      <h1>Login Guru</h1>
        <div class="txt_field">
          <input type="text" name="id_guru" required>
          <span></span>
          <label>Id Guru</label>
        </div>
        <div class="txt_field">
          <input type="text" name="nama_guru" required>
          <span></span>
          <label>Nama Guru</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
        <a href="index.html">kembali kehalaman utama?</a>
        </div>
      </form>
    </div>
	<script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>