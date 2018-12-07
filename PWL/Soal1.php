<form action="#/action" method = "POST">
    <fieldset>
        <legend>Program Pola Bilangan</legend>
        Masukkan Angka : <input type="number" name = "jumlah">
        <input type="submit">
    </fieldset>
</form>

<?php

    $jumlah = $_POST['jumlah'];
    $bilangan = 0;

    echo "<h1>Pola Bilangan</h1>";

    for($i = 1; $i <= $jumlah; $i++){
        $bilangan = $bilangan + pow(2, $i);
        echo $bilangan, ", ";
    }


?>