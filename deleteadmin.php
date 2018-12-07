<?php 
    require_once("DataKoneksi.php");

    if($_GET['id_admin'] != ''){
        mysqli_query($con, "delete from admin where id_admin='".$_GET['id_admin']."'");
        echo "<script>alert ('Data Berhasil Dihapus')</script>";
        echo"<neta http-equiv='refresh' content='0;url=readData.php'>";
    }
?>