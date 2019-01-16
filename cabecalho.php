<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.</title>
</head>
<body>
<?php
include("config.php");
session_start();
if (isset($_SESSION['login_usuario'])==true){

echo " Bem vindo ". $_SESSION['login_usuario']. " ";
echo "<a href='desloga.php'>sair</a>" . " ";
}
else{
echo "Faca seu ";
echo "<a href='login.php'>login</a>";
}
?>
<p><a href="login.php">Login</a></p>
<p><a href="exibevideo.php">Exibir Videos</a></p>
</body>
</html>