<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include "navbar.html" ?> 
    <?php include "koneksi.php" ?>

    <?php
    session_start();
    if(isset($_SESSION['isLogin'])){
        header('location:dashboard.php');
    }

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password_raw = $_POST['password'];
        $password = hash('sha256', $password_raw);
    
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($result) > 0){
        echo "Berhasil Login";
        $_SESSION['isLogin'] = true;
        $_SESSION['username'] = $username;
        header('location:dashboard.php');
    } else {
        echo "Username/Password Salah";
    }
    }
    ?>

    <h3>Login</h3>

    <form action="login.php" method="POST">
        <p>Username: <input type="text" name="username" id=""></p>
        <p>Password: <input type="password" name="password" id=""></p>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>