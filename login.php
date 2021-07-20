<!-- cek apakah tombol login sudah di tekan atau belum -->
<?php 
	session_start();
	require 'functions.php';
	if(isset($_POST['login'])) {//tampung data inputan user 
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

		//cek username
		if (mysqli_num_rows($result) === 1) {
			//cek passwordnya
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row['password'])){
				$_SESSION['login'] = $username;
				//if true : redirect ke index setelah login
				header("Location: home_page.php");
				exit;
			} 
		}
		//if false : tampilkan pesan error
		$error = true;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="DOPE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DOPE</title>

	<!-- Icon -->
	<link rel="icon" type="image/png" href="images/icon.png">

	<!-- Style External -->
	<link rel="stylesheet" type="text/css" href="css/style_login2.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/all.min.css">
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login">Login</p>
		<form action="" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<div class="input-group">
	            	<div class="input-group-prepend">
	            		<div class="input-group-text"><i class="fas fa-user"></i></div>
	            	</div>
	            	<input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" id="username">
	          	</div>
          	</div>

          	<div class="form-group">
				<label for="pass">Password</label>
				<div class="input-group">
	            	<div class="input-group-prepend">
	            		<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
	            	</div>
	            	<input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" id="pass">
	         	</div>
         	</div>

			<br>
			<center>
				<?php if(isset($error)): ?>
					<pre style="color:red;font-style: italic;font-size: 11px;">Username atau Password anda Salah/Belum Terdaftar</pre>
				<?php endif; ?>
				<button type="submit" name="login" class="login">Login</button>
				<br>
				<div class="button">
					<button type="submit" name="kembali" class="btn-kembali">Kembali</button>
					<button type="submit" name="daftar" class="btn-daftar">Daftar</button>
				</div>
				<!-- Pencet Tombol Kembali -->
				<?php 
					if(isset($_POST['kembali'])){
						//redirect ke halaman home sebelum login
						header("Location: home_page.php");
						exit;
					}
				?>

				<!-- Pencet Tombol Daftar -->
				<?php 
					if(isset($_POST['daftar'])) {
						//redirect ke halaman daftar.php
						header("Location: daftar.php");
						exit;
					}
				?>
			</center>
		</form>
	</div>
</body>
</html>