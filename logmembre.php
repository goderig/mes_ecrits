<!DOCTYPE html>
<html>
<head>
    <title></title>
	<link rel="stylesheet" type="text/css" href="logmembre.php.css">
</head>
<body>
   <?php 
        $niveau = filter_input(INPUT_POST, "niveau");
		$edit_PWD = filter_input(INPUT_POST, "edit_PWD");
    ?>
	<h2 id = "header_titre" style="text-align: center;">Accès personnalisé aux textes de Godaille de Rigadeaux</h2>

    <div id="banner">    
	  <div style="text-align: center"><a href="#" class="Header_img"><img src="rc_images/logo.jpg" alt="" /></a></div>
    </div>
    <p id= "legend" style="text-align: center;">En bandeau :&nbsp;Parade navale dans la rade de Lorient - devant le port de plaisance de Kernevel&nbsp;</p>

    <h3 id="titre" style="text-align: center;"> Merci de préciser le degré acquis (en cochant la case correspondante)...</h3>
	
    <form method="POST" action="logmembre.php">    
		<div style="margin:0px 5px 10px 500px"</div>
		<input type="radio" value="Apprenti" name="niveau" id="choix1">Apprenti..........(Pxxxxxxxxxxxxxx)<br> 
        <input type="radio" value="Compagnon" name="niveau" id="choix2">Compagnon.....(Nxxxxx)<br> 
        <input type="radio" value="Maitre" name="niveau" id="choix3">Maitre..............(Cxxxxx)<br> 
		<input type="radio" value="1er Ordre" name="niveau" id="choix4">1er Ordre.........(Axxxxxxx)<br> 
		<input type="radio" value="2eme Ordre" name="niveau" id="choix5">2eme Ordre......(Ex-xxxxx)<br> 
		<input type="radio" value="3eme Ordre" name="niveau" id="choix6">3eme Ordre......(Yxxxxxx-xxxxxxx)<br> 
        <input type="radio" value="4eme Ordre" name="niveau" id="choix7">4eme Ordre......(Exxxxxxx)<br> 
		</div> 
		<h3 id="aide1" style="text-align: center;"> Saisir un mot de passe : Outil du Grade ou Mot de l'Ordre (1er caractère pour mémoire)...</h3>
		<div style="text-align: center"><input type="password" value="" title="" name="PWD"  id="edit_PWD" ></div>
		<h3 id="aide2" style="text-align: center;"> En Majuscule, Espace remplacé par - (num6), puis Valider et Continuer</h3>
		
		<div style="text-align: center"> <input type="Submit" value="Valider" id="Valider"></div>
        <?php

			echo "";
			$niv_num = 0;
			$page_name = "";
	
			if($niveau == ""){echo "<p style='text-align: center'>Qualité de Visiteur par défaut"; $niv_num =0;$check = true;}
			if(($niveau == "Apprenti") AND ($edit_PWD="PERPENDICULAIRE")) {
				echo "<p style='text-align: center'>Qualité de $niveau confirmée</p>"; $niv_num =1;$check = true;}
			if(($niveau == "Compagnon") AND ($edit_PWD="NIVEAU")) {
				echo "<p style='text-align: center'>Qualité de $niveau confirmée</p>"; $niv_num =2;$check = true;}
			if(($niveau == "Maitre") AND ($edit_PWD="COMPAS")) {
				echo "<p style='text-align: center'>Qualité de $niveau confirmée</p>"; $niv_num =3;$check = true;}
			if(($niveau == "1er Ordre") AND ($edit_PWD="ABIBALAH")) {
				echo "<p style='text-align: center'>Qualité de $niveau confirmée</p>"; $niv_num =4;$check = true;}
			if(($niveau == "2eme Ordre") AND ($edit_PWD="EL-HANAN")) {
				echo "<p style='text-align: center'>Qualité de $niveau confirmée</p>"; $niv_num =5;$check = true;}
			if(($niveau == "3eme Ordre") AND ($edit_PWD="YABOROU-HAMMAIM")) {
				echo "<p style='text-align: center'>Qualité de $niveau confirmée</p>"; $niv_num =6;$check = true;}
			if(($niveau == "4eme Ordre") AND ($edit_PWD="EMMANUEL")) {
				echo "<p style='text-align: center'>Qualité de $niveau confirmée</p>"; $niv_num =7;$check = true;}
			switch ($niv_num) {
				case 0:
					$page_name = "visiteurs.php";
					break;
				case 1:
					$page_name = "membre1.php";
					break;
				case 2:
					$page_name = "membre2.php";
					break;
				case 3:
					$page_name = "membre3.php";
					break;
				case 4:
					$page_name = "membre4.php";
					break;
				case 5:
					$page_name = "membre5.php";
					break;
				case 6:
					$page_name = "membre6.php";
					break;
				case 7:
					$page_name = "membre7.php";
					break;
			}
			
        ?>
    </form>
	
	<form method="POST" action="<?= $page_name ?> "> 		
		<div style="text-align: center"><input type="Submit" value="Continuer..." id="Suite"></div>
	</form>
</body>