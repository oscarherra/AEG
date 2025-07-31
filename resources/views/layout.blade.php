<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <title>@yield('title', 'Título por defecto')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Navbar estilizado */
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
         .navbar-brand img[alt="Logo UCR"] {
            margin-top: -5px;
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

        /* ===== INICIO DE CAMBIOS EN RESPONSIVE HAMBURGER ICON ===== */
        .navbar-toggler {
            border: none; /* Quitamos el borde por defecto */
            padding: 0;
            background: transparent;
            outline: none !important; /* Quitamos el borde azul al hacer clic */
            box-shadow: none !important;
            position: relative;
            width: 30px;
            height: 25px;
        }

        .toggler-icon-bar {
            display: block;
            width: 25px; /* Ancho de las barras */
            height: 3px;  /* Grosor de las barras */
            background-color: #333; /* Color de las barras */
            margin: 5px auto;
            transition: all 0.3s ease-in-out;
            border-radius: 2px;
        }

        /* Animación a 'X' cuando el menú está abierto */
        .navbar-toggler:not(.collapsed) .toggler-icon-bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .navbar-toggler:not(.collapsed) .toggler-icon-bar:nth-child(2) {
            opacity: 0;
        }

        .navbar-toggler:not(.collapsed) .toggler-icon-bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
        /* ===== FIN DE CAMBIOS EN RESPONSIVE HAMBURGER ICON ===== */

        /* Botón de accesibilidad rediseñado */
        .accessibility-button {
            position: fixed;
            top: 90px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #343a40;
            color: #ffffff;
            border: none;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 1050;
            transition: all 0.3s ease;
        }

        .accessibility-button:hover {
            transform: scale(1.1);
            background-color: #81da32;
        }

        /* Menú de accesibilidad rediseñado */
        .accessibility-menu {
            position: fixed;
            top: 160px;
            right: 30px;
            background-color: #343a40;
            color: white;
            padding: 20px;
            border-radius: 8px;
            z-index: 1040;
            width: 280px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s;
        }
        
        .accessibility-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .accessibility-menu h4 {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 1.1rem;
            font-weight: bold;
            border-bottom: 1px solid #495057;
            padding-bottom: 10px;
            text-align: center;
        }

        .accessibility-menu button {
            display: flex;
            align-items: center;
            gap: 15px;
            width: 100%;
            margin: 8px 0;
            padding: 12px 15px;
            color: #f8f9fa;
            background-color: transparent;
            border: 1px solid #495057;
            border-radius: 5px;
            cursor: pointer;
            text-align: left;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .accessibility-menu button i {
            font-size: 1.2rem;
            width: 25px;
            text-align: center;
        }

        .accessibility-menu button:hover {
            background-color: #81da32;
            color: #343a40;
            border-color: #81da32;
            transform: translateX(-5px);
        }
        
        main {
            transition: margin-right 0.3s ease;
        }
        
        .btn-scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #17a2b8;
            color: #fff;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .btn-scroll-top:hover {
            background-color: #138496;
        }

        .text-justify {
            text-align: justify;
        }

        .parallax {
            background-image: url('images/asocia.jpg');
            height: 200px;
            background-attachment: fixed;
            background-position: center 100px;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container d-flex align-items-center">
            <div class="navbar-brand d-flex align-items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/aeglogo.png') }}" alt="Logo AEG">
                </a>
                <a href="https://sedeguanacaste.ucr.ac.cr/" target="_blank">
                    <img src="{{ asset('images/UCR.png') }}" alt="Logo UCR">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon-bar"></span>
                <span class="toggler-icon-bar"></span>
                <span class="toggler-icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('junta-directiva*') ? 'active' : '' }}" href="{{ route('junta-directiva') }}">Junta Directiva</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('organos*') || Request::is('asociaciones*') || Request::is('asambleistas*') || Request::is('teeg*') || Request::is('defensoria*') ? 'active' : '' }}" href="{{ route('organos') }}">Órganos</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('normativa*') ? 'active' : '' }}" href="{{ route('normativa') }}">Normativa</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://horario-aeg.vercel.app/" target="_blank">Horarios</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <button class="accessibility-button" onclick="toggleAccessibilityMenu()" aria-label="Abrir menú de accesibilidad">
        <i class="fas fa-universal-access"></i>
    </button>
    
    <div class="accessibility-menu" id="accessibilityMenu">
        <h4>Herramientas de Accesibilidad</h4>
        <button onclick="increaseFontSize()"><i class="fas fa-search-plus"></i>Aumentar fuente</button>
        <button onclick="decreaseFontSize()"><i class="fas fa-search-minus"></i>Disminuir fuente</button>
        <button onclick="toggleHighContrast()"><i class="fas fa-adjust"></i>Alto Contraste</button>
        <button onclick="resetStyles()"><i class="fas fa-sync-alt"></i>Restablecer</button>
    </div>
    
    <main class="container mt-5">
        @yield('content')
    </main>

    <div class="parallax">
        <h2 id="asociacion-estudiantes">ASOCIACIÓN DE ESTUDIANTES DE GUANACASTE</h2>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} Asociación de Estudiantes de Guanacaste (AEG). Todos los derechos reservados.</p>
    </footer>
    
    <button id="btnScrollTop" class="btn-scroll-top">
        <i class="fas fa-chevron-up"></i>
    </button>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleAccessibilityMenu() {
            const menu = document.getElementById('accessibilityMenu');
            menu.classList.toggle('show');
        }

        let currentFontSize = parseFloat(getComputedStyle(document.body).fontSize);

        function increaseFontSize() {
            currentFontSize += 2;
            document.body.style.fontSize = currentFontSize + "px";
        }

        function decreaseFontSize() {
            currentFontSize -= 2;
            if (currentFontSize < 10) currentFontSize = 10;
            document.body.style.fontSize = currentFontSize + "px";
        }

        let highContrastMode = false;
        function toggleHighContrast() {
            highContrastMode = !highContrastMode;
            if (highContrastMode) {
                document.body.style.setProperty('background-color', '#000', 'important');
                document.body.style.setProperty('color', '#fff', 'important');
                document.querySelector('.navbar').style.setProperty('background-color', '#111', 'important');
                document.querySelector('footer').style.setProperty('background-color', '#111', 'important');
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.style.setProperty('color', '#fff', 'important');
                });
            } else {
                resetStyles();
            }
        }

        function resetStyles() {
            document.body.style.fontSize = "";
            document.body.style.backgroundColor = "";
            document.body.style.color = "";
            currentFontSize = parseFloat(getComputedStyle(document.body).fontSize);
            highContrastMode = false;

            document.querySelector('.navbar').style.removeProperty('background-color');
            document.querySelector('footer').style.removeProperty('background-color');
            document.querySelectorAll('.nav-link').forEach(link => {
                link.style.removeProperty('color');
            });
        }
        
        document.addEventListener('DOMContentLoaded', function () {
            const btnScrollTop = document.getElementById('btnScrollTop');

            window.addEventListener('scroll', function () {
                if (window.scrollY > 300) {
                    if(btnScrollTop) btnScrollTop.style.display = 'flex';
                } else {
                    if(btnScrollTop) btnScrollTop.style.display = 'none';
                }
            });

            if(btnScrollTop) {
                btnScrollTop.addEventListener('click', function () {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>
</body>
</html>