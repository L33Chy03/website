<?php
session_start();
$_SESSION['add'] = 1;
$_SESSION['del'] = 0;
$_SESSION['modif'] = 0;
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> La-Chacropole-ajout</title>
		<meta charset="utf-8">
		<link href="CSS/style.css" rel="stylesheet">
	</head>
	<body>
		<?php include "Header/header.php"; ?>
		<?php include "Menu/menu.php"; ?>
		<div id="page">
			<section>
				<article>
					<h3>Ajouter un chat:</h3>
					<form method="post" action="succes.php">
					<p>
					nom :
					<input type="text" name="nom" /><br>
					masse :
					<input type="text" name="masse" /><br>
					taille :
					<input type="text" name="taille" /><br>
					tips :
					<input type="text" name="tips" /><br>
					image :
					<input type="text" name="imagepath" /><br>
					<input type="submit" value="Valider" />
					</p>
				</form>
				</article>
			</section>
		</div>
		<?php include "Footer/footer.php"; ?>
	</body>
</html>