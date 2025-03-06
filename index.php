<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="index_php.css">
</head>
<body>
   <?php 
        $mot = filter_input(INPUT_POST, "mot");
		$check = filter_input(INPUT_POST, "Valider");
    ?>
	<h2 id = "header_titre">Accès personnalisé aux textes de Godaille de Rigadeaux</h2>

    <div id="banner">    
	  <a href="#" class="Header_img"><img src="rc_images/logo.jpg" alt="" /></a>
    </div>
    <p id= "legend" style="text-align: center;">En bandeau :&nbsp;Parade navale dans la rade de Lorient - devant le port de plaisance de Kernevel&nbsp;</p>
    
	<form method="POST" action="index.php">
        <h3 id="titre"> Etes-vous membre de notre association ?</h3>
		<h3 id = "sTitre"> Si oui, saisir, ci dessous, un mot le confirmant, Valider puis Continuer...</h3>
		<input type="password" type="text" value="" title="" name="mot"  id="edit_mot" >
		<input type="Submit" value="Valider la saisie" id="Valider">
		<?php
			echo "";
			$page_name = "";
			
			if($mot == "GADLU"){ $check = true; }
			if($mot == "BOAZ"){ $check = true; }
			if($mot == "JAKIN"){ $check = true; }
			if($mot == "HIRAM"){ $check = true; }
				
			if ($check == true) {echo "<p style='text-align: center'>Qualité de Membre confirmée</p>"; $check = true;} else
				if($mot != ""){ echo "<p style='text-align: center'>Mot de reconnaissance erroné, réessayer ou continuer comme visiteur"; $check = false;}

			if ($check == true) {$page_name = "logmembre.php";} else {$page_name = "visiteurs.php";}
			
		?>
		
	</form>	
	
	<form method="POST" action="<?= $page_name ?>"> 		
		<input type="Submit" value="Continuer..." id="Suite">
	</form>

</body>
</html>