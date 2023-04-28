<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="../Pic/0.png">
    <link rel="stylesheet" href="../Style2.css">
</head>
<body>
<?php
$u=$_POST['u'];
$p=$_POST['p'];
$c=$_POST['c'];
$w="Armin";
$x="2468";
$y="Ali";
$z="1357";
if ($u=="Armin" and $p=="2468" and $c==2020)
{
    header("location:3.php");
}
if ($u=="Ali" and $p=="1357" and $c==2020)
{
    header("location:4.php");
}
else
{
    echo"Wrong <span class='s2'> Username </span> Or <span class='s3'> Password </span><br><br>";
    echo "<button type='button'><a href='../Login/1.php'>Try Again</a></button>";
}
?>
</body>
</html>