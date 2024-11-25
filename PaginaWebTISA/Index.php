<?php
$directorio = 'Multimedia/Imagenes/CasasVenta/';
$imagenes = array_diff(scandir($directorio), array('..', '.'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas en Venta</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: initial;
            height: 300vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .gallery{
            width: 850px;
            height: 80vh;
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            box-sizing: border-box;
        }
        .gallery img{
            width: 100%;
            height: auto;
            border-radius: 1px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .line{
            margin-top: 1px;
            width: 100%;
            height: 3px;
            background-color: red;
        }
    </style>
</head>

<body style="background-color: rgb(53, 52, 52);">
    <div class="gallery">
        <?php
        foreach ($imagenes as $imagen){
            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $imagen)){
                echo "<div>";
                echo "<img src='" . htmlspecialchars($directorio . $imagen) . "' alt='" . htmlspecialchars($imagen) . "'>";
                echo "<div class='line'></div>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>