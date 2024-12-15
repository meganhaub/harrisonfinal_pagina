<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MH Trabajos</title>
    <link rel="stylesheet" href="../css/miestilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>

  <!-- MENU ENCABEZADO -->
   
<div class="contenedor-header">
  <header>
      <div class="logo">
          <a href="#">
          <img src="../imagenes/logo-MH-web.png" alt="logo" width="140px" height="90px">
          </a>
      </div>
      <nav id="nav">
          <ul>
              <li><a href="/paginafinal_harrison/index.php">INICIO</a></li>
              <li><a href="/paginafinal_harrison/index.php#sobremi">SOBRE MI</a></li>
              <li><a href="/paginafinal_harrison/trabajos/index.php">TRABAJOS</a></li>
              <li><a href="/paginafinal_harrison/contacto/index.php">CONTACTO</a></li>
              <li><a href="/paginafinal_harrison/juegos/index.php">JUEGOS</a></li>
          </ul>
      </nav>
      <div class="nav-responsive" id="nav-responsive">
          <i class="fas fa-bars"></i>
      </div>
  </header>
</div>


  <br><br><br><br>

  <!-- SECCION TRABAJOS -->
  <section id="trabajos" class="trabajos">
    <div class="contenido-seccion">
        <h2>Trabajos</h2>
        <div class="galeria">
            <div class="proyecto">
            <img src="../imagenes/personaje_animacion2_dibujo.jpg" alt="diseño-personaje">
                <div class="overlay">
                    <h3>Diseño de Personaje</h3>
                </div>
            </div>
            <div class="proyecto">
                <img src="../imagenes/peces_y_flores_v3.jpg" alt="peces-flores">
                <div class="overlay">
                    <h3>Ilustraciones Digitales</h3>
                </div>
            </div>
            <div class="proyecto">
                <img src="../imagenes/trama_del_monograma_(patron).2.jpg" alt="trama-diseno">
                <div class="overlay">
                    <h3>Logos Personales</h3>
                </div>
            </div>
            <div class="proyecto">
                <img src="../imagenes/Coraline_estudio_1_-_megan_harrison.jpg" alt="estudio-personaje">
                <div class="overlay">
                    <h3>Estudio de Personaje</h3>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- SCRIPTS -->
  <script>
    document.getElementById('nav-responsive').addEventListener('click', function() {
        document.getElementById('nav').classList.toggle('open');
    });
  </script>
</body>
</html>
