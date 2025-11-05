<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fesnuk</title>
</head>
<body>
    <?php include "navbar.html" ?> 
    <?php
    session_start();

    if(isset($_SESSION['isLogin'])){
        header('location:dashboard.php');
    }
    ?>
    
</body>
</html>