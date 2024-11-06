<?php
session_start();
session_unset();
session_destroy();
header('Locate: login.php');
?>