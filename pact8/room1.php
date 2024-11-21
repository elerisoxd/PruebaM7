<!--1ra habitacion-->
<?php
session_start();
include "./includes/array.php";
if(!isset($_SESSION['username'])){
    header('Location: index.php');
    exit;
}
// $respuesta = $_POST['respuesta'];


if(isset($_POST['respuesta'])&& !empty($_POST['respuesta'])) {
    $respuesta = $_POST['respuesta'];
    if($respuesta ==  $arrayPYR[$_SESSION['dificultad']]['respuesta1']){
        header('Location: room2.php');
        exit;
    }else{
        $message= 'falso';
    }
}

    




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Habitación 1</title>
</head>
<body>
<?php include_once "./includes/header.php" ?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 22rem;">
        <h2 class="card-title text-center">Habitación 1</h2>
        <p class="card-text"><?= 'Nivel de dificultad '. $arrayPYR[$_SESSION['dificultad']]['pregunta1']. '' ?></p>
        <form action="room1.php" method="POST">
            <div class="mb-3">
                <input id="respuesta" type="text" name="respuesta" class="form-control" required placeholder="Respuesta">
            </div>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
        <?= $message; ?> <!-- Muestra el mensaje de éxito o error -->
    </div> </div>    

</body>
</html>
