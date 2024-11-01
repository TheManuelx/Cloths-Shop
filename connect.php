<?php
    $pdo = new PDO("mysql:host=db; dbname=MYSQL_DATABASE; charset=utf8", "root", "MYSQL_ROOT_PASSWORD");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>