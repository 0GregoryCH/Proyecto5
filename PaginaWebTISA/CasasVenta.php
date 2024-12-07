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
            font-family: Arial, sans-serif !important;
            padding: 20px !important;
            display: flex!important;
            justify-content: center!important;
            align-items: initial!important;
            height: 300vh!important;
            margin: 0!important;
            background-color: #f0f0f0!important;
        }
        .gallery{
            width: 850px!important;
            height: 80vh!important;
            display: flex!important;
            flex-direction: column!important;
            gap: 10px!important;
            padding: 10px!important;
            box-sizing: border-box!important;
        }
        .gallery img{
            width: 100%!important;
            height: auto!important;
            border-radius: 1px!important;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1)!important;
        }
        .line{
            margin-top: 1px!important;
            width: 100%!important;
            height: 3px!important;
            background-color: red!important;
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
