<?php 
    $errorMsg = $_GET["error"] ?? '';
    
    $hayError = !empty($errorMsg);

    
    $estadoClase = $hayError ? 'mode-error' : 'mode-success';
    $titulo      = $hayError ? '⚠️ ERROR DE TRANSMISIÓN' : '✅ ENVÍO EXITOSO';
    
    $mensaje     = $hayError ? urldecode($errorMsg) : 'He recibido tus datos correctamente. Te responderé a la brevedad.';
    
    $linkVolver  = $hayError ? 'contacto.php' : 'index.php';
    $textoBoton  = $hayError ? 'INTENTAR DE NUEVO' : 'VOLVER AL INICIO';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estado del Envío</title>
</head>
<body style="justify-content: center;"> 
    <section class="contact-sheet <?= $estadoClase ?>" style="text-align: center;">
        
        <div class="sheet-header" style="margin-bottom: 20px;">
            <h2><?= $titulo ?></h2>
        </div>

        <p style="margin-bottom: 30px; font-size: 1.1rem;"> 
            <?= $mensaje ?> 
        </p>

        <a class='submit-btn' href='<?= $linkVolver ?>' style="text-decoration: none; display: inline-block;">
            <?= $textoBoton ?>
        </a>

    </section>
</body>
</html>