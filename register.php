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
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    $query = "INSERT INTO user (username, password) VALUES ('$username','$password')";

    mysqli_query($koneksi, $query);
    }
    ?>

    <form action="register.php" method="POST">
        <p>Username: <input type="text" name="username" id=""></p>
        <p>Password: <input type="password" name="password" id=""></p>
        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>