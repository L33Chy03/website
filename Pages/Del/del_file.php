<?php 
session_start();
$name_file = $_SESSION['path'].$_POST['nom'].".php";
unlink ($name_file); ?>