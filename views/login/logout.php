<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="/project/public/assets/css/stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<?php
    session_start();
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('Location: /project/index.php');
        exit();
    }
?>
<body>
    <form action="logout.php" method="POST">
        <button type="submit" name="logout" class="btn btn-link">Đăng Xuất</button>
    </form>
</body>
</html>
