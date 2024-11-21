<?php 
session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://cdn.vox-cdn.com/thumbor/SSiP4AbwRiIZ63qfHTAAnlFvBIA=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/22973905/lameloball_JonathanBartlett.jpeg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h1>FELICIDADES <?=$_SESSION['username']?></h1>
        <h2>Has Completado el Nivel <?=$_SESSION['dificultad']?></h2>
        <form action="logout.php">
            <button type="submit" class="btn btn-primary w-100">Volver al Inicio</button>
        </form>
        </form>
    </div>
</body>
</html>