<?php
require_once('DataKoneksi.php');
$query1 = mysqli_query($con, "select * from admin where id_admin='".$_GET['id_admin']."' ");
    while($record = mysqli_fetch_array($query1)){
        ?>
<html>
<head>

</head>

<body>
    <h3>Update Admin</h3>
    <form action="" method="post">
        <table width="200" border="0">
            <tr>
                
            </tr>
        </table>
    </form>
</body>
</html>