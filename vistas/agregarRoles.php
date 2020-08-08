<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <?
        include_once("proyecto.php");
    ?>
    <title>Agregar_Roles</title>
</head>
<body>
    <div class="agregar">
    <form action= "../controladores/insertarRol.php" method="post">
    <table>
        <tr>
            <td>Nombre:</td>
            <td>
            <input type="text" name="nombre"  placeholder="Ingrese el nombre del Rol">
            <td>Descripcion:</td>
            <td><input type="text" name="descripcion"  placeholder="Agregue una descripcion del rol"></td>
            </td>
        </tr>
        <tr>
            <td>Permisos:</td>
            <td>
            <input type="text" name="permiso"  placeholder="Agregue los permisos del rol">
            </td>
            <td>Codigo: Empresa</td>
            <td>
            <input type="text" name="codigo" placeholder="Ingrese el codigo de la empresa">
            </td>
            </table>
           <input type="submit" value="GUARDAR" class="guardar">    
        
    </form>
    </div>
</body>
</html>