<form action="?action=edit" method="post">
    <fieldset>
        <legend><h2>Form Registrasi</h2></legend>
        Masukkan Username : <input type="text" name="username" placeholder="Username"><br><br>
        Masukkan Email : <input type="email" name="email" placeholder="Email"><br><br>
        Masukkan Password : <input type="password" name="password" placeholder="Password"><br><br>
        Masukkan Program : 
        <input type="radio" name="program" value="reguler">Reguler
        <input type="radio" name-"program" value="premium">Premium<br><br>
        <input type="hidden" name="action" value="ïnsert">
        <input type="reset" value="Reset" name="reset">
        <input type="submit" value="SUBMIT" name="submit">
    </fieldset>

</form>


<?php
    if(isset($_POST['submit'])){
        echo "Username :", $_POST['username']."<br>";
        echo "Email : ", $_POST["email"]."<br>";
        echo "Password : ",$_POST["password"]."<br>";
        echo "Program : ", $_POST["program"]."<br>";
    }
?>