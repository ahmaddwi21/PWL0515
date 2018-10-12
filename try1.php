<form action="#" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend><h2>Form Registrasi</h2></legend>
        Pilih File : <input type="file" name="berkas" value=""><br><br>
        <input type="hidden" name="action" value="ïnsert">
        <input type="reset" value="Reset" name="reset">
        <input type="submit" value="SUBMIT" name="submit">
    </fieldset>
</form>

<?php
    if(isset($_POST['submit'])){
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    }

?>