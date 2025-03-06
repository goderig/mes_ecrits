<!DOCTYPE html>
<html lang="en">
	<?php $niv_num = 7;  $niv_text = "Accès réservé aux 4eme Ordre"; ?>
	<table align="center" width="800" border="1" style="border-collapse:collapse; border:1px solid #ddd;" cellpadding="5" cellspacing="0">
		<thead>
			<meta charset="UTF-8">

			<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<script language="JavaScript1.2">
				function ejs_nodroit()
				{
				return(false);
				}
				document.oncontextmenu = ejs_nodroit;
			</script>
		</thead>
		
		<tbody>
			<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>
			<body class="container">
			<a href="index.php"  rel="noopener" target"_blank"><img src="rc_images/home.jpg" width="30" height="30" id="img_home" alt="" title=""  />Page d'accueil</a>
			<a href="logmembre.php"  rel="noopener" target"_blank"><img src="rc_images/back.png" width="30" height="30" id="img_back" alt="" title=""  />Page précédente</a>
			<h1 <p style="text-align:center"</p>Accès réservé aux 4eme Ordre</h1>
			<table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Titre</th>
					<th>Date</th>
					<th>Niveau</th>
					<th>Critere</th>
					<th>Lien document</th>
				</tr>
			</thead>
		<tbody>

			<tbody>
			
			<?php
				if (($handle    =   fopen("link2pdf.csv", "r")) !== FALSE) {
					$n          =   1;
					while (($row    =   fgetcsv($handle)) !== FALSE){
						if ($n>1) {
							if (($row[3] <= $niv_num) AND ($row[3] > 0)) {
								?>
								<tr>
									<td><?php echo "<p style='text-align: center'>$row[0]</p>";?></td>	
									<td><?php echo "<p style='text-align: center'>$row[1]</p>";?></td>
									<td><?php echo "<p style='text-align: center'>$row[2]</p>";?></td>
									<td><?php echo "<p style='text-align: center'>$row[3]</p>";?></td>
									<td><?php echo "<p style='text-align: center'>$row[4]</p>";?></td>
									<td><?php echo "<p style='text-align: center'>$row[5]</p>";?></td>
								</tr>
								<?php	
							}			
						}
						$n++;
					}
					fclose($handle);
				}
			?>
											
		</tbody>
	</table
</html>
