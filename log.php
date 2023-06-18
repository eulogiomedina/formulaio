<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta del formulario crear cuenta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['Nombre'];
        $usuario = $_POST['Usuario'];
        $correo = $_POST['correo'];
        $telefono = $_POST['tel'];
        $fechanac = $_POST['Fechnac'];
        $genero = $_POST['Genero'];

      
        echo '<h1>Datos agregados</h1>';
        echo '<table id="datos">';
        echo '<tr><td><strong>Bienvenid@:</strong></td><td>' . $nombre . '</td></tr>';
        echo '<tr><td><strong>Su nombre de usuario:</strong></td><td>' . $usuario . '</td></tr>';
        echo '<tr><td><strong>El correo agregado:</strong></td><td>' . $correo . '</td></tr>';
        echo '<tr><td><strong>El numero de telefono agregado:</strong></td><td>' . $telefono . '</td></tr>';
        echo '<tr><td><strong>Su fecha de nacimiento:</strong></td><td>' . $fechanac . '</td></tr>';
        echo '<tr><td><strong>Su genero es:</strong></td><td>';

        if ($genero == 1) {
            echo 'Mujer';
        } elseif ($genero == 2) {
            echo 'Hombre';
        } elseif ($genero == 3) {
            echo 'Otro';
        }

        echo '</td></tr>';
        echo '</table>';
          
    }
    ?>
</body>
</html>



