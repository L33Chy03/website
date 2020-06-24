<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> La-Chacropole-suppression </title>
		<meta charset="utf-8">
		<link href="CSS/style.css" rel="stylesheet">
	</head>
	<body>
		<?php include "Header/header.php"; ?>
		<?php include "Menu/menu.php"; ?>
		<div id="page">
			<section>
				<article>
					<h3>Supprimer un chat:</h3>
					<form method="post" action="success.php">
					<p>
					nom :
					<input type="text" name="nom" /><br>
					<input type="submit" value="Valider" />
					</p>
				</form>
				</article>
			</section>
		</div>
		<?php include "Footer/footer.php"; ?>
	</body>
</html>