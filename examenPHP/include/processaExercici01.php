<?php
//comprovació dels camps del formulari amb operador ternari
$_POST['imatge']==""?$imatge="defecte":$imatge = $_POST['imatge'];
isset($_POST['mida'])?$mida = $_POST['mida']:$mida ="defecte";

if ($imatge == "defecte"){
    $url = "#";
    $imatge = "defecte.jpg";
    $titol = "DEFECTE";
    $estil = "contenidorPerDefecte";

}
else{
    $url = substr($imatge,2,strlen($imatge)-1);
    switch (substr($imatge,o,1)) {
        case '1':
            $imatge = "font.jpg";
            $titol = "FONT";
            $estil = "contenidorFont25Dolls";
            break;
        case '2':
            $imatge = "castell.jpg";
            $titol = "CASTELL";
            $estil = "contenidorCastellXativa";
            break;
        case '3':
            $imatge = "seu.jpg";
            $titol = "SEU";
            $estil = "contenidorLaSeuDeXativa";
            break;

    }
}



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
                    print "div class=$estil>\n";
                    print "   <a href=$url>\n";
                    print "       <img src=\"../img/$imatge\" class=$mida />\n";
                    print"    </a>\n";
                    print "<div>\n";
                    ?>
                </article>

					?>
				</>

			</section>
			<footer id="peu">
				<?php
					include 'peu.php';
				?>
			</footer>
		</div>
	</body>
</html>
