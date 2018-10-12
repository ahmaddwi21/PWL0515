<form action="?action2" method="post">
    <fieldset>
        <legend>Ticket Online</legend>
        <?php
            for($jumlah=1; $jumlah<=$_POST['penumpang'];$jumlah++){
                echo "Nama Penumpang : <input type='text' name='namaPenumpang[]'><br><br>";
            }
        ?>
        <input type="submit" name="submit">
        <input type="reset" name="reset">
    </fieldset>
    <input type="hidden" value="<?= $_POST['tujuan']; ?>" name="tujuan">
    <input type="hidden" value="<?= $_POST['keberangkatan']; ?>" name="keberangkatan">

</form>