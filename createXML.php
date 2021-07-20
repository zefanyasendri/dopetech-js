<?php
    include 'connect.php';
    $sql = "SELECT * FROM user";
    $q = mysqli_query($con,$sql) or die(mysql_error());
    $list = "<USER>";
    while($r = mysqli_fetch_array($q)){
        $list .= "<LIST>";
        $list .= "<ID>".$r['id']."</ID>";
        $list .= "<NAMA>".$r['nama_lengkap']."</NAMA>";
        $list .= "<USERNAME>".$r['username']."</USERNAME>";
        $list .= "<PASSWORD>".$r['password']."</PASSWORD>";
        $list .= "<EMAIL>".$r['email']."</EMAIL>";
        $list .= "<JENISKELAMIN>".$r['jk']."</JENISKELAMIN>";
        $list .= "<JUMLAHPOST>".$r['post']."</JUMLAHPOST>";
        $list .= "<JOINDATE>".$r['join_date']."</JOINDATE>";
        $list .="</LIST>";
    }
    $list .= "</USER>";
    $x = new SimpleXMLElement($list);
    $x->asXML("User.xml")
?>