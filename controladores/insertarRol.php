<?php
    include("conexion.php");
    //Recibir datos y almacenar
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $permiso = $_POST["permiso"];
        $codigo = $_POST["codigo"];
               
        //Consulta para Insertar 
        $insertar = "INSERT INTO roles(nombreRol, descripcionRol, permisos,empresas_idEmpresa) VALUES ('$nombre','$descripcion','$permiso','$codigo')";
        //Ejecutar consulta
        $resultado = mysqli_query($conexion, $insertar);
        if (!$resultado) {
            echo "error al registrar el empleado";
        }
        else{
            echo "Rol Registrado existosamente";
        }

        //cerrando conexion
        mysqli_close($conexion);
        echo "Datos insertados correctamente";
        header("../vistas/Roles.php");
    ?>