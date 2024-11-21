<?php
session_start();

echo '
    <header> 
        <div class="header">
            '. $_SESSION['username'] .'
            HOLA
        </div>
    </header>
';

?>