<?php
  session_start();

  $user = $_POST['username'];
  $pass = $_POST['password'];

  if(isset($_POST['submit'])){
    if($user  == "admin" && $pass == "admin"){
        if(isset($_POST['remember'])){
          setcookie
        }
    }
    else{

    }

  } 
?>

<form action="<?php $page ?>" method = "POST">
      <fieldset>
        <legend><h2>Login</h2></legend>
            Username  : <input type="text" name= "username" placeholder= "username"><br><br>
            Password   : <input type="password" name = "password" placeholder = "password"><br><br>
            <input type="submit" value="Login" name="submit">
            <input type="checkbox" name="remember">Remember Me 
       </fieldset>
</form>
