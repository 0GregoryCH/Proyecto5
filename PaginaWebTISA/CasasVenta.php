<?php
$directorio = 'Multimedia/Imagenes/CasasVenta/';
$imagenes = array_diff(scandir($directorio), array('..', '.'));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Diseño.css">
    <meta name="description" content="Pagina Casas en Venta php: Se utiliza para mostrar unicamente las imagenes de las casas en venta.">
    <title>Casas en Venta</title>
</head>

<body id="BodyCVphp" style="background-color: rgb(53, 52, 52);">
    <div class="Div1CVphp">
        <?php
        foreach ($imagenes as $imagen){
            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $imagen)){
                echo "<div>";
                echo "<img src='" . htmlspecialchars($directorio . $imagen) . "' alt='" . htmlspecialchars($imagen) . "'>";
                echo "<div class='LineaCVphp'></div>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
