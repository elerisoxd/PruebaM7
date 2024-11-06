<?php
session_name('Prueba-sesion');
session_start();

$_SESSION['username']="Juan";
$_SESSION['age']=23;
echo '<a href="index2.php">Sesion</a>';




?>