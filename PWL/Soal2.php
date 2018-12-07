<form action="?action" method="POST">
    <fieldset>
        <legend>Form Peserta Ujian</legend>
        Nama : <input type="text" name="nama">
        <br><br>NIM : <input type="text" name = "nim">
        <br><br>Mata Kuliah : 
        <select name="makul" id="">
            <option value="PWL">PWL</option>
            <option value="AI">AI</option>
            <option value="Mobile">Mobile</option>
        </select>
        <br><br><input type="submit"><input type="reset">

    </fieldset>



</form>


<?php
    if(isset($_POST)){
    
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $makul = $_POST['makul'];

    $nama = ucwords($nama);
    $nama_temp = explode(" ", $nama);
    $first = $nama_temp[0];
    $alias1 = $nama_temp[1];
    $alias1 = substr($alias1, 0, 1 );
    $alias2 = $nama_temp[2];
    $alias2 = substr($alias2, 0, 1);


    echo "<br><br><h1><b>Peserta Ujian</b></h1>";
    echo "Nama : ";
    echo $first, " ", $alias1,". " ,$alias2, ".";
    echo "<br><br>NIM : ", $nim;
    echo "<br><br>Mata Kuliah :", $makul;

    }

?>