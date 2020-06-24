<?php		#fonction who mod a cat file
session_start();
	$text = "<section>
				<article>
					<img src=".$_POST['imagepath']." class='chat' alt=".$_POST['nom']."/>
					<p>Nom : ".$_POST['new_nom']."</p><br>
					<p>Masse :".$_POST['masse']."</p><br>
					<p>Taille : ".$_POST['taille']."</p><br>
					<p>Pelage : ".$_POST['tips']."</p><br>
				</article>
			</section>";
		$name_file = $_SESSION['path'].$_POST['nom'].".php";
		unlink ($name_file);
		$name_file = $_SESSION['path'].$_POST['new_nom'].".php";
		$f =fopen($name_file,'a');
		fputs($f, $text );
		fclose($f);
?>