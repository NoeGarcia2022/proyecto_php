<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATOS INGRESADOS</h1>
    <?php
    if (isset($_REQUEST["Nc"]))
    {
        echo "<br>Nombre de cliente: ".$_REQUEST["Nc"];
        echo "<br>Direccion: ".$_REQUEST["direc"];
        echo "<br>Departamento: ".$_REQUEST["depto"];
        echo "<br>Fecha de ingreso: ".$_REQUEST["fecha"];
        echo "<br>N de registro: ".$_REQUEST["regist"];
        echo "<br>NIT: ".$_REQUEST["nit"];
        echo "<br>Giro: ".$_REQUEST["giro"];
        echo "<br>Condiciones de pago: ".$_REQUEST["c_pago"];
        echo "<br>Cantidad: ".$_REQUEST["cantidad"];
        echo "<br>Descripcion: ".$_REQUEST["descr"];
        echo "<br>Precio Unitario: ".$_REQUEST["pU"];
        echo "<br>Ventas Exentas: ".$_REQUEST["vE"];
        echo "<br>Ventas Afectas: ".$_REQUEST["vEF"];

    }
    ?>
</body>
</html>