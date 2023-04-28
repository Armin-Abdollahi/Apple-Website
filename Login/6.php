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
$t=$_GET['t'];
?>
<form action="7.php" method="get">
    <h4>Entre The User Information:</h4>
    <?php
    for ($i=1;$i<=$t;$i++)
    {
        echo "<br>User $i<br>";
        echo "<input type=\"text\" name=\"f[]\" placeholder='name'><br>";
        echo "<input type=\"text\" Last Name=\"f[]\" placeholder='Last Name'><br>";
    }
    ?>
    <br>
    <input type="submit" value="Done">
</form>
</body>
</html>