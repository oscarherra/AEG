@extends('layout')

@section('title', 'AEG - Junta Directiva')

@section('content')
    <style>
        /* Estilo de las imágenes */
        .profile-card img {
            width: 180px; /* Ancho */
            height: 240px; /* Alto */
            object-fit: cover; /* Ajusta la imagen al marco */
            border: 5px solid #006400; /* Color del borde (verde oscuro) */
            border-radius: 15px; /* Bordes ligeramente redondeados */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Sombra */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transición suave */
        }

        /* Efecto de acercamiento */
        .profile-card img:hover {
            transform: scale(1.1); /* Incrementa el tamaño al 110% */
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); /* Sombra más pronunciada */
        }

        /* Espaciado en títulos y descripciones */
        .profile-card h5 {
            color: #004c40; /* Verde oscuro */
            font-weight: bold;
            margin-top: 20px; /* Margen superior para separar del borde */
            font-size: 1.1rem; /* Tamaño del texto */
        }

        .profile-card p {
            color: #555; /* Gris oscuro */
            font-size: 0.9rem; /* Tamaño del texto */
            margin-top: 10px; /* Margen superior adicional */
        }

        /* Estilo del título general */
        h1 {
            color: #006400; /* Verde oscuro para el texto */
            font-weight: bold; /* Texto en negrita */
        }
    </style>

    <h1 class="text-center mb-4">Junta Directiva</h1>
    <div class="row g-4">
        <!-- Presidencia -->
        <div class="col-md-4">
            <div class="profile-card text-center">
                <img src="{{ asset('images/brandon.jpg') }}" alt="Brandon Alvarez" class="img-fluid">
                <h5>Presidencia</h5>
                <p>Brandon Fabián Quesada Álvarez</p>
            </div>
        </div>
        <!-- Vicepresidencia -->
        <div class="col-md-4">
            <div class="profile-card text-center">
                <img src="{{ asset('images/persona.png') }}" alt="Sin Representación" class="img-fluid">
                <h5>Vicepresidencia</h5>
                <p>Sin representación</p>
            </div>
        </div>
        <!-- Tesorería -->
        <div class="col-md-4">
            <div class="profile-card text-center">
                <img src="{{ asset('images/daniel.jpg') }}" alt="Daniel Salazar" class="img-fluid">
                <h5>Tesorería</h5>
                <p>Daniel Salazar Corrales</p>
            </div>
        </div>
        <!-- Secretaría -->
        <div class="col-md-4">
            <div class="profile-card text-center">
                <img src="{{ asset('images/ronald.jpg') }}" alt="Ronald" class="img-fluid">
                <h5>Secretaría</h5>
                <p>Ronald</p>
            </div>
        </div>
        <!-- Secretaría de Comunicación -->
        <div class="col-md-4">
            <div class="profile-card text-center">
                <img src="{{ asset('images/persona.png') }}" alt="Sin Representación" class="img-fluid">
                <h5>Secretaría de Comunicación</h5>
                <p>Sin representación</p>
            </div>
        </div>
        <!-- Secretaría de Deportes y Cultura -->
        <div class="col-md-4">
            <div class="profile-card text-center">
                <img src="{{ asset('images/persona.png') }}" alt="Sin Representación" class="img-fluid">
                <h5>Secretaría de Deportes y Cultura</h5>
                <p>Sin representación</p>
            </div>
        </div>
        <!-- Fiscalía -->
        <div class="col-md-4">
            <div class="profile-card text-center">
                <img src="{{ asset('images/hansy.jpg') }}" alt="Hansy Polanco" class="img-fluid">
                <h5>Fiscalía</h5>
                <p>Hansy Polanco</p>
            </div>
        </div>
        <!-- Vocalía 1 -->
        <div class="col-md-4">
            <div class="profile-card text-center">
                <img src="{{ asset('images/elias.jpg') }}" alt="Elias" class="img-fluid">
                <h5>Vocalía 1</h5>
                <p>Elias</p>
            </div>
        </div>
        <!-- Vocalía 2 -->
        <div class="col-md-4">
            <div class="profile-card text-center">
                <img src="{{ asset('images/anthony.jpg') }}" alt="Anthonny Pizarro" class="img-fluid">
                <h5>Vocalía 2</h5>
                <p>Anthonny Gerardo Pizarro</p>
            </div>
        </div>
    </div>

    <!-- Sección del CSE -->
    <div class="row g-4 mt-5 justify-content-center">
        <!-- Titular del CSE -->
        <div class="col-md-4 text-center">
            <div class="profile-card">
                <img src="{{ asset('images/oscar.jpg') }}" alt="Oscar Herra" class="img-fluid">
                <h5>Titular del CSE</h5>
                <p>Óscar Andrés Herra Abarca</p>
            </div>
        </div>
        <!-- Suplencia del CSE -->
        <div class="col-md-4 text-center">
            <div class="profile-card">
                <img src="{{ asset('images/persona.png') }}" alt="Melany" class="img-fluid">
                <h5>Suplencia del CSE</h5>
                <p>Melany</p>
            </div>
        </div>
    </div>

    <!-- Botón Scroll-To-Top -->
<button id="btnScrollTop" class="btn-scroll-top">
    <i class="fas fa-chevron-up"></i>
</button>
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
@endsection
