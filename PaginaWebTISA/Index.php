<?php
// Ruta de la carpeta de imágenes
$directorio = 'Multimedia/Imagenes/CasasVenta';

// Leer todos los archivos en la carpeta
$imagenes = array_diff(scandir($directorio), array('..', '.'));

// Mostrar las imágenes
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas en Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img {
            margin: 10px;
            width: 200px;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <h1>Casas en Venta</h1>
    <p>Aquí tienes las imágenes de las casas disponibles.</p>

    <div class="gallery">
        <?php
        // Recorrer todas las imágenes y mostrarlas
        foreach ($imagenes as $imagen) {
            // Comprobar que es un archivo de imagen
            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $imagen)) {
                echo "<div>";
                echo "<img src='$directorio$imagen' alt='$imagen'>";
                echo "</div>";
            }
        }
        ?>
    </div>

</body>
</html>