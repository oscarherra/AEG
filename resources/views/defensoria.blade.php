@extends('layout')

@section('title', 'AEG - DEFEU')

@section('content')
<div class="container mt-5 mb-5">
    <div class="text-center mb-5">
        <h1>Defensoría Estudiantil</h1>
    </div>

    <!-- Sección de Información -->
    <div class="row justify-content-center align-items-center mb-5">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/defeu.jpeg') }}" alt="Defensoría Estudiantil" class="img-fluid mb-3" style="max-height: 300px; object-fit: contain;">
        </div>
        <div class="col-md-6">
            <p class="lead">
                La Defensoría Estudiantil vela por los derechos de los estudiantes y ofrece asesoría en conflictos dentro de la universidad.
            </p>
            <div>
                <a href="mailto:defensoria@ucr.ac.cr" class="btn btn-primary btn-lg mb-2 d-block">defensoria@ucr.ac.cr</a>
                <a href="tel:+50625115380" class="btn btn-success btn-lg d-block">2511-5380</a>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <!-- Sección de Pleno -->
    <h2 class="text-center mb-4">Pleno</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header text-white" style="background-color: #28a745;">
                    <h3 class="mb-0 text-center">Miembros de la Defensoría</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0 text-center">
                            <thead style="background-color: #28a745; color: white;">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Carné</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>David Rafael Zúñiga Chavarría</td>
                                    <td>C18747</td>
                                </tr>
                                <tr>
                                    <td>Laura Nayeli Alcocer Leal</td>
                                    <td>C08754</td>
                                </tr>
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
