<?php
session_start();
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user_name'];
    $password = $_POST['user_pass'];


    $stmt = $pdo->prepare("SELECT * FROM user WHERE user_name = :user_name");
    $stmt->bindParam(":user_name", $username);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($password, $row['user_pass'])) {
            $_SESSION['user_name'] = $username;
            header("Location: profile.html");
            exit();
        } else {
            echo "รหัสผ่านไม่ถูกต้อง";
        }
    } else {
        echo "ชื่อผู้ใช้ไม่ถูกต้อง";
    }
}
?>

