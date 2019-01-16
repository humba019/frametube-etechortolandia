<html>
<head>
	<title>Exibição</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
<?php 
include("cabecalholog.php");
?>

<div class="container center-align">

<div class="row " >
			<div class="col s12 m12 l12">
<?php
include("config.php");


if (isset($_SESSION['login'])==true){

	
	?>
	<p style="padding: 20px 10px;margin-top: 0px;">
	Esta playlist foi criada pelo(a) usuário(a) <a><?php echo $linha['nome_usuario'];?></a>!<br> 
	</p>
	<?php

	$mostravideoslog=$conn->prepare("SELECT * FROM video WHERE (cod_usuario = '$linha[cod_usuario]')ORDER BY cod_video");
		
	$mostravideoslog->execute();
	
	if($mostravideoslog->rowCount()==0){
	?>

	<p>Adicione videos a sua playlist agora!<br>Acesse <a href='formvideo.php'>cadastro de videos.<br><i class="material-icons center">add_circle</i></a></p>

	<?php 
	}else{
	while($campo=$mostravideoslog->fetch(PDO::FETCH_ASSOC)){
	?>
<div style="display:inline-block;">
<div class="card">
	<div class="card-image waves-effect waves-block waves-light">
	<?php echo "<iframe width='100%' height='50%' src='$campo[link_video]' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";?>
	</div>
	<div class="card-content">
	<span class="card-title activator grey-text text-darken-4"><?php echo $campo['nome_video'];?><i class="material-icons right">more_vert</i></span>
	<p><a href="<?php echo $campo['link_video'];?>" >On YouTube</a></p>
	</div>
	<div class="card-reveal" style="background-color:rgba(255,255,255,0.9);">
	<span class="card-title grey-text text-darken-4">Código <?php echo $campo['cod_video'];?><i class="material-icons right">close</i></span>
	<p>Canal <?php echo $campo['canal_video'];?></p>
	<p>Enviado por <?php
	$usuario=$conn->prepare("SELECT * FROM usuario WHERE cod_usuario = '$campo[cod_usuario]'");

	$usuario->execute();

	$campousu=$usuario->fetch(PDO::FETCH_ASSOC);
	
	echo $campousu["nome_usuario"];
	
	?></p>
	<?php echo"
	<a class='waves-effect waves-light btn-large blue-grey darken-3' style='width:160px;border-top:2px solid #212121;' href='excluir.php?Codigo=$campo[cod_video]'>apagar<i class='material-icons left'>delete</i></a>
	<a class='waves-effect waves-light btn-large blue-grey darken-3' style='width:160px;border-top:2px solid #212121;' href='editar.php?Codigo=$campo[cod_video]'>editar<i class='material-icons left'>create</i></a>";
	?>
	</div>
</div>      
	
	<?php 
	}
}
	}else {
		header("Location:exibevideoall.php");
	}
?>
</div>
	</div>
		</div>
<script>
function exc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("exc").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "cadastro.php", true);
  xhttp.send();
}
</script>
</body>
</html>