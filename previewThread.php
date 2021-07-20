<html>
	<head>
		<title>DOPE</title>
        <meta charset="UTF-8">
        <meta names="author" content="DOPE">
        <meta names="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="css/subForumStyle.css">
        <link rel="icon" type="image/png" href="images/icon.png">
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <style>
            @font-face {
                font-family: Furore;
                src: url(font/Furore.otf);
            }
            .purple-border textarea {
                border: 1px solid dodgerblue;
            }
            .purple-border .form-control:focus {
                border: 1px solid dodgerblue;
                box-shadow: 0 0 0 0.2rem rgba(30, 144, 255, .25);
            }
            .button-submit {
                background-color: dodgerblue;
                float: right;
                font-family: Furore;
                color: white;
                border-radius: 10px;
                border: 2px solid white;
                padding: 1% 7%;
                transition: 0.3s;
            }
            .button-submit:hover {
                background-color: black;
                color: dodgerblue;
                border: 2px solid dodgerblue;
            }
        </style>
	</head>
	<body>
		<?php
            include "headerPHP.php";
			include "connect.php";
            $judul = $_GET['threadTitle'];
			mysqli_query($con, "UPDATE thread SET views = views + 1 WHERE judul='$judul'");
            $thread = mysqli_query($con, "SELECT * FROM thread WHERE judul='$judul'");
            $komen = mysqli_query($con, "SELECT * FROM komentar WHERE judul_thread='$judul'");
			while($row = mysqli_fetch_assoc($thread)):
                $name = $row['nama'];
				?>
				<div class="container mt-100">
        			<div class="row">
            			<div class="col-md-12">
                			<div class="card mb-4">
                    			<div class="card-header">
                        			<div class="media flex-wrap w-100 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" class="d-block ui-w-40 rounded-circle" alt="">
                            			<div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true"><?php echo $row['nama'];?></a>
                                			<div class="text-muted small"><?php echo $row['tanggal_posting'];?>
                                			</div>
                            			</div>
                            			<div class="text-muted small ml-3">
                                			<?php 
                                                $post = mysqli_query($con, "SELECT * FROM user WHERE username='$name'");
                                                while($postCount = mysqli_fetch_assoc($post)):
                                                    ?>
                                                    <div>Member since <strong><?php echo $postCount['join_date'];?></strong></div>
                                                    <div><strong><?php echo $postCount['post']?></strong> posts</div>
                                            <?php
                                                endwhile;
                                            ?>
                           				</div>
                        			</div>
                    			</div>
                    			<div class="card-body">
                    				<p><b><?php echo $judul;?></b></p>
                        			<p><?php echo $row['isi_thread'];?></p>
                    			</div>
                    			<div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                    			</div>
                			</div>
            			</div>
        			</div>
                    <form action="createComment.php?threadTitle=<?php echo $judul;?>" method="POST" enctype="multipart/form-data">
                        <?php 
                            if(!isset($_SESSION['login']) && empty($_SESSION['login'])) { 
                        ?>
                                <p name="judul" value="$judul">Login untuk Memberi Komentar.</p>
                        <?php 
                            } else {
                        ?>      
                                <p name="judul" value="$judul">Beri Komentar sebagai: <?php echo $_SESSION['login'];?></p>
                        <?php
                            }
                        ?>
                        <div class="form-group purple-border">
                            <textarea class="form-control" name="isi" rows="3" placeholder="Komentar untuk Thread ini.."></textarea>
                        </div>
                        <button type="submit" name="create" class="button-submit">Post Comment</button>
                    </form>
    			</div>
                <br><br>
    	<?php
			endwhile;
			while($row = mysqli_fetch_assoc($komen)):
                $namaComment = $row['nama'];
		?>
				<div class="container mt-100">
        			<div class="row">
            			<div class="col-md-12">
                			<div class="card mb-4">
                    			<div class="card-header">
                        			<div class="media flex-wrap w-100 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" class="d-block ui-w-40 rounded-circle" alt="">
                            			<div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true"><?php echo $row['nama'];?></a>
                                			<div class="text-muted small"><?php echo $row['tanggal_komen'];?>
                                			</div>
                            			</div>
                            			<div class="text-muted small ml-3">
                                			<?php 
                                                $post = mysqli_query($con, "SELECT * FROM user WHERE username='$namaComment'");
                                                while($postCount = mysqli_fetch_assoc($post)):
                                                    ?>
                                                    <div>Member since <strong><?php echo $postCount['join_date'];?></strong></div>
                                                    <div><strong><?php echo $postCount['post']?></strong> posts</div>
                                            <?php
                                                endwhile;
                                            ?>
                           				</div>
                        			</div>
                    			</div>
                    			<div class="card-body">
                        			<p><?php echo $row['isi_komen'];?></p>
                    			</div>
                    			<div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                        				<!--ter align-middle" data-abc="true"> <i class="fa fa-heart text-danger"></i>&nbsp; <span class="align-middle">445</span> </a> <span class="text-muted d-inline-flex align-items-center align-middle ml-4"> <i class="fa fa-eye text-muted fsize-3"></i>&nbsp; <span class="align-middle">14532</span> </span> </div>
                        			<div class="px-4 pt-3"> <button type="button" class="btn btn-primary"><i class="ion ion-md-create"></i>&nbsp; Reply</button> </div>-->
                    			</div>
                			</div>
            			</div>
        			</div>
    			</div>
    	<?php
    		endwhile;
            mysqli_close($con);
            include "footer.php";
        ?>
	</body>
</html>