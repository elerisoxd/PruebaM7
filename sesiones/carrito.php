<?php
session_start();

if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito']=[];
}


$item = $_POST['item'];


// $_SESSION['carrito'][]= $item;

array_push($_SESSION['carrito'], $item);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Carrito compra con sesiones</h2>
    <form action="carrito.php" method=POST>
        <input type="text" placeholder="Añade un producto" name="item">
        <button type="submit">Agregar producto</button>
    </form>
    <section>
        <h3>Productos del carrito</h3>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                
                <?php foreach($_SESSION['carrito']as $producto){
                    echo '<tr><td>'. $producto . '</td></tr>';
                };?>

                
            </tbody>
        </table>
    </section>
</body>
</html>