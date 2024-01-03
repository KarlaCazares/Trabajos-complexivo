<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3" method="POST">
        <h5 class="text-center alert alert-secondary">Modificar vehiculos</h5>
        <?php


        ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Vehiculo</label>
            <input type="text" class="form-control" name="example000">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marca">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="Modelo">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Año de Fabricacion</label>
            <input type="text" class="form-control" name="Año">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Color</label>
            <input type="text" class="form-control" name="Color">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero de Serie</label>
            <input type="text" class="form-control" name="Numero_Serie">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo de Combustible</label>
            <input type="text" class="form-control" name="Tipo_Combustible">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero de Puertas</label>
            <input type="text" class="form-control" name="Numero_Puertas">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Capacidad de Pasajeros</label>
            <input type="text" class="form-control" name="Capacidad_Pasajeros">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de Compra</label>
            <input type="date" class="form-control" name="Fecha_Compra">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Precio de Compra</label>
            <input type="text" class="form-control" name="recio_Compra">
        </div>
        <button type="submit" class="btn btn-primary" name="btneditar" value="ok">editar</button>
    </form>
</body>

</html>