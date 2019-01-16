<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php 
include("cabecalholog.php");
?>
<?php

if (isset($_SESSION['login'])==true){

?>
<div class="container">
	<div class="row center-align s12 m9 l6">
	<h2>Tutorial</h2><br><br>
	<p style='color:green;'>Versão Desktop</p>
	<div class="container">
<ul class="collapsible">
  <li class="active">
	<div class="collapsible-header blue-grey-text text-darken-1 blue-grey lighten-3"><i class="material-icons">filter_1</i> Parte: abrindo um vídeo qualquer.</div>
	<div class="collapsible-body ">
	<span>
		<figure>
			<img src="tutorial\1.png" style="width:100%;">
				
			<div class="card-panel blue-grey darken-4 blue-grey-text text-lighten-3">
			<p style="font-family: 'Montserrat', sans-serif;"> Essa é barra que aparece abaixo de qualquer vídeo do YouTube, no botão com seta para a direita juntamente com a palavra "Compartilhar", efetue um clique.</p>	
			</div>
		</figure>
	</span>
	</div>
  </li>
  <li>
	<div class="collapsible-header blue-grey-text text-darken-2 blue-grey lighten-3"><i class="material-icons">filter_2</i> Parte: incoporar vídeo.</div>
	<div class="collapsible-body">
	<span>
		<figure>
			<img src="tutorial\2.png" style="width:100%;">

			<div class="card-panel blue-grey darken-4 blue-grey-text text-lighten-3">
			<p style="font-family: 'Montserrat', sans-serif;"> Após o clique irá surgir uma nova barra de opções de compartilhamento, clique no botão com "< >" escrito logo abaixo "Incorporar".</p>	
			</div>
		</figure>		
	</span>
	</div>
  </li>
  <li>
	<div class="collapsible-header blue-grey-text text-darken-3 blue-grey lighten-3"><i class="material-icons">filter_3</i> Parte: localizando link.</div>
	<div class="collapsible-body">
	<span>
		<figure>
			<img src="tutorial\3.png" style="width:100%;">
			<div class="card-panel blue-grey darken-4 blue-grey-text text-lighten-3">
			<p style="font-family: 'Montserrat', sans-serif;"> Agora só basta copiar todo o link após "scr=" sem as aspas.</p>	
			</div>
		</figure>	
	</span>
	</div>
  </li>
</ul>
	</div>
	</div>
</div>

<?php

}else{

?>
<div class="container blue-grey-text text-lighten-3">
	<div class="row center-align">
	
	<h2 class="center-align" style="">Seja bem-vindo.</h2><br><br>
	<p>Faça seu <a herf="login.php">login</a> ou <a href="formcadastro.php">cadastre-se</a>.</p>
	
	</div>
</div>

<?php

}

?>
</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>