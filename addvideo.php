<html>
<head>
	<title>Cadastro de Vídeo</title>
	<meta charset="utf-8">
</head>
<body> 
<?php
include("config.php"); 
if(isset($_POST["btOk"])==true || isset($_SESSION["login"])){
	
include("cabecalholog.php");
	$insere = $conn->prepare("INSERT INTO video ( nome_video, canal_video, link_video, cod_usuario) VALUES (:nome_video, :canal_video, :link_video,'$linha[cod_usuario]')");

	$insere->bindParam(':nome_video', $_POST['nome']);
	$insere->bindParam(':canal_video', $_POST['canal']);
    $insere->bindParam(':link_video', $_POST['link']);

	
	$insere->execute();
	$mensagem = "<p style='color:green;'> Novo video adicionado.</p>
	<p>Acesse <a href='exibevideo.php'>sua playlist</a> ou  os <a href='exibevideoall.php'>videos da comunidade.</a></p>";
}else{
	$mensagem="<p style='color:green;'>Insira os dados requisitados.</p>";
}
 ?>
</p>
</div>
</body>
</html>