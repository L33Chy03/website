<?php
session_start();
$_SESSION['path'] = "Chats/Autre/";
?>
<!DOCTYPE html>		<!--our others cat-->
<html lang="fr">
	<head>
		<title> La-Chacropole-autre</title>
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
					<h3>Nos Autres Chats</h3>
					<p>
					<br>
					Ici vous pouvez voir tout nos autres chats :
					</p>
				</article>
			</section>
			<?php include "Open/openfiles.php"; ?>
		</div>
		<?php include "Footer/footer.php"; ?>
	</body>
</html>