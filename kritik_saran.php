<!DOCTYPE html>
<html>
<head>
	<title>DOPE</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<meta charset="UTF-8">
    <meta names="author" content="DOPE">
    <meta names="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css">

	<style type="text/css">
		@font-face {
			font-family: Furore;
			src: url(../font/Furore.otf);
		}
		@font-face {
			font-family: Fold;
			src: url(../font/fold.otf);
		}
		body{
			background-image: url(images/work.jpg);
			background-size:cover;
			font-family: Trebuchet MS;
			background-attachment:fixed;
			background-position: center;
			background-repeat: no-repeat;
			height: 100%;
			color:black;
		}
		.box {
		}
		.btn {
			background-color: dodgerblue;
			font-family: Furore;
			transition: 0.3s;
			border: 1px solid black;
		}
		.btn:hover {
			background-color: black;
			border:1px solid dodgerblue;
			color: dodgerblue;
		}
		.back {
			background-color: red;
		}
		.linkback {
			color: black;
		}
	</style>
</head>
<body>
	<?php include "headerPHP.php"; ?>
	<div class="container my-2">
		<div class="row">
			<div class="col-8 col-xl-8 box">
				<h2 style="text-align: center;font-family: Furore;">Kritik dan Saran</h2>
			    <form method="POST" action="">
				  	<div class="form-row">
				    	<div class="form-group col-md-6">
				      		<label for="nama">Nama</label>
				      		<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
				    	</div>
				    	<div class="form-group col-md-6">
				    		<label for="umur">Umur</label>
				      		<input type="text" class="form-control" id="umur" name="umur" placeholder="Umur">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="email">Email</label>
				    	<input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com">
				 	</div>
				  	<div class="form-group">
					    <label for="kritiksaran">Kritik dan Saran</label>
					    <textarea class="form-control" id="kritiksaran" name="kritiksaran" rows="3"></textarea>
					</div>
				  	<button type="submit" name="submit" class="btn col-12">Submit</button>
				  	<br><br>
				  	<button type="submit" class="btn col-2 back" name="back"><a style="text-decoration: none;" class="linkback" href="home_page.php">Back</a></button>
				</form>
			</div>
		</div>
	</div>
	<?php
        if(isset($_POST['submit'])) {
            $path_file = "kritiksaran.txt";
            $file = fopen($path_file,'a');
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $email = $_POST['email'];
            $kritiksaran = $_POST['kritiksaran'];
            $is_success = fwrite($file,"Kritik dan Saran\n");
            $is_success = fwrite($file,"Nama: ".$nama."\n");
            $is_success = fwrite($file,"Umur: ".$umur."\n");
            $is_success = fwrite($file,"Email: ".$email."\n");
            $is_success = fwrite($file,"Pesan: ".$kritiksaran."\n\n");
            
            if($is_success){
            	$berhasil = true;
                echo "
					<script>
						alert('Terimakasih telah memberikan kritik dan saran yang berguna bagi forum kami');
					</script>
				";
            } else {
            	$berhasil = false;
            }
            fclose($file);	
        }
	?>
	<?php include "footer.php"; ?>
</body>
</html>