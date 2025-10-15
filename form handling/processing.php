<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
echo 'you submitted :';
echo '<br>'; 
echo 'username :'. $username;
echo'<br>';
echo 'password :'.$password;
}
else{
    header('Location:home.php');
}
