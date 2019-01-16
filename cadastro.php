<html>
<head>
</head>
<body>
<?php

include("config.php");

if(isset($_POST["btOk"])==true || isset($_SESSION["login"])){
include("cabecalholog.php");
$inserelogin = $conn->prepare("INSERT INTO usuario ( nome_usuario, login_usuario, senha_usuario)
					VALUES (:nome, :login, :senha)");
					
$inserelogin->bindParam(':nome', $_POST['nome']);
$inserelogin->bindParam(':login', $_POST['login']);
$inserelogin->bindParam(':senha', $_POST['senha']);

$verificalogin = $conn->prepare("SELECT * FROM usuario WHERE (login_usuario = :login_usuario)");
$verificalogin->bindParam(':login_usuario', $_POST['login']);
$verificalogin->execute();
 

if($verificalogin->rowCount()==0){ 
$inserelogin->execute(); 
$mensagem = "<p style='color:green;'>Novo usuário <a>".$_POST['login']."</a> e senha <a> ".$_POST['senha']."</a> adicionado ao FrameTube!<br> Efetue o <a href='login.php'>seu login</a> agora!</p>";
}
else{ 
$mensagem = "<p style='color:red;'> O usuário <a>".$_POST['login']."</a> já existe, tente com <a href='formcadastro.php'>outro login</a>.</p>";
}}else{
$mensagem = "<p style='color:green'>Insira seus dados</p>";
}
?>
</div>
</body>