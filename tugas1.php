<form action="tugas1-2.php" method="post">
    <fieldset>
        <legend>Ticket Online</legend>
        Tujuan : 
        <select name="tujuan" id="tujuan">
            <option value="jksm">Jakarta - Semarang</option>
            <option value="jgsb">Jogja - Surabaya</option>
            <option value="mlbdn">Malang - Bandung</option>
        </select>
        <br>Jam Keberangkatan :
        <input type="radio" name="keberangkatan" value="8.00">8.00
        <input type="radio" name="keberangkatan" value="9.00">9.00
        <input type="radio" name="keberangkatan" value="10.00">10.00
        <br>Jumlah Penumpang : 
        <input type="number" name="penumpang">
        <br>
        <input type="submit" name="next" value="Next">
        <input type="reset" name="reset"> 
    </fieldset>
</form>