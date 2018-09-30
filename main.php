<?php
session_start();
?>

<!DOCTYPE html>
<body>
    <?php
    $username = $password = "";
    //echo "hallo";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        if($username == "bintang" && $password == "pweb") {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("Location:date.php");
        }
        else{
            header("Location:form.php");
        }

    }    
    //header("Location:date.php");

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
</body>
</html>