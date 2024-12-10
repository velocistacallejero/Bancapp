 @extends('layouts.contenido')
@section('titulo','Estado Cuenta')

 @section('content')
<style>

        /* Estilos para el modal */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-body {
            padding: 20px;
        }

        .icono-exito {
            font-size: 48px;
            color: green;
            margin-bottom: 20px;
        }

        .modal h3 {
            margin-bottom: 10px;
            color: #4CAF50;
        }

        .modal p {
            color: #333;
        }

        .mensaje-advertencia {
            margin-top: 10px;
            font-size: 1rem;
            color: #e74c3c;
        }

        .cerrar-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 15px;
        }

        .cerrar-btn:hover {
            background-color: #c0392b;
        }
        .cerrar-icono {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            font-weight: bold;
            color: #e74c3c;
            cursor: pointer;
            background: none;
            border: none;
        }

        .cerrar-icono:hover {
            color: #c0392b;
        }
  
</style>

 <!-- Sección de retiro -->
  <div class="main-content">
            <div class="welcome">
                <!-- <h1>ESTADO DE CUENTA</h1> -->
            </div>
            <div class="retiro-box">
                <h2>Estado de cuenta</h2>
                <form onsubmit="return false;">
                    <div class="d-flex align-items-baseline">
                        <label for="cuenta" class="mr-2 mb-0">Número de Cuenta:</label>
                        <input  class="mb-0" type="number" id="cuenta" name="cuenta" required>
                    </div>

                    <div class="d-flex justify-content-center align-items-center" style="height: 8vh;">
                        <button type="submit" class="btn btn-primary"  onclick="validarFormulario()" >Consultar</button>
                    </div>
                    <div class="bg-white text-dark">
                    <div class="d-flex align-items-baseline">
                                <label class="mr-2 mb-0">Saldo Disponible:</label>
                                <p class="mb-0">$0</p>
                            </div>
                            <div class="d-flex align-items-baseline mt-2">
                                <label class="mr-2 mb-0">Créditos Disponibles:</label>
                                <p class="mb-0">$0</p>
                            </div>
                    </div>
                    <label for="monto">Trassaciones recientes:</label>
                    <table class="table">
                    <caption>Lista </caption>
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">fecha</th>
                        <th scope="col">descripcion</th>
                        <th scope="col">monto</th>
                        </tr>
                    </thead>
                    <tbody id="transaccionesRecientes">
                        <tr>
                            <td colspan="4" class="text-center">No hay transacciones recientes.</td>
                        </tr>
                    </tbody>
                    </table>
                    

                  

                    <div class="buttons">
                    <button type="submit" class="btn retirar-btn mr-4" onclick="Descarga()" >Descargar PDF</button>
                    <button type="submit" class="btn simular-btn ml-4" onclick="Descarga()" >Descargar CSV</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
  
           <!-- Modal  -->
           <div id="modalExito" class="modal">
        <div class="modal-content">
            <div class="modal-body">
                <div id="valido" class="icono-exito">
                    ✔️
                </div>
                <h3 id="exitoso">¡consulta Exitosa!</h3>
                <p id="mensajeExito">Tu consulta se realizó correctamente.</p>
                <button class="cerrar-btn" onclick="cerrarModal()">Cerrar</button>
            </div>
        </div>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-body">
                <div id="valido" class="icono-exito">
                    ✔️
                </div>
                
                <h3 id="Descarga">¡Descarga Exitosa!</h3>
                <button class="cerrar-btn" onclick="cerrarModal()">Cerrar</button>
            </div>
        </div>
    </div>

    <script>
          function Descarga() {
            const cuenta = document.getElementById('cuenta').value;
            if (cuenta === '') {
            
                
            }else{
                abrirModal2();
            }
        }
        // Validar que los campos estén completos antes de abrir el modal
        function validarFormulario() {
            const cuenta = document.getElementById('cuenta').value;
            if (cuenta === '') {
            
                
            }else{
                abrirModal();
            }
        }
            
        

        // Función para abrir el modal
        function abrirModal() {
            const modal = document.getElementById('modalExito');
            modal.style.display = 'block';
             
            
        }

        function abrirModal2() {
            const modal = document.getElementById('modal');
            modal.style.display = 'block';
             
            
        }

        // Función para cerrar el modal
        function cerrarModal() {
            const modal = document.getElementById('modalExito');
            modal.style.display = 'none';

            const modal2 = document.getElementById('modal');
            modal2.style.display = 'none';
        }
    </script>
    @endsection