<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
</head>
<body>
    <?php
    include "koneksi.php";
    session_start();
    $username = $_SESSION['username'];

    if(isset($_POST['ganti'])){
        $pw1 = $_POST['pw1'];
        $pw2 = $_POST['pw2'];

        if($pw1 == $pw2){
            $update = "UPDATE user SET password = '$pw1' WHERE username = '$username'";
            mysqli_query($koneksi, $update);
            header('location:dashboard.php');
        }
    }
    ?>

    <h1>Facebook</h1>
    <h3>Ganti Password</h3>
    <form action="ganti.php" method="POST">
        <p>Password: <input type="password" name="pw1" id=""></p>
        <p>Ulangi Password: <input type="password" name="pw2" id=""></p>
        <button type="submit" name="ganti">Ganti Password</button>
    </form>
</body>
</html>