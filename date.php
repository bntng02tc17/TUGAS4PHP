<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if (date("H")<11) {
        echo "selamat Pagi<br>";
    }
    elseif(date("H")<15){
        echo "Selamat Sore<br>";
    }
    else {
        echo "Selamat Malam<br>";
    }
    ?>
</body>
</html>