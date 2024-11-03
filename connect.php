<?php
    $dsn = 'mysql:host=db;dbname=MYSQL_DATABASE';
    $username = 'root';
    $password = 'MYSQL_ROOT_PASSWORD';
    
    try {
        $pdo = new PDO($dsn, $username, $password);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
?>