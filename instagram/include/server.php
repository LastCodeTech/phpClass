<?php
$dbhandle = 'mysql:host=localhost;dbname=instagram';
$username = 'root';
$password = '';
try{
    $pdo = new PDO($dbhandle,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDO_Exception $e){
    echo "error occured".$e->getMessage();                         
}