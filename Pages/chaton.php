<?php
session_start();
$_SESSION['path'] = "Chats/Chatons/";
?>
<!DOCTYPE html>		<!--our Maine Coons kittens-->
<html lang="fr">
	<head>
		<title> La-Chacropole-chaton </title>
		<meta charset="utf-8">
		<link href="CSS/style.css" rel="stylesheet">
	</head>
	<body>
		<?php include "Header/header.php"; ?>
		<?php include "Menu/menu.php"; ?>
		<div id="page">
			<?php include "Add/btn_add.php"; ?>
			<section>
				<article>
					<h3>Nos Chatons</h3>
					<p>
					<br>
					Ici vous pouvez voir tous nos chatons :
					</p>
				</article>
			</section>
			<?php include "Open/openfiles.php"; ?>
		</div>
		<?php include "Footer/footer.php"; ?>
	</body>
</html>