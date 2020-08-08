<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <?
        include_once("proyecto.php");
    ?>
    <title>Nueva_Empresa</title>
    <h1>Ingrese los datos de la nueva empresa</h1>
</head>
<body>
   <div class="agregar">
   <form action="../controladores/insertarEmpresa.php" method="post">
    <table>
        <tr>
            <td>Nombre:</td>
            <td>
            <input type="text" name="nombretxt" placeholder="Ingrese el nombre de la empresa">
            <td>NIT:</td>
            <td><input type="text" name="nit"  placeholder="0000-00000000-000-0"></td>
            </td>
        </tr>
        <tr>
            <td>Telefono:</td>
            <td>
            <input type="text" name="telefono" placeholder="Ingrese el telefono de la empresa">
            <td>Direccion:</td>
            <td><input type="text" name="direccion" placeholder="Ingrese la direccion de la empresa"></td>
            </td>
        </tr>
        <tr>
            <td>Municipio:</td>
            <td>
            <input type="text" name="municipio" placeholder="Ingrese el municipio donde se ubica la empresa">
            <td>Departamento:</td>
            <td><input type="text" name="departamento" placeholder="Ingrese el Departamento donde se ubica la empresa"></td>
            </td>
        </tr>
        </table>
            <input type="submit" value="GUARDAR" class="guardar">
    </form>
    </div>
</body>
</html>