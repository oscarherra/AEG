@extends('layout')

@section('title', 'AEG - Asambleístas')

@section('content')
<div class="container-fluid mt-5 mb-5">
    <h1 class="text-center mb-5">Asambleístas</h1>

    <div class="row g-4 text-center justify-content-center align-items-stretch">
        <div class="col-lg-4 col-md-6 d-flex flex-column">
            <div class="card shadow-lg border-0 h-100 mb-5">
                <div class="card-header text-white" style="background-color: #28a745;">
                    <h3 class="mb-0">Asamblea de Sede</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead style="background-color: #28a745; color: white;">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Carné</th> {{-- Solo Carné --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Nueva Lista de Asambleístas --}}
                               <tr><td>1</td><td>OSCAR ANDRES HERRA ABARCA</td><td>C13719</td></tr>
                                <tr><td>2</td><td>MAHOLY NICOLE VALLE PEREIRA</td><td>C18058</td></tr>
                                <tr><td>3</td><td>BRANDON FABIAN QUESADA ALVAREZ</td><td>C16085</td></tr>
                                <tr><td>4</td><td>KEMBLY TATYANA CAMACHO RIZO</td><td>C11496</td></tr>
                                <tr><td>5</td><td>FABRICIO ALVAREZ VALVERDE</td><td>C4C421</td></tr>
                                <tr><td>6</td><td>XIMENA CENTENO RODRIGUEZ</td><td>C21976</td></tr>
                                <tr><td>7</td><td>ERICKA ALEXANDRA JIMENEZ NARANJO</td><td>C24066</td></tr>
                                <tr><td>8</td><td>GABRIEL LOPEZ ARRIETA</td><td>C24322</td></tr>
                                <tr><td>9</td><td>MARCO VINICIO VARGAS AVILA</td><td>C28096</td></tr>
                                <tr><td>10</td><td>ESTIVEN JESUS GONZALEZ MURILLO</td><td>C29012</td></tr>
                                <tr><td>11</td><td>JUAN ELIAS AVILA ELIZONDO</td><td>C10783</td></tr>
                                <tr><td>12</td><td>ANTHONY GERARDO GUTIERREZ PIZARRO</td><td>C23635</td></tr>
                                <tr><td>13</td><td>BYRON RODOLFO NAVARRETE ZUÑIGA</td><td></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex flex-column">
            <div class="card shadow-lg border-0 h-100 mb-5">
                <div class="card-header text-white" style="background-color: #28a745;">
                    <h3 class="mb-0">Asamblea Colegiada</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead style="background-color: #28a745; color: white;">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Carné</th> {{-- Solo Carné --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Nueva Lista de Asambleístas --}}
                                <tr><td>1</td><td>OSCAR ANDRES HERRA ABARCA</td><td>C13719</td></tr>
                                <tr><td>2</td><td>MAHOLY NICOLE VALLE PEREIRA</td><td>C18058</td></tr>
                                <tr><td>3</td><td>BRANDON FABIAN QUESADA ALVAREZ</td><td>C16085</td></tr>
                                <tr><td>4</td><td>KEMBLY TATYANA CAMACHO RIZO</td><td>C11496</td></tr>
                                <tr><td>5</td><td>FABRICIO ALVAREZ VALVERDE</td><td>C4C421</td></tr>
                                <tr><td>6</td><td>XIMENA CENTENO RODRIGUEZ</td><td>C21976</td></tr>
                                <tr><td>7</td><td>ERICKA ALEXANDRA JIMENEZ NARANJO</td><td>C24066</td></tr>
                                <tr><td>8</td><td>GABRIEL LOPEZ ARRIETA</td><td>C24322</td></tr>
                                <tr><td>9</td><td>MARCO VINICIO VARGAS AVILA</td><td>C28096</td></tr>
                                <tr><td>10</td><td>ESTIVEN JESUS GONZALEZ MURILLO</td><td>C29012</td></tr>
                                <tr><td>11</td><td>JUAN ELIAS AVILA ELIZONDO</td><td>C10783</td></tr>
                                <tr><td>12</td><td>ANTHONY GERARDO GUTIERREZ PIZARRO</td><td>C23635</td></tr>
                                <tr><td>13</td><td>BYRON RODOLFO NAVARRETE ZUÑIGA</td><td></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex flex-column">
            <div class="card shadow-lg border-0 h-100 mb-5">
                <div class="card-header text-white" style="background-color: #28a745;">
                    <h3 class="mb-0">Asamblea Plebiscitaria</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead style="background-color: #28a745; color: white;">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Carné</th> {{-- Solo Carné --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Nueva Lista de Asambleístas --}}
                                <tr><td>1</td><td>OSCAR ANDRES HERRA ABARCA</td><td>C13719</td></tr>
                                <tr><td>2</td><td>MAHOLY NICOLE VALLE PEREIRA</td><td>C18058</td></tr>
                                <tr><td>3</td><td>BRANDON FABIAN QUESADA ALVAREZ</td><td>C16085</td></tr>
                                <tr><td>4</td><td>KEMBLY TATYANA CAMACHO RIZO</td><td>C11496</td></tr>
                                <tr><td>5</td><td>FABRICIO ALVAREZ VALVERDE</td><td>C4C421</td></tr>
                                <tr><td>6</td><td>XIMENA CENTENO RODRIGUEZ</td><td>C21976</td></tr>
                                <tr><td>7</td><td>ERICKA ALEXANDRA JIMENEZ NARANJO</td><td>C24066</td></tr>
                                <tr><td>8</td><td>GABRIEL LOPEZ ARRIETA</td><td>C24322</td></tr>
                                <tr><td>9</td><td>MARCO VINICIO VARGAS AVILA</td><td>C28096</td></tr>
                                <tr><td>10</td><td>ESTIVEN JESUS GONZALEZ MURILLO</td><td>C29012</td></tr>
                                <tr><td>11</td><td>JUAN ELIAS AVILA ELIZONDO</td><td>C10783</td></tr>
                                <tr><td>12</td><td>ANTHONY GERARDO GUTIERREZ PIZARRO</td><td>C23635</td></tr>
                                <tr><td>13</td><td>BYRON RODOLFO NAVARRETE ZUÑIGA</td><td></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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