<!-- Cek tekan tombol Daftarkan -->
<?php  
	require 'functions.php';	
	if(isset($_POST['daftar'])){
		if(registrasi($_POST) > 0) {
			echo "
				<script>
					alert('Anda Berhasil Membuat Akun! Silahkan Login dengan Akun Tersebut');
				</script>
			";
		} else {
			echo "
				<div class='container'>
					<div class='alert alert-danger alert-dismissible fade show'>Anda Gagal Membuat Akun! Silahkan Cek kembali atau Buat Kembali!
					</div>
				</div>
			";
			echo mysqli_error($con);
		}
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

	<!-- Link External -->
	<link rel="stylesheet" type="text/css" href="css/styleDaftar.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/all.min.css">
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login">Buat Akun Anda</p>
		<form action="" method="post">
			<div class="form-group">
				<div class="input-group">
	            	<div class="input-group-prepend">
	            		<div class="input-group-text"><i class="fas fa-user-circle"></i></div>
	            	</div>
	            	<input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan" required>
	          	</div>
          	</div>

          	<div class="form-group">
				<div class="input-group">
	            	<div class="input-group-prepend">
	            		<div class="input-group-text"><i class="far fa-user-circle"></i></div>
	            	</div>
	            	<input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang" required>
	          	</div>
          	</div>

			<div class="form-group">
				<div class="input-group">
	            	<div class="input-group-prepend">
	            		<div class="input-group-text"><i class="fas fa-user"></i></div>
	            	</div>
	            	<input type="text" name="username" class="form-control" placeholder="Username" required>
	          	</div>
          	</div>

          	<div class="form-group">
				<div class="input-group">
	            	<div class="input-group-prepend">
	            		<div class="input-group-text"><i class="fas fa-envelope"></i></div>
	            	</div>
	            	<input type="email" name="email" class="form-control" placeholder="Email" required>
	          	</div>
          	</div>

          	<div class="form-group">
				<div class="input-group">
	            	<div class="input-group-prepend">
	            		<div class="input-group-text"><i class="fas fa-unlock"></i></div>
	            	</div>
	            	<input type="password" name="password" class="form-control" placeholder="Password" required>
	          	</div>
          	</div>

          	<div class="form-group">
				<div class="input-group">
	            	<div class="input-group-prepend">
	            		<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
	            	</div>
	            	<input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password Anda" required>
	          	</div>
          	</div>
			
			<label>Jenis Kelamin : </label>
			<input type="radio" id="contactchoice1" name="jk" value="Laki" required>
			<label for="contactchoice1">Laki-laki</label>
			<input type="radio" id="contactchoice2" name="jk" value="Perempuan" required>
			<label for="contactchoice2">Perempuan</label>

			<br><br><br>
			<center>
				<button type="submit" name="daftar" class="daftar">Daftarkan Akun Anda</button>
			</center>
				<br>
				<div class="button">
					<a class="sudah" href="login.php">Sudah punya akun?</a>
					<button type="submit" name="kembali" class="btn-kembali">Kembali</button>
				</div>
		</form>
		<br>
	</div>
	</div>
</body>
</html>