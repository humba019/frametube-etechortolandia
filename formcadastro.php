<html>
<head>
	<title>Cadastro de Usuário</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body >
<?php 
include("cadastro.php");
?>

<div class="container center-align">
	<div class="row">
<h2>Cadastro de Usuario</h2><br><br>
<p id="add"><?php echo $mensagem; ?></p>
<form action="formcadastro.php" method="post">
<div class="row">
<div class="input-field">
<label for="nome">Nome completo</label>
<input type="text" name="nome" id="nome" maxlength="100" required >
</div>
<div class="input-field">
<label for="canal">Login</label>
<input type="text" name="login" id="login" maxlength="20" required >
</div>
<div class="input-field">
<label for="link">Senha</label>
<input type="password" name="senha" id="senha" maxlength="10" required > 
</div>
</div>
  <button class="btn waves-effect waves-light blue-grey darken-3 " style="width:160px;" onclick="add();" type="submit" id="btOk" name="btOk">Cadastrar
    <i class="material-icons right ">add_circle_outline</i>
  </button>
  <a class="btn waves-effect waves-light  red accent-4" style="width:160px;" href="index.php">Inicio
    <i class="material-icons right">home</i>
  </a>


</form>
	</div>
</div>

<script>
function add() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("add").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "cadastro.php", true);
  xhttp.send();
}
</script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>