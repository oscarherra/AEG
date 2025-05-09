@extends('layout')

@section('title', 'AEG - TEEG')

@section('content')
<div class="container mt-5 mb-5">
    <!-- Encabezado Principal -->
    <div class="text-center mb-5">
        <h1>Tribunal Electoral Estudiantil</h1>
    </div>

    <!-- Información Principal -->
    <div class="row justify-content-center align-items-center mb-5">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/teeg.jpg') }}" alt="Tribunal Electoral Estudiantil" class="img-fluid mb-3" style="max-height: 300px; object-fit: contain;">
        </div>
        <div class="col-md-6">
            <p class="lead">
                El Tribunal Electoral Estudiantil (TEEG) es responsable de garantizar la transparencia y legalidad en los procesos electorales estudiantiles, asegurando la participación democrática de los estudiantes en todos los ámbitos de la Universidad.
            </p>
            <div>
                <a href="mailto:teeg@ucr.ac.cr" class="btn btn-primary btn-lg mb-2 d-block">
                    <i class="fas fa-envelope"></i> teeg@ucr.ac.cr
                </a>
                <a href="tel:+50625115380" class="btn btn-success btn-lg d-block">
                    <i class="fas fa-phone"></i> Teléfono: +506 2511-5380
                </a>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Tabla del Pleno -->
    <h2 class="text-center mb-4">Pleno</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-header text-white" style="background-color: #28a745;">
                    <h3 class="mb-0 text-center">Miembros del Tribunal</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0 text-center">
                            <thead style="background-color: #28a745; color: white;">
                                <tr>
                                    <th>Puesto</th>
                                    <th>Nombre</th>
                                    <th>Carné</th>
                                    <th>Correo Electrónico</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Presidencia</td><td>Byron Rodolfo Navarrete Zúñiga</td><td>C25478</td><td>byron.navarrete@ucr.ac.cr</td></tr>
                                <tr><td>Vicepresidencia</td><td>Andrés Medina Gutierrez</td><td>C4H036</td><td>andres.medinagutierrez@ucr.ac.cr</td></tr>
                                <tr><td>Secretaría</td><td>Jorge Mario Araya Alvarado</td><td>B90478</td><td>jorge.arayaalvarado@ucr.ac.cr</td></tr>
                                <tr><td>Tesorería</td><td>Sebastián Abarca Chaves</td><td>C30009</td><td>sebastian.abarca@ucr.ac.cr</td></tr>
                                <tr><td>Fiscalía</td><td>Daniel Steven Gatgens Malespin</td><td>C4F411</td><td>danielgatgens@gmail.com</td></tr>
                                <tr><td>Suplencia I</td><td>Ayda María Fonseca Fonseca</td><td>C23015</td><td>ayda.fonseca@ucr.ac.cr</td></tr>
                                <tr><td>Suplencia II</td><td>Carlos Andrés Badilla Junez</td><td>C30883</td><td>carandrebaju12@gmail.com</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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


