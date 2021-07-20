<?php
	include "connect.php";
	session_start();
	$nama = $_SESSION['login'];
	$forum = $_POST['forum'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$tanggal_posting = date("d/m/Y");

	$insert = mysqli_query($con, "INSERT INTO thread (nama, topik, judul, isi_thread, tanggal_posting, reply, views) VALUES ('$nama', '$forum', '$judul', '$isi', '$tanggal_posting', 1,1)");
	if($insert){
		mysqli_query($con, "UPDATE user SET post = post + 1 WHERE username='$nama'");
?>
		<script>
			window.location.href='previewThread.php?threadTitle=<?php echo $judul;?>';
			alert("Thread berhasil dibuat!");
		</script>
<?php
	} else {
?>
		<script>
			window.location.href='newThread.php';
			alert("Thread gagal dibuat");
			alert("<?php echo mysqli_error($con) . '<br>';echo mysqli_errno($con);?>");
		</script>
<?php
	}
	mysqli_close($con);
?>