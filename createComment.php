<?php
	session_start();
	include "connect.php";
	if(!isset($_SESSION['login']) && empty($_SESSION['login'])){
?>
	<script>
		alert("Untuk Membuat Comment, Silahkan Login terlebih Dahulu");
		history.go(-1);
	</script>
<?php 
	} else {
		$isi_komen = $_POST['isi'];
		$judul = $_GET['threadTitle'];
		$tanggal_komen = date("d/m/Y");
		$username = $_SESSION['login'];
		$insert = mysqli_query($con, "INSERT INTO komentar(nama, judul_thread, isi_komen, tanggal_komen) VALUES ('$username', '$judul', '$isi_komen', '$tanggal_komen')");
		if($insert){
			mysqli_query($con, "UPDATE user SET post = post + 1 WHERE username='$username'");
			mysqli_query($con, "UPDATE thread SET reply = reply + 1 WHERE judul='$judul'");
		?>
			<script>
				alert("Komentar berhasil dibuat!");
				history.go(-1);
			</script>
	<?php
		} else {
			mysqli_error($con);
		}
	}
?>