<!DOCTYPE html>
<html>
	<?php
		session_start();
		if(!isset($_SESSION['login']) && empty($_SESSION['login'])){
	?>
	<script>
			//window.location.href='home_page.php';
			alert("Untuk membuat thread, silahkan login terlebih dahulu");
			history.go(-1);
	</script>
<?php
			//header("Location: home_page.php");
	} else {
		header("Location: newThread.php");
?>
<?php
	}
?>
</html>