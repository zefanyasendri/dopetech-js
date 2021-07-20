 <html>
 <head>
    <title>DOPE</title>
    <meta charset="UTF-8">
    <meta names="author" content="DOPE">
    <meta names="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/icon.png">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/subForumStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        .btn-primary {
            background-color: dodgerblue;
            border: 1px solid dodgerblue;
            font-family: Trebuchet MS;
            transition: 0.5s;
        }
        .btn-primary:hover {
            background-color: black;
            border: 1px solid dodgerblue;
            color: dodgerblue;
        }
    </style>
</head>
<body>
    <?php include "headerPHP.php"; ?>
    <div class="container mt-100">
        <div>
            <a href="cekLoginThread.php">
                <button type="submit" class="btn btn-shadow btn-wide btn-primary"><span class="btn-icon-wrapper pr-2 opacity-7"> <i class="fa fa-plus fa-w-20"></i> </span> New Thread </button>
            </a> 
        </div>
        <div class="col-12 col-md-3 p-0 mb-3">
            <input type="text" class="form-control" placeholder="Search..."> 
        </div>
        <div class="card mb-3">
            <div class="card-header pr-0 pl-0">
                <div class="row no-gutters align-items-center w-100">
                    <div class="col ml-3">Topics</div>
                    <div class="col-4 text-muted">
                        <div class="row no-gutters align-items-center">
                            <div class="col-4">Replies</div>
                            <div class="col-8">Last update</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php  
                include "connect.php";
                $forum = $_GET['topik'];
                $result = mysqli_query($con, "SELECT * FROM thread WHERE topik='$forum'");
                if($result){
                    while($row = mysqli_fetch_assoc($result)):
                        $judul = $row['judul'];
            ?>
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col"> 
                                    <a href="previewThread.php?threadTitle=<?php echo $judul;?>" class="text-big" data-abc="true" onCilck=''><?php echo $row['judul'];?></a>
                                    <div class="text-muted small mt-1"> 
                                        Started at, <?php echo $row['tanggal_posting'];?>&nbsp; &nbsp; 
                                        <a class="text-muted" data-abc="true"><?php echo $row['nama'];?></a>
                                    </div>
                                </div>
                                <div class="d-none d-md-block col-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-4">
                                            <?php echo $row['reply'];?>
                                        </div>
                                        <div class="media col-8 align-items-center"> 
                                            <img src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/unknown_1-2-512.png" alt="" class="d-block ui-w-30 rounded-circle">
                                            <div class="media-body flex-truncate ml-2">
                                                <?php
                                                    $lastPost = mysqli_query($con, "SELECT * FROM komentar WHERE judul_thread='$judul' ORDER BY id DESC LIMIT 1");
                                                    while($lastComment = mysqli_fetch_assoc($lastPost)):
                                                        ?>
                                                        <div class="line-height-1 text-truncate"><?php echo $lastComment['tanggal_komen'];?></div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true"><?php echo $lastComment['nama'];?></a>
                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <hr class="m-0">
            <?php
                    endwhile;
                } else {
                    mysqli_error($con);
                }
                mysqli_close($con);
            ?>  
        </div>
    </div>
    <script>
        function getIdx(){
            <?php 

                $_SESSION['idxSmartphone'] = $i;?>
        }
    </script>
    <?php include "footer.php"; ?>          
</body>
</html>