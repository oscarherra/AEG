<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <title>@yield('title', 'Título por defecto')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            padding-top: 80px; /* Espaciado para que el contenido no quede oculto detrás del navbar */
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
            max-height: 50px;
            margin-right: 15px; /* Espacio entre el logo y el texto */
        }

        .navbar-nav {
            flex-grow: 1; /* Los enlaces ocupan todo el espacio disponible */
            justify-content: center; /* Centra los enlaces horizontalmente */
        }

        .navbar-nav .nav-link {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin: 0 15px; /* Espaciado entre los enlaces */
            position: relative; /* Necesario para el pseudo-elemento */
            overflow: hidden; /* Oculta el subrayado animado */
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

        .navbar-nav .nav-link:hover::after {
            width: 100%; /* Expande el subrayado cuando pasas el mouse */
        }

        .navbar-nav .nav-link.active::after {
            width: 100%; /* Mantén el subrayado visible si está activo */
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
    .navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
    display: flex;
    align-items: center;
    color: #81da32;
    text-decoration: none;
}

.navbar-brand img {
    height: 50px; /* Tamaño fijo */
    margin-right: 15px; /* Espaciado entre logos */
    object-fit: contain;
}

.navbar-brand img[alt="Logo UCR"] {
    margin-top: -5px; /* Ajusta este valor para subir el logo */
}
.text-justify {
    text-align: justify;
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
    </style>
</head>
<body>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container d-flex align-items-center">
        <div class="navbar-brand d-flex align-items-center">
        <div class="navbar-brand d-flex align-items-center">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/aeglogo.png') }}" alt="Logo AEG">
    </a>
    <a href="https://sedeguanacaste.ucr.ac.cr/">
        <img src="{{ asset('images/UCR.png') }}" alt="Logo UCR">
    </a>
</div>
</div>



            <!-- Menú principal -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('noticias*') ? 'active' : '' }}" href="{{ route('noticias') }}">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('junta-directiva*') ? 'active' : '' }}" href="{{ route('junta-directiva') }}">Junta Directiva</a></li>
                    <a class="nav-link {{ Request::is('organos*') || Request::is('asociaciones*') || Request::is('asambleistas*') || Request::is('teeg*') || Request::is('defensoria*') ? 'active' : '' }}" href="{{ route('organos') }}">Órganos</a>
                    <li class="nav-item"><a class="nav-link {{ Request::is('normativa*') ? 'active' : '' }}" href="{{ route('normativa') }}">Normativa</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('directorio-estudiantil*') ? 'active' : '' }}" href="{{ route('directorio-estudiantil') }}">Directorio</a>
</li>

                </ul>
            </div>
        </div>
    </nav>

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

    <!-- Contenido principal -->
    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- Paralaje -->
<div class="parallax">
<h2 id="asociacion-estudiantes">ASOCIACIÓN DE ESTUDIANTES DE GUANACASTE</h2>
</div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} Asociación de Estudiantes de Guanacaste (AEG). Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts -->
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