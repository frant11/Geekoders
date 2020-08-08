<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <h1>Agregar Empleado</h1>
    <?php
        include("proyecto.php");
     ?>
    <title>Agregar_Empleados</title>
    
</head>
<body>
        <div class="agregar">
        <form action="../controladores/insertarEmpleado.php" method="post">  
      <table>
        <tr>
            <td>Nombre:</td>
            <td>
            <input type="text" name="nombre" placeholder="Ingrese el nombre">
            <td>Apellidos:</td>
            <td><input type="text" name="apellidos" placeholder="Ingrese los apellidos"></td>
            </td>
        </tr>
        <tr>
            <td>DUI:</td>
            <td>
            <input type="text" name="dui" placeholder="0000000-0">
            <td>NIT:</td>
            <td><input type="text" name="nit" placeholder="0000-00000000-000-0"></td>
            </td>
        </tr>
        <tr>
            <td>ROL:</td>
            <td>
            <input type="text" name="rol" placeholder="Ingrese el rol">
            <td>ESTADO:</td>
            <td><input type="text" name="estado" placeholder="Ingrese el estado"></td>
            </td>
        </table>
            <input type="submit" class="guardar" value="GUARDAR"> 
        </form>

        </div>
               
        </div>
    </form>
</body>
</html>

