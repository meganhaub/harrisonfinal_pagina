<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" 
    referrerpolicy="no-referrer"/>
    <title>Juegos</title>
    <link rel="stylesheet" href="../css/miestilo.css">

    <title>Sección Juegos</title>
    <link rel="stylesheet" href="css/miestilo.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        iframe {
            border: none;
            width: 70%;
            height: 90vh; /* Altura ajustada para adaptarse a la pantalla */
        }
        header {
            padding: 1rem;
        }
    </style>

</head>

<body>
    <!-- MENÚ ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="../index.html">
                    <img src="../imagenes/logo-MH-web.png" alt="logo" width="140px" height="90px">
                </a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="/paginafinal_harrison/index.php">INICIO</a></li>
                    <li><a href="/paginafinal_harrison/index.php#sobremi">SOBRE MI</a></li>
                    <li><a href="/paginafinal_harrison/trabajos/index.php">TRABAJOS</a></li>
                    <li><a href="/paginafinal_harrison/contacto/index.php">CONTACTO</a></li>
                    <li><a href="index.php" class="active">JUEGOS</a></li>
                </ul>
            </nav>
            <div class="nav-responsive">
                <i class="fa-solid fa-bars" id="menu-toggle"></i>
            </div>
        </header>
    </div>

    <!-- SECCIÓN PRINCIPAL -->
<section id="juegos" class="trabajos">
    <div class="contenido-seccion">
        <h2>Juegos</h2>
        <p>Explora algunos de los juegos interactivos que he creado.</p>
        <br>
        <br>
        <!-- Nueva estructura para el juego -->
        <div class="juego">
    <h3>2D Platformer</h3>
    <img src="../imagenes/platformerimag.png" alt="Imagen del juego" style="width: 200px; height: auto;">
    <p>
        <a href="https://meganha68.itch.io/2d-platformer-harrison" target="_blank">Juega ahora</a>
    </p>
</div>
<br>
<br>
<div class="juego">
    <h3>Atrapa al Gato</h3>
    <img src="../imagenes/atrapagatoimag.png" alt="Imagen del juego" style="width: 200px; height: auto;">
    <p>
        <a href="https://www.dropbox.com/scl/fi/mmzi3talnfiqj9y3u0mkm/juegoMIT_harrison.apk?rlkey=ohgp7frz2g9f98rl519yl3mtu&st=rldd8yjv&dl=1" target="_blank">Juega ahora</a>
    </p>
</div>

</section>

<script>
    // Toggle navegación en dispositivos pequeños
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var nav = document.getElementById('nav');
        nav.classList.toggle('open');
    });
</script>

</body>
</html>
