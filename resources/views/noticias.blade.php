@extends('layout')

@section('title', 'AEG - Noticias')

@section('content')
    <style>
        .news-section {
            background: linear-gradient(to right, #81da32, #4caf50);
            color: white;
            text-align: center;
            padding: 50px 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            margin: 0 auto; /* Centrar */
            max-width: 800px; /* Ancho máximo */
        }

        .news-section h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .news-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .instagram-link {
            display: inline-block;
            background-color: #0069d9; /* Color azul original */
            color: white;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.2s ease-in-out;
        }

        .instagram-link:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el mouse */
            transform: scale(1.05);
        }

        footer {
            margin-top: 100px; /* Baja el pie de página aún más */
        }

        .facebook-widget-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px 0; /* Margen superior e inferior */
        }

        .facebook-widget-container .fb-page {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="news-section mt-5">
        <h1>¡Muy pronto!</h1>
        <p>Aquí encontrarás las noticias más recientes de la Asociación de Estudiantes de Guanacaste.</p>
        <a class="instagram-link" href="https://www.instagram.com/ucr.aeg?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
            Visita nuestro Instagram
        </a>
    </div>

    <div class="facebook-widget-container">
        <!-- Facebook SDK -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" 
                src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0"></script>

        <!-- Widget de Facebook -->
        <div class="fb-page" 
             data-href="https://www.facebook.com/UCRAEG?locale=es_LA" 
             data-tabs="timeline" 
             data-width="1000" 
             data-height="700" 
             data-small-header="false" 
             data-adapt-container-width="true" 
             data-hide-cover="false" 
             data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/UCRAEG?locale=es_LA" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/UCRAEG?locale=es_LA">
                    AEG Asociación de Estudiantes Guanacaste - UCR
                </a>
            </blockquote>
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
