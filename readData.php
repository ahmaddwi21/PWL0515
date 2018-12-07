<?php
    require_once("DataKoneksi.php");
?>

<html>
<head>
<style type="text/css">
<!--
.style1 {color:#ffffff}
-->
</style>
</head>
<body>
    <h3>TABEL ADMIN</h3>
    <table cellpadding="0" cellspacing="1px" class="table">
    <thead>
        <tr bgcolor="#000033">
            <th><CENTER style=""></CENTER>
            <span class="style1">ID Admin</span>
            </th>
            <th><CENTER style=""></CENTER>
            <span class="style1">Username</span>
            </th>
            <th><CENTER style=""></CENTER>
            <span class="style1">Password</span>
            </th>
            <th><CENTER style=""></CENTER>
            <span class="style1">AKSI</span>
            </th>
        </tr>
    </thead> 
    <tbody>
        <?php
            $query = mysqli_query($con, "select * from admin");
            while($record = mysqli_fetch_array($query)){
                ?>
            <tr class= "active">
                <td><CENTER style=""><?php echo $record['id_admin']; ?></td>
                <td><CENTER style=""><?php echo $record['username']; ?></td>
                <td><CENTER style=""><?php echo $record['password']; ?></td>
                <td> <CENTER style="">
                <a href="updateadmin.php?id_admin=<?php echo $record['id_admin']?>"
                class="btn btn-xs btn-success">Update</a>
                <a href="deleteadmin.php?id_admin=<?php echo $record['id_admin']?>"
                class="btn btn-xs btn-danger" onClick="return confirm('Apakah anda yakin akan
                menghapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php 
            } 
        ?>
    </tbody>
</table>
</body>
</html>

<?php 
    mysqli_close($con);
?>