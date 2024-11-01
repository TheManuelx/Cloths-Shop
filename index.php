<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>เข้าสู่ระบบ</h2>
        <form method="POST" action="login.php">
            <div class="input-group">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">รหัสผ่าน</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">เข้าสู่ระบบ</button>
        </form>
        <div class="links">
            <a href="ForgetPassword.html">ลืมรหัสผ่าน?</a>
            <a href="register.html">ลงทะเบียน</a>
        </div>
    </div>
</body>
</html>
