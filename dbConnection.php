<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=medicina', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}catch(PDOException $e){
    echo "ERRROR CONECTING TO DATABASE". $e->getMessage();
    exit();
}   


?>