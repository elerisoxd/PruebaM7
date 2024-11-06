<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="asignatura">
            <select name="asignatura[]" id="asignatura" multiple>
                <option value="Matematicas">Matematicas</option>
                <option value="Lengua">Lengua</option>
                <option value="Ingles">Ingles</option>
                <option value="Ciencia">Ciencia</option>
            </select>
            <br><br>
        </label>
        <label for="opcion-1">
                <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">Manzana
        </label>
        <label for="opcion-2">
                <input type="checkbox" value="Platano" id="opcion-2" name="frutas[]">Platano
        </label>
        </label>
        <label for="opcion-3">
                <input type="checkbox" value="Pera" id="opcion-3" name="frutas[]">Pera
        </label>
        <label for="opcion-4">
                <input type="checkbox" value="Naranja" id="opcion-4" name="frutas[]">Naranja
        </label>
    </form>
</body>
</html>