<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    include 'koneksi.php';
    session_start();

    if(isset($_POST['logout'])){
        session_destroy();
        header('location:login.php');
    }

    if(isset($_POST['delete'])){
        $username = $_SESSION['username'];
        $delete = "DELETE FROM user WHERE username = '$username'";
        mysqli_query($koneksi, $delete);

        session_destroy();
        header('location:login.php');
    }

    if(isset($_POST['ganti'])){
        header('location:ganti.php');
    }
    ?>

    <h1>Facebook</h1>
    <p>Ini adalah Dashboard</p>
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">
            Logout
        </button>
        <button type="submit" name="delete">
            Hapus Akun
        </button>
        <button type="submit" name="ganti">
            Ganti Password
        </button>
    </form>
</body>
</html>