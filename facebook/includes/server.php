<?php
$dbhandle = 'mysql:host=localhost;dbname=facebook';
$username = 'root';
$password ='';

try{
    $pdo = new PDO($dbhandle,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    ECHO'error occured :'.$e->getMessage();
}