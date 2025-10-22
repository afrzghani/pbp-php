<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "navbar.html" ?> 
    <?php include "koneksi.php" ?>

    <?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($koneksi, $query);
    }

    if($result->num_rows>0){
        echo "Berhasil Login";
    } else {
        echo "Username/Password Salah";
    }
    ?>

    <form action="login.php" method="POST">
        <p>Username: <input type="text" name="username" id=""></p>
        <p>Password: <input type="password" name="password" id=""></p>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>