<?php
session_start();

$_SESSION['items']= ['Juan', 'pedro', 'pablo'];
print_r($_SESSION['items']);

function addItem($item){
    array_push($_SESSION['items'], $item);
}

addItem('Maria');
echo '<br>';
print_r($_SESSION['items']);


?>