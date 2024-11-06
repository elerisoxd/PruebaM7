<?php

session_start();

echo $_SESSION['username'];
echo '<br>';
echo $_SESSION['age'];
echo '<br>';
unset($_SESSION['username']);

$_SESSION['username']="Juan";
echo '<br>';
echo $_SESSION['age'];
echo '<br>';

session_destroy();
?>