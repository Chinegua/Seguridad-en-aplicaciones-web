<?php
/**
 * Created by PhpStorm.
 * User: chinegua
 * Date: 27/11/17
 * Time: 13:47
 */
session_start();

?>
<HTML>
<HEAD>
    <title>Matrícula de asignaturas</title>
    <meta charset="UTF-8">
</HEAD>
<body onload = document.matricula.submit()>
<CENTER>
    <center>
        <img src="logo.png" width= 120 height= 60>
        <br><br><br>

        <H2> Selecciona las asignaturas en que quieres matricularte </H2><BR><BR>
        <FORM name="matricula" method=post action= 'http://localhost:8890/Practica2/MatriculaTOKEN.php'>
            <TABLE>
                <TR>
                    <TD align=right><INPUT type="text" name="SAW" value="Si"></TD>
                    <TD align=left> Seguridad en Aplicaciones Web (SAW)</TD>
                </TR>
                <TR>
                    <TD align=right><INPUT type="text" name="token" value="f281e8dd1e84731e0e2c5f6bd2ba531a"></TD>
                </TR>
            </TABLE><BR>
            <INPUT type="text" name="Envio" value="Enviar">
        </FORM>
    </CENTER>
</BODY>
</HTML>