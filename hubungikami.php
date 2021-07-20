<!DOCTYPE html>
<html>
<head>
    <title>DOPE</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <meta charset="UTF-8">
    <meta names="author" content="DOPE">
    <meta names="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="css/galery.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css">

    <style>
        @font-face {
            font-family: Furore;
            src: url(font/Furore.otf);
        }
        body {
            background-image:url('images/bghitam.jpg');
            background-size:cover;
            font-family: Trebuchet MS;
            background-attachment:fixed;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
            margin-top: 6%;
        }
        .form {
            background-color: rgba(0,0,0,0.7);
            border-radius: 10px;
            border: 2px solid dodgerblue;
        }
        h1 {
            font-family: Furore;
            color: dodgerblue;    
        }
        .button {
            background-color: dodgerblue;
            color: black;
            border: 2px solid black;
            font-family: Furore;
            transition: 0.3s;
        }
        .button:hover {
            background-color: black;
            color: dodgerblue;
            border: 2px solid dodgerblue;
        }
    </style>
</head>
<body>
    <!-- Bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                    <form class="text-center form p-5" action="createPesanMasalah.php" method="POST">
                        <h1>Hubungi Kami</h1><br>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="namaawal" class="form-control" placeholder="Nama Depan">
                            </div>
                            <div class="col">
                                <input type="text" name="namaakhir" class="form-control" placeholder="Nama Belakang">    
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="phone" class="form-control" placeholder="Telepon">
                            </div>
                            <div class="col">
                                <input type="email" name="email" class="form-control" placeholder="Email">        
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea class="form-control rounded-0" name="pesanmasalah" id="exampleFormControlTextarea2" rows="3" placeholder="Pesan Masalah"></textarea>
                        </div>
                        <button class="btn button btn-block" name="submit" type="submit">Send</button>
                    </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>