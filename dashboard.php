<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    session_start();

    if(isset($_POST['logout'])){
        session_destroy();
        header('location:login.php');
    }
    ?>

    <h1>Facebook</h1>
    <p>ini adalah Dashboard</p>
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">
            Logout
        </button>
    </form>
</body>
</html>