<html>
<head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php
include("config.php");

//include("cabecalholog.php");
if(isset($_POST["btOk"]) || isset($_SESSION["login"])){
session_start();
$_SESSION["login"] = $_POST["login"];
$_SESSION["senha"] = $_POST["senha"];

$pesquisauser=$conn->prepare("SELECT * FROM usuario WHERE (login_usuario = :Login)");

$pesquisauser->bindParam(':Login', $_POST['login']);

$pesquisauser->execute();

$linha=$pesquisauser->fetch(PDO::FETCH_ASSOC);
if (($_SESSION["login"]==$linha["login_usuario"] ) && ($_SESSION["senha"]==$linha["senha_usuario"])) {
header('Location: index.php');

}else {

$mensagem="<p style='color:red;'>Login e/ou senha incorretos.</p>";


unset($_SESSION["login"]);
unset($_SESSION["senha"]);
}}else{
    $mensagem="<p style='color:green;'>Insira seus dados.</p>";
}

?>
</body>
</html>