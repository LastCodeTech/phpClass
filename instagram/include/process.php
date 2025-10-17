<?php
if($_SERVER['REQUEST_METHOD']=='POST');
{
    $uname =htmlspecialchars($_POST['username']);
    $article=htmlspecialchars($_POST['article']);

try{
    require_once('server.php');
    $query = "insert into Publication(username,article) VALUES(?,?);";
    $prep = $pdo -> prepare($query);
    $insert = $prep -> execute([$uname,$article]);
    if($insert){
        echo'your publication have been submitted';
    }   
    else{
        echo'an error occured';
    }
}
catch(PDOException $e){
         echo'error'.$e->getMessage(); 
    }
}