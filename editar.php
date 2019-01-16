<html>
<head>
	<title>Editar Video</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php 
include("editarvideo.php");
?>

<?php
 
include("config.php");
$mostravideoslog=$conn->prepare("SELECT * FROM video WHERE (cod_video = :cod_video)");
	
	$mostravideoslog->bindParam(':cod_video', $_REQUEST['Codigo']);

	$mostravideoslog->execute();


$campo=$mostravideoslog->fetch(PDO::FETCH_ASSOC); 
?>

<div class="container center-align">
	<div class="row">
<h2>Edição de Video</h2><br><br>
<p id="edi"><?php echo $mensagem; ?></p>
<form action="editar.php" method="post">
<input name='code' id='code' type='radio' value="<?php echo $campo['cod_video'];?>" checked>
<p>Codigo <?php echo $campo['cod_video'];?></p><br>
<div class="row">
<div class="input-field">
<label for="nome">Nome</label>
<input type="text" name="nome" id="nome" value="<?php echo $campo['nome_video'];?>" required >
</div>
<div class="input-field">
<label for="canal">Canal</label>
<input type="text" name="canal" id="canal" maxlength='45' value="<?php echo$campo['canal_video'];?>" required >
</div>
<div class="input-field">
<label for="link">Link</label>
<input type="text" name="link" id="link" maxlength='500' value="<?php echo$campo['link_video'];?>" required > 
</div>
</div>
  <button class="btn waves-effect waves-light blue-grey darken-3 " style="width:160px;" onclick="edi();" type="submit" id="btOk" name="btOk">Adicionar
    <i class="material-icons right">add_circle_outline</i>
  </button>
  <a class="btn waves-effect waves-light  red accent-4" style="width:160px;" href="index.php">Inicio
    <i class="material-icons right">home</i>
  </a>

</form>
	</div>
</div>

<script>
function edi() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("edi").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "editarvideo.php", true);
  xhttp.send();
}
</script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>