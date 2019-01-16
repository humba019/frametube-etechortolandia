<html>
<head>
<title>Login</title>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
    /* label color */
   .input-field label {
     color: #2979ff;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #2979ff ;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #2979ff ;
     box-shadow: 0 1px 0 0 #2979ff ;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000;
   }
 
      </style>
</head>
<?php
include("loga.php");
?>
<body>
<div class="container center-align">
    <div class="row">
    <h2>Autenticação</h2><br><br>
<p id="loga"><?php echo $mensagem; ?></p>
<form action="login.php" method="post" >
<div class="row">
<div class="row s12 m9 l6" style="margin-left:25%;margin-right:25%;">
<div class="input-field ">
<input type="text"     class="validate" id="login" name="login" maxlength="20" required />
<label for="login" >Login</label>
</div>
<div class="input-field">
<input type="password" class="validate" id="senha" name="senha" maxlength="10"required />
<label for="senha">Senha</label>
</div>
  <button class="btn waves-effect waves-light red accent-4" onclick="loga();" style="width:160px;" type="submit" id="btOk" name="btOk">Entrar
    <i class="material-icons right">send</i>
  </button>
  <a class="btn waves-effect waves-light blue-grey darken-3" style="width:160px;" href="index.php">Inicio
    <i class="material-icons right">home</i>
  </a>
   </div>
  </div>

</form>
</div>
    </div>
        </div>

<script>
function loga() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("loga").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "loga.php", true);
  xhttp.send();
}
</script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>