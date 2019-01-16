<html>
<head>
	<title>Excluir Vídeo</title>
	<meta charset="utf-8">
</head>
<body>
<?php

include("config.php");
include("cabecalholog.php");
$excluivideo=$conn->prepare("DELETE FROM video WHERE (cod_video = :cod_video)");
$excluivideo->bindParam(':cod_video', $_REQUEST['Codigo']);
$excluivideo->execute();
?>
<div class="container center-align">

<h2 style='color:red;'>Vídeo excluído.</h2>
</div>
</div>
</body>