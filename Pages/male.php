<?php
session_start();
$_SESSION['path'] = "Chats/Male/";
?>
<!DOCTYPE html>		<!--our males Maine Coons-->
<html lang="fr">
	<head>
		<title> La-Chacropole-male </title>
		<meta charset="utf-8">
		<link href="CSS/style.css" rel="stylesheet">
	</head>
	<body>
		<?php include "Header/header.php"; ?>
		<?php include "Menu/menu.php"; ?>
		<div id="page">
			<?php include "Button/button.php"; ?>
			<section>
				<article>
					<h3>Nos Mâles</h3>
					<p>
					<br>
					Ici vous pouvez voir tous nos mâles :
					</p>
				</article>
			</section>
			<?php include "Open/openfiles.php"; ?>
		</div>
		<?php include "Footer/footer.php"; ?>
	</body>
</html>