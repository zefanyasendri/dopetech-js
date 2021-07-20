<html>
<head>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/threatNew.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">

    <title>DOPE</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <meta charset="UTF-8">
    <meta names="author" content="DOPE">
    <meta names="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
	<form action="createThread.php" method="POST" enctype="multipart/form-data">
        <div id="login-box">   
            <div class="left-box">
                <center><h2 class="judul">Buat Thread</h2></center> 
                <select name="forum">
                    <option value="">--Pilih FORUM--</option>
                    <option value="Smartphone">Smartphone</option>
                    <option value="Smartwatch">Smartwatch</option>
                    <option value="Laptop/PC">Laptop/PC</option>
                    <option value="Others">Others</option>
               </select>
                <input type="text" name="judul" placeholder="Judul Thread">
                <textarea name="isi" rows="10" cols="30" placeholder="Isi Tread"></textarea>
            </div>
            <div class="right-box">
                <span class="info">Silahkan Membuat <br>Thread Anda Sendiri</span>
                <span class="info2">Laptop/PC</span>
                <span class="info2">Smarthphone</span>
                <span class="info2">Smartwatch</span>
                <span class="info2">Other Tech</span>
                <button type="submit" name="create" class="submit">Create Thread!</button>
            </div>
        </div>
	</form>
</html>