<?php
//comprovació dels camps del formulari amb operador ternari
$_POST['imatge']==""?$imatge="defecte":$imatge = $_POST['imatge'];
isset($_POST['mida'])?$mida = $_POST['mida']:$mida ="defecte";

//codi php solució



?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Examen PHP 1a Avaluació :: Exercici 01</title>
		<link  rel="stylesheet" href="../css/estilsProcessa.css" />
	</head>
	<body>
		<div id="wrapper">
			<header id="cap">
				<img src="../img/logophp.png" alt="logo PHP" class="fotocap" />
				<h1>Examen PHP 1a Avaluació :: Exercici 01</h1>
				<img src="../img/logophp.png" alt="logo PHP" class="fotocap" />
			</header>
			<section id="contingut">

			<!-- Resultat exercici 01 -->
				<article class="exercici">
					<?php
						//codi php solució
					?>
				</article>

			</section>
			<footer id="peu">
				<?php
					include 'peu.php';
				?>
			</footer>
		</div>
	</body>
</html>
