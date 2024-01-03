<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/af4c1a243c.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">Informacion Vehiculos</h1>
    <div class="container-fluid row">
        <div class="col-8 p-6">
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID_Vehiculos</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Año</th>
                    <th scope="col">Color</th>
                    <th scope="col">Numero_Serie</th>
                    <th scope="col">Tipo_combustible</th>
                    <th scope="col">Numero_Puertas</th>
                    <th scope="col">Capacidad_Pasajeros</th>
                    <th scope="col">Fecha_Compra</th>
                    <th scope="col">Precio_Compra</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexion.php";
                $sql=$conexion->query(" select * from vehiculos ");
                while($datos=$sql->fetch_object()){?>
                <tr>
                    <td><?= $datos->ID_Vehiculos ?></td>
                    <td><?= $datos->Marca ?></td>
                    <td><?= $datos->Modelo ?></td>
                    <td><?= $datos->Año ?></td>
                    <td><?= $datos->Color ?></td>
                    <td><?= $datos->Numero_Serie ?></td>
                    <td><?= $datos->Tipo_Combustible ?></td>
                    <td><?= $datos->Numero_Puertas ?></td>
                    <td><?= $datos->Capacidad_Pasajeros ?></td>
                    <td><?= $datos->Fecha_Compra ?></td>
                    <td><?= $datos->Precio_Compra ?></td>
                    <td>
                        <a href"modificar_vehiculos.php" class="btn btn-small warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href"" class="btn btn-small danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>

                <?php }
                ?>
                
            </tbody>
        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>