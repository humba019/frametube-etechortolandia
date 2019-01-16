<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>h2{font-family: 'Montserrat', sans-serif;}</style>
</head>
<body>
<?php

include("config.php");
session_start();

if (isset($_SESSION['login'])==true){

$pesquisauser=$conn->prepare("SELECT * FROM usuario WHERE (login_usuario = :Login)");

$pesquisauser->bindParam(':Login', $_SESSION['login']);

$pesquisauser->execute();

$linha=$pesquisauser->fetch(PDO::FETCH_ASSOC);
?>




<ul id='dropdown1' class='dropdown-content ' >
  <li ><a class="red-text text-accent-4" href="formvideo.php">Adicionar <i class="material-icons left">add_circle</i></a></li>
  <li ><a class="red-text text-accent-4" href="exibevideo.php">Playlist<i class="material-icons left">video_library</i></a></li>
  <li ><a class="red-text text-accent-4" href="exibevideoall.php">Comunidade <i class="material-icons left">public</i></a></li>
</ul>

<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper red accent-4">
      <a href="index.php" class="brand-logo center" style="font-family: 'Staatliches', cursive;color:#212121;">FrameTube</a></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class='dropdown-trigger' href='#' data-target='dropdown1' style="width:250px;">Vídeos<i class="material-icons left">apps</i></a></li>
        <li><a href="desloga.php" class="modal-trigger">Sair <i class="material-icons left">exit_to_app</i></a></li>
      </ul>
    </div>
  </nav>
  </div>

  <ul class="sidenav" id="mobile-demo">
  <li ><a href="formvideo.php">Adicionar <i class="material-icons right">add_circle</i></a></li>
  <li><a href="exibevideo.php">Playlist <i class="material-icons right">video_library</i></a></li>
  <li><a href="exibevideoall.php">Comunidade <i class="material-icons right">public</i></a></li>
        <li><a href="desloga.php" class="modal-trigger">Sair <i class="material-icons right">exit_to_app</i></a></li>
  </ul>
<?php
}
else{

?>
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper red accent-4">
      <a href="index.php" class="brand-logo center" style="font-family: 'Staatliches', cursive;color:#212121;">FrameTube</a></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
  <li ><a href="formcadastro.php">Novo Usuário <i class="material-icons left">person_add</i></a></li>
        <li><a href='exibevideoall.php' >Comunidade<i class="material-icons left">public</i></a></li>
  <li><a href="login.php" class="modal-trigger2">Entrar <i class="material-icons left">assignment_ind</i></a></li>
      </ul>
    </div>
  </nav>
  </div>
  
  <ul class="sidenav" id="mobile-demo">
  <li ><a href="formcadastro.php">Novo Usuário <i class="material-icons right">person_add</i></a></li>
  <li><a href="exibevideoall.php">Comunidade <i class="material-icons right">public</i></a></li>
  <li><a href="login.php" class="modal-trigger2">Entrar <i class="material-icons right">assignment_ind</i></a></li>
  </ul>

	<?php

	}

?>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script>
$(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<script>
 $('.dropdown-trigger').dropdown();
</script>
<script>
 $(document).ready(function(){
    $('.modal').modal();
  });
</script>
	<script>
	
	  $(document).ready(function(){
    	$('.collapsible').collapsible();
 		 });
	</script>
</body>
</html>