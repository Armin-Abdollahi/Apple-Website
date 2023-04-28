<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>
    <link rel="shortcut icon" href="../Pic/0.png">
    <link rel="stylesheet" href="../Style2.css">
</head>
<body>
<?php
echo "<img src=\"../Pic/Right.png\" width=\"50\" height=\"50\"><br>";
echo "Successfully Registred.<br><br><br>";
echo "User's Is:<br><br>";
$f=$_GET['f'];
foreach ($f as $a){
    echo $a;
    echo "<br><br>";
}
?>
<br>
<button type="button"><a href="4.php">Exit</a></button>
</body>
</html>