<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <title>AEG - Inicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
            background-color: #f8f9fa;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        body {
            padding-top: 80px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            color: #81da32;
            text-decoration: none;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 15px;
            object-fit: contain;
        }

        .navbar-nav {
            flex-grow: 1;
            justify-content: center;
        }

        .navbar-nav .nav-link {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin: 0 15px;
            position: relative;
            overflow: hidden;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0%;
            height: 3px;
            background-color: #81da32;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }

        .navbar-toggler {
            border-color: #81da32;
        }

        .navbar-toggler-icon {
            background-color: #81da32;
        }

         /* Botón y menú de accesibilidad */
         .accessibility-button {
    position: fixed;
    top: 30px; /* Aumenta este valor para mover más abajo */
    right: 15px;
    background: transparent;
    border: none;
    cursor: pointer;
    z-index: 1050;
}

        .accessibility-menu {
            position: fixed;
            top: 60px;
            right: 15px;
            background-color: #333;
            color: white;
            padding: 15px;
            border-radius: 5px;
            display: none; /* Oculto inicialmente */
            z-index: 1040;
            width: 250px;
        }

        .accessibility-menu button {
            display: block;
            width: 100%;
            margin: 5px 0;
            padding: 10px;
            color: white;
            background-color: #81da32;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .accessibility-menu button:hover {
            background-color: #4caf50;
        }

        main {
            transition: margin-right 0.3s ease;
        }

        .menu-open main {
            margin-right: 270px; /* Espacio para el menú de accesibilidad */
        }

        .custom-header {
            background: url('/images/sg.jpg') no-repeat center center;
            background-size: cover;
            color: #ffffff;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);
            font-weight: bold;
            text-align: center;
            flex-direction: column;
        }

        .custom-header h1 {
            font-size: 4rem;
            margin: 0;
        }

        .custom-header p {
            font-size: 1.8rem;
            margin-top: 10px;
            line-height: 1.5;
        }
         /* Estilo para el botón de subir */
    .btn-scroll-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background-color: #17a2b8; /* Color azul similar */
        color: #fff; /* Color del ícono */
        border: none;
        border-radius: 50%; /* Hace que sea redondo */
        font-size: 24px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        display: none; /* Oculto por defecto */
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .btn-scroll-top:hover {
        background-color: #138496; /* Un azul más oscuro al pasar el mouse */
    }

    .btn-scroll-top i {
        margin: 0;
    }
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        header, footer {
            background: #fff;
            color: #333;
            text-align: center;
            padding: 10px 20px;
        }

        section {
            padding: 50px 20px;
            text-align: center;
            background: #f4f4f4;
        }

        .parallax {
    background-image: url('images/asocia.jpg');
    height: 200px;
    background-attachment: fixed;
    background-position: center 100px; /* Mueve la imagen 100px hacia abajo */
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    margin: 0;
}

        .parallax h2 {
            font-size: 1.8rem;
            margin: 0;
        }


        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        p {
            margin: 10px 0;
            font-size: 1.2rem;
        }
        
        body, html {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    overflow-x: hidden; /* Previene problemas de scroll horizontal */

    footer {
    margin: 0; /* Elimina cualquier margen adicional */
}

/* Animación para el texto */
@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px); /* El texto comienza desde abajo */
    }
    to {
        opacity: 1;
        transform: translateY(0); /* El texto se desplaza a su posición original */
    }
}

  /* Animación solo para el encabezado con el ID 'asociacion-estudiantes' */
  #asociacion-estudiantes {
        opacity: 0;
        transform: translateY(-20px);
        transition: all 1s ease-out; /* Transición para suavizar la animación */
    }

    /* La clase 'animate' se agrega cuando el h2 es visible */
    #asociacion-estudiantes.animate {
        opacity: 1;
        transform: translateY(0);
    }

    /* General Styling */
.elegant-section {
    padding: 40px 20px;
    text-align: center;
    background-color: #f9f9f9;
    border-radius: 15px;
    margin-bottom: 50px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.elegant-section:hover {
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease;
}

.elegant-title {
    font-size: 2rem;
    color: #343a40;
    margin-bottom: 20px;
    font-weight: bold;
}

.icon {
    color: #007bff;
    margin-right: 10px;
}

.elegant-description {
    font-size: 1.1rem;
    color: #6c757d;
    margin-bottom: 30px;
    line-height: 1.5;
}

.btn-elegant {
    padding: 10px 25px;
    font-size: 1.1rem;
    font-weight: 500;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-elegant:hover {
    color: white !important;
    background-color: #007bff !important;
    border-color: #007bff !important;
    box-shadow: 0 4px 10px rgba(0, 123, 255, 0.4);
}

.elegant-divider {
    border: 0;
    border-top: 2px solid #e9ecef;
    margin: 40px 0;
}

@media (min-width: 768px) {
    .elegant-section {
        max-width: 800px;
        margin: 0 auto 50px auto;
    }
}
    
}
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container d-flex align-items-center">
            <div class="navbar-brand d-flex align-items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/aeglogo.png') }}" alt="Logo AEG">
                </a>
                <a href="https://sedeguanacaste.ucr.ac.cr/">
                    <img src="{{ asset('images/UCR.png') }}" alt="Logo UCR">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('noticias*') ? 'active' : '' }}" href="{{ route('noticias') }}">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('junta-directiva*') ? 'active' : '' }}" href="{{ route('junta-directiva') }}">Junta Directiva</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('organos*') ? 'active' : '' }}" href="{{ route('organos') }}">Órganos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('normativa*') ? 'active' : '' }}" href="{{ route('normativa') }}">Normativa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('directorio-estudiantil*') ? 'active' : '' }}" href="{{ route('directorio-estudiantil') }}">Directorio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

     <!-- Header -->
     <header class="custom-header">
        <div class="container text-center">
            <h1 class="display-4">Bienvenidos a la AEG</h1>
            <p class="lead">Representando y trabajando para los estudiantes de Guanacaste</p>
        </div>
    </header>

<!-- Main Content -->
<main class="container mt-5">
    <!-- Últimas Noticias -->
    <section class="elegant-section">
        <h2 class="elegant-title">
            <i class="fas fa-newspaper icon"></i> Últimas Noticias
        </h2>
        <p class="elegant-description">
            Aquí encontrarás las noticias más recientes de la Asociación de Estudiantes de Guanacaste.
        </p>
        <a href="{{ route('noticias') }}" class="btn btn-outline-primary btn-elegant">Ver Noticias</a>
    </section>

    <hr class="elegant-divider">

    <!-- Conoce la Junta Directiva -->
    <section class="elegant-section">
        <h2 class="elegant-title">
            <i class="fas fa-users icon"></i> Conoce la Junta Directiva
        </h2>
        <p class="elegant-description">
            Descubre quiénes forman parte de la Junta Directiva de la AEG y qué roles desempeñan.
        </p>
        <a href="{{ route('junta-directiva') }}" class="btn btn-outline-secondary btn-elegant">Ver Junta Directiva</a>
    </section>

    <hr class="elegant-divider">

    <!-- Órganos de la Asociación -->
    <section class="elegant-section">
        <h2 class="elegant-title">
            <i class="fas fa-sitemap icon"></i> Órganos de la Asociación
        </h2>
        <p class="elegant-description">
            Explora los órganos que conforman la estructura organizativa de la AEG.
        </p>
        <a href="{{ route('organos') }}" class="btn btn-outline-info btn-elegant">Ver Órganos</a>
    </section>

    <hr class="elegant-divider">

    <!-- Normativa -->
    <section class="elegant-section">
        <h2 class="elegant-title">
            <i class="fas fa-gavel icon"></i> Normativa
        </h2>
        <p class="elegant-description">
            Conoce las normativas que rigen la Asociación de Estudiantes de Guanacaste.
        </p>
        <a href="{{ route('normativa') }}" class="btn btn-outline-success btn-elegant">Ver Normativa</a>
    </section>
</main>

     <!-- Botón de accesibilidad -->
     <button class="accessibility-button" onclick="toggleAccessibilityMenu()">
        <img src="{{ asset('images/silla.png') }}" alt="Accesibilidad" width="30">
    </button>

    <!-- Menú de accesibilidad -->
    <div class="accessibility-menu" id="accessibilityMenu">
        <button onclick="increaseFontSize()">Aumentar tamaño de fuente</button>
        <button onclick="decreaseFontSize()">Disminuir tamaño de fuente</button>
        <button onclick="toggleHighContrast()">Modo Alto Contraste</button>
        <button onclick="resetStyles()">Restablecer estilos</button>
    </div>

    <!-- Añadir un margen debajo de esta sección -->
<div class="mb-5"></div>

<section style="background-color: #f9f9f9; padding: 30px 20px; border-radius: 0; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <div style="max-width: 900px; margin: 0 auto;">
        <h2 class="text-center" style="font-weight: bold; font-size: 2rem; margin-bottom: 30px;">Contacto</h2>
        <div class="row text-center" style="display: flex; justify-content: space-around; align-items: center; margin-bottom: 30px; gap: 40px;">
            <div style="flex: 1; padding: 10px; max-width: 280px;">
                <i class="fas fa-phone fa-3x" style="color: #28a745;"></i>
                <p class="mt-3" style="font-size: 1rem;"><strong>Teléfono:</strong><br> 2511-9587</p>
            </div>
            <div style="flex: 1; padding: 10px; max-width: 280px;">
                <i class="fas fa-envelope fa-3x" style="color: #007bff;"></i>
                <p class="mt-3" style="font-size: 1rem;"><strong>Correo electrónico:</strong><br> <a href="mailto:JD.AEG@ucr.ac.cr" style="text-decoration: none; color: #007bff;">JD.AEG@ucr.ac.cr</a></p>
            </div>
            <div style="flex: 1; padding: 10px; max-width: 280px;">
                <i class="fas fa-calendar-alt fa-3x" style="color: #ffc107;"></i>
                <p class="mt-3" style="font-size: 1rem;"><strong>Horario:</strong><br> Lunes a Viernes <br> 8:00 a.m. a 8:00 p.m.</p>
            </div>
        </div>
        <div class="text-center" style="margin-top: 20px;">
            <a href="https://www.facebook.com/UCRAEG" target="_blank" style="margin-right: 50px; text-decoration: none; color: #4267B2; display: inline-block;">
                <i class="fab fa-facebook fa-3x" style="transition: transform 0.3s;"></i>
                <p style="margin-top: 10px; font-size: 1rem;">Facebook</p>
            </a>
            <a href="https://www.instagram.com/UCRAEG" target="_blank" style="margin-left: 50px; text-decoration: none; color: #E1306C; display: inline-block;">
                <i class="fab fa-instagram fa-3x" style="transition: transform 0.3s;"></i>
                <p style="margin-top: 10px; font-size: 1rem;">Instagram</p>
            </a>
        </div>
    </div>
</section>



   <!-- Paralaje -->
<div class="parallax">
<h2 id="asociacion-estudiantes">ASOCIACIÓN DE ESTUDIANTES DE GUANACASTE</h2>
</div>
<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; {{ date('Y') }} Asociación de Estudiantes de Guanacaste (AEG). Todos los derechos reservados.</p>
</footer>

 <!-- Botón Scroll-To-Top -->
 <button id="btnScrollTop" class="btn-scroll-top">
    <i class="fas fa-chevron-up"></i>
</button>

 <!-- Scripts JS -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btnScrollTop = document.getElementById('btnScrollTop');

        // Muestra el botón al hacer scroll hacia abajo
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                btnScrollTop.style.display = 'flex';
            } else {
                btnScrollTop.style.display = 'none';
            }
        });

        // Desplazamiento suave hacia arriba
        btnScrollTop.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>

<script>
// Crear un observador para detectar cuando el h2 específico es visible
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Cuando el h2 específico es visible, agrega la clase para activar la animación
            entry.target.classList.add('animate');
        } else {
            // Si el h2 ya no está visible, se puede quitar la clase para reiniciar la animación (opcional)
            entry.target.classList.remove('animate');
        }
    });
}, { threshold: 0.5 }); // Observamos el 50% del elemento

// Seleccionamos el h2 por su id único
const h2Element = document.getElementById('asociacion-estudiantes');
observer.observe(h2Element);
</script>

    <script>
        function toggleAccessibilityMenu() {
            const menu = document.getElementById('accessibilityMenu');
            const body = document.body;
            const isMenuOpen = menu.style.display === 'block';
            menu.style.display = isMenuOpen ? 'none' : 'block';
            body.classList.toggle('menu-open', !isMenuOpen);
        }

        function increaseFontSize() {
            document.body.style.fontSize = "larger";
        }

        function decreaseFontSize() {
            document.body.style.fontSize = "smaller";
        }

        function toggleHighContrast() {
            document.body.style.backgroundColor = "#000";
            document.body.style.color = "#fff";
        }

        function resetStyles() {
            document.body.style.fontSize = "";
            document.body.style.backgroundColor = "";
            document.body.style.color = "";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>
