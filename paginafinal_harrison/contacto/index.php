<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
          integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
          crossorigin="anonymous" 
          referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/miestilo.css">
    <style>
        /* Estilos existentes */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input, textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            background: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #ccc;
            color: #333;
        }
    </style>
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

    <div class="container">
        <h1>Contáctame</h1>
        <h2>No dudes en consultar!</h2>
        <form action="insertar.php" method="post" onsubmit="return validarFormulario()">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" required>
                
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>
                
            <label for="subject">Asunto</label>
            <input type="text" id="subject" name="subject" required>
                
            <label for="message">Mensaje</label>
            <textarea id="message" name="message" required></textarea>
                
            <button type="submit">Enviar</button>
        </form>
    </div>

    <!-- JavaScript para la validación del formulario -->
    <script>
        function validarFormulario() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;

            // Validar el nombre
            if (name.trim() === "") {
                alert("Por favor ingresa tu nombre.");
                document.getElementById("name").style.borderColor = "red";
                return false;
            } else {
                document.getElementById("name").style.borderColor = ""; // Resetear el color
            }

            // Validar el correo
            if (email.trim() === "") {
                alert("Por favor ingresa tu correo electrónico.");
                document.getElementById("email").style.borderColor = "red";
                return false;
            } else {
                document.getElementById("email").style.borderColor = ""; // Resetear el color
            }

            // Validar el asunto
            if (subject.trim() === "") {
                alert("Por favor ingresa el asunto.");
                document.getElementById("subject").style.borderColor = "red";
                return false;
            } else {
                document.getElementById("subject").style.borderColor = ""; // Resetear el color
            }

            // Validar el mensaje
            if (message.trim() === "") {
                alert("Por favor ingresa tu mensaje.");
                document.getElementById("message").style.borderColor = "red";
                return false;
            } else {
                document.getElementById("message").style.borderColor = ""; // Resetear el color
            }

            return true; // Si todo está bien, permitir el envío
        }

        // JavaScript para el menú responsivo
        document.addEventListener("DOMContentLoaded", function() {
            var menuToggle = document.getElementById('nav-responsive');
            var nav = document.getElementById('nav');

            menuToggle.addEventListener('click', function() {
                nav.classList.toggle('open');
            });
        });
    </script>

</body>
</html>


