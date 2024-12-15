<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" 
    referrerpolicy="no-referrer"/>
    <title>MH Porfolio</title>
    <link rel="stylesheet" href="css/miestilo.css">
</head>

<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="">
                <img src="imagenes/logo-MH-web.png" alt="logo" width="140px" height="90px">
                </a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio">INICIO</a></li>
                    <li><a href="#sobremi">SOBRE MI</a></li>
                    <li><a href="trabajos/index.php">TRABAJOS</a></li>
                    <li><a href="contacto/index.php">CONTACTO</a></li>
                    <li><a href="juegos/index.php">JUEGOS</a></li>

                </ul>
            </nav>
            <div class="nav-responsive">
                <i class="fa-solid fa-bars" id="menu-toggle"></i>
            </div>
        </header>
    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- SECCION INICIO -->
<section id="inicio" class="inicio">
    <div class="contenido-banner">
        <div class="contenedor-img">
        <img id="animacion-img" class="fade-in" src="imagenes/mujerilus.png" width="250px" height="200px">
        </div>
        <h1>MEGAN HARRISON</h1>
        <h2>Ilustraciones y Animaciones</h2>
        <div class="redes">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
        </div>
    </div>
</section>

<br>
<br>

    <!-- SECCION SOBRE MI -->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mi</h2>
            <br>
            <p><span>Hola! Soy Megan Harrison...</span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Veniam porro quia non, id repudiandae, cumque at asperiores dolorem voluptatem sit enim explicabo
                ex suscipit veritatis odio. Velit accusantium impedit placeat.</p>

            <div class="fila">
                <!--datos personales-->
                <div class="col">
                    <h3>Datos Personales</h3>
                    <ul>
                        <li>
                            <strong>Cumpleaños</strong>
                            06-08-2003
                        </li>
                        <li>
                            <strong>Ubicación</strong>
                            Buenos Aires, Argentina
                        </li>
                        <li>
                            <strong>Estudios</strong>
                            Lorem ipsum dolor sit amet consectetur.
                        </li>
                        <li>
                            <strong>Cargo</strong>
                            Freelancer
                        </li>
                        <li>
                            <strong>Email</strong>
                            ejemplo@gmail.com
                        </li>
                    </ul>
                </div>

                <!--intereses-->
                <div class="col">
                    <h3>Intereses</h3>
                    <div class="contenedor-intereses">
                        <div class="interes">
                            <i class="fa-solid fa-paintbrush"></i>
                            <span>Pintar</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-headphones"></i>
                            <span>Música</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-cookie-bite"></i>
                            <span>Cocina</span>
                        </div>
                        <div class="interes">
                         <i class="fa-solid fa-film"></i>   
                            <span>Películas</span>
                        </div>
                    </div>
                </div>
            </div>
            <button>
                Descargar CV <i class="fa-solid fa-download"></i>
                <span class="overlay"></span>
            </button>
        </div>
    </section>

    <script>
        // Toggle navigation menu on small screens
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var nav = document.getElementById('nav');
            nav.classList.toggle('open');
        });
    </script>

    <!-- Script JavaScript para la animación de fade-in -->
<script>
    window.addEventListener('load', () => {
        const img = document.getElementById('animacion-img');
        img.classList.add('fade-in');
    });
</script>


</body>
</html>