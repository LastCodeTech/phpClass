<?php

if($_SERVER['REQUEST_METHOD']=='POST');{
    $uname = htmlspecialchars($_POST['username']);
    $article = htmlspecialchars($_POST['article']);

    try{
        require_once('server.php');
        $query = 'INSERT INTO posts(article,username) VALUES(?,?);';
        $prep = $pdo->prepare($query);
        $insert = $prep->execute([$article,$uname]);
        if($insert){
            echo'your article has been successfully published';
        }
        else{
            echo 'error occured';
        }
    }

    catch(PDOException $e)
    {
        echo 'error'.$e ->getMessage();
    }
}

