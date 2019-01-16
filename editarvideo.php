<html>
<head>
	<title>Editar Video</title>
	<meta charset="utf-8">
</head>
<body>
	<body>
<?php
include("config.php");
if(isset($_POST["btOk"])==true || isset($_SESSION["login"])){
include("cabecalholog.php");
$editarvideo=$conn->prepare("UPDATE video SET nome_video = :nome, canal_video = :canal, 
								link_video = :link WHERE cod_usuario = cod_usuario");

$editarvideo->bindParam(':nome', $_POST['nome']);
$editarvideo->bindParam(':canal', $_POST['canal']);
$editarvideo->bindParam(':link', $_POST['link']);

$editarvideo->execute();

	$mensagem = "<p style='color:green;'>Vídeo alterado com sucesso!</p>";
}else{
	$mensagem = "<p style='color:green;'>Altere os dados.</p>";

}
?>
</div>
</body>