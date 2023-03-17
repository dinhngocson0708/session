<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    session_start();
    $_SESSION["name"]="Ngọc Sơn";
?>
    <div>Hello.... <a href="session2.php">Please Click here</a></div>
</body>
</html>

