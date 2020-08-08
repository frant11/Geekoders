<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <?php
        include_once("proyecto.php");
    ?>
    <title>Empresas</title>
</head>
<body>
    <form action="agregarEmpresas.php" class="lista" method="post">
    <table>
        <tr class="nuevo">
            <td> <input type="submit" name="nuevo" value="+NUEVO"> </td>
        </tr>
        <tr>
        <td><input type="text" name="Identificador" value="ID"></td>
        <td><input type="text" name="Nombre" value="NOMBRE"></td>
        <td><input type="text" name="Acciones" value="ACCIONES"></td>        
        </tr>
        <tr>
          <tr>
                <td><input type="text" name="valID" value=""></td>
                <td><input type="text" name="nombre" value=""></td>
                <td><input type="submit" name="ver" value="Ver"></td>
                <td><input type="submit" name="editar" value="Editar"></td>
                <td><input type="submit" name="eliminar" value="Eliminar"></td>            
            </tr>       
    </table>
    </form>
</body>
</html>