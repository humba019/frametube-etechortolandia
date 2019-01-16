<html>
<head>
	<title>Comunidade</title>
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
if(isset($_SESSION['login'])==true){
	
	$mensagem = "<p style='padding: 20px 10px;margin-top: 0px;'> Vídeos da comunidade, confira	<a href='exibevideo.php'> seus vídeos</a>!</p>";
		
}else{
	
	$mensagem = "<p>Videos da Comunidade, faça seu 	<a href='login.php' style='color:green;'> login</a> e confira seus vídeos!</p> ";
}
echo $mensagem;
$mostravideos=$conn->prepare("SELECT * FROM video ORDER BY cod_video");

$mostravideos->execute();

while($campo=$mostravideos->fetch(PDO::FETCH_ASSOC))
{
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
				</div>
			</div>         
							
		

<?php
}	
?>
	</div>
		</div>
			</div>
</body>
</html>