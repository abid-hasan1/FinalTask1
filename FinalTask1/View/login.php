<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login Page</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post" action="login.php">
        ID: <input type="text" name="id"><br>
        Pass: <input type="password" name="pass"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
