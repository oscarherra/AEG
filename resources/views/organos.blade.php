@extends('layout')

@section('title', 'AEG - Órganos')

@section('content')
    <h1 class="text-center mb-4">Órganos de la AEG</h1>

    <div class="row g-5 text-center align-items-stretch">
        <!-- Tribunal Electoral Estudiantil -->
        <div class="col-md-4 d-flex flex-column align-items-center">
            <a href="{{ route('teeg') }}" style="text-decoration: none;">
                <img src="{{ asset('images/teeg.jpg') }}" alt="Tribunal Electoral Estudiantil" class="img-fluid mb-3" style="max-height: 200px; object-fit: contain;">
                <h4>Tribunal Electoral Estudiantil de Guanacaste (TEEG)</h4>
            </a>
            <p class="text-justify">
                Responsable de garantizar la transparencia y legalidad en los procesos electorales estudiantiles, 
                asegurando la participación democrática de los estudiantes.
            </p>
        </div>

        <!-- Defensoría Estudiantil -->
        <div class="col-md-4 d-flex flex-column align-items-center">
            <a href="{{ route('defensoria') }}" style="text-decoration: none;">
                <img src="{{ asset('images/defeu.jpeg') }}" alt="Defensoría Estudiantil" class="img-fluid mb-3" style="max-height: 200px; object-fit: contain;">
                <h4>Defensoría Estudiantil (DEFEU)</h4>
            </a>
            <p class="text-justify">
            La Defensoría Estudiantil Universitaria constituye un órgano esencial de protección y apoyo para los estudiantes. Su función central es velar por la defensa de los derechos estudiantiles, ofreciendo asesoría especializada y acompañamiento integral ante cualquier conflicto, situación o problemática que pueda afectarles en su desarrollo académico y personal dentro del ámbito universitario.
            </p>
        </div>

        <!-- Asambleístas -->
        <div class="col-md-4 d-flex flex-column align-items-center">
            <a href="{{ route('asambleistas') }}" style="text-decoration: none;">
                <img src="{{ asset('images/AE.png') }}" alt="Asambleístas" class="img-fluid mb-3" style="max-height: 200px; object-fit: contain;">
                <h4>Asambleístas</h4>
            </a>
            <p class="text-justify">
                Los representantes estudiantiles que participan en las asambleas de la asociación, 
                proponiendo y tomando decisiones en beneficio del estudiantado.
            </p>
        </div>
    </div>

    <h1 class="text-center mb-4">Órganos de la Sede</h1>
    <div class="row g-5 text-center align-items-stretch">
        <!-- Asociaciones de Estudiantes -->
        <div class="col-md-4 d-flex flex-column align-items-center">
            <a href="{{ route('asociaciones') }}" style="text-decoration: none;">
                <img src="{{ asset('images/aso.jpg') }}" alt="Asociaciones de Estudiantes de Carreras" class="img-fluid mb-3" style="max-height: 200px; object-fit: contain;">
                <h4>Asociaciones de Carreras</h4>
            </a>
            <p class="text-justify">
                Responsable de garantizar la transparencia y legalidad en los procesos electorales estudiantiles, 
                asegurando la participación democrática de los estudiantes.
            </p>
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
