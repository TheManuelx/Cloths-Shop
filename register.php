<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user_name'];
    $password = $_POST['user_pass'];
    
    // ใช้ prepared statement เพื่อป้องกัน SQL Injection
    $stmt = $conn->prepare("INSERT INTO user (user_name, user_pass) VALUES (:user_name, :user_pass)");
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // กำหนดค่าให้กับตัวแปรใน statement
    $stmt->bindParam(":user_name", $username);
    $stmt->bindParam(":user_pass", $hashed_password);

    try {
        $stmt->execute();
        echo "ลงทะเบียนสำเร็จ";
    } catch (PDOException $e) {
        echo "เกิดข้อผิดพลาด: " . $e->getMessage();
    }
}
?>
