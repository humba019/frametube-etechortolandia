<html>
<head>
	<title>Cadastro de Vídeo</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php 
include("addvideo.php");
?>
<div class="container center-align">
	<div class="row">
<h2>Cadastro de Video</h2><br><br>
<p id="add"><?php echo $mensagem; ?></p>
<form action="formvideo.php" method="post">
<div class="row">
<div class="input-field">
<label for="nome">Nome</label>
<input type="text" name="nome" id="nome" required >
</div>
<div class="input-field">
<label for="canal">Canal</label>
<input type="text" name="canal" id="canal" required >
</div>
<div class="input-field">
<label for="link">Link</label>
<input type="text" name="link" id="link" required > 
</div>
</div>
  <button class="btn waves-effect waves-light blue-grey darken-3 " style="width:160px;" onclick="add();M.toast();" type="submit" id="btOk" name="btOk">Adicionar
    <i class="material-icons right">add_circle_outline</i>
  </button>
  <a class="btn waves-effect waves-light  red accent-4" style="width:160px;" href="index.php">Inicio
    <i class="material-icons right">home</i>
  </a>


</form>
	</div>
</div>

<script>
M.toast(){
  
}
function add() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("add").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "addvideo.php", true);
  xhttp.send();
}
</script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
