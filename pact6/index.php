<?php
$nom=$_GET['nombre'];
$ap=$_GET['apellido'];
$tel=$_GET['telefono'];
$dni=$_GET['DNI'];
$codigo=$_GET['codigoSocio'];
$mail=$_GET['correo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadona productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php 
    //componentes
    ?>
    <div class="container">
        <div>
            <h2>Productos disponibles</h2>
            <!--tabla de productos-->
        </div>
        <!--incluir los datos del contacto del cliente con un toast live
        boton trigger modal-->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Mi perfil
        </button>
        <!--modal que al clicar aparece info -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statickBackdropLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Información de contacto </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Clos"> </button>        
                    </div>
                    <div class="modal-body">
                        <!--aqui va la informacion de contacto-->
                        <?php
                            
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <!--aqui va la lista de productos-->
        </div>
        <!--aqui va el footer-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>