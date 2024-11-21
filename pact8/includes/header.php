<?php
session_start();

echo '
    <header class="bg-dark py-3"> 
            <div class="container">
                <h1 class="text-white">Buenas, '. $_SESSION['username'] .'</h1>
                <h2 class="text-white">Nivel de dificultad seleccionado: '.$_SESSION['dificultad'].'
            </div>
            
    </header>
';

?>