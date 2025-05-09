@extends('layout')

@section('title', 'AEG - Directorio Telefónico')

@section('content')
    <h1 class="text-center mt-4 mb-4">Directorio Estudiantil</h1>

    <!-- Distribución mejorada -->
    <div class="row justify-content-center">

        <div class="col-lg-8 col-md-10">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-header text-white text-center" style="background-color: #28a745;">
                    <h3 class="mb-0">Asociación de Estudiantes de Guanacaste (AEG)</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead class="text-white" style="background-color: #28a745;">
                                <tr>
                                    <th scope="col">Puesto</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Teléfono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Presidencia</td>
                                    <td>José Pablo Tablada Castillo</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr>
                                    <td>Vicepresidencia</td>
                                    <td>Pendiente</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr>
                                    <td>Tesorería</td>
                                    <td>Pendiente</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr>
                                    <td>Secretaría</td>
                                    <td>Nicole Solera Villegas</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr>
                                    <td>Fiscalía</td>
                                    <td>Keilyn Vanegas Cortés</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr>
                                    <td>Vocalía I</td>
                                    <td>Melvin Flores Sandoval</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr>
                                    <td>Vocalía II</td>
                                    <td>Javier Martínez Gutiérrez</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr>
                                    <td>Titularidad del CAC</td>
                                    <td>Josías Chavarría Jiménez</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr>
                                    <td>Suplencia del CAC</td>
                                    <td>Krissia Mariela Leiva Venegas</td>
                                    <td>Pendiente</td>
                                </tr>
                            </tbody>
                        </table>
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
