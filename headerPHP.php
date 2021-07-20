<?php 
	session_start();
	/*if ( !isset($_SESSION["login"])) {
		header("Location: login.php");
		exit;
	}*/
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/header.css">	
</head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="header">
	<a class="navbar-brand judul" href="home_page.php">
		<span style="color:white;" >DOPE</span><span style="color:dodgerblue;" >tech</span>
	</a>
	<button class="navbar-toggler" type="subjmit" data-toggle="collapse" data-target="#navbarSupportedContent">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item nav">
				<a class="nav-link" href="home_page.php">Beranda</a>
			</li>
			<li class="nav-item dropdown nav">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Konten</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a id="hi" class="dropdown-item" href="cekLoginThread.php">Buat Thread</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="forum.php?topik=Smartphone">Forum Smartphone</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="forum.php?topik=Smartwatch">Forum Smartwatch</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="forum.php?topik=Laptop/PC">Forum Laptop/PC</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="forum.php?topik=Others">Forum Others</a>
				</div>    
			</li>
			<li class="nav-item nav">
				<a class="nav-link" href="about_us.php">Tentang Kami</a>
			</li>
			<?php  
				if(!isset($_SESSION['login']) && empty($_SESSION['login'])) { 
			?>
					<li class="nav-item nav"">
						<a class="nav-link" href="login.php">Login</a>
					</li>
			<?php } else { ?>
					<li class="nav-item nav" style="border-radius: 11px;border:2px solid red;" >
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
			<?php } ?>
		</ul>
	</div>
</nav>
<script>
	// When the user scrolls down 250px 
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 150) {
		document.getElementById("header").style.boxShadow = "2px 2px 0px 2px dodgerblue";
	  } else {
		document.getElementById("header").style.boxShadow = "0px 0px 0px 0px transparent";
	  }
	}
</script>