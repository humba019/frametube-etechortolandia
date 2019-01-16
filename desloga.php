<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.</title>
</head>
<body>
<?php
session_start();
unset($_SESSION["login_usuario"]); //Exclui a variavel de sessão
session_destroy(); //Destrói toda a sessão
header('Location: index.php');
?>
</body>
</html>