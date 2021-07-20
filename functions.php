<?php  
	$con = mysqli_connect("localhost","root","","tubes"); 

	function registrasi($data) {
		global $con;
		//username harus huruf kecil semua,dan mengabaikan simbol seperti "', :, ;, ~, dll"
		//ambil data 
		$nama_depan = $data['nama_depan'];
		$nama_belakang = $data['nama_belakang'];
		$nama_lengkap = $nama_depan." ".$nama_belakang;
		$username = strtolower($data['username']); 
		$email = $data['email'];
		$date_join = date("d/m/Y");
		//mysqli_real_escape_string untuk mengecek masukan user ada ga huruf2 escape seperti :,,,;,\,/, dll
		$password = mysqli_real_escape_string($con, $data['password']);
		$password2 = mysqli_real_escape_string($con, $data['password2']);
		$jk = $data['jk'];
	
		//cek username sudah ada atau belum
		$result = mysqli_query($con, "SELECT username FROM user WHERE username = '$username'");
		if (mysqli_fetch_assoc($result)){
			echo "
				<script>
					alert('Username sudah Terdaftar!')
				</script>
			";
			return false;
		}

		//cek konfirmasi password
		if ($password !== $password2) {
			echo "
				<script>
					alert('Konfirmasi Password tidak Sesuai!');
				</script>
			";
			return false;
		} 
		//enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//tambahkan userbaru ke database
		mysqli_query($con, "INSERT INTO user VALUES('','$nama_lengkap','$username','$password','$email','$jk',0,'$date_join')");

		//mengembalikan jumlah baris yang terpengaruh di query sebelumnya
		return mysqli_affected_rows($con);
	}
?>