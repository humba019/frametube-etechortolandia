<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.</title>
</head>
<body>
<?php
session_start();
unset($_SESSION["login_usuario"]); //Exclui a variavel de sess�o
session_destroy(); //Destr�i toda a sess�o
header('Location: index.php');
?>
</body>
</html>