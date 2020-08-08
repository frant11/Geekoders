<?php
    include("conexion.php");
    //Recibir datos y almacenar
        $nombre = $_POST["nombretxt"];
        $nit = $_POST["nit"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
        $municipio = $_POST["municipio"];
        $departamento = $_POST["departamento"];

        //Consulta para Insertar 
        $insertar = "INSERT INTO empresas(nombreEmpresa, nit, telefono, direccion, municipio, departamento) VALUES ('$nombre','$nit','$telefono','$direccion','$municipio', '$departamento')";
        //Ejecutar consulta
        $resultado = mysqli_query($conexion, $insertar);
        if (!$resultado) {
            echo "error al registrar el empleado";
        }
        else{
            echo "Empresa Registrada existosamente";
        }

        //cerrando conexion
        mysqli_close($conexion);
        echo "Datos insertados correctamente";
    ?>