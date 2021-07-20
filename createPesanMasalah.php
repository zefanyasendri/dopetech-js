<?php
        session_start();
        if(!isset($_SESSION['login']) && empty($_SESSION['login'])){
?>
    <script>
            alert("Untuk membuat Pesan, silahkan Login terlebih dahulu");
            history.go(-2);
    </script>
<?php
        } else {
            include "connect.php";
            $namaawal = $_POST['namaawal'];
            $namaakhir = $_POST['namaakhir'];
            $namalengkap = $namaawal . " " . $namaakhir;
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $pesanmasalah = $_POST['pesanmasalah'];
            $checkNama = "";
            $check = mysqli_query($con, "SELECT * FROM user WHERE nama_lengkap = '$namalengkap'");
            while($row = mysqli_fetch_assoc($check)){
                $checkNama .= $row['nama_lengkap'];
            }
            if($checkNama == $namalengkap){
                if(mysqli_query($con,"INSERT INTO pesan(namaawal,namaakhir,phone,email,pesanmasalah) VALUES ('$namaawal','$namaakhir','$phone','$email','$pesanmasalah')")){
?>          
                    <script>
                        alert("Pesan anda telah Terkirim. Kami akan Membalas anda dengan E-mail yang anda kirim");
                        window.location.href='about_us.php';
                    </script>
<?php
                }
            } else{
?>          
                <script>
                    alert("Pesan anda Gagal Dikirim. Nama Tidak Sesuai/Tidak Ada.");
                    history.go(-1);
                </script>
<?php
            }
            mysqli_close($con);
        }
?>