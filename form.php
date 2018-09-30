<?php
session_start();
// echo "Hallo";
// echo empty($_SESSION["username"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Form Login</title>
</head>
<body>
    <?php
    if(!empty($_SESSION["username"]) && !empty($_SESSION["password"])) {
        header("location:date.php");
    }
    ?>

    <form action="main.php" method="POST">
        nama <br>
        <input type="text" name="username"><br>
        password <br>
        <input type="text" name="password"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>