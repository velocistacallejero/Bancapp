@extends('layouts.contenido')
@section('titulo','Estractos')

@section('content')
<style>
.spinner {
            display: none; /* Oculto por defecto */
            margin: 20px auto;
            border: 8px solid #f3f3f3; /* Fondo del spinner */
            border-top: 8px solid #3498db; /* Color del borde animado */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .download-message {
            display: none;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: #28a745;
        }
    </style>
        <!-- Sección de retiro -->
        <div class="main-content">
            
            <div class="retiro-box">
                <h2>Estractos bancarios</h2>
                
                <table class="table">
                    <caption>Lista</caption>
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">fecha</th>
                        <th scope="col">descripcion</th>
                        <th scope="col">monto</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>2024-12-03</td>
                        <td>Pago de servicios</td>
                        <td>$200,000</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>2024-12-01</td>
                        <td>Compra en supermercado</td>
                        <td>$50,000</td>
                    </tr>
                </tbody>
                    </table>
                            <div class="buttons text-center">
                        <button type="button" class="btn btn-primary" onclick="iniciarDescarga()">Descargar</button>
                    </div>
                    <div id="spinner" class="spinner"></div>
                    <div id="downloadMessage" class="download-message">¡Descarga completa!</div>
                </div>
            </div>
                
            </div>
        </div>
    </div>
     <!-- Modal Bootstrap -->
     <div class="modal fade" id="modalDescarga" tabindex="-1" aria-labelledby="modalDescargaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDescargaLabel">Estado de Descarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p class="text-success font-weight-bold">¡Descarga completa!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function iniciarDescarga() {
            const spinner = document.getElementById('spinner');

            // Mostrar spinner
            spinner.style.display = 'block';

            // Simular espera de 3 segundos
            setTimeout(() => {
                spinner.style.display = 'none'; // Ocultar el spinner
                $('#modalDescarga').modal('show'); // Mostrar el modal
            }, 3000); // 3 segundos de espera
        }
    </script>
 @endsection
