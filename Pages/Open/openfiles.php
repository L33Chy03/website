<?php
			$dirname = $_POST['path'];
			$dir = opendir($dirname);
 
		while($file = readdir($dir)) {
			if($file != '.' && $file != '..' && !is_dir($dirname.$file))
			{
		include($dirname.$file);
		}
	}
 
	closedir($dir);
?>

