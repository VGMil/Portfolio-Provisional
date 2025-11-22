<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | VGMil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="nav-console">
    <div class="nav-brand">VGMIL</div>
    <ul class="nav-menu">
        <li>
            <a href="index.php">
                Inicio
            </a>
        </li>
        <li>
            <a href="contacto.php">
                Contacto
            </a>
        </li>
    </ul>
</nav>

<main>
    <section class="contact-sheet">
        <div class="sheet-header">
            <h2>Hablemos ...</h2>
            <p>Completa tu ficha.</p>
        </div>

        <form action="guardar.php" method="POST" class="technical-form">
            <div class="form-group">
                <label for="nombre">NOMBRE</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ej: Dev Anónimo" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label for="correo">EMAIL</label>
                <input type="email" id="correo" name="correo" required placeholder="contacto@email.com" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label for="mensaje">Cuentame un poco de como puedo ayudarte?</label>
                <textarea id="mensaje" name="mensaje" required placeholder="Escribe aquí tu propuesta o consulta..."></textarea>
            </div>
            
            <button type="submit" class="submit-btn">ENVIAR DATOS</button>
        </form>
    </section>
</main>

</body>
</html>