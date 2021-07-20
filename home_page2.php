<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <link rel="icon" type="image/png" href="images/icon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <title>DOPE</title>
    <meta charset="UTF-8">
    <meta names="author" content="DOPE">
    <meta names="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
       .forum-col{
           min-width: 16em;
       }
       .new-post-col{
           min-width: 12em;
       }
    </style>
</head>
<body>
    <div class="container my-3" style="margin-bottom:1%">
        <div class="row">
            <div class="col-12 col-xl-9">
                
                <!-- Forum Smartphone -->
                <h2 class="h4 text-white bg mb-0 p-4 rounded-top">Forum Smartphone</h2>
                <table class="table table-striped table-bordered table-responsive">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="forum-col">Forum</th>
                            <th scope="col">Views</th>
                            <th scope="col">Reply</th>
                            <th scope="col" class="new-post-col">Pos Terbaru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "connect.php";
                            $totalForum = 0;
                            $forumSmartphone = mysqli_query($con, "SELECT * FROM thread WHERE topik='Smartphone' ORDER BY reply DESC LIMIT 3");
                            while($row = mysqli_fetch_assoc($forumSmartphone)):
                                $judul = $row['judul'];
                                ?>
                                <tr>    
                                    <td>
                                        <h3 class="h5"><a href="previewThread.php?threadTitle=<?php echo $judul; ?>"><?php echo $row['judul'];?></a></h3>
                                        <p class="mb-0"><?php echo $row['isi_thread'];?></p>
                                    </td>
                                <td>
                                    <div class="dope"><?php echo $row['views']; ?></div>
                                </td>
                                <td>
                                    <div class="dope"><?php echo $row['reply'];?></div>
                                </td>
                                <td>
                                    <?php  
                                        $lastPost = mysqli_query($con, "SELECT * FROM komentar WHERE judul_thread='$judul' ORDER BY id DESC LIMIT 1");
                                        while($lastComment = mysqli_fetch_assoc($lastPost)):
                                    ?>
                                            <h4 class="h6 mb-0 font-weight-bold"><a href="#"><?php echo $lastComment['tanggal_komen'];?></a></h4>
                                            <div class="dope">by <a href="#"><?php echo $lastComment['nama'];?></a></div>
                                    <?php
                                        endwhile;
                                    ?>
                                </td>
                            </tr>
                        <?php
                                $totalForum++;
                            endwhile;
                        ?>
                        </tbody>
                </table>

                <!-- Forum Laptop -->
                <h2 class="h4 text-white bg mb-0 p-4 rounded-top">Kategori Laptop/PC</h2>
                <table class="table table-striped table-bordered table-responsive">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="forum-col">Forum</th>
                            <th scope="col">Views</th>
                            <th scope="col">Reply</th>
                            <th scope="col" class="new-post-col">Pos Terbaru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $forumLaptopPC = mysqli_query($con, "SELECT * FROM thread WHERE topik='Laptop/PC' ORDER BY reply DESC LIMIT 3");
                            while($row = mysqli_fetch_assoc($forumLaptopPC)):
                                $judul = $row['judul'];
                                ?>
                                <tr>    
                                    <td>
                                        <h3 class="h5"><a href="previewThread.php?threadTitle=<?php echo $judul; ?>"><?php echo $judul;?></a></h3>
                                        <p class="mb-0"><?php echo $row['isi_thread'];?></p>
                                    </td>
                                    <td>
                                        <div class="dope"><?php echo $row['views']; ?></div>
                                    </td>
                                    <td>
                                        <div class="dope"><?php echo $row['reply'];?></div>
                                    </td>
                                    <td>
                                        <?php
                                            $lastPost = mysqli_query($con, "SELECT * FROM komentar WHERE judul_thread='$judul' ORDER BY id DESC LIMIT 1");
                                            while($lastComment = mysqli_fetch_assoc($lastPost)):
                                                ?>
                                                <h4 class="h6 mb-0 font-weight-bold" style="color:dodgerblue;"><?php echo $lastComment['tanggal_komen'];?></h4>
                                                <div class="dope">by <span style="color:dodgerblue;"><?php echo $lastComment['nama'];?></span></div>
                                        <?php
                                            endwhile;
                                        ?>
                                    </td>
                                </tr>
                        <?php
                                 $totalForum++;
                            endwhile;
                        ?>
                    </tbody>
                </table>
                
                <!-- Forum Smartwatch -->
                <h2 class="h4 text-white bg mb-0 p-4 rounded-top">Forum Smartwatch</h2>
                <table class="table table-striped table-bordered table-responsive">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="forum-col">Forum</th>
                            <th scope="col">Views</th>
                            <th scope="col">Reply</th>
                            <th scope="col" class="new-post-col">Pos Terbaru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $forumSmartwatch = mysqli_query($con, "SELECT * FROM thread WHERE topik='Smartwatch' ORDER BY reply DESC LIMIT 3");
                            while($row = mysqli_fetch_assoc($forumSmartwatch)):
                                $judul = $row['judul'];
                                ?>
                                <tr>    
                                    <td>
                                        <h3 class="h5"><a href="previewThread.php?threadTitle=<?php echo $judul; ?>"><?php echo $judul;?></a></h3>
                                        <p class="mb-0"><?php echo $row['isi_thread'];?></p>
                                    </td>
                                <td>
                                    <div class="dope"><?php echo $row['views']; ?></div>
                                </td>
                                <td>
                                    <div class="dope"><?php echo $row['reply'];?></div>
                                </td>
                                <td>
                                    <?php
                                        $lastPost = mysqli_query($con, "SELECT * FROM komentar WHERE judul_thread='$judul' ORDER BY id DESC LIMIT 1");
                                        while($lastComment = mysqli_fetch_assoc($lastPost)):
                                            ?>
                                            <h4 class="h6 mb-0 font-weight-bold" style="color:dodgerblue"><?php echo $lastComment['tanggal_komen'];?></h4>
                                            <div class="dope" >by <span style="color:dodgerblue"><?php echo $lastComment['nama'];?></span></div>
                                    <?php
                                        endwhile;
                                    ?>
                                </td>
                            </tr>
                        <?php
                                 $totalForum++;
                            endwhile;
                        ?>
                        </tbody>
                </table>

                <!-- Forum Others -->
                <h2 class="h4 text-white bg mb-0 p-4 rounded-top">Forum Others</h2>
                <table class="table table-striped table-bordered table-responsive">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="forum-col">Forum</th>
                            <th scope="col">Views</th>
                            <th scope="col">Reply</th>
                            <th scope="col" class="new-post-col">Pos Terbaru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $forumOthers = mysqli_query($con, "SELECT * FROM thread WHERE topik='Others' ORDER BY reply DESC LIMIT 3");
                            while($row = mysqli_fetch_assoc($forumOthers)):
                                $judul = $row['judul'];
                                ?>
                                <tr>    
                                    <td>
                                        <h3 class="h5"><a href="previewThread.php?threadTitle=<?php echo $judul; ?>"><?php echo $judul;?></a></h3>
                                        <p class="mb-0"><?php echo $row['isi_thread'];?></p>
                                    </td>
                                <td>
                                    <div class="dope"><?php echo $row['views']; ?></div>
                                </td>
                                <td>
                                    <div class="dope"><?php echo $row['reply'];?></div>
                                </td>
                                <td>
                                    <?php
                                        $lastPost = mysqli_query($con, "SELECT * FROM komentar WHERE judul_thread='$judul' ORDER BY id DESC LIMIT 1");
                                        while($lastComment = mysqli_fetch_assoc($lastPost)):
                                            ?>
                                            <h4 class="h6 mb-0 font-weight-bold" style="color:dodgerblue"><?php echo $lastComment['tanggal_komen'];?></h4>
                                            <div class="dope">by <span style="color:dodgerblue"><?php echo $lastComment['nama'];?></span></div>
                                    <?php
                                        endwhile;
                                    ?>
                                </td>
                            </tr>
                        <?php
                                 $totalForum++;
                            endwhile;
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Kanan -->
            <div class="col-12 col-xl-3">
                <aside>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-xl-12">
                            <div class="card mb-3 mb-sm-0 mb-xl-3">
                                <div class="card-body">
                                    <h2 class="h4 ard-title dope2">Anggota Aktif</h2>
                                    <ul class="list-unstyled mb-0">
                                        <?php 
                                            $totalMember = 0;
                                            $members = mysqli_query($con, "SELECT * FROM user");
                                            while($row = mysqli_fetch_assoc($members)){
                                                ?>
                                                <li><a href="#"><?php echo $row['nama_lengkap'];?></a></li>
                                        <?php
                                                $totalMember++;
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="h4 ard-title dope2">Statistik Forum</h2>
                                    <dl class="row mb-0">
                                        <dt class="col-8">Total Thread:</dt>
                                        <dd class="col-4 mb-0"><?php echo $totalForum;?></dd>
                                    </dl>
                                    <dl class="row mb-0">
                                        <dt class="col-8">Total Topik:</dt>
                                        <dd class="col-4 mb-0">4</dd>
                                    </dl>
                                    <dl class="row mb-0">
                                        <dt class="col-8">Total Anggota:</dt>
                                        <dd class="col-4 mb-0"><?php echo $totalMember;?></dd>
                                    </dl>
                                </div>
                                <div class="card-footer">
                                    <div class="dope">Member Terbaru:</div>
                                    <div class="dope">
                                        <?php 
                                            $totalMember = 0;
                                            $members = mysqli_query($con, "SELECT * FROM user ORDER BY id DESC LIMIT 1");
                                            while($row = mysqli_fetch_assoc($members)){
                                        ?>
                                                <li><a href="#"><?php echo $row['nama_lengkap'];?></a></li>
                                        <?php
                                                $totalMember++;
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</body>
</html>