<?php
/**
 * Created by PhpStorm.
 * User: chinegua
 * Date: 27/11/17
 * Time: 13:21
 */
?>

<html>
<head>
    <title>XSS </title>
    <meta charset="UTF-8">
</head>
<body>
<br><br><br>
<center>
    <img src="http://localhost:8890/Practica2/matricula.php?SAW=Si&Envio=Enviar" width= 120 height= 60>
    <br><br><br>
    <br><br><br><br>
    <?php
    header ("Location:matricula.php");
    ?>
</center>
</body>
</html>