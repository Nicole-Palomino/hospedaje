<?php
    $servidor = "localhost"; 
    $usuario = "root";
    $clave = "emiliapalomino";
    $base = "marina_contacto";

    $conexion = mysqli_connect($servidor,$usuario,$clave,$base);

    $bd = mysqli_select_db($conexion,$base);

    $nombres = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje']; 
    
    $sql = "INSERT INTO datos VALUES ('$nombres','$correo','$telefono','$mensaje')";

    $ejecutar = mysqli_query($conexion, $sql);

    if (!$ejecutar) {
        echo "hubo un error";
    } else {
        echo "<script>alert('¡Datos enviados correctamente!')</script>";
    }
?>  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
    <title>Marina del Bay</title>
</head>
<body class="contacto">
    <div class="text">
        <h3>Gracias por escribirnos</h3>
        <p>Contestaremos su mensaje lo más pronto posible.</p>
        <p>Atte. Hospedaje Marina del Bay</p> <br><br><br><br>

        <p class="consulta">
            ¿Desea volver a la página principal?
        </p> <br><br>

        <button>
            <a href="../pages/index.html">Página Principal</a>
        </button>
    </div>
</body>
</html>    