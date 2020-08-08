<?php
    include("conexion.php");
    //Recibir datos y almacenar
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellidos'];
        $dui = $_POST['dui'];
        $nit = $_POST['nit'];
        $rol = $_POST['rol'];
        $estado = $_POST['estado'];
        
        //Consulta para Insertar 
        $insertar = "INSERT INTO empleados(nombres, apellidos, dui, nit, estado) VALUES ('$nombre','$apellido','$dui','$nit','$rol','$estado')";
        //Ejecutar consulta
        $resultado = mysqli_query($conexion, $insertar);
        if (!$resultado) {
            echo "error al registrar el empleado";
        }
        else{
            echo "Empleado Registrado existosamente";
        }

        //cerrando conexion
        mysqli_close($conexion);
        echo "Datos insertados correctamente";
        header("../vistas/Empleados.php");
    ?>